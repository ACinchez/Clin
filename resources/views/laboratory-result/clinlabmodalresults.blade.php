@extends('layouts.default_2')
<link rel="stylesheet" href="{{ asset('css\labtest.css') }}">
@section('content')

                <main role="main" class="main-content">
                    <div class="container-fluid">
                        <div class="row justify-content-center">
                          <div class="col-12">
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
                                  <button class="btn btn-primary float-right ml-3" type="button">Add more +</button>
                                  <div class="btn-group float-right">
                                    <button class="btn btn-secondary dropdown-toggle" type="button" id="actionMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Action </button>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="actionMenuButton">
                                      <a class="dropdown-item" href="#">Export</a>
                                      <a class="dropdown-item" href="#">Delete</a>
                                      <a class="dropdown-item" href="#">Something else here</a>
                                    </div>
                                  </div>
                                </div>
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
                    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home"
                        role="tab" aria-controls="pills-home" aria-selected="true">Fecalysis</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile"
                        role="tab" aria-controls="pills-profile" aria-selected="false">Urinalysis</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact"
                        role="tab" aria-controls="pills-contact" aria-selected="false">Hematology</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-clinical-tab" data-toggle="pill" href="#pills-clinical"
                        role="tab" aria-controls="pills-clinical" aria-selected="false">Clinical
                        Chemistry</a>
                </li>
            </ul>

            <div class="tab-content mb-1" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                    aria-labelledby="pills-home-tab">
                    <div class="container-fluid">
                        <div class="row justify-content-center">
                            <div class="col-12 col-xl-10">
                                <div class="row align-items-center my-4">
                                    <div class="col" style="margin-bottom: 20px;">
                                        <h2 class="h3 mb-0 page-title" style="font-size: 40px">Fecalysis
                                            Result
                                        </h2>
                                    </div>
                                </div>
                                <!-- Fecalysis table starts here -->
                                <div class="col-md-12 my-10">
                                    <div class="card shadow">
                                        <div class="card-body">
                                            <table class="table table-bordered table-hover mb-0">
                                                <thead>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Color</td>
                                                        <td></td>
                                                        <!--data values-->
                                                    </tr>
                                                    <tr>
                                                        <td>Consistency</td>
                                                        <td></td>
                                                        <!--data values-->

                                                    </tr>
                                                    <tr>
                                                        <td class="table-el">Occult Blood</td>
                                                        <td></td>
                                                        <!--data values-->
                                                    </tr>
                                                </tbody>
                                                <thead>
                                                    <tr>
                                                        <th style="color:black; font-weight:bold;">
                                                            Microscopic Examination</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Pus Cells</td>
                                                        <td></td>
                                                        <!--data values-->
                                                    </tr>
                                                    <tr>
                                                        <td>RBC</td>
                                                        <td></td>
                                                        <!--data values-->

                                                    </tr>
                                                    <tr>
                                                        <td>Yeast Cells</td>
                                                        <td></td>
                                                        <!--data values-->
                                                    </tr>
                                                    <tr>
                                                        <td>Fat Globules</td>
                                                        <td></td>
                                                        <!--data values-->
                                                    </tr>
                                                    <tr>
                                                        <td>Ascarais</td>
                                                        <td></td>
                                                        <!--data values-->
                                                    </tr>
                                                    <tr>
                                                        <td>Hookworm</td>
                                                        <td></td>
                                                        <!--data values-->
                                                    </tr>
                                                    <tr>
                                                        <td>Trichiuris</td>
                                                        <td></td>
                                                        <!--data values-->
                                                    </tr>
                                                    <thead>
                                                        <tr>
                                                            <th
                                                                style="color:black; font-weight:bold; font-style:italic; font-size:15px ">
                                                                Entamoeba coli/Entamoeba histolytica</th>
                                                        </tr>
                                                    </thead>
                                                    <tr>
                                                        <td>Cyst</td>
                                                        <td></td>
                                                        <!--data values-->
                                                    </tr>
                                                    <tr>
                                                        <td>Troph</td>
                                                        <td></td>
                                                        <!--data values-->
                                                    </tr>
                                                    <thead>
                                                        <tr>
                                                            <th
                                                                style="color:rgb(54, 54, 54); font-weight:bold; font-style:italic; font-size:15px ">
                                                                Giardia lamblia</th>
                                                        </tr>
                                                    </thead>
                                                    <tr>
                                                        <td>Cyst</td>
                                                        <td></td>
                                                        <!--data values-->
                                                    </tr>
                                                    <tr>
                                                        <td>Troph</td>
                                                        <td></td>
                                                        <!--data values-->
                                                    </tr>
                                                    <thead>
                                                        <tr>
                                                            <th
                                                                style="color:rgb(54, 54, 54); font-weight:bold; font-style:italic; font-size:15px ">
                                                                Others</th>
                                                        </tr>
                                                    </thead>
                                                    <tr>
                                                        <td></td>
                                                        <td></td>
                                                        <!--data values-->
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <!-- Fecalysis table ends here -->

                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                    aria-labelledby="pills-profile-tab">
                    <div class="container-fluid">
                        <div class="row justify-content-center">
                            <div class="col-12 col-xl-10">
                                <div class="row align-items-center my-4">
                                    <div class="col" style="margin-bottom: 20px;">
                                        <h2 class="h3 mb-0 page-title" style="font-size: 40px">Urinalysis
                                        </h2>
                                    </div>
                                </div>
                                <!-- Urinalysis content goes here -->
                                <div class="col-md-12 my-10">
                                    <div class="card shadow">
                                        <div class="card-body">
                                            <table class="table table-bordered table-hover mb-0">
                                                <thead>
                                                    <tr>
                                                        <th style="color:black; font-weight:bold;">
                                                            Phyiscal Examination</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Color</td>
                                                        <td></td>
                                                        <!--data values-->
                                                    </tr>
                                                    <tr>
                                                        <td>Clarity</td>
                                                        <td></td>
                                                        <!--data values-->
                                                    </tr>
                                                </tbody>
                                                <thead>
                                                    <tr>
                                                        <th style="color:black; font-weight:bold;">
                                                            Chemical Examination</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>pH</td>
                                                        <td></td>
                                                        <!--data values-->
                                                    </tr>
                                                    <tr>
                                                        <td>Sp. Gr.</td>
                                                        <td></td>
                                                        <!--data values-->

                                                    </tr>
                                                    <tr>
                                                        <td>Glucose</td>
                                                        <td></td>
                                                        <!--data values-->
                                                    </tr>
                                                    <tr>
                                                        <td>Albunim</td>
                                                        <td></td>
                                                        <!--data values-->
                                                    </tr>
                                                    <thead>
                                                        <tr>
                                                            <th style="color:black; font-weight:bold;">
                                                                Microscopic Examination</th>
                                                        </tr>
                                                    </thead>
                                                    <tr>
                                                        <td>Pus</td>
                                                        <td></td>
                                                        <!--data values-->
                                                    </tr>
                                                    <tr>
                                                        <td>RBC</td>
                                                        <td></td>
                                                        <!--data values-->
                                                    </tr>
                                                    <tr>
                                                        <td>Renal Cell</td>
                                                        <td></td>
                                                        <!--data values-->
                                                    </tr>
                                                    <tr>
                                                        <td>Epithelial Cell</td>
                                                        <td></td>
                                                        <!--data values-->
                                                    </tr>
                                                    <tr>
                                                        <td>Mucus Threads</td>
                                                        <td></td>
                                                        <!--data values-->
                                                    </tr>
                                                    <tr>
                                                        <td>Bacteria</td>
                                                        <td></td>
                                                        <!--data values-->
                                                    </tr>
                                                    <tr>
                                                        <td>Yeast Cells</td>
                                                        <td></td>
                                                        <!--data values-->
                                                    </tr>
                                                    <tr>
                                                        <td>Amorphous</td>
                                                        <td></td>
                                                        <!--data values-->
                                                    </tr>
                                                    <tr>
                                                        <td>Coarse Granular Cast</td>
                                                        <td></td>
                                                        <!--data values-->
                                                    </tr>
                                                    <tr>
                                                        <td>Fine Granular Cast</td>
                                                        <td></td>
                                                        <!--data values-->
                                                    </tr>
                                                    <tr>
                                                        <td>Hyaline Cast</td>
                                                        <td></td>
                                                        <!--data values-->
                                                    </tr>
                                                    <tr>
                                                        <td>Calcium Oxalate</td>
                                                        <td></td>
                                                        <!--data values-->
                                                    </tr>
                                                    <tr>
                                                        <td>Triple Phosphate</td>
                                                        <td></td>
                                                        <!--data values-->
                                                    </tr>
                                                    <thead>
                                                        <tr>
                                                            <th
                                                                style="color:rgb(54, 54, 54); font-weight:bold; font-style:italic; font-size:15px ">
                                                                Others</th>
                                                        </tr>
                                                    </thead>
                                                    <tr>
                                                        <td></td>
                                                        <!--data values-->
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <!-- Urinalysis content ends here-->
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="pills-contact" role="tabpanel"
                    aria-labelledby="pills-contact-tab">
                    <div class="container-fluid">
                        <div class="row justify-content-center">
                            <div class="col-12 col-xl-10">
                                <div class="row align-items-center my-4">
                                    <div class="col" style="margin-bottom: 20px;">
                                        <h2 class="h3 mb-0 page-title" style="font-size: 40px">Hematology
                                        </h2>
                                    </div>
                                </div>
                                <!-- Hematology content goes here -->
                                <div class="col-md-12 my-10">
                                    <div class="card shadow">
                                        <div class="card-body">
                                            <table class="table table-bordered table-hover mb-0">
                                                <thead>
                                                    <tr>
                                                        <th style="color:black">Parameter</th>
                                                        <th style="color:black">Result</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>WBC Count</td>
                                                        <td></td>
                                                        <!--data values-->
                                                    </tr>
                                                    <thead>
                                                        <tr>
                                                            <th
                                                                style="color:rgb(54, 54, 54); font-weight:bold; font-style:italic; font-size:15px ">
                                                                WBC Differential</th>
                                                        </tr>
                                                    </thead>
                                                    <tr>
                                                        <td>Segmenter</td>
                                                        <td></td>
                                                        <!--data values-->
                                                    </tr>
                                                    <tr>
                                                        <td>Stab</td>
                                                        <td></td>
                                                        <!--data values-->
                                                    </tr>
                                                    <tr>
                                                        <td>Lymphocyte</td>
                                                        <td></td>
                                                        <!--data values-->
                                                    </tr>
                                                    <tr>
                                                        <td>Monocyte</td>
                                                        <td></td>
                                                        <!--data values-->
                                                    </tr>
                                                    <tr>
                                                        <td>Eosinophil</td>
                                                        <td></td>
                                                        <!--data values-->
                                                    </tr>
                                                    <tr>
                                                        <td>Basohpil</td>
                                                        <td></td>
                                                        <!--data values-->
                                                    </tr>
                                                    <tr>
                                                        <td>Hemoglobin</td>
                                                        <td></td>
                                                        <!--data values-->
                                                    </tr>
                                                    <tr>
                                                        <td>Hematocrit</td>
                                                        <td></td>
                                                        <!--data values-->
                                                    </tr>
                                                    <tr>
                                                        <td>MCV</td>
                                                        <td></td>
                                                        <!--data values-->
                                                    </tr>
                                                    <tr>
                                                        <td>MCH</td>
                                                        <td></td>
                                                        <!--data values-->
                                                    </tr>
                                                    <tr>
                                                        <td>MCHC</td>
                                                        <td></td>
                                                        <!--data values-->
                                                    </tr>
                                                    <tr>
                                                        <td>RDW</td>
                                                        <td></td>
                                                        <!--data values-->
                                                    </tr>
                                                    <tr>
                                                        <td>Thrombocyte Count</td>
                                                        <td></td>
                                                        <!--data values-->
                                                    </tr>
                                                    <tr>
                                                        <td>MPV</td>
                                                        <td></td>
                                                        <!--data values-->
                                                    </tr>
                                                    <thead>
                                                        <thead>
                                                            <tr>
                                                                <th
                                                                    style="color:rgb(54, 54, 54); font-weight:bold; font-style:italic; font-size:15px ">
                                                                    Others</th>
                                                            </tr>
                                                        </thead>
                                                    </thead>
                                                    <tr>
                                                        <td>Bleeding Time</td>
                                                        <td></td>
                                                        <!--data values-->
                                                    </tr>
                                                    <tr>
                                                        <td>Clotting Time</td>
                                                        <td></td>
                                                        <!--data values-->
                                                    </tr>
                                                    <tr>
                                                        <td>ESR</td>
                                                        <td></td>
                                                        <!--data values-->
                                                    </tr>
                                                    <tr>
                                                        <td>Reticulocyte Count</td>
                                                        <td></td>
                                                        <!--data values-->
                                                    </tr>
                                                    <tr>
                                                        <td>Remark</td>
                                                        <td></td>
                                                        <!--data values-->
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <!-- Hematology content goes here -->
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="pills-clinical" role="tabpanel"
                    aria-labelledby="pills-clinical-tab">
                    <div class="container-fluid">
                        <div class="row justify-content-center">
                            <div class="col-12 col-xl-10">
                                <div class="row align-items-center my-4">
                                    <div class="col" style="margin-bottom: 20px;">
                                        <h2 class="h3 mb-0 page-title" style="font-size: 40px">Clinical
                                            Chemistry</h2>
                                    </div>
                                </div>
                                <!-- Clinical Chemistry content goes here -->
                                <div class="col-md-12 my-10">
                                    <div class="card shadow">
                                        <div class="card-body">
                                            <table class="table table-bordered table-hover mb-0">
                                                <thead>
                                                    <tr>
                                                        <th style="color:black">Test</th>
                                                        <th style="color:black">Result</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Glucose (Fasting)</td>
                                                        <td></td>
                                                        <!--data values-->
                                                    </tr>
                                                    <tr>
                                                        <td>Uric Acid</td>
                                                        <td></td>
                                                        <!--data values-->
                                                    </tr>
                                                    <tr>
                                                        <td>Creatinine</td>
                                                        <td></td>
                                                        <!--data values-->
                                                    </tr>
                                                    <tr>
                                                        <td>Total Cholesterol</td>
                                                        <td></td>
                                                        <!--data values-->
                                                    </tr>
                                                    <tr>
                                                        <td>Triglycerides</td>
                                                        <td></td>
                                                        <!--data values-->
                                                    </tr>
                                                    <tr>
                                                        <td>HDL</td>
                                                        <td></td>
                                                        <!--data values-->
                                                    </tr>
                                                    <tr>
                                                        <td>LDL</td>
                                                        <td></td>
                                                        <!--data values-->
                                                    </tr>
                                                    <tr>
                                                        <td>ALT (SGPT)</td>
                                                        <td></td>
                                                        <!--data values-->
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <!-- Clinical Chemistry content ends here -->
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
            @endsection