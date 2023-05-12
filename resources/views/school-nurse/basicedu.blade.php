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
                  <h2 class="h3 mb-0 page-title">Basic Education</h2>
                </div>
                <div class="col-auto">
                 
                </div>
              </div>
              <form action="/save_new_medical_history" method="POST">

                <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
                <!--$request->input('lastname'),
        $request->input('firstname'),
        $request->input('middlename'), 
        $request->input('email'),
        $request->input('address'),
        $request->input('birthday'),
        $request->input('gender'),
        $request->input('age'),
        $request->input('course_year'),
        $request->input('religion'),
        $request->input('pastDisease'),
        $request->input('pastDisease_date'),
        $request->input('physician'),
        $request->input('immunization'),
        $request->input('immunization_date'),
        $request->input('immunization_physician'),
 -->
        <div class="form-row">
          <div class="form-group col-md-4">
           <label for="firstname">Firstname</label>
            <input type="text" name="firstname" id="firstname" class="form-control" required>
            </div>
       <div class="form-group col-md-4">
        <label for="middlename">Middlename</label>
        <input type="text" name="middlename" id="middlename" class="form-control" required>
      </div>
      <div class="form-group col-md-4">
        <label for="lastname">Lastname</label>
        <input type="text" name="lastname" id="lastname" class="form-control" required>
      </div>
      </div>


        <div class="form-row">
           <div class="form-group col-md-4">
           <label for="inputEmail4">Email</label>
        <input type="email" name="email" class="form-control" id="inputEmail4" required >
        </div>
        <div class="form-group col-md-3">
          <label for="inputAddress">Address</label>
           <input type="text" name="address" class="form-control" id="inputAddress" required>
         </div>
        <div class="form-group col-md-3">
          <label for="inputAddress">Grade</label>
           <input type="text" name="grade" class="form-control" id="inputAddress" required>
        </div>
       <div class="form-group col-md-2">
         <label for="inputCourse">Age</label> 
          <input type="text" name="age" class="form-control" id="inputCourse" required>
            </div>
              </div>
    <div class="form-row">
    <div class="form-group col-md-4">
     <label for="custom-placeholder">Date of Birth</label>
      <input class="form-control input-placeholder" id="custom-placeholder" type="text" name="birthday" required>
       </div>
   <div class="form-group col-md-4">
      <label for="inputState5">Gender</label>
      <select id="inputState5" class="form-control" name="gender" required>
      <option value="female">Female</option>
      <option value="male">Male</option>
    </select>
  </div>
  <div class="form-group col-md-4">
    <label for="inputLang">Religion</label>
    <select id="inputLang" class="form-control" name="religion" required>
      <option value="en">Roman Catholic</option>
      <option value="fr">Islam</option>
      <option value="fr">Catholic</option>
    </select>
  </div>
</div>
<hr class="my-4">

<h2 class="h3 mb-0 page-title my-4">Medical History</h2>

<div class="form-row">
  <div class="form-group col-md-4">
    <label for="firstname">Past Disease</label >
    <input type="text" id="pastDisease" class="form-control" name="pastDisease">
  </div>
  
  <div class="form-group col-md-3">
    <label for="custom-placeholder">Date</label>
    <input class="form-control input-placeholder" id="custom-placeholder" type="text" name="pastDisease_date">
  </div>

  <div class="form-group col-md-5">
    <label for="lastname">Physician/Health Center</label>
    <input type="text" id="physician" class="form-control" name="physician">
  </div>

  <div class="form-group col-md-4">
    <label for="firstname">Immunization</label>
    <input type="text" id="immunization" class="form-control" name="immunization">
  </div>
  
  <div class="form-group col-md-3">
    <label for="custom-placeholder">Date</label>
    <input class="form-control input-placeholder" id="custom-placeholder" type="text" name="immunization_date">
     </div>

          <div class="form-group col-md-5">
        <label for="lastname">Physician/Health Center</label>
       <input type="text" id="physician" class="form-control" name="immunization_physician">
     </div>
    </div>
            
  <hr class="my-4">


  {{-- <div class="col-md-6 text-right">
  <button type="button" class="btn btn-primary">Save</button>
  </div> --}}

  <input type="submit" class="btn btn-primary" value="save">

    </form>


    <hr class="my-4">
                @endsection 