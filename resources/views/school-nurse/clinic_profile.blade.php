@extends('layouts.default')
@section('content')
    <!doctype html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=dev ice-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="favicon.ico">
        <title>Tiny Dashboard - A Bootstrap Dashboard Template</title>
        <!-- Simple bar CSS -->
        <link rel="stylesheet" href="css/simplebar.css">
        <!-- Fonts CSS -->
        <link
            href="https://fonts.googleapis.com/css2?family=Overpass:ital,wght@0,100;0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap"
            rel="stylesheet">
        <!-- Icons CSS -->
        <link rel="stylesheet" href="css/feather.css">
        <!-- Date Range Picker CSS -->
        <link rel="stylesheet" href="css/daterangepicker.css">
        <!-- App CSS -->
        <link rel="stylesheet" href="css/app-light.css" id="lightTheme">
        <link rel="stylesheet" href="css/app-dark.css" id="darkTheme" disabled>
        <link rel="stylesheet" href="{{ asset('css\labtest.css') }}">
    </head>

    <body class="vertical  light  ">
        <div class="wrapper">
            <main role="main" class="main-content">
                <div class="patient-profile">
                    <div style="margin: 40px" class="prof-box">
                        <div>
                            <div class="avatar">
                            </div>
                        </div>
                    </div>
                    
                    <div class="name1">
                        <h3 class="st-name">Ricart Russel</h3>
                        <h4 class="dp-name">BSIT - Major in ssHRM</h4>
                    </div>

                    <div class="col ml-auto">
                        <div class="dropdown float-right">
                            <a href="newconsultation">
                              <button class="btn btn-primary float-right ml-3" type="button">New
                                Consultation +</button>
                            </a>
                            <div class="btn-group float-right">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="actionMenuButton"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Action </button>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="actionMenuButton">
                                    <a class="dropdown-item" href="newconsultation">Export</a>
                                    <a class="dropdown-item" href="#">Delete</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-md-15 mb-15">
                    <div class="card shadow">
                        <div class="card-body">
                            <ul class="nav nav-pills nav-fill mb-3" id="pills-tab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="pills-patientprofile-tab" data-toggle="pill"
                                        href="#pills-patientprofile" role="tab" aria-controls="pills-patientprofile"
                                        aria-selected="true">Patient Profile</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="pills-medicalhistory-tab" data-toggle="pill"
                                        href="#pills-medicalhistory" role="tab" aria-controls="pills-medicalhistory"
                                        aria-selected="false">Medical History</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="pills-pastconsultation-tab" data-toggle="pill"
                                        href="#pills-pastconsultation" role="tab" aria-controls="pills-pastconsultation"
                                        aria-selected="false">Past Consultation</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="pills-laboratoryresult-tab" data-toggle="pill"
                                        href="#pills-laboratoryresult" role="tab" aria-controls="pills-laboratoryresult"
                                        aria-selected="false">Laboratory Result</a>
                                </li>
                            </ul>

                            <div class="tab-content mb-1" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-patientprofile" role="tabpanel"
                                    aria-labelledby="pills-patientprofile-tab">
                                    <div class="container-fluid">
                                        <div class="row justify-content-center">
                                            <div class="col-12 col-xl-10">
                                                <div class="row align-items-center my-4">
                                                    <div class="col" style="margin-bottom: 20px;">

                                                        <h2 class="h3 mb-0 page-title" style="font-size: 40px">Patient
                                                            Profile</h2>
                                                    </div>
                                                </div>

                                                <!-- Patient Profile content goes here-->

                                                <div class="form-row">
                                                    <div class="form-group col-md-4">
                                                        <label for="firstname">Firstname</label>
                                                        <input type="text" name="firstname" id="firstname"
                                                            class="form-control">
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <label for="middlename">Middlename</label>
                                                        <input type="text" name="middlename" id="middlename"
                                                            class="form-control">
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <label for="lastname">Lastname</label>
                                                        <input type="text" name="lastname" id="lastname"
                                                            class="form-control">
                                                    </div>
                                                </div>


                                                <div class="form-row">
                                                    <div class="form-group col-md-4">
                                                        <label for="inputEmail4">Email</label>
                                                        <input type="email" name="email" class="form-control"
                                                            id="inputEmail4">
                                                    </div>
                                                    <div class="form-group col-md-3">
                                                        <label for="inputAddress">Address</label>
                                                        <input type="text" name="address" class="form-control"
                                                            id="inputAddress">
                                                    </div>
                                                    <div class="form-group col-md-3">
                                                        <label for="inputAddress">Course</label>
                                                        <input type="text" name="course_year" class="form-control"
                                                            id="inputAddress">
                                                    </div>
                                                    <div class="form-group col-md-2">
                                                        <label for="inputCourse">Age</label>
                                                        <input type="text" name="age" class="form-control"
                                                            id="inputCourse">
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="form-group col-md-4">
                                                        <label for="custom-placeholder">Date of Birth</label>
                                                        <input class="form-control input-placeholder"
                                                            id="custom-placeholder" type="text" name="birthday">
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <label for="inputState5">Gender</label>
                                                        <select id="inputState5" class="form-control" name="gender">
                                                            <option value="female">Female</option>
                                                            <option value="male">Male</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <label for="inputLang">Religion</label>
                                                        <select id="inputLang" class="form-control" name="religion">
                                                            <option value="en">Roman Catholic</option>
                                                            <option value="fr">Islam</option>
                                                            <option value="fr">Catholic</option>
                                                            
                                                        </select>
                                                    </div>
                                                    <input type="submit" class="btn btn-primary" value="save">
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="pills-medicalhistory" role="tabpanel"
                                    aria-labelledby="pills-medicalhistory-tab">
                                    <div class="container-fluid">
                                        <div class="row justify-content-center">
                                            <div class="col-12 col-xl-10">
                                                <div class="row align-items-center my-4">
                                                    <div class="col" style="margin-bottom: 20px;">
                                                        <h2 class="h3 mb-0 page-title" style="font-size: 40px">Medical
                                                            History</h2>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="form-group col-md-4">
                                                        <label for="firstname">Past Disease</label>
                                                        <input type="text" id="pastDisease" class="form-control"
                                                            name="pastDisease">
                                                    </div>

                                                    <div class="form-group col-md-3">
                                                        <label for="custom-placeholder">Date</label>
                                                        <input class="form-control input-placeholder"
                                                            id="custom-placeholder" type="text"
                                                            name="pastDisease_date">
                                                    </div>

                                                    <div class="form-group col-md-5">
                                                        <label for="lastname">Physician/Health Center</label>
                                                        <input type="text" id="physician" class="form-control"
                                                            name="physician">
                                                    </div>

                                                    <div class="form-group col-md-4">
                                                        <label for="firstname">Immunization</label>
                                                        <input type="text" id="immunization" class="form-control"
                                                            name="immunization">
                                                    </div>

                                                    <div class="form-group col-md-3">
                                                        <label for="custom-placeholder">Date</label>
                                                        <input class="form-control input-placeholder"
                                                            id="custom-placeholder" type="text"
                                                            name="immunization_date">
                                                    </div>

                                                    <div class="form-group col-md-5">
                                                        <label for="lastname">Physician/Health Center</label>
                                                        <input type="text" id="physician" class="form-control"
                                                            name="immunization_physician">
                                                            
                                                    </div>
                                                </div>

                                                <!-- Medical History content goes here -->
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="pills-pastconsultation" role="tabpanel"
                                    aria-labelledby="pills-pastconsultation-tab">
                                    <div class="container-fluid">
                                        <div class="row justify-content-center">
                                            <div class="col-12 col-xl-10">
                                                <div class="row align-items-center my-4">
                                                    <div class="col" style="margin-bottom: 20px;">
                                                        <h2 class="h3 mb-0 page-title" style="font-size: 40px">Past
                                                            Consultation</h2>
                                                    </div>
                                                </div>
                                                <!-- Past Consultation content goes here -->
                                                <div class="col-md25 my-30">
                                                    <div class="card shadow">
                                                        <div class="card-body">

                                                            <table class="table table-striped table-hover">
                                                                <thead>
                                                                    <tr>
                                                                        <th>
                                                                            <div class="custom-control custom-checkbox">
                                                                                <input type="checkbox"
                                                                                    class="custom-control-input"
                                                                                    id="chall">
                                                                                <label class="custom-control-label"
                                                                                    for="d1"></label>
                                                                            </div>
                                                                        </th>
                                                                        <th>ID</th>
                                                                        <th>Name</th>
                                                                        <th>Address</th>
                                                                        <th>Phone</th>
                                                                        <th>Date</th>
                                                                        <th>Action</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>
                                                                            <div class="custom-control custom-checkbox">
                                                                                <input type="checkbox"
                                                                                    class="custom-control-input"
                                                                                    id="d1">
                                                                                <label class="custom-control-label"
                                                                                    for="d1"></label>
                                                                            </div>
                                                                        </td>
                                                                        <td>2474</td>
                                                                        <td>Brown, Asher D.</td>
                                                                        <td>Ap #331-7123 Lobortis Avenue</td>
                                                                        <td>(958) 421-0798</td>
                                                                        <td>13/09/2020</td>
                                                                        <td>
                                                                            <div class="dropdown">
                                                                                <button class="btn btn-sm dropdown-toggle"
                                                                                    type="button" id="dr1"
                                                                                    data-toggle="dropdown"
                                                                                    aria-haspopup="true"
                                                                                    aria-expanded="false">
                                                                                    <span
                                                                                        class="text-muted sr-only">Action</span>
                                                                                </button>
                                                                                <div class="dropdown-menu dropdown-menu-right"
                                                                                    aria-labelledby="dr1">
                                                                                    <a class="dropdown-item"
                                                                                        href="#">Edit</a>
                                                                                    <a class="dropdown-item"
                                                                                        href="#">Remove</a>
                                                                                    <a class="dropdown-item"
                                                                                        href="#">Assign</a>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <div class="custom-control custom-checkbox">
                                                                                <input type="checkbox"
                                                                                    class="custom-control-input"
                                                                                    id="d2">
                                                                                <label class="custom-control-label"
                                                                                    for="d2"></label>
                                                                            </div>
                                                                        </td>
                                                                        <td>2786</td>
                                                                        <td>Leblanc, Yoshio V.</td>
                                                                        <td>287-8300 Nisl. St.</td>
                                                                        <td>(899) 881-3833</td>
                                                                        <td>04/05/2019</td>
                                                                        <td>
                                                                            <div class="dropdown">
                                                                                <button class="btn btn-sm dropdown-toggle"
                                                                                    type="button" id="dr2"
                                                                                    data-toggle="dropdown"
                                                                                    aria-haspopup="true"
                                                                                    aria-expanded="false">
                                                                                    <span
                                                                                        class="text-muted sr-only">Action</span>
                                                                                </button>
                                                                                <div class="dropdown-menu dropdown-menu-right"
                                                                                    aria-labelledby="dr2">
                                                                                    <a class="dropdown-item"
                                                                                        href="#">Edit</a>
                                                                                    <a class="dropdown-item"
                                                                                        href="#">Remove</a>
                                                                                    <a class="dropdown-item"
                                                                                        href="#">Assign</a>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <div class="custom-control custom-checkbox">
                                                                                <input type="checkbox"
                                                                                    class="custom-control-input"
                                                                                    id="d3">
                                                                                <label class="custom-control-label"
                                                                                    for="d3"></label>
                                                                            </div>
                                                                        </td>
                                                                        <td>2747</td>
                                                                        <td>Hester, Nissim L.</td>
                                                                        <td>4577 Cras St.</td>
                                                                        <td>(977) 220-6518</td>
                                                                        <td>Nov 4, 2019</td>
                                                                        <td>
                                                                            <div class="dropdown">
                                                                                <button class="btn btn-sm dropdown-toggle"
                                                                                    type="button" data-toggle="dropdown"
                                                                                    aria-haspopup="true"
                                                                                    aria-expanded="false">
                                                                                    <span
                                                                                        class="text-muted sr-only">Action</span>
                                                                                </button>
                                                                                <div
                                                                                    class="dropdown-menu dropdown-menu-right">
                                                                                    <a class="dropdown-item"
                                                                                        href="#">Edit</a>
                                                                                    <a class="dropdown-item"
                                                                                        href="#">Remove</a>
                                                                                    <a class="dropdown-item"
                                                                                        href="#">Assign</a>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <div class="custom-control custom-checkbox">
                                                                                <input type="checkbox"
                                                                                    class="custom-control-input"
                                                                                    id="d4">
                                                                                <label class="custom-control-label"
                                                                                    for="d4"></label>
                                                                            </div>
                                                                        </td>
                                                                        <td>2639</td>
                                                                        <td>Gardner, Leigh S.</td>
                                                                        <td>P.O. Box 228, 7512 Lectus Ave</td>
                                                                        <td>(537) 315-1481</td>
                                                                        <td>04/08/2019</td>
                                                                        <td>
                                                                            <div class="dropdown">
                                                                                <button class="btn btn-sm dropdown-toggle"
                                                                                    type="button" id="dr4"
                                                                                    data-toggle="dropdown"
                                                                                    aria-haspopup="true"
                                                                                    aria-expanded="false">
                                                                                    <span
                                                                                        class="text-muted sr-only">Action</span>
                                                                                </button>
                                                                                <div class="dropdown-menu dropdown-menu-right"
                                                                                    aria-labelledby="dr4">
                                                                                    <a class="dropdown-item"
                                                                                        href="#">Edit</a>
                                                                                    <a class="dropdown-item"
                                                                                        href="#">Remove</a>
                                                                                    <a class="dropdown-item"
                                                                                        href="#">Assign</a>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <div class="custom-control custom-checkbox">
                                                                                <input type="checkbox"
                                                                                    class="custom-control-input"
                                                                                    id="d5">
                                                                                <label class="custom-control-label"
                                                                                    for="d5"></label>
                                                                            </div>
                                                                        </td>
                                                                        <td>2238</td>
                                                                        <td>Higgins, Uriah L.</td>
                                                                        <td>Ap #377-5357 Sed Road</td>
                                                                        <td>(238) 386-0247</td>
                                                                        <td>Jan 13, 2020</td>
                                                                        <td>
                                                                            <div class="dropdown">
                                                                                <button class="btn btn-sm dropdown-toggle"
                                                                                    type="button" id="dr5"
                                                                                    data-toggle="dropdown"
                                                                                    aria-haspopup="true"
                                                                                    aria-expanded="false">
                                                                                    <span
                                                                                        class="text-muted sr-only">Action</span>
                                                                                </button>
                                                                                <div class="dropdown-menu dropdown-menu-right"
                                                                                    aria-labelledby="dr5">
                                                                                    <a class="dropdown-item"
                                                                                        href="#">Edit</a>
                                                                                    <a class="dropdown-item"
                                                                                        href="#">Remove</a>
                                                                                    <a class="dropdown-item"
                                                                                        href="#">Assign</a>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="pills-laboratoryresult" role="tabpanel"
                                    aria-labelledby="pills-laboratoryresult-tab">
                                    <div class="container-fluid">
                                        <div class="row justify-content-center">
                                            <div class="col-12 col-xl-10">
                                                <div class="row align-items-center my-4">
                                                    <div class="col" style="margin-bottom: 20px;">
                                                        <h2 class="h3 mb-0 page-title" style="font-size: 40px">Laboratory
                                                            Result</h2>
                                                    </div>
                                                </div>
                                                <!-- Laboratory result content goes here -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
            </main>
    </body>

    </html>
@endsection
