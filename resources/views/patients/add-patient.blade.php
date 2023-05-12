@extends('layouts.default')
@include('layouts.labHeader')
@include('layouts.labSideNav')
<link rel="stylesheet" href="{{asset('css\labAddPatient.css')}}">
@section('content')
    <main role="main" class="main-content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-12 col-xl-10">
                    <div class="row align-items-center my-4">
                        <div class="col">
                            <hr class="my-4">
                            <h2 class="h3 mb-0 page-title">Add Patient</h2>
                        </div>
                        <div class="col-auto">
                        </div>
                    </div>
                    <form>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="firstname">Name</label>
                                <input type="text" id="firstname" class="form-control">
                            </div>

                            <div class="form-group col-md-4">
                                <label for="middlename">Age</label>
                                <input type="text" id="middlename" class="form-control">
                            </div>

                            <div class="form-group col-md-4">
                                <label for="lastname">Gender</label>
                                <input type="text" id="lastname" class="form-control">
                            </div>

                            <div class="form-group col-md-4">
                                <label for="lastname">Physician</label>
                                <input type="text" id="lastname" class="form-control">
                            </div>

                            <div class="form-group col-md-4">
                                <label for="custom-placeholder">Date of Birth</label>
                                <input class="form-control input-placeholder" id="custom-placeholder" type="text" name="placeholder">
                            </div>

                            <div class="form-group col-md-4">
                                <label for="lastname">Lab. No.</label>
                                <input type="text" id="lastname" class="form-control">
                            </div>

                            <div class="form-group col-md-3">
                                <label for="inputCourse">Course</label>
                                <input type="text" class="form-control" id="inputCourse">
                            </div>
                        </div>
                        <label for="inputLang">Type of Test</label>
                        <select id="inputLang" class="form-control">
                        <option value="en">Hematology</option>
                        <option value="fr">Fecalysis</option>
                        <option value="fr">Clinical Chemistry</option>
                        <option value="fr">Urinalysis</option>
                        </select>
                        <div>

                        </div>
                        <input class="lab-submit" type="submit" value="Submit">


                        </div>
                        <div>

                        </div>
                    </form>
            </div>
        </div>
    </main>
@endsection


