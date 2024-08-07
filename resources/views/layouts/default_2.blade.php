<!-- Clinlab Laboratory side -->
<!-- LabSideBar -->
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">
    <title>UIC Clinlab</title>
    <!-- Simple bar CSS -->
    <link rel="stylesheet" href="{{ asset('tinydash/css/simplebar.css') }} ">
    <!-- Fonts CSS -->
    <link
        href="https://fonts.googleapis.com/css2?family=Overpass:ital,wght@0,100;0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <!-- Icons CSS -->
    <link rel="stylesheet" href="{{ asset('tinydash/css/feather.css') }}">
    <link rel="stylesheet" href="{{ asset('tinydash/css/select2.css') }}">
    <link rel="stylesheet" href="{{ asset('tinydash/css/dropzone.css') }}">
    <link rel="stylesheet" href="{{ asset('tinydash/css/uppy.min.css') }}">
    <link rel="stylesheet" href="{{ asset('tinydash/css/jquery.steps.css') }}">
    <link rel="stylesheet" href="{{ asset('tinydash/css/jquery.timepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('tinydash/css/quill.snow.css') }}">
    <!-- Date Range Picker CSS -->
    <link rel="stylesheet" href="{{ asset('tinydash/css/daterangepicker.css') }}">
    <!-- App CSS -->
    <link rel="stylesheet" href="{{ asset('tinydash/css/app-light.css') }}" id="lightTheme">
    <link rel="stylesheet" href="{{ asset('tinydash/css/app-dark.css') }}" id="darkTheme" disabled>
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('css/lab-side-nav-bar.css') }}">
    <link rel="stylesheet" href="{{ asset('tinydash/css/dataTables.bootstrap4.css') }}">
    @yield('headScript')
    @yield('sideNavBarScript')
    @yield('labHeader')
    @yield('labSideNav')
</head>

<body class="vertical light">
    <div class="wrapper">
        {{-- topbar --}}
        <nav class="topnav navbar navbar-light" style="background: #04af3d;">
            <button type="button" class="navbar-toggler text-muted mt-2 p-0 mr-3 collapseSidebar">
                <i class="fe fe-menu navbar-toggler-icon" style="color:#ffffff"></i>
            </button>
            <div class="mr-auto d-flex align-items-center">
                <img src="{{ asset('pics/uic-logo-small.png') }}" alt="" width="50px" class="mr-3">
                <h1 class="my-0" style="color: white; margin-left: 10px; font-size: 28px;">UIC Clinical Laboratory</h1>
            </div>
        </nav>

        </nav>
        {{-- sidebar --}}
        <div class="wrapper">
            <aside class="sidebar-left border-right bg-white shadow" id="leftSidebar" data-simplebar>
                <nav class="vertnav navbar navbar-light">
                    <!-- nav bar -->
                    <!-- header -->
                    <div class="box">
                        <div class="avatar">
                        </div>
                        <div>
                            <div id="name">{{ Auth::user()->name }}</div>
                            <p id="school-rank">Laboratory Technician</p>
                        </div>
                    </div>


                    <ul class="navbar-nav flex-fill w-100 mb-2">
                        <li class="nav-item">
                            <a href="{{ route('clinlab_add_patient') }}" class="nav-link">
                                <i class="fe fe-home fe-16"></i>
                                <span class="ml-3 item-text">Add Patient</span>
                                <span class="sr-only">(current)</span>
                            </a>
                            <a href="{{ route('search_clinlab_patient') }}" class="nav-link">
                                <i class="fe fe-16 fe-search"></i>
                                <span class="ml-3 item-text">Search Patient</span>
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                    </ul>
                    <div class="btn-box w-100 mt-4 mb-1">
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button class="btn mb-2 btn-primary btn-lg btn-block" type="submit"
                                style="background:#04af3d;border:#04af3d">Logout</button>
                        </form>
                        </a>
                    </div>
                </nav>
            </aside>
        </div> <!-- .wrapper -->

        @yield('content')
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('tinydash/js/jquery.min.js') }}"></script>
    <script src="{{ asset('tinydash/js/popper.min.js') }}"></script>
    <script src="{{ asset('tinydash/js/moment.min.js') }}"></script>
    <script src="{{ asset('tinydash/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('tinydash/js/simplebar.min.js') }}"></script>
    <script src='{{ asset('tinydash/js/daterangepicker.js') }}'></script>
    <script src='{{ asset('tinydash/js/jquery.stickOnScroll.js') }}'></script>
    <script src="{{ asset('tinydash/js/tinycolor-min.js') }}"></script>
    <script src="{{ asset('tinydash/js/config.js') }}"></script>
    <script src="{{ asset('tinydash/js/d3.min.js') }}"></script>
    <script src="{{ asset('tinydash/js/topojson.min.js') }}"></script>
    <script src="{{ asset('tinydash/js/datamaps.all.min.js') }}"></script>
    <script src="{{ asset('tinydash/js/datamaps-zoomto.js') }}"></script>
    <script src="{{ asset('tinydash/js/datamaps.custom.js') }}"></script>
    <script src="{{ asset('tinydash/js/Chart.min.js') }}"></script>
    <script>
        /* defind global options */
        Chart.defaults.global.defaultFontFamily = base.defaultFontFamily;
        Chart.defaults.global.defaultFontColor = colors.mutedColor;
    </script>
    <script src="{{ asset('tinydash/js/gauge.min.js') }}"></script>
    <script src="{{ asset('tinydash/js/jquery.sparkline.min.js') }}"></script>
    <script src="{{ asset('tinydash/js/apexcharts.min.js') }}"></script>
    <script src="{{ asset('tinydash/js/apexcharts.custom.js') }}"></script>
    <script src='{{ asset('tinydash/js/jquery.mask.min.js') }}'></script>
    <script src='{{ asset('tinydash/js/select2.min.js') }}'></script>
    <script src='{{ asset('tinydash/js/jquery.steps.min.js') }}'></script>
    <script src='{{ asset('tinydash/js/jquery.validate.min.js') }}'></script>
    <script src='{{ asset('tinydash/js/jquery.timepicker.js') }}'></script>
    <script src='{{ asset('tinydash/js/dropzone.min.js') }}'></script>
    <script src='{{ asset('tinydash/js/uppy.min.js') }}'></script>
    <script src='{{ asset('tinydash/js/quill.min.js') }}'></script>
    <script src='{{ asset('tinydash/js/jquery.dataTables.min.js') }}'></script>
    <script src='{{ asset('tinydash/js/dataTables.bootstrap4.min.js') }}'></script>
    <script>
        $('.select2').select2({
            theme: 'bootstrap4',
        });
        $('.select2-multi').select2({
            multiple: true,
            theme: 'bootstrap4',
        });
        $('.drgpicker').daterangepicker({
            singleDatePicker: true,
            timePicker: false,
            showDropdowns: true,
            locale: {
                format: 'MM/DD/YYYY'
            }
        });
        $('.time-input').timepicker({
            'scrollDefault': 'now',
            'zindex': '9999' /* fix modal open */
        });
        /** date range picker */
        if ($('.datetimes').length) {
            $('.datetimes').daterangepicker({
                timePicker: true,
                startDate: moment().startOf('hour'),
                endDate: moment().startOf('hour').add(32, 'hour'),
                locale: {
                    format: 'M/DD hh:mm A'
                }
            });
        }
        var start = moment().subtract(29, 'days');
        var end = moment();

        function cb(start, end) {
            $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
        }
        $('#reportrange').daterangepicker({
            startDate: start,
            endDate: end,
            ranges: {
                'Today': [moment(), moment()],
                'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                'This Month': [moment().startOf('month'), moment().endOf('month')],
                'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf(
                    'month')]
            }
        }, cb);
        cb(start, end);
        $('.input-placeholder').mask("00/00/0000", {
            placeholder: "__/__/____"
        });
        $('.input-zip').mask('00000-000', {
            placeholder: "____-___"
        });
        $('.input-money').mask("#.##0,00", {
            reverse: true
        });
        $('.input-phoneus').mask('(000) 000-0000');
        $('.input-mixed').mask('AAA 000-S0S');
        $('.input-ip').mask('0ZZ.0ZZ.0ZZ.0ZZ', {
            translation: {
                'Z': {
                    pattern: /[0-9]/,
                    optional: true
                }
            },
            placeholder: "___.___.___.___"
        });
        // editor
        var editor = document.getElementById('editor');
        if (editor) {
            var toolbarOptions = [
                [{
                    'font': []
                }],
                [{
                    'header': [1, 2, 3, 4, 5, 6, false]
                }],
                ['bold', 'italic', 'underline', 'strike'],
                ['blockquote', 'code-block'],
                [{
                        'header': 1
                    },
                    {
                        'header': 2
                    }
                ],
                [{
                        'list': 'ordered'
                    },
                    {
                        'list': 'bullet'
                    }
                ],
                [{
                        'script': 'sub'
                    },
                    {
                        'script': 'super'
                    }
                ],
                [{
                        'indent': '-1'
                    },
                    {
                        'indent': '+1'
                    }
                ], // outdent/indent
                [{
                    'direction': 'rtl'
                }], // text direction
                [{
                        'color': []
                    },
                    {
                        'background': []
                    }
                ], // dropdown with defaults from theme
                [{
                    'align': []
                }],
                ['clean'] // remove formatting button
            ];
            var quill = new Quill(editor, {
                modules: {
                    toolbar: toolbarOptions
                },
                theme: 'snow'
            });
        }
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function() {
            'use strict';
            window.addEventListener('load', function() {
                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                var forms = document.getElementsByClassName('needs-validation');
                // Loop over them and prevent submission
                var validation = Array.prototype.filter.call(forms, function(form) {
                    form.addEventListener('submit', function(event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                });
            }, false);
        })();
    </script>
    <script>
        var uptarg = document.getElementById('drag-drop-area');
        if (uptarg) {
            var uppy = Uppy.Core().use(Uppy.Dashboard, {
                inline: true,
                target: uptarg,
                proudlyDisplayPoweredByUppy: false,
                theme: 'dark',
                width: 770,
                height: 210,
                plugins: ['Webcam']
            }).use(Uppy.Tus, {
                endpoint: 'https://master.tus.io/files/'
            });
            uppy.on('complete', (result) => {
                console.log('Upload complete! We’ve uploaded these files:', result.successful)
            });
        }
    </script>
    <script src="{{ asset('tinydash/js/apps.js') }}"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-56159088-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'UA-56159088-1');
    </script>

    @yield('body-scripts')
</body>

</html>
