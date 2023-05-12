<?php
namespace App\Http\Controllers;

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PatientController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PatientTypeController;
use App\Http\Controllers\TestCategoryController;
use App\Http\Controllers\PatientClinlabController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\LaboratoryResultController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
/*clinic staff login and frames*/
Route::redirect('/','login');
Route::view('/datatable','datatable');

Route::get('/dashboard', function () {
    if(auth()->user()->role_desc == 'clinic'){
        return view('school-nurse.dashboard');
    }
    if(auth()->user()->role_desc == 'clinlab'){
        return view('laboratory-result.clinlab_add_patient');
    }
    
})->middleware(['auth', 'verified'])->name('dashboard');

Route::view('/immunization','immunization') ;

Route::get('/immunization', function () {
    return view('school-nurse.immunization');
});

Route::view('/disease','disease') ;

Route::get('/disease', function () {
    return view('school-nurse.disease');
});

Route::get('/patientprofile', function () {
    return view('school-nurse.patientprofile');
})->middleware(['auth', 'verified'])->name('patientprofile');

Route::get('/editpatientprofile', function () {
    return view('school-nurse.editpatientprofile');
})->middleware(['auth', 'verified'])->name('editpatientprofile');

Route::view('/medicalrecords','medicalrecords') ;

Route::get('/medicalrecords', function () {
    return view('school-nurse.medicalrecords');
});

Route::get('/addpatient', function () {
    return view('school-nurse.addpatient');
})->middleware(['auth', 'verified'])->name('addpatient');



Route::get('/newconsultation', function () {
    return view('school-nurse.newconsultation');
})->middleware(['auth', 'verified'])->name('newconsultation');

// Route::get('/searchpatient', function () {
//     return view('school-nurse.searchpatient');
// })->middleware(['auth', 'verified'])->name('searchpatient');

Route::get('/searchpatient',[SearchController::class, 'index'])->name('searchpatient');

Route::get('/search_clinlab_patient',[SearchController::class, 'clinlab_patient_list'])->name('search_clinlab_patient');

Route::get('/college', function () {
    return view('school-nurse.college');
})->middleware(['auth', 'verified'])->name('college');

Route::get('/basicedu', function () {
    return view('school-nurse.basicedu');
})->middleware(['auth', 'verified'])->name('basicedu');

Route::get('/clinic_employee', function () {
  return view('school-nurse.clinic_employee');
})->middleware(['auth', 'verified'])->name('clinic_employee');

Route::view('/patientP','medicalrecords') ;

Route::get('/medicalrecords', function () {
    return view('school-nurse.medicalrecords');
});

Route::get('/clinic_profile', function () {
    return view('school-nurse.clinic_profile');
})->name('clinic_profile');

Route::get('/newconsultation', function () {
    return view('school-nurse.newconsultation');
})->name('newconsultation');

Route::get('/laboratoryresults', function () {
    return view('school-nurse.laboratoryresults');
})->name('laboratoryresults');



/*laboratory staff login and frames*/
Route::get('/labdashboard', function () {
    return view('laboratory-result.labdashboard');
})->middleware(['auth', 'verified'])->name('labdashboard');

Route::get('/clinlab_add_patient', function () {
    return view('laboratory-result.clinlab_add_patient');
})->name('clinlab_add_patient');

// Route::get('/clinlab_search_patient', function () {
//     return view('laboratory-result.clinlab_search_patient');
// })->name('clinlab_search_patient');



Route::get('/clinlab_labtest', function () {
  return view('laboratory-result.clinlab_labtest');
})->name('clinlab_labtest');

Route::get('/clinlab_edit', function () {
  return view('laboratory-result.clinlab_edit');
})->name('clinlab_edit');

Route::get('/clinlabmodalresults', function () {
    return view('laboratory-result.clinlabmodalresults');
})->name('clinlabmodalresults');




Route::get('/patient/add_patient', [PatientController::class, 'create']);


Route::put('/update-student/{id}',[PatientController::class,'update']);

// Route::post('create', 'App\Http\Controllers\StudInsertController@create');
Route::get('edit-patient/{id}', 'App\Http\Controllers\PatientController@edit');
Route::get('/patients', 'App\Http\Controllers\PatientController@index');
Route::get('/add', function () {
    return view('patient_create_tbl');
});

Route::middleware('auth')->group(function() {
	// Route::get('/add_new_medical_history', [PatientController::class, 'add_new_medical_history']);
    #for basiced
	Route::post('/save_new_medical_history', [PatientController::class, 'save_new_patient']);
    // Route::post('/save_new_medical_history_college', [PatientController::class, 'save_new_patient_college']);
});


##patient type library
Route::middleware('auth')->group(function() {
	Route::get('/patient_type_index', [PatientTypeController::class, 'patient_type_index']);
	Route::post('/save_new_patient_type', [PatientTypeController::class, 'save_new_patient_type']);
	Route::get('/patient_type_add', [PatientTypeController::class, 'patient_type_add']);
	Route::get('/update_patient_type_by_id/{id}', [PatientTypeController::class, 'update_patient_type_by_id']);
	Route::post('/save_patient_type_update', [PatientTypeController::class, 'save_patient_type_update']);
	Route::get('/archived_patient_type_by_id/{id}', [PatientTypeController::class, 'archived_patient_type_by_id']);
});
##end patient type library

Route::get('/test_category_index', [TestCategoryController::class, 'test_category_index']);
Route::post('/create', [TestCategoryController::class, 'save_new_test_cat']);
Route::get('/test-cat-add', function () {
	return view('patient_type.test_category_add');
});

Route::get('/update_test_cat_by_id/{id}', [TestCategoryController::class, 'update_test_cat_by_id']);

Route::post('/save_test_category_update', [TestCategoryController::class, 'save_test_category_update']);
Route::get('/archived_test_category_by_id/{id}', [TestCategoryController::class, 'archived_test_category_by_id']);

#........................................
Route::post('/save_clinlab_patient', [PatientClinlabController::class, 'save_new_clinlab_patient']);
Route::get('/add_clinlab_patient', function () {
    return view('laboratory-result.clinlab_add_patient');
});

Route::get('/clinlab_search', function () {
    return view('laboratory-result.clinlab_search');
});

Route::post('/save_clinlab_patient_fecalysis', [PatientClinlabController::class, 'save_fecalysis_clinlab_patient']);
#-----new consultation
Route::post('/save_new_medical_consultation', [PatientController::class, 'save_consultation_clinic_patient']);
#--------------------------------------------View Patient_ihms_basiced_list
Route::get('/patient_basiced_index', [PatientController::class, 'patient_basiced_index']);
#------------------------------------
// Route::get('/search', 'App\Http\Controllers\SearchController@search')->name('search');

// Route::get('/get-list', function () {
//     return view('search-results');
// });

// Route::post('/search_patient', [SearchController::class, 'search_patient']);
#--------------------------------

Route::get('/update_patient_basiced_by/{id}', [PatientController::class, 'update_patient_basiced_by_id']);
Route::post('/save_patient_medical_history_profile_by_id', [PatientController::class, 'save_patient_medical_history_profile_by_id']);
Route::get('/clinlab/patient/profile/{id}', [LaboratoryResultController::class, 'json_get_client_profile_by_id']);
Route::post('/save_patient_test_results', [LaboratoryResultController::class, 'save_patient_test_results']);
// Route::post('/save_patient_test_results_uri', [LaboratoryResultController::class, 'save_patient_test_results_uri']);
#-------------------------------------

##Clinical Lboratory library
Route::middleware('auth')->group(function() {
	Route::get('/client_laboratory_history_by_id/{id}', [PatientClinlabController::class, 'client_laboratory_history_by_id']);
    Route::get('/json_get_patient_test_by_id_sel', [PatientClinlabController::class, 'json_get_patient_test_by_id_sel']);
});
##end patient type library

Route::get('/search',[SearchController::class, 'index']);


/** Testing */
Route::get('/clinlab/lab_test/category/details/{test_category_id}', [LaboratoryTestController::class, 'index']);

Route::get('/remove_patient_test_by_id', [LaboratoryResultController::class, 'remove_patient_test_by_id']);

Route::get('delete/{id}',[LaboratoryResultController::class, 'destroy']);



require __DIR__.'/auth.php';
