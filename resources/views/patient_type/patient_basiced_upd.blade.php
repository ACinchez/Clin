@extends('layouts.default')

    @section('content')
      <main role="main" class="main-content">
        <div class="container-fluid">
          <div class="row justify-content-center">
            <div class="col-12 col-xl-10">
              <div class="row align-items-center my-4">
                <div class="col">
                  <hr class="my-4">
                  <h2 class="h3 mb-0 page-title">Patient Update</h2>
                </div>
                <div class="col-auto">
                 
                </div>
              </div>

                                                                             	
																		-->
							@if($array_value['result'])
                @if($array_value['result'][0]->patient_id > 0)
									<form action="/save_patient_medical_history_profile_by_id" method="POST">
										<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
										<input type="hidden" name="patient_id" value="{{ $array_value['result'][0]->patient_id }}">
										<input type="hidden" name="med_history_immunization_id" value="{{ $array_value['result'][0]->med_history_immunization_id }}">
										<input type="hidden" name="med_history_past_disease_id" value="{{ $array_value['result'][0]->med_history_past_disease_id }}">

											<div class="form-row">
												<div class="form-group col-md-4">
													<label for="patient_type_name">FirstName</label>
													<input type="text" id="patient_type_name" class="form-control" name="firstname" value="{{ $array_value['result'][0]->firstname }}">
												</div>

                                                <div class="form-group col-md-4">
													<label for="patient_type_name">LastName</label>
													<input type="text" id="patient_type_name" class="form-control" name="lastname" value="{{ $array_value['result'][0]->lastname }}">
												</div>

                                                <div class="form-group col-md-4">
													<label for="patient_type_name">MiddleName</label>
													<input type="text" id="patient_type_name" class="form-control" name="middlename" value="{{ $array_value['result'][0]->middlename }}">
												</div>

												<div class="form-group col-md-4">
													<label for="patient_type_name">Email</label>
													<input type="text" id="patient_type_name" class="form-control" name="email" value="{{ $array_value['result'][0]->email }}">
												</div>

												<div class="form-group col-md-4">
													<label for="patient_type_name">Address</label>
													<input type="text" id="patient_type_name" class="form-control" name="address" value="{{ $array_value['result'][0]->address }}">
												</div>

												<div class="form-group col-md-4">
													<label for="patient_type_name">Age</label>
													<input type="text" id="patient_type_name" class="form-control" name="age" value="{{ $array_value['result'][0]->age }}">
												</div>

												<div class="form-group col-md-4">
													<label for="patient_type_name">Birthday</label>
													<input type="text" id="patient_type_name" class="form-control" name="birthday" value="{{ $array_value['result'][0]->birthday }}">
												</div>

												<div class="form-group col-md-4">
													<label for="patient_type_name">Gender</label>
													<input type="text" id="patient_type_name" class="form-control" name="gender" value="{{ $array_value['result'][0]->gender }}">
												</div>

												<div class="form-group col-md-4">
													<label for="patient_type_name">Religion</label>
													<input type="text" id="patient_type_name" class="form-control" name="religion" value="{{ $array_value['result'][0]->religion }}">
												</div>


                                                {{-- <div class="form-group col-md-4">
													<label for="patient_type_name">Med History Immunization Id</label>
													<input type="text" id="patient_type_name" class="form-control" name="med_history_immunization_id" value="{{ $array_value['result'][0]->med_history_immunization_id }}">
												</div> --}}

                                                <div class="form-group col-md-4">
													<label for="patient_type_name">Immunization ID</label>
													<input type="text" id="patient_type_name" class="form-control" name="immunization_id" value="{{ $array_value['result'][0]->immunization_id }}">
												</div>

                                                <div class="form-group col-md-4">
													<label for="patient_type_name">Immunization DateTime </label>
													<input type="text" id="patient_type_name" class="form-control" name="immunization_datetime" value="{{ $array_value['result'][0]->immunization_datetime }}">
												</div>

                                               <div class="form-group col-md-4">
													<label for="patient_type_name">Immunization Physician </label>
													<input type="text" id="patient_type_name" class="form-control" name="immunization_physician" value="{{ $array_value['result'][0]->immunization_physician }}">
												</div>

                                                {{-- <div class="form-group col-md-4">
													<label for="patient_type_name">Med History Past Disease Id </label>
													<input type="text" id="patient_type_name" class="form-control" name="med_history_past_disease_id" value="{{ $array_value['result'][0]->med_history_past_disease_id }}">
												</div> --}}

                                                <div class="form-group col-md-4">
													<label for="patient_type_name">Past Disease </label>
													<input type="text" id="patient_type_name" class="form-control" name="past_disease" value="{{ $array_value['result'][0]->past_disease }}">
												</div>

                                                <div class="form-group col-md-4">
													<label for="patient_type_name">Past Disease Datetime Diagnose </label>
													<input type="text" id="patient_type_name" class="form-control" name="past_disease_datetime_diagnose" value="{{ $array_value['result'][0]->past_disease_datetime_diagnose }}">
												</div>

												<div class="form-group col-md-4">
													<label for="patient_type_name">Physician </label>
													<input type="text" id="patient_type_name" class="form-control" name="physician" value="{{ $array_value['result'][0]->physician }}">
												</div>
										</div>

										<input type="submit" class="btn btn-primary" value="SAVE PATIENT BASIC ED">

									</form>
								@else
								No Records Found.
								@endif
							@else
									No Records Found.
							@endif

                
              <hr class="my-4">
  @endsection
              