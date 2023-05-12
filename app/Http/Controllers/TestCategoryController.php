<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TestCategoryController extends Controller
{

	public function test_category_index(){
		$result = DB::select("EXEC
		pr_ihms_test_cat_lst");

		$array_value = [
			'list' => $result
		];


		return view('patient_type.test_category_index', compact('array_value'));
	}

    public function save_new_test_cat(Request $request){
		$param = [ $request->input('label'),
								0
							 ];

			$sp_query = "EXEC pr_ihms_test_category_ins :label, :result_id;";
			$result = DB::select($sp_query, $param);

			// dd($result);
			return redirect('/test-cat-add');
	}

	public function update_test_cat_by_id($id){
		$param = [ $id ];
		$sp_query = "EXEC pr_ihms_test_cat_by_id_select :test_category_id;";
		$result = DB::select($sp_query, $param);

		$array_value = [
									"result" => $result
									];
		// dd($id);
		return view('patient_type.test_category_upd', compact('array_value'));
	}

	public function save_test_category_update(Request $request){
		$param = [ 	$request->input('test_category_id'),
								$request->input('label'),
								0
							 ];

			$sp_query = "EXEC pr_ihms_test_cat_by_id_upd :test_category_id, :label, :result_id;";
			$result = DB::select($sp_query, $param);

			// dd($result);
			return redirect('/test_category_index');
	}

	public function archived_test_category_by_id($id){
		$param = [ $id, 0 ];
		$sp_query = "EXEC pr_ihms_test_cat_by_id_del :test_category_id, :result_id;";
		$result = DB::select($sp_query, $param);

		return redirect('/test_category_index');
	}

}
