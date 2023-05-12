<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LaboratoryTestController extends Controller
{
    //
    public function index(int $test_category_id)
    {
        $param = [$test_category_id];
        $sp_query = 'EXEC pr_ihms_lab_test_category_details_by_test_category_id_sel :test_category_id;';
        
        $result = DB::select($sp_query, $param);

        return;
    }

    public function store(Request $request)
    {
        /** Insert to Patient Test */
        $param_test_category_id = $request->test_category_id;
        $pt_sp_query = 'EXEC ';

        $patient_test_insert_result = DB::select($pt_sp_query, $param_test_category_id);

        /** Insert to Patient Test Details */
    }
}
