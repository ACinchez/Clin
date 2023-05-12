<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PatientTypeController extends Controller
{
	public function patient_type_index(){
		$result = DB::select("EXEC
		 pr_ihms_patient_type_lst");

		$array_value = [
			'list' => $result
		];


		return view('patient_type.patient_type_index', compact('array_value'));
	}

  public function patient_type_add(){
		return view('patient_type.patient_type_add');
	}

	public function save_new_patient_type(Request $request){
		$param = [ $request->input('patient_type_name'),
								0
							 ];

			$sp_query = "EXEC pr_ihms_patient_type_ins :patient_type_name, :result_id;";
			$result = DB::select($sp_query, $param);

			// dd($result);
			return redirect('/patient_type_index');
	}

	public function update_patient_type_by_id($id){
		$param = [ $id ];
		$sp_query = "EXEC pr_ihms_patient_type_by_id_sel :patient_type_id;";
		$result = DB::select($sp_query, $param);

		$array_value = [
									"result" => $result
									];
		// dd($id);
		return view('patient_type.patient_type_upd', compact('array_value'));
	}

	public function save_patient_type_update(Request $request){
		$param = [ 	$request->input('patient_type_id'),
								$request->input('patient_type_name'),
								0
							 ];

			$sp_query = "EXEC pr_ihms_patient_type_by_id_upd :patient_type_id, :label, :result_id;";
			$result = DB::select($sp_query, $param);

			// dd($result);
			return redirect('/patient_type_index');
	}

	public function archived_patient_type_by_id($id){
		$param = [ $id, 0 ];
		$sp_query = "EXEC pr_ihms_patient_type_by_id_del :patient_type_id, :result_id;";
		$result = DB::select($sp_query, $param);

		return redirect('/patient_type_index');
	}
}
