<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;

class PatientViewController extends Controller {
public function index(){
$users = DB::select('select * from patient_tbl');
return view('patient_view',['users'=>$users]);
}
}