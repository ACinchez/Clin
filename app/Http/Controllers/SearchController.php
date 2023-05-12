<?php

namespace App\Http\Controllers;

use Yajra\DataTables\Facades\Datatables;
use Illuminate\Http\Request;
use \Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;





class SearchController extends Controller
{
    // public function search(Request $request)
    // {
    //     $query = $request->input('query');

    //     $results = DB::table('patient_basiced')
    //                 ->where('lastname', 'like', '%'.$query.'%')
    //                 // ->orWhere('lastname', 'like', '%'.$query.'%')
    //                 ->get();

    //     return view('search-results', compact('results'));
    // }

    // public function search_patient(Request $request){
    //     // dd($request->input('keyword'));
    //     $results = DB::table('patient_basiced')
    //                 ->where('lastname', 'like', '%'.$request->input('keyword'))
    //                 ->get();

    //     // dd($results);
    //     return view('laboratory-result.clinlab_search_patient', compact('results'));
    //     // return view('laboratory-result.clinlab_search_patient', array('results' => 'John'));
    // }


    public function index(Request $request)
    {
        if($request->ajax()){
            $patient = DB::table('patient')->select('*')
            // ->where('patient_id', $request->patient_id)
            // ->leftJoin('med_history_immunization', 'patient.patient_id', '=', 'med_history_immunization.patient_id')
            // ->leftJoin('med_history_past_disease', 'patient.patient_id', '=', 'med_history_past_disease.patient_id')
            ->get();
                return Datatables::of($patient)
                    ->addIndexColumn()
                    ->addColumn('Action', function($patient){
                        $btn = "<a href='' class='btn btn-primary btn-sm'>View</a>";
                            return $btn;
                    })
                    ->editColumn('name', function ($patient){
                        return $patient->firstname ." ". $patient->lastname;
                    })
                    ->rawColumns(['Action'])
                    ->make(true);
        }
        return view('school-nurse.searchpatient');
    }

    public function clinlab_patient_list(Request $request)
    {
        if($request->ajax()){
            $patient = DB::table('patient_clinlab')->select('*')
            // ->where('patient_id', $request->patient_id)
            // ->leftJoin('med_history_immunization', 'patient.patient_id', '=', 'med_history_immunization.patient_id')
            // ->leftJoin('med_history_past_disease', 'patient.patient_id', '=', 'med_history_past_disease.patient_id')
            ->get();
                return Datatables::of($patient)
                    ->addIndexColumn()
                    ->addColumn('action', function($patient){
                        // $btn = "<a href='/clinlab/patient/profile/" . $patient->patient_id . "' class='btn btn-primary btn-sm' id=" . $patient->patient_id . ">Edit</a>&nbsp;<a href='' class='btn btn-primary btn-sm' id=" . $patient->patient_id . ">View Med</a>";
												$btn = "<a href='/clinlab/patient/profile/" . $patient->patient_id . "' class='edit-client' id=" . $patient->patient_id . ">&raquo;&nbsp;Add Test</a>&nbsp;|&nbsp;<a href='/client_laboratory_history_by_id/". $patient->patient_id ."' class='view-client-lab-history' id='" . $patient->patient_id . "'>&raquo;&nbsp;View Lab History</a>";
                        return $btn;
                    })
                    ->editColumn('name', function ($patient){
                        return $patient->firstname ." ". $patient->lastname;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }
        return view('laboratory-result.clinlab_search');
    }

}

