@extends('layouts.default')
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

    <body class="vertical  light  ">
        <div class="wrapper">
            <main role="main" class="main-content">
                <div class="patient-profile">
                    <div style="margin: 40px" class="prof-box">
                        <div >
                            <div class="avatar">
                            </div>
                        </div>
                    </div>
                    <div class="name1">
                        <h3 class="st-name">Patient Name</h3>
                        <h4 class="dp-name">Department</h4>
                    </div>

                    <div>
                        <button type="submit">Submit</button>
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
                                    <a class="nav-link" id="pills-clinical" data-toggle="pill" href="#pills-contact"
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
                                                                Test</h2>
                                                        </div>
                                                    </div>

                                                    <form action="/save_clinlab_patient_fecalysis" method="post">
                                                        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">

                                                        <div class="form-row">
                                                            <div class="form-group col-md-3">
                                                                <label for="inputEmail4">Color</label>
                                                                <input type="text" class="form-control" id="inputEmail4"
                                                                    name="color">
                                                            </div>
                                                            <div class="form-group col-md-3">
                                                                <label for="inputEmail4">Consistency</label>
                                                                <input type="text" class="form-control"
                                                                    id="inputEmail4" name="consistency">
                                                            </div>
                                                            <div class="form-group col-md-3">
                                                                <label for="inputEmail4">Occult Blood</label>
                                                                <input type="text" class="form-control"
                                                                    id="inputEmail4" name="occultblood">
                                                            </div>
                                                        </div>
                                                        <hr class="my-4">
                                                        <h5 class="mb-2 mt-4">Microscopic Examination</h5>
                                                        {{-- <p class="mb-4">Mauris blandit nisl ullamcorper, rutrum metus in, congue lectus</p> --}}
                                                        <div class="form-row">
                                                            <div class="form-group col-md-2.5">
                                                                <label for="firstname">Pus Cells</label>
                                                                <input type="text" id="puscells" class="form-control"
                                                                    name="puscells">
                                                            </div>
                                                            <div class="form-group col-md-2.5">
                                                                <label for="lastname">RBC</label>
                                                                <input type="text" id="rbc" class="form-control"
                                                                    name="rbc">
                                                            </div>
                                                            <div class="form-group col-md-2.5">
                                                                <label for="firstname">Yeast Cells</label>
                                                                <input type="text" id="yeastcells"
                                                                    class="form-control" name="yeastcells">
                                                            </div>
                                                            <div class="form-group col-md-2.5">
                                                                <label for="lastname">Fat Globules</label>
                                                                <input type="text" id="fatglobules"
                                                                    class="form-control" name="fatglobules">
                                                            </div>
                                                            <div class="form-group col-md-2.5">
                                                                <label for="firstname">Ascarais</label>
                                                                <input type="text" id="ascarais" class="form-control"
                                                                    name="ascarais">
                                                            </div>
                                                            <div class="form-group col-md-2.5">
                                                                <label for="lastname">Hookworm</label>
                                                                <input type="text" id="hookworm" class="form-control"
                                                                    name="hookworm">
                                                            </div>
                                                            <div class="form-group col-md-2.5">
                                                                <label for="firstname">Trichiuris</label>
                                                                <input type="text" id="trichiuris"
                                                                    class="form-control" name="trichiuris">
                                                            </div>
                                                            <hr class="my-4">
                                                            <div style="  display: flex; gap: 180px;">
                                                                <div>
                                                                    <h5 class="mb-2 mt-4"
                                                                        style="font-size:15px; font-style:italic">Entamoeba
                                                                        coli/Entamobea histolyca</h5>
                                                                    <div class="form-group col-md-8">
                                                                        <label for="lastname">Cyst</label>
                                                                        <input type="text" id="cyst0"
                                                                            class="form-control" name="cyst0">
                                                                    </div>
                                                                    <div class="form-group col-md-8">
                                                                        <label for="lastname">Troph</label>
                                                                        <input type="text" id="troph0"
                                                                            class="form-control" name="troph0">
                                                                    </div>
                                                                </div>
                                                                <div>
                                                                    <h5 class="mb-2 mt-4"
                                                                        style="font-size:15px; font-style:italic">Giardia
                                                                        Lamblia</h5>
                                                                    <div class="form-group col-md-9">
                                                                        <label for="lastname">Cyst</label>
                                                                        <input type="text" id="cyst1"
                                                                            class="form-control" name="cyst1">
                                                                    </div>

                                                                    <div class="form-group col-md-9">
                                                                        <label for="lastname">Troph</label>
                                                                        <input type="text" id="troph1"
                                                                            class="form-control" name="troph1">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <hr class="my-4">
                                                        <div class="form-group col-md-4">
                                                            <label for="others">Others</label>
                                                            <input type="text" id="others" class="form-control"
                                                                name="others">
                                                        </div>
                                                        <hr class="my-4">
                                                        <div>
                                                            <input type="submit" class="btn btn-primary" value="submit"
                                                                style="padding-left: 25px;padding-right:25px;background:#04af3d; border:#04af3d">
                                                        </div>
                                                    </form>
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
                                                            <h2 class="h3 mb-0 page-title" style="font-size: 40px">
                                                                Urinalysis Test</h2>
                                                        </div>
                                                        <div class="col-auto">
                                                        </div>
                                                    </div>
                                                    <form>
                                                        <div>
                                                            <div>
                                                                <h2 style="font-size:20px">
                                                                    Physical Examination
                                                                </h2>
                                                                <div class="form-row">
                                                                    <div class="form-group col-md-4">
                                                                        <label for="color">Color</label>
                                                                        <input type="text" id="color"
                                                                            class="form-control">
                                                                    </div>

                                                                    <div class="form-group col-md-4">
                                                                        <label for="clarity">Clarity</label>
                                                                        <input type="text" id="clarity"
                                                                            class="form-control">
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
                                                                            <label for="pH">pH</label>
                                                                            <input type="text" id="pH"
                                                                                class="form-control">
                                                                        </div>

                                                                        <div class="form-group col-md-4">
                                                                            <label for="sp. gr.">Sp. Gr.</label>
                                                                            <input type="text" id="sp. gr."
                                                                                class="form-control">
                                                                        </div>

                                                                        <div class="form-group col-md-4">
                                                                            <label for="glucose">Glucose</label>
                                                                            <input type="text" id="glucose"
                                                                                class="form-control">
                                                                        </div>

                                                                        <div class="form-group col-md-4">
                                                                            <label for="albunim">Albunim</label>
                                                                            <input type="text" id="albunim"
                                                                                class="form-control">
                                                                        </div>
                                                                    </div>
                                                                </div>


                                                                <div>
                                                                    <h2 style="font-size:20px">
                                                                        Microscopic Examination
                                                                    </h2>
                                                                    <div class="form-row">
                                                                        <div class="form-group col-md-4">
                                                                            <label for="Pus">Pus</label>
                                                                            <input type="text" id="Pus"
                                                                                class="form-control">
                                                                        </div>

                                                                        <div class="form-group col-md-4">
                                                                            <label for="rbc">RBC</label>
                                                                            <input type="text" id="rbc"
                                                                                class="form-control">
                                                                        </div>

                                                                        <div class="form-group col-md-4">
                                                                            <label for="Renal Cell">Renal Cell</label>
                                                                            <input type="text" id="Renal Cell"
                                                                                class="form-control">
                                                                        </div>

                                                                        <div class="form-group col-md-4">
                                                                            <label for="epithelial cell ">Epithelial
                                                                                Cell</label>
                                                                            <input type="text" id="epithelial cell "
                                                                                class="form-control">
                                                                        </div>

                                                                        <div class="form-group col-md-4">
                                                                            <label for="Mucus Threads">Mucus
                                                                                Threads</label>
                                                                            <input type="text" id="Mucus Threads"
                                                                                class="form-control">
                                                                        </div>

                                                                        <div class="form-group col-md-4">
                                                                            <label for="bacteria">Bacteria</label>
                                                                            <input type="text" id="bacteria"
                                                                                class="form-control">
                                                                        </div>

                                                                        <div class="form-group col-md-4">
                                                                            <label for="Yeast Cells">Yeast Cells</label>
                                                                            <input type="text" id="Yeast Cells"
                                                                                class="form-control">
                                                                        </div>

                                                                        <div class="form-group col-md-4">
                                                                            <label for="amorphous">Amorphous</label>
                                                                            <input type="text" id="amorphous"
                                                                                class="form-control">
                                                                        </div>

                                                                        <div class="form-group col-md-4">
                                                                            <label for="coarse granular cast">Coarse
                                                                                Granular Cast</label>
                                                                            <input type="text"
                                                                                id="coarse granular cast"
                                                                                class="form-control">
                                                                        </div>

                                                                        <div class="form-group col-md-4">
                                                                            <label for="fine granular cast">Fine Granular
                                                                                Cast</label>
                                                                            <input type="text" id="fine granular cast"
                                                                                class="form-control">
                                                                        </div>

                                                                        <div class="form-group col-md-4">
                                                                            <label for="hyaline cast">Hyaline Cast</label>
                                                                            <input type="text" id="hyaline cast"
                                                                                class="form-control">
                                                                        </div>

                                                                        <div class="form-group col-md-4">
                                                                            <label for="uric acid">Uric Acid</label>
                                                                            <input type="text" id="uric acid"
                                                                                class="form-control">
                                                                        </div>

                                                                        <div class="form-group col-md-4">
                                                                            <label for="calcium oxalate">Calcium
                                                                                Oxalate</label>
                                                                            <input type="text" id="calcium oxalate"
                                                                                class="form-control">
                                                                        </div>

                                                                        <div class="form-group col-md-4">
                                                                            <label for="triple phosphate">Triple
                                                                                Phosphate</label>
                                                                            <input type="text" id="triple phosphate"
                                                                                class="form-control">
                                                                        </div>

                                                                        <div class="form-group col-md-4">
                                                                            <label for="others">Others</label>
                                                                            <input type="text" id="others"
                                                                                class="form-control">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <input type="submit" class="btn btn-primary"
                                                                    value="submit"
                                                                    style="padding-left: 25px;padding-right:25px;background:#04af3d; border:#04af3d">
                                                    </form>
                                                </div>
                                            </div>
                                </div>
                                <div class="tab-pane fade" id="pills-contact" role="tabpanel"
                                    aria-labelledby="pills-contact-tab"> h1 vs h2 </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
    </body>

    </html>
@endsection