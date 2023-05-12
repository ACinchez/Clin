<?php
namespace App\Http\Controllers;
use App\Models\StudInsert;
use Illuminate\Http\Request;
use \Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;


class PatientController extends Controller
{
    /*@firstname varchar(64),
@lastname varchar(64),
@email varchar(64),
@middlename varchar(64),
@address varchar(1028),
@birthday varchar(64),
@gender varchar(64),
@age int,
@course_year varchar(64),
@religion varchar(64),
@pastDisease varchar(512),
@pastDisease_date varchar(64),
@physician varchar(256),
@immunization varchar(512),
@immunization_date varchar(64),
@immunization_physician varchar(256),
@result_id int OUTPUT*/
#for patient basiced
    public function save_new_patient(Request $request){

        $param = [ $request->input('firstname'),
								$request->input('lastname'),
								$request->input('email'),
								$request->input('middlename'),
								$request->input('address'),
								$request->input('birthday'),
								$request->input('gender'),
								$request->input('age'),
								$request->input('grade'),
								$request->input('religion'),
								$request->input('pastDisease'),
								$request->input('pastDisease_date'),
								$request->input('physician'),
								$request->input('immunization'),
								$request->input('immunization_date'),
								$request->input('immunization_physician'),
								0
							 ];

			$sp_query = "EXEC pr_new_patient_ins :firstname, :lastname, :email, :middlename, :address, :birthday, :gender, :age, :grade, :religion, :pastDisease, :pastDisease_date, :physician, :immunization, :immunization_date, :immunization_physician, :result_id;";
			$result = DB::select($sp_query, $param);
		// $param = [ 
        // $request->input('lastname'),
        // $request->input('firstname'),
        // $request->input('middlename'), 
        // $request->input('email'),
        // $request->input('address'),
        // $request->input('birthday'),
        // $request->input('gender'),
        // $request->input('age'),
        // $request->input('course_year'),
        // $request->input('religion'),
        // $request->input('pastDisease'),
        // $request->input('pastDisease_date'),
        // $request->input('physician'),
        // $request->input('immunization'),
        // $request->input('immunization_date'),
        // $request->input('immunization_physician'),

        
		// 						0
		// 					 ];

		// 	$sp_query = "EXEC pr_new_patient_ins :label, ,:lastname,:firstname,:middlename,:email,:address,:birthday,:gender,:age,:course_year,:religion,:pastDisease,:pastDisease_date,:physician,:immunization,:immunization_date,:immunization_physician,:result_id;";
		// 	$result = DB::select($sp_query, $param);

			// dd($result);
			return redirect('/basicedu');
	}

	//-----------------------------------

	// public function save_new_patient_college(Request $request){

    //     $param = [ $request->input('firstname'),
	// 							$request->input('lastname'),
	// 							$request->input('email'),
	// 							$request->input('middlename'),
	// 							$request->input('address'),
	// 							$request->input('birthday'),
	// 							$request->input('gender'),
	// 							$request->input('age'),
	// 							$request->input('course_year'),
	// 							$request->input('religion'),
	// 							$request->input('pastDisease'),
	// 							$request->input('pastDisease_date'),
	// 							$request->input('physician'),
	// 							$request->input('immunization'),
	// 							$request->input('immunization_date'),
	// 							$request->input('immunization_physician'),
	// 							0
	// 						 ];

	// 		$sp_query = "EXEC pr_new_patient_college_ins :firstname, :lastname, :email, :middlename, :address, :birthday, :gender, :age, :course_year, :religion, :pastDisease, :pastDisease_date, :physician, :immunization, :immunization_date, :immunization_physician, :result_id;";
	// 		$result = DB::select($sp_query, $param);
	// 	// $param = [ 
    //     // $request->input('lastname'),
    //     // $request->input('firstname'),
    //     // $request->input('middlename'), 
    //     // $request->input('email'),
    //     // $request->input('address'),
    //     // $request->input('birthday'),
    //     // $request->input('gender'),
    //     // $request->input('age'),
    //     // $request->input('course_year'),
    //     // $request->input('religion'),
    //     // $request->input('pastDisease'),
    //     // $request->input('pastDisease_date'),
    //     // $request->input('physician'),
    //     // $request->input('immunization'),
    //     // $request->input('immunization_date'),
    //     // $request->input('immunization_physician'),

        
	// 	// 						0
	// 	// 					 ];

	// 	// 	$sp_query = "EXEC pr_new_patient_ins :label, ,:lastname,:firstname,:middlename,:email,:address,:birthday,:gender,:age,:course_year,:religion,:pastDisease,:pastDisease_date,:physician,:immunization,:immunization_date,:immunization_physician,:result_id;";
	// 	// 	$result = DB::select($sp_query, $param);

	// 		// dd($result);
	// 		return redirect('/college');
	// }

	public function patient_index(){
		$result = DB::select("EXEC
		 pr_ihms_patient_type_lst");

		$array_value = [
			'list' => $result
		];


		return view('patient_type.patient_type_index', compact('array_value'));
	}


	public function save_consultation_clinic_patient(Request $request){

        $param = [  			$request->input('date'),
								$request->input('time'),
								$request->input('consulation_type'),
								$request->input('complaints'),
								$request->input('bloodpressure'),
								$request->input('pulse'),
								$request->input('temperature'),
								$request->input('weight'),
								$request->input('height'),
								$request->input('gender'),
								$request->input('lastmenstrual'),
                                $request->input('remarks'),
								0
							 ];

                             $sp_query = "EXEC pr_clinic_patient_consultation_ins :date, :time, :consulation_type, :complaints, :bloodpressure, :pulse, :temperature, :weight, :height, :gender, :lastmenstrual,:remarks, :result_id";
	
			$result = DB::select($sp_query, $param);
		
			return redirect('newconsultation');
	}



	



//     public function index()
//     {
//         $StudInsert = StudInsert::all();
//         return view('index', compact('StudInsert'));
//     }

//     public function edit($id)
//     {
//         $StudInsert = StudInsert::find ($id);
//         return view('edit', compact('StudInsert'));
//     }

//     public function update(Request $request, $id)
//     {
     
//         $StudInsert = StudInsert::find($id);
//         $StudInsert->firstname = $request->input('firstname');
//         $StudInsert->lastname = $request->input('lastname');
//         $StudInsert->email = $request->input('email');
//         $StudInsert->middlename = $request->input('middlename');
//         $StudInsert->address = $request->input('address');
//         $StudInsert->birthday = $request->input('birthday');
//         $StudInsert->gender = $request->input('gender');
//         $StudInsert->age = $request->input('age');
//         $StudInsert->course_year = $request->input('course_year');
//         $StudInsert->religion = $request->input('religion');
//         // $StudInsert->email = $request->input('email');
//         // $StudInsert->course = $request->input('course');
//         // $StudInsert->section = $request->input('section');
//         $StudInsert->update();
//         return redirect('patients');
//     }

//     public function add_new_medical_history()
//     {
//         return view('school-nurse.medical_history');
//     }

//   public function save_new_medical_history(Request $request){

// 			$param = [ '1004',
// 								$request->input('pastDisease'),
// 								$request->input('pastDisease_date'),
// 								$request->input('physician'),
// 								$request->input('immunization'),
// 								$request->input('immunization_date'),
// 								$request->input('immunization_physician'),
// 								0
// 							 ];

// 			$sp_query = "EXEC pr_student_new_medical_history_past_diseases_immunization_ins :patient_id, :pastDisease, :pastDisease_date, :physician, :immunization, :immunization_date, :immunization_physician, :result_id;";
// 			$result = DB::select($sp_query, $param);

// 			// dd($result);
// 			return redirect('/addpatient');

			
// 	}

public function patient_basiced_index(){
	$result = DB::select("EXEC
	pr_ihms_patient_basiced_lst");

	$array_value = [
		'list' => $result
	];


	return view('patient_type.patient_basiced_index', compact('array_value'));
}

public function update_patient_basiced_by_id($id){
	$param = [ $id ];
	$sp_query = "EXEC pr_ihms_patient_medical_history_by_patient_id_sel :patient_id;";
	$result = DB::select($sp_query, $param);

	$array_value = [
								"result" => $result
								];
	// dd($id);
	return view('patient_type.patient_basiced_upd', compact('array_value'));
}

public function save_patient_medical_history_profile_by_id(Request $request){

	$param = [
				$request->input('patient_id'),
				$request->input('med_history_immunization_id'),
				$request->input('med_history_past_disease_id'),
				$request->input('firstname'),
				$request->input('lastname'),
				$request->input('middlename'),
				$request->input('email'),
				$request->input('address'),
				$request->input('age'),
				$request->input('birthday'),
				$request->input('gender'),
				$request->input('religion'),
				$request->input('immunization_id'),
				$request->input('immunization_datetime'),
				$request->input('immunization_physician'),
				$request->input('past_disease'),
				$request->input('past_disease_datetime_diagnose'),
				$request->input('physician'),
				0
			];
	$sp_query = 'EXEC pr_patient_medical_history_by_id_upd :patient_id, :med_history_immunization_id, :med_history_past_disease_id, :firstname, :lastname, :middlename, :email, :address, :age, :birthday, :gender, :religion, :immunization_id, :immunization_datetime, :immunization_physician, :past_disease, :past_disease_datetime_diagnose, :physician, :result_id;';
	$tx = DB::select($sp_query, $param);
	return redirect('patient_basiced_index');
}

}
