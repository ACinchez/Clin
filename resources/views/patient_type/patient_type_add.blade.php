@extends('layouts.default')

    @section('content')
      <main role="main" class="main-content">
        <div class="container-fluid">
          <div class="row justify-content-center">
            <div class="col-12 col-xl-10">
              <div class="row align-items-center my-4">
                <div class="col">
                  <hr class="my-4">
                  <h2 class="h3 mb-0 page-title">Patient Type Management</h2>
                </div>
                <div class="col-auto">
                 
                </div>
              </div>
              <form action="/save_new_patient_type" method="POST">
							<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
							<input type="hidden" name="patient_type_id" value="">

                {{-- <h2 class="h3 mb-0 page-title my-4">Medical History</h2> --}}
               
                <div class="form-row">
                  <div class="form-group col-md-4">
                    <label for="patient_type_name">Patient Type Name</label>
                    <input type="text" id="patient_type_name" class="form-control" name="patient_type_name">
                  </div>
              </div>

              <input type="submit" class="btn btn-primary" value="SAVE PATIENT TYPE">

            </form>

                
              <hr class="my-4">
  @endsection
              