<?php
namespace App\Http\Controllers;
use App\Models\StudInsert;
use Illuminate\Http\Request;
use \Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;

class StudInsertController extends Controller
{
    
    public function insert(){
        // $urlData = getURLList();
        return view('patient_create_tbl');
    }
    public function create(Request $request){
        $rules = [
			
		];
		$validator = Validator::make($request->all(),$rules);
		if ($validator->fails()) {
			return redirect('/')
			->withInput()
			->withErrors($validator);
		}
		else{
            // $data = $request->input();
						// try{
			// 	$student = new StudInsert;
      //           $student->firstname = $data['firstname'];
			// 	$student->lastname = $data['lastname'];
			// 	$student->email = $data['email'];
			// 	$student->middlename = $data['middlename'];
			// 	$student->address = $data['address'];
			// 	$student->birthday = $data['birthday'];
			// 	$student->gender = $data['gender'];
			// 	$student->age = $data['age'];
			// 	$student->course_year = $data['course_year'];
			// 	$student->religion = $data['religion'];
			// 	$student->save();
			// 	return redirect('/')->with('status',"Insert successfully");
			// }
			// catch(Exception $e){
			// 	return redirect('/')->with('failed',"operation failed");
			// }

			$param = [ $request->input('firstname'),
								$request->input('lastname'),
								$request->input('email'),
								$request->input('middlename'),
								$request->input('address'),
								$request->input('birthday'),
								$request->input('gender'),
								$request->input('age'),
								$request->input('course_year'),
								$request->input('religion'),
								$request->input('pastDisease'),
								$request->input('pastDisease_date'),
								$request->input('physician'),
								$request->input('immunization'),
								$request->input('immunization_date'),
								$request->input('immunization_physician'),
								0
							 ];

			$sp_query = "EXEC pr_student_medical_history_ins :firstname, :lastname, :email, :middlename, :address, :birthday, :gender, :age, :course_year, :religion, :pastDisease, :pastDisease_date, :physician, :immunization, :immunization_date, :immunization_physician, :result_id;";
			$result = DB::select($sp_query, $param);

			// dd($result);
			return redirect('/addpatient');

			
			}
    }
}