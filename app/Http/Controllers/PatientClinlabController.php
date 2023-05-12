<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use \Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;


use Session;


class PatientClinlabController extends Controller
{
    public function save_new_clinlab_patient(Request $request){

        $param = [  			$request->input('firstname'),
								$request->input('middlename'),
								$request->input('lastname'),
								$request->input('age'),
								$request->input('gender'),
								$request->input('physician'),
								$request->input('birthday'),
								$request->input('labno'),
								$request->input('course_year'),
                $request->input('department'),
								0
							 ];

			$sp_query = "EXEC pr_clinlab_patient_ins :firstname, :middlename, :lastname, :age, :gender, :physician, :birthday, :labno, :course_year, :department, :result_id;";
			$result = DB::select($sp_query, $param);

			// dd($result);
			foreach($result as $list){
				// dd($list->result_id);
				$patient_id = $list->result_id;
			}

			// sdfgsdfg
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
			// return redirect('clinlab_labtest');
			// return redirect('clinlab_add_patient');
			// return redirect('clinlab_labtest');

			$redirect_url = 'clinlab/patient/profile/' . $patient_id;

			return redirect($redirect_url);
	}
	public function add_new_clinlab_patient_test(Request $request){

        $param = [  			$request->input('color'),
								$request->input('consistency'),
								$request->input('test code'),
								$request->input('pus cells'),
								$request->input('rbc'),
								0
							 ];

			$sp_query = "EXEC pr_clinlab_patient_ins :firstname, :middlename, :lastname, :age, :gender, :physician, :birthday, :labno, :course_year, :department, :result_id;";
			$result = DB::select($sp_query, $param);

			// dd($result);
			foreach($result as $list){
				// dd($list->result_id);
				$patient_id = $list->result_id;
			}
			$redirect_url = 'clinlab/patient/profile/' . $patient_id;

			return redirect($redirect_url);
	}

	// public function save_fecalysis_clinlab_patient(Request $request){

	// 		$param = [  			$request->input('color'),
	// 						$request->input('consistency'),
	// 						$request->input('occultblood'),
	// 						$request->input('puscells'),
	// 						$request->input('rbc'),
	// 						$request->input('yeastcells'),
	// 						$request->input('fatglobules'),
	// 						$request->input('ascarais'),
	// 						$request->input('hookworm'),
	// 						$request->input('trichiuris'),
	// 														$request->input('cyst0'),
	// 														$request->input('troph0'),
	// 														$request->input('cyst1'),
	// 														$request->input('troph1'),
	// 														$request->input('others'),
	// 						0
	// 						];

	// 													$sp_query = "EXEC pr_clinlab_fecalysis_ins :color, :consistency, :occultblood, :puscells, :rbc, :yeastcells, :fatglobules, :ascarais, :hookworm, :trichiuris, :cyst0, :troph0, :cyst1, :troph1, :others, :result_id";

	// 	$result = DB::select($sp_query, $param);

	// 	return redirect('clinlab_labtest');
	// }

	public function client_laboratory_history_by_id($id){
		// dd($id);

		$param = [ $id ];
		$query = "EXEC pr_ihms_client_laboratory_by_id_sel :patient_id;";
		$tx = DB::select($query, $param);

		// urinalysis
		$test_type_list = DB::select("pr_ihms_test_category_by_urinalysis_test_sel");
		$test_cat_list = DB::select("pr_ihms_test_category_by_urinalysis_test_by_category_lst");
		// fecalysis
		$fec_test_type_list = DB::select("pr_ihms_test_category_by_fecalysis_test_sel");
		$fec_test_cat_list = DB::select("pr_ihms_test_category_by_fecalysis_test_by_category_lst");
		// hematology
		$hem_test_type_list = DB::select("pr_ihms_test_category_by_hematology_test_sel");
		$hem_test_cat_list = DB::select("pr_ihms_test_category_by_hematology_test_by_category_lst");
		// clinical chemistry
		$chem_test_type_list = DB::select("pr_ihms_test_category_by_chemistry_test_sel");
		$chem_test_cat_list = DB::select("pr_ihms_test_category_by_chemistry_test_by_category_lst");
		$array_value = [
										"client" => $tx,
										"test_type" => $test_type_list,
										"test_cat" => $test_cat_list,
										"fec_test_type" => $fec_test_type_list,
										"fec_test_cat" => $fec_test_cat_list,
										"hem_test_type" => $hem_test_type_list,
										"hem_test_cat" => $hem_test_cat_list,
										"chem_test_type" => $chem_test_type_list,
										"chem_test_cat" => $chem_test_cat_list
										
									];
		return view('laboratory-result.clinlab_edit', compact('array_value'));
	}

	public function json_get_patient_test_by_id_sel(Request $request){
		$param = [ $request->patient_test_id ];
		$query = "EXEC pr_ihms_patient_test_details_by_id_sel :patient_test_id;";
		$tx = DB::select($query, $param);

		$data = json_encode($tx);

		return response()->json($data);

	}


}
