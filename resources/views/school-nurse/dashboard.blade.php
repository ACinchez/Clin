{{-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout> --}}

@extends('layouts.default')
 

    @section('content')

        <main role="main" class="main-content">
        <div class="container-fluid">
            <div class="row justify-content-center">
            <div class="col-12">
                <div class="row align-items-center mb-2">
                <div class="col">
                    <h2 class="h5 page-title">Welcome!</h2>
                </div>
                <div class="col-auto">
                    <form class="form-inline">
                    <div class="form-group d-none d-lg-inline">
                        <label for="reportrange" class="sr-only">Date Ranges</label>
                        <div id="reportrange" class="px-2 py-2 text-muted">
                        <span class="small"></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="button" class="btn btn-sm"><span class="fe fe-refresh-ccw fe-16 text-muted"></span></button>
                        <button type="button" class="btn btn-sm mr-2"><span class="fe fe-filter fe-16 text-muted"></span></button>
                    </div>
                    </form>
                </div>
                </div>
                <!-- widgets -->
                <div class="row my-4">
                <div class="col-md-4">
                    <div class="card shadow mb-4">
                    <div class="card-body">
                        <div class="row align-items-center">
                        <div class="col">
                            <small class="text-muted mb-1">Page Views</small>
                            <h3 class="card-title mb-0">1168</h3>
                            <p class="small text-muted mb-0"><span class="fe fe-arrow-down fe-12 text-danger"></span><span>-18.9% Last week</span></p>
                        </div>
                        <div class="col-4 text-right">
                            <span class="sparkline inlineline"></span>
                        </div>
                        </div> <!-- /. row -->
                    </div> <!-- /. card-body -->
                    </div> <!-- /. card -->
                </div> <!-- /. col -->
                <div class="col-md-4">
                    <div class="card shadow mb-4">
                    <div class="card-body">
                        <div class="row align-items-center">
                        <div class="col">
                            <small class="text-muted mb-1">Conversion</small>
                            <h3 class="card-title mb-0">68</h3>
                            <p class="small text-muted mb-0"><span class="fe fe-arrow-up fe-12 text-warning"></span><span>+1.9% Last week</span></p>
                        </div>
                        <div class="col-4 text-right">
                            <span class="sparkline inlinepie"></span>
                        </div>
                        </div> <!-- /. row -->
                    </div> <!-- /. card-body -->
                    </div> <!-- /. card -->
                </div> <!-- /. col -->
                <div class="col-md-4">
                    <div class="card shadow mb-4">
                    <div class="card-body">
                        <div class="row align-items-center">
                        <div class="col">
                            <small class="text-muted mb-1">Visitors</small>
                            <h3 class="card-title mb-0">108</h3>
                            <p class="small text-muted mb-0"><span class="fe fe-arrow-up fe-12 text-success"></span><span>37.7% Last week</span></p>
                        </div>
                        <div class="col-4 text-right">
                            <span class="sparkline inlinebar"></span>
                        </div>
                        </div> <!-- /. row -->
                    </div> <!-- /. card-body -->
                    </div> <!-- /. card -->
                </div> <!-- /. col -->
                </div> <!-- end section -->
                <!-- linechart -->
                <div class="my-4">
                <div id="lineChart"></div>
                </div>
               
        </main> <!-- main -->
        </div> <!-- .wrapper -->
        <script src="js/jquery.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/moment.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/simplebar.min.js"></script>
        <script src='js/daterangepicker.js'></script>
        <script src='js/jquery.stickOnScroll.js'></script>
        <script src="js/tinycolor-min.js"></script>
        <script src="js/config.js"></script>
        <script src="js/d3.min.js"></script>
        <script src="js/topojson.min.js"></script>
        <script src="js/datamaps.all.min.js"></script>
        <script src="js/datamaps-zoomto.js"></script>
        <script src="js/datamaps.custom.js"></script>
        <script src="js/Chart.min.js"></script>
        <script>
            /* defind global options */
            Chart.defaults.global.defaultFontFamily = base.defaultFontFamily;
            Chart.defaults.global.defaultFontColor = colors.mutedColor;
        </script>
        <script src="js/gauge.min.js"></script>
        <script src="js/jquery.sparkline.min.js"></script>
        <script src="js/apexcharts.min.js"></script>
        <script src="js/apexcharts.custom.js"></script>
        <script src="js/apps.js"></script>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-56159088-1"></script>
        <script>
          window.dataLayer = window.dataLayer || [];

          function gtag()
          {
            dataLayer.push(arguments);
          }
          gtag('js', new Date());
          gtag('config', 'UA-56159088-1');
        </script>
      {{-- </body>
    </html> --}}
    @endsection
