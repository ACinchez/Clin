@extends('layouts.default_2')
<link rel="stylesheet" href="{{ asset('css\labAddPatient.css') }}">
@section('content')
    <main role="main" class="main-content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-12 col-xl-10">
                    <div class="row align-items-center my-4">
                      <div class="col" style="">
                        <h2 class="h3 mb-0 page-title" style="font-size: 40px">Add Patient</h2>
                    </div>
                        <div class="col">
                            <hr class="my-4">
                            <h2 class="h3 mb-0 page-title"></h2>
                        </div>
                        <div class="col-auto">
                        </div>
                    </div>
                    <form action="/save_clinlab_patient" method="POST">
                        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="firstname">First Name</label>
                                <input type="text" id="firstname" class="form-control" name="firstname" required>
                            </div>

                            <div class="form-group col-md-4">
                                <label for="firstname">Middle Name</label>
                                <input type="text" id="middlename" class="form-control" name="middlename" required>
                            </div>

                            <div class="form-group col-md-4">
                              <label for="firstname">Last Name</label>
                              <input type="text" id="lastname" class="form-control" name="lastname" required>
                          </div>

                            <div class="form-group col-md-4">
                                <label for="middlename">Age</label>
                                <input type="text" id="age" class="form-control" name="age" required>
                            </div>

                            <div class="form-group col-md-4">
                                <label for="inputState5">Gender</label>
                                <select id="inputState5" class="form-control" name="gender" required>
                                  <option value="Male">Male</option>
                                  <option value="Female">Female</option>
                                </select>
                              </div>

                            <div class="form-group col-md-4">
                                <label for="lastname">Physician</label>
                                <input type="text" id="physician" class="form-control" name="physician" required>
                            </div>

                            <div class="form-group col-md-4">
                                <label for="custom-placeholder">Date of Birth</label>
                                <input class="form-control input-placeholder" id="custom-placeholder" type="text" name="birthday" required>
                            </div>

                            <div class="form-group col-md-4">
                                <label for="lastname">Lab. No.</label>
                                <input type="text" id="labno" class="form-control" name="labno" required> 
                            </div>

                            <div class="form-group col-md-3">
                                <label for="inputCourse">Course/Grade</label>
                                <input type="text" class="form-control" id="inputCourse" name="course_year" required>
                            </div>

                            <div class="form-group col-md-4">
                              <label for="inputState5">Department</label>
                              <select id="inputState5" class="form-control" name="department">
                                <option value="college">College</option>
                                <option value="basic-ed">Basic Education</option>
                                <option value="employee">Employee</option>
                              </select>
                            </div>
                        </div>

                            {{-- <a class="lab-submit" href="{{ url('/clinlab_fecalysis') }}"> Next</a> --}}
                            <input type="submit" class="lab-submit">
                            <br>




                </div>
                </form>
            </div>
        </div>
    </main>
@endsection
