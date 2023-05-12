@extends('layouts.default')
    {{-- @include('layouts.navigation')
    @include('layouts.sidenavbar') --}}

    @section('content')
      <main role="main" class="main-content">
        <div class="container-fluid">
          <div class="row justify-content-center">
            <div class="col-12 col-xl-10">
              <div class="row align-items-center my-4">
                <div class="col">
                  <hr class="my-4">
                  <h2 class="h3 mb-0 page-title">New Consultation</h2>
                </div>
                <div class="col-auto">
                 
                </div>
              </div>
              <form action="/save_new_medical_consultation" method="POST">

                <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">

                <div class="form-row">
                  <div class="form-group col-md-4">
                    <label for="custom-placeholder">MM/DD/YYYY</label>
                    <input class="form-control" id="custom-placeholder"  name="date" value="{{ date('m/d/Y') }}">
                  </div>
                  
                  <div class="form-group col-md-4">
                    <label for="timein">Time</label>
                    <input type="time" id="timein" class="form-control" name="time" value="{{ \Carbon\Carbon::now('Asia/Manila')->format('H:i') }}">
                  </div>

                  
                  <div class="form-group col-md-4">
                    <label for="inputLang">Consultation Type</label>
                    <select id="inputLang" class="form-control" name="consultation_type">
                      <option value="en">Walk-in</option>
                      <option value="fr">Scheduled Consultation</option>
                    </select>
                  </div>
                </div>

                  {{-- <div class="form-group col-md-4">
                    <label for="custom-placeholder">MM/DD/YYYY</label>
                    <input class="form-control input-placeholder" id="custom-placeholder" type="text" name="consultation_date">
                  </div>

                  <div class="form-group row-md-4">
                    <label for="timein">Time</label>
                    <input type="time" id="timein" class="form-control" name="timein" value="hh:mm">
                </div>

                  <div class="form-group col-md-4">
                    <label for="inputLang">Consultation Type</label>
                    <select id="inputLang" class="form-control" name="consultation_type">
                      <option value="en">Walk-in</option>
                      <option value="fr">Scheduled Consultation</option>
                  
                    </select>
                  </div>
                   --}}
              <hr class="my-4">
              <h2 class="h3 mb-0 page-title my-4">Complaints</h2>

              <div class="form-group mb-2">
                <label for="input_complaints">Text area</label>
                <textarea class="form-control" name="complaints" id="input_complaints" rows="4"></textarea>
              </div>

              <hr class="my-4">

              <h2 class="h3 mb-0 page-title my-4">Vital Signs</h2>

              <div class="form-row">
                <div class="form-group col-md-4">
                  <label for="blood_pressure">Blood Pressure</label>
                  <input type="text" name="bloodpressure" id="blood_pressure" class="form-control">
                </div>
                <div class="form-group col-md-4">
                  <label for="pulse">Pulse</label>
                  <input type="text" name="pulse" id="pulse" class="form-control">
                </div>
                <div class="form-group col-md-4">
                  <label for="tempt">Temperature</label>
                  <input type="text" name="temperature" id="tempt" class="form-control">
                </div>
              </div>

              <div class="form-row">
                <div class="form-group col-md-4">
                  <label for="weight">Weight</label>
                  <input type="text" name="weight" id="weight" class="form-control">
                </div>
                <div class="form-group col-md-4">
                  <label for="height">Height</label>
                  <input type="text" name="height" id="height" class="form-control">
                </div>
                <div class="form-group col-md-4">
                  <label for="gender">Gender</label>
                  <select id="gender" name="gender" class="form-control">
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                  </select>
                  
                </div>
                <div class="form-group col-md-4" id="last-menstrual-group" style="display: none;">
                  <label for="last-menstrual">Last Menstrual</label>
                  <input type="text" id="last-menstrual" name="lastmenstrual" class="form-control">
                </div>
                
                <script>
                  const genderSelect = document.getElementById("gender");
                  const lastMenstrualGroup = document.getElementById("last-menstrual-group");
                
                  genderSelect.addEventListener("change", function() {
                    if (genderSelect.value === "female") {
                      lastMenstrualGroup.style.display = "block";
                    } else {
                      lastMenstrualGroup.style.display = "none";
                    }
                  });
                </script>

              </div>
                
              <h2 class="h3 mb-0 page-title my-4">Remarks</h2>

              <form>
                <div class="form-group mb-2">
                  <label for="input_complaints">Text area</label>
                  <textarea class="form-control" name="remarks" id="input_complaints" rows="4"></textarea>
                </div>
              
                <div class="text-center">
                  <input type="submit" class="btn btn-primary" value="Save">
                </div>
              </form>
              
                @endsection 