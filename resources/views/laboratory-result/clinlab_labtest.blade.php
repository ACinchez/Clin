@extends('layouts.default_2')
@section('content')
    <!doctype html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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
    {{--  --}}

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
                    @foreach ($patient as $result)
                        @php
                            
                            $var_patient_name = $result->client_name;
                            $var_course_year = $result->course_year;
                        @endphp
                    @endforeach
                    <div class="name1">
                        <h3 class="st-name">
                            {{ $var_patient_name }}
                        </h3>
                        <h4 class="dp-name">{{ $var_course_year }}</h4>
                    </div>

                    <div>
                        <button class="clinlab-submit" type="submit">Submit</button>
                    </div>
                </div>
                @foreach ($patient as $result)
                    @php
                        
                        $var_patient_id = $result->patient_id;
                        
                    @endphp
                @endforeach
                <form action="/save_patient_test_results" method="post" id="save_patient_test_result">
                    @csrf
                    <input type="hidden" id="patient_id" name="patient_id" value="{{ $var_patient_id }}">
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
                                            role="tab" aria-controls="pills-profile"
                                            aria-selected="false">Urinalysis</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact"
                                            role="tab" aria-controls="pills-contact"
                                            aria-selected="false">Hematology</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="pills-clinical-tab" data-toggle="pill"
                                            href="#pills-clinical" role="tab" aria-controls="pills-clinical"
                                            aria-selected="false">Clinical
                                            Chemistry</a>
                                    </li>
                                </ul>

                                <div class="tab-content mb-1" id="pills-tabContent">
                                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                                        aria-labelledby="pills-home-tab">
                                        {{-- fecalysis tab --}}
                                        <div class="container-fluid">
                                            <div class="row justify-content-center">
                                                <div class="col-12 col-xl-10">
                                                    <div class="row align-items-center my-4">
                                                        <div class="col" style="margin-bottom: 20px;">
                                                            <h2 class="h3 mb-0 page-title" style="font-size: 40px">Fecalysis
                                                            </h2>
                                                            <input type="checkbox" id="fecalysis_form_enable" name="fecalysis_form_enable" value="fec_form_checked" />
                                                        </div>
                                                    </div>
                                                    <!-- Fecalysis content goes here -->

													<input type="hidden" name="fecalysis_form_id" value="2" />
                                                    <div class="form-row">
                                                        <div class="form-group col-md-3">
                                                            <label for="fec_color">Color</label>
                                                            <input type="text" class="form-control" id="fec_color"
                                                                name="fec_color" disabled>
                                                        </div>
                                                        <div class="form-group col-md-3">
                                                            <label for="fec_consistency">Consistency</label>
                                                            <input type="text" class="form-control" id="fec_consistency"
                                                                name="fec_consistency" disabled>
                                                        </div>
                                                        <div class="form-group col-md-3">
                                                            <label for="fec_occult_blood">Occult Blood</label>
                                                            <input type="text" class="form-control" id="fec_occult_blood"
                                                                name="fec_occult_blood" disabled>
                                                        </div>
                                                    </div>
                                                    <hr class="my-4">
                                                    <h5 class="mb-2 mt-4">Microscopic Examination</h5>
                                                    {{-- <p class="mb-4">Mauris blandit nisl ullamcorper, rutrum metus in, congue lectus</p> --}}
                                                    <div class="form-row">
                                                        <div class="form-group col-md-2.5">
                                                            <label for="fec_pus_cells">Pus Cells</label>
                                                            <input type="text" id="fec_pus_cells" class="form-control"
                                                                name="fec_pus_cells" disabled>
                                                        </div>
                                                        <div class="form-group col-md-2.5">
                                                            <label for="fec_rbc">RBC</label>
                                                            <input type="text" id="fec_rbc" class="form-control"
                                                                name="fec_rbc" disabled>
                                                        </div>
                                                        <div class="form-group col-md-2.5">
                                                            <label for="fec_yeast_cells">Yeast Cells</label>
                                                            <input type="text" id="fec_yeast_cells" class="form-control"
                                                                name="fec_yeast_cells" disabled>
                                                        </div>
                                                        <div class="form-group col-md-2.5">
                                                            <label for="fec_fat_globules">Fat Globules</label>
                                                            <input type="text" id="fec_fat_globules" class="form-control"
                                                                name="fec_fat_globules" disabled>
                                                        </div>
                                                        <div class="form-group col-md-2.5">
                                                            <label for="fec_ascarais">Ascarais</label>
                                                            <input type="text" id="fec_ascarais" class="form-control"
                                                                name="fec_ascarais" disabled>
                                                        </div>
                                                        <div class="form-group col-md-2.5">
                                                            <label for="fec_hookworm">Hookworm</label>
                                                            <input type="text" id="fec_hookworm" class="form-control"
                                                                name="fec_hookworm" disabled>
                                                        </div>
                                                        <div class="form-group col-md-2.5">
                                                            <label for="fec_trichiuris">Trichiuris</label>
                                                            <input type="text" id="fec_trichiuris" class="form-control"
                                                                name="fec_trichiuris" disabled>
                                                        </div>
                                                        <hr class="my-4">
                                                        <div style="  display: flex; gap: 180px;">
                                                            <div>
                                                                <h5 class="mb-2 mt-4"
                                                                    style="font-size:15px; font-style:italic">Entamoeba
                                                                    coli/Entamobea histolyca</h5>
                                                                <div class="form-group col-md-8">
                                                                    <label for="fec_cyst">Cyst</label>
                                                                    <input type="text" id="fec_cyst"
                                                                        class="form-control" name="fec_cyst" disabled>
                                                                </div>
                                                                <div class="form-group col-md-8">
                                                                    <label for="fec_troph">Troph</label>
                                                                    <input type="text" id="fec_troph"
                                                                        class="form-control" name="fec_troph" disabled>
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <h5 class="mb-2 mt-4"
                                                                    style="font-size:15px; font-style:italic">Giardia
                                                                    Lamblia</h5>
                                                                <div class="form-group col-md-9">
                                                                    <label for="fec_cyst_2">Cyst</label>
                                                                    <input type="text" id="fec_cyst_2"
                                                                        class="form-control" name="fec_cyst_2" disabled>
                                                                </div>

                                                                <div class="form-group col-md-9">
                                                                    <label for="fec_troph_2">Troph</label>
                                                                    <input type="text" id="fec_troph_2"
                                                                        class="form-control" name="fec_troph_2" disabled>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <hr class="my-4">
                                                    <div class="form-group col-md-4">
                                                        <label for="fec_others">Others</label>
                                                        <input type="text" id="fec_others" class="form-control"
                                                            name="fec_others" disabled>
                                                    </div>
                                                    <hr class="my-4">
                                                    <div>
                                                        <input type="submit" class="btn btn-primary" value="submit"
                                                            style="padding-left: 25px;padding-right:25px;background:#04af3d; border:#04af3d">
                                                    </div>
                                             
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- urinalysis tab --}}
																		
                                    <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                                        aria-labelledby="pills-profile-tab">

                                        <div class="container-fluid">
                                            <div class="row justify-content-center">
                                                <div class="col-12 col-xl-10">
                                                    <div class="row align-items-center my-4">
                                                        <div class="col" style="margin-bottom: 20px;">

                                                            <h2 class="h3 mb-0 page-title" style="font-size: 40px">
                                                                Urinalysis
                                                                Test</h2>
																																<input type="checkbox" id="urinalysis_form_enable" name="urinalysis_form_enable" value="uri_form_checked" />
                                                        </div>
                                                        <div class="col-auto">
                                                        </div>
                                                    </div>
                                                    {{-- <form> --}}
                                                        <div>
                                                            <div>
                                                                <h2 style="font-size:20px">
                                                                    Physical Examination
                                                                </h2>
																																<input type="hidden" name="urinalysis_form_id" value="1" />
                                                                <div class="form-row">
                                                                    <div class="form-group col-md-4">
                                                                        <label for="uri_color">Color</label>
                                                                        <input type="text" id="uri_color"
                                                                            class="form-control" name="uri_color" disabled>
                                                                    </div>

                                                                    <div class="form-group col-md-4">
                                                                        <label for="uri_clarity">Clarity</label>
                                                                        <input type="text" id="uri_clarity"
                                                                            class="form-control" name="uri_clarity" disabled>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div>
                                                                <div>
                                                                    <h2 style="font-size:20px">
                                                                        Chemical Examination
                                                                    </h2>
                                                                    <div class="form-row">

                                                                        <div class="form-group col-md-4">
                                                                            <label for="uri_ph">pH</label>
                                                                            <input type="text" id="uri_ph"
                                                                                class="form-control" name="uri_ph" disabled>
                                                                        </div>

                                                                        <div class="form-group col-md-4">
                                                                            <label for="uri_sp_gr">Sp. Gr.</label>
                                                                            <input type="text" id="uri_sp_gr"
                                                                                class="form-control" name="uri_sp_gr" disabled>
                                                                        </div>

                                                                        <div class="form-group col-md-4">
                                                                            <label for="uri_glucose">Glucose</label>
                                                                            <input type="text" id="uri_glucose"
                                                                                class="form-control" name="uri_glucose" disabled>
                                                                        </div>

                                                                        <div class="form-group col-md-4">
                                                                            <label for="uri_albumin">Albumin</label>
                                                                            <input type="text" id="uri_albumin"
                                                                                class="form-control" name="uri_albumin" disabled>
                                                                        </div>
                                                                    </div>
                                                                </div>


                                                                <div>
                                                                    <h2 style="font-size:20px">
                                                                        Microscopic Examination
                                                                    </h2>
                                                                    <div class="form-row">
                                                                        <div class="form-group col-md-4">
                                                                            <label for="uri_pus">Pus</label>
                                                                            <input type="text" id="uri_pus"
                                                                                class="form-control" name="uri_pus" disabled>
                                                                        </div>

                                                                        <div class="form-group col-md-4">
                                                                            <label for="uri_rbc">RBC</label>
                                                                            <input type="text" id="uri_rbc"
                                                                                class="form-control" name="uri_rbc" disabled>
                                                                        </div>

                                                                        <div class="form-group col-md-4">
                                                                            <label for="uri_renal_cell">Renal Cell</label>
                                                                            <input type="text" id="uri_renal_cell"
                                                                                class="form-control" name="uri_renal_cell" disabled>
                                                                        </div>

                                                                        <div class="form-group col-md-4">
                                                                            <label for="uri_epithelial">Epithelial
                                                                                Cell</label>
                                                                            <input type="text" id="uri_epithelial"
                                                                                class="form-control" name="uri_epithelial" disabled>
                                                                        </div>

                                                                        <div class="form-group col-md-4">
                                                                            <label for="uri_mucus_threads">Mucus
                                                                                Threads</label>
                                                                            <input type="text" id="uri_mucus_threads"
                                                                                class="form-control" name="uri_mucus_threads" disabled>
                                                                        </div>

                                                                        <div class="form-group col-md-4">
                                                                            <label for="uri_bacteria">Bacteria</label>
                                                                            <input type="text" id="uri_bacteria"
                                                                                class="form-control" name="uri_bacteria" disabled>
                                                                        </div>

                                                                        <div class="form-group col-md-4">
                                                                            <label for="uri_yeast_cells">Yeast Cells</label>
                                                                            <input type="text" id="uri_yeast_cells"
                                                                                class="form-control" name="uri_yeast_cells" disabled>
                                                                        </div>

                                                                        <div class="form-group col-md-4">
                                                                            <label for="uri_amorphous">Amorphous</label>
                                                                            <input type="text" id="uri_amorphous"
                                                                                class="form-control" name="uri_amorphous" disabled>
                                                                        </div>

                                                                        <div class="form-group col-md-4">
                                                                            <label for="uri_coarse_granular_cast">Coarse
                                                                                Granular
                                                                                Cast</label>
                                                                            <input type="text"
                                                                                id="uri_coarse_granular_cast"
                                                                                class="form-control" name="uri_coarse_granular_cast" disabled>
                                                                        </div>

                                                                        <div class="form-group col-md-4">
                                                                            <label for="uri_fine_granular_cast">Fine Granular
                                                                                Cast</label>
                                                                            <input type="text" id="uri_fine_granular_cast"
                                                                                class="form-control" name="uri_fine_granular_cast" disabled>
                                                                        </div>

                                                                        <div class="form-group col-md-4">
                                                                            <label for="uri_hyaline_cast">Hyaline Cast</label>
                                                                            <input type="text" id="uri_hyaline_cast"
                                                                                class="form-control" name="uri_hyaline_cast" disabled>
                                                                        </div>

                                                                        <div class="form-group col-md-4">
                                                                            <label for="uri_uric_acid">Uric Acid</label>
                                                                            <input type="text" id="uri_uric_acid"
                                                                                class="form-control" name='uri_uric_acid' disabled>
                                                                        </div>

                                                                        <div class="form-group col-md-4">
                                                                            <label for="uri_calcium_oxalate">Calcium
                                                                                Oxalate</label>
                                                                            <input type="text" id="uri_calcium_oxalate"
                                                                                class="form-control" name="uri_calcium_oxalate" disabled>
                                                                        </div>

                                                                        <div class="form-group col-md-4">
                                                                            <label for="uri_triple_phosphate">Triple
                                                                                Phosphate</label>
                                                                            <input type="text" id="uri_triple_phosphate"
                                                                                class="form-control" name="uri_triple_phosphate" disabled>
                                                                        </div>

                                                                        <div class="form-group col-md-4">
                                                                            <label for="uri_others">Others</label>
                                                                            <input type="text" id="uri_others"
                                                                                class="form-control" name="uri_others" disabled>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <input type="submit" class="btn btn-primary"
                                                                    value="submit"
                                                                    style="padding-left: 25px;padding-right:25px;background:#04af3d; border:#04af3d">
                                                            </div>
                                                        </div>
                                                    {{-- </form> --}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- hematology tab --}}
                                    <div class="tab-pane fade" id="pills-contact" role="tabpanel"
                                        aria-labelledby="pills-contact-tab">
                                        <div class="container-fluid">
                                            <div class="row justify-content-center">
                                                <div class="col-12 col-xl-10">
                                                    <div class="row align-items-center my-4">
                                                        <div class="col" style="margin-bottom: 20px;">
                                                            <h2 class="h3 mb-0 page-title" style="font-size: 40px">
                                                                Hematology
                                                            </h2>
																														<input type="checkbox" id="hematology_form_enable" name="hematology_form_enable" value="hem_form_checked" />
                                                        </div>
                                                    </div>

                                                        {{-- <p class="mb-4">Mauris blandit nisl ullamcorper, rutrum metus in, congue lectus</p> --}}
                                                        <div class="form-row">
																													<input type="hidden" name="hematology_form_id" value="3" />
                                                            <div class="form-group col-md-3">
                                                                <label for="hem_wbc_count">WBC Count</label>
                                                                <input type="text" class="form-control"
                                                                    id="hem_wbc_count" name="hem_wbc_count" disabled>
                                                            </div>
                                                            <div class="form-group col-md-3">
                                                                <label for="hem_rbc_count">RBC Count</label>
                                                                <input type="text" class="form-control"
                                                                    id="hem_rbc_count" name="hem_rbc_count" disabled>
                                                            </div>
                                                            <div class="form-group col-md-3">
                                                                <label for="hem_hemoglobin">Hemoglobin</label>
                                                                <input type="text" class="form-control"
                                                                    id="hem_hemoglobin" name="hem_hemoglobin" disabled>
                                                            </div>
                                                            <div class="form-group col-md-3">
                                                                <label for="hem_hemotocrit">Hemotocrit</label>
                                                                <input type="text" class="form-control"
                                                                    id="hem_hemotocrit" name="hem_hemotocrit" disabled>
                                                            </div>
                                                          
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="form-group col-md-3">
                                                                <label for="hem_mcv">MCV</label>
                                                                <input type="text" class="form-control"
                                                                    id="hem_mcv" name="hem_mcv" disabled>
                                                            </div>
                                                            <div class="form-group col-md-3">
                                                                <label for="hem_mch">MCH</label>
                                                                <input type="text" class="form-control"
                                                                    id="hem_mch" name="hem_mch" disabled>
                                                            </div>
                                                            <div class="form-group col-md-3">
                                                                <label for="hem_mchc">MCHC</label>
                                                                <input type="text" class="form-control"
                                                                    id="hem_mchc" name="hem_mchc" disabled>
                                                            </div>
                                                            <div class="form-group col-md-3">
                                                                <label for="hem_rdw">RDW</label>
                                                                <input type="text" class="form-control"
                                                                    id="hem_rdw" name="hem_rdw" disabled>
                                                            </div>

                                                        </div>
                                                        <div class="form-row">
                                                            <div class="form-group col-md-3">
                                                                <label for="hem_thrombocyte_count">Thrombocyte Count</label>
                                                                <input type="text" class="form-control"
                                                                    id="hem_thrombocyte_count" name="hem_thrombocyte_count" disabled>
                                                            </div>
                                                            <div class="form-group col-md-3">
                                                                <label for="hem_mpv">MPV</label>
                                                                <input type="text" class="form-control"
                                                                    id="hem_mpv" name="hem_mpv" disabled>
                                                            </div>
                                                        </div>
                                                        <hr class="my-4">
                                                        <h5 class="mb-2 mt-4">WBC Differential</h5>
                                                        <div class="form-row">
                                                            <div class="form-group col-md-2">
                                                                <label for="hem_segmenter">Segmenter</label>
                                                                <input type="text" class="form-control"
                                                                    id="hem_segmenter" name="hem_segmenter" disabled>
                                                            </div>
                                                            <div class="form-group col-md-2">
                                                                <label for="hem_stab">Stab</label>
                                                                <input type="text" class="form-control"
                                                                    id="hem_stab" name="hem_stab" disabled>
                                                            </div>
                                                            <div class="form-group col-md-2">
                                                                <label for="hem_lymphocyte">Lymphocyte</label>
                                                                <input type="text" class="form-control"
                                                                    id="hem_lymphocyte" name="hem_lymphocyte" disabled>
                                                            </div>
                                                            <div class="form-group col-md-2">
                                                                <label for="hem_monocyte">Monocyte</label>
                                                                <input type="text" class="form-control"
                                                                    id="hem_monocyte" name="hem_monocyte" disabled>
                                                            </div>
                                                            <div class="form-group col-md-2">
                                                                <label for="hem_eosinophil">Eosinophil</label>
                                                                <input type="text" class="form-control"
                                                                    id="hem_eosinophil" name="hem_eosinophil" disabled>
                                                            </div>
                                                            <div class="form-group col-md-2">
                                                                <label for="hem_basophil">Basophil</label>
                                                                <input type="text" class="form-control"
                                                                    id="hem_basophil" name="hem_basophil" disabled>
                                                            </div>
                                                        </div>
                                                        <hr class="my-4">
                                                        <h5 class="mb-2 mt-4">Others</h5>
                                                        <div class="form-row">
                                                            <div class="form-group col-md-2">
                                                                <label for="hem_bleeding_time">Bleeding Time</label>
                                                                <input type="text" class="form-control"
                                                                    id="hem_bleeding_time" name="hem_bleeding_time" disabled>
                                                            </div>
                                                            <div class="form-group col-md-2">
                                                                <label for="hem_clotting_time">Clotting Time</label>
                                                                <input type="text" class="form-control"
                                                                    id="hem_clotting_time" name="hem_clotting_time" disabled> 
                                                            </div>
                                                            <div class="form-group col-md-2">
                                                                <label for="hem_esr">ESR</label>
                                                                <input type="text" class="form-control"
                                                                    id="hem_esr" name="hem_esr" disabled> 
                                                            </div>
                                                            <div class="form-group col-md-2">
                                                                <label for="hem_reticulocyte">Reticulocyte</label>
                                                                <input type="text" class="form-control"
                                                                    id="hem_reticulocyte" name="hem_reticulocyte" disabled>
                                                            </div>
                                                        </div>
																												<input type="submit" class="btn btn-primary"
                                                                    value="submit"
                                                                    style="padding-left: 25px;padding-right:25px;background:#04af3d; border:#04af3d">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- clinical chemistry tab --}}
                                    <div class="tab-pane fade" id="pills-clinical" role="tabpanel"
                                        aria-labelledby="pills-clinical-tab">

                                        <div class="container-fluid">
                                            <div class="row justify-content-center">
                                                <div class="col-12 col-xl-10">
                                                    <div class="row align-items-center my-4">
                                                        <div class="col" style="margin-bottom: 20px;">
                                                            <h2 class="h3 mb-0 page-title" style="font-size: 40px">
                                                                Clinical Chemistry
                                                            </h2>
                                                            <input type="checkbox" id="chemistry_form_enable" name="chemistry_form_enable" value="chem_form_checked" />
                                                        </div>
                                                    </div>	<input type="hidden" name="chemistry_form_id" value="4" />
                                                        <div class="form-row">
                                                            <div class="form-group col-md-3">
                                                                <label for="chem_glucose">Glucose
                                                                    (Fasting)</label>
                                                                <input type="text" class="form-control"
                                                                    id="chem_glucose" name="chem_glucose" disabled>
                                                            </div>
                                                            <div class="form-group col-md-3">
                                                                <label for="chem_uric_acid">Uric Acid</label>
                                                                <input type="text" class="form-control"
                                                                    id="chem_uric_acid" name="chem_uric_acid" disabled>
                                                            </div>
                                                            <div class="form-group col-md-3">
                                                                <label for="chem_creatinine">Creatinine</label>
                                                                <input type="text" class="form-control"
                                                                    id="chem_creatinine" name="chem_creatinine" disabled>
                                                            </div>
                                                            <div class="form-group col-md-3">
                                                                <label for="chem_total_cholesterol">Total Cholesterol</label>
                                                                <input type="text" class="form-control"
                                                                    id="chem_total_cholesterol" name="chem_total_cholesterol" disabled>
                                                            </div>
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="form-group col-md-3">
                                                                <label for="chem_triglycerides">Triglycerides</label>
                                                                <input type="text" class="form-control"
                                                                    id="chem_triglycerides" name="chem_triglycerides" disabled>
                                                            </div>
                                                            <div class="form-group col-md-3">
                                                                <label for="chem_hdl">HDL</label>
                                                                <input type="text" class="form-control"
                                                                    id="chem_hdl" name="chem_hdl" disabled>
                                                            </div>
                                                            <div class="form-group col-md-3">
                                                                <label for="chem_ldl">LDL</label>
                                                                <input type="text" class="form-control"
                                                                    id="chem_ldl" name="chem_ldl" disabled>
                                                            </div>
                                                            <div class="form-group col-md-3">
                                                                <label for="chem_alt_sgpt">ALT (SGPT)</label>
                                                                <input type="text" class="form-control"
                                                                    id="chem_alt_sgpt" name="chem_alt_sgpt" disabled>
                                                            </div>
                                                            <div>
                                                                <input type="submit" class="btn btn-primary" value="submit"
                                                                    style="padding-left: 25px;padding-right:25px;background:#04af3d; border:#04af3d">
                                                            </div>
                                                     

                                                        </div>
                                               </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Clinical Chemistry content goes here -->

                                </div>
                            </div>
                        </div>
                    </div>
                </form>
        </div>
        </div>
        </div>
        </div>
        </main>

				<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
		<script>
            document.getElementById('fecalysis_form_enable').onchange = function() {
				console.log(document.getElementById('fecalysis_form_enable'));
				document.getElementById('fec_color').disabled = !this.checked;
                document.getElementById('fec_consistency').disabled = !this.checked;
				document.getElementById('fec_occult_blood').disabled = !this.checked;
				document.getElementById('fec_pus_cells').disabled = !this.checked;
				document.getElementById('fec_rbc').disabled = !this.checked;
				document.getElementById('fec_yeast_cells').disabled = !this.checked;
				document.getElementById('fec_fat_globules').disabled = !this.checked;
				document.getElementById('fec_ascarais').disabled = !this.checked;
				document.getElementById('fec_hookworm').disabled = !this.checked;
				document.getElementById('fec_trichiuris').disabled = !this.checked;
				document.getElementById('fec_cyst').disabled = !this.checked;
				document.getElementById('fec_troph').disabled = !this.checked;
				document.getElementById('fec_cyst_2').disabled = !this.checked;
				document.getElementById('fec_troph_2').disabled = !this.checked;
				document.getElementById('fec_others').disabled = !this.checked;
			};
			document.getElementById('urinalysis_form_enable').onchange = function() {
				console.log(document.getElementById('urinalysis_form_enable'));
				document.getElementById('uri_color').disabled = !this.checked;
				document.getElementById('uri_clarity').disabled = !this.checked;
				document.getElementById('uri_ph').disabled = !this.checked;
				document.getElementById('uri_sp_gr').disabled = !this.checked;
				document.getElementById('uri_glucose').disabled = !this.checked;
				document.getElementById('uri_albumin').disabled = !this.checked;
				document.getElementById('uri_pus').disabled = !this.checked;
				document.getElementById('uri_rbc').disabled = !this.checked;
				document.getElementById('uri_renal_cell').disabled = !this.checked;
				document.getElementById('uri_epithelial').disabled = !this.checked;
				document.getElementById('uri_mucus_threads').disabled = !this.checked;
				document.getElementById('uri_bacteria').disabled = !this.checked;
				document.getElementById('uri_yeast_cells').disabled = !this.checked;
				document.getElementById('uri_amorphous').disabled = !this.checked;
				document.getElementById('uri_coarse_granular_cast').disabled = !this.checked;
				document.getElementById('uri_fine_granular_cast').disabled = !this.checked;
				document.getElementById('uri_hyaline_cast').disabled = !this.checked;
				document.getElementById('uri_uric_acid').disabled = !this.checked;
				document.getElementById('uri_calcium_oxalate').disabled = !this.checked;
				document.getElementById('uri_triple_phosphate').disabled = !this.checked;
				document.getElementById('uri_others').disabled = !this.checked;
			};
			document.getElementById('hematology_form_enable').onchange = function() {
				console.log(document.getElementById('hematology_form_enable'));
				document.getElementById('hem_wbc_count').disabled = !this.checked;
				document.getElementById('hem_rbc_count').disabled = !this.checked;
				document.getElementById('hem_hemoglobin').disabled = !this.checked;
				document.getElementById('hem_hemotocrit').disabled = !this.checked;
				document.getElementById('hem_mcv').disabled = !this.checked;
				document.getElementById('hem_mch').disabled = !this.checked;
				document.getElementById('hem_mchc').disabled = !this.checked;
				document.getElementById('hem_rdw').disabled = !this.checked;
				document.getElementById('hem_thrombocyte_count').disabled = !this.checked;
				document.getElementById('hem_mpv').disabled = !this.checked;
				document.getElementById('hem_segmenter').disabled = !this.checked;
				document.getElementById('hem_stab').disabled = !this.checked;
				document.getElementById('hem_lymphocyte').disabled = !this.checked;
				document.getElementById('hem_monocyte').disabled = !this.checked;
				document.getElementById('hem_eosinophil').disabled = !this.checked;
				document.getElementById('hem_basophil').disabled = !this.checked;
				document.getElementById('hem_bleeding_time').disabled = !this.checked;
				document.getElementById('hem_clotting_time').disabled = !this.checked;
				document.getElementById('hem_esr').disabled = !this.checked;
				document.getElementById('hem_reticulocyte').disabled = !this.checked;
			};
            document.getElementById('chemistry_form_enable').onchange = function() {
				console.log(document.getElementById('chemistry_form_enable'));
				document.getElementById('chem_glucose').disabled = !this.checked;
				document.getElementById('chem_uric_acid').disabled = !this.checked;
				document.getElementById('chem_creatinine').disabled = !this.checked;
				document.getElementById('chem_total_cholesterol').disabled = !this.checked;
				document.getElementById('chem_triglycerides').disabled = !this.checked;
				document.getElementById('chem_hdl').disabled = !this.checked;
				document.getElementById('chem_ldl').disabled = !this.checked;
				document.getElementById('chem_alt_sgpt').disabled = !this.checked;
			};
			
		</script>
    </body>

    </html>
@endsection
