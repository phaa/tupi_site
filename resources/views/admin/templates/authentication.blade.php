<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>@yield('title')</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('img/apple-icon.png') }}" />
    <link rel="icon" type="image/png" href="{{ asset('img/favicon.png') }}" />
    <!-- Bootstrap core CSS     -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" />
    <!--  Material Dashboard CSS    -->
    <link href="{{ asset('css/material-dashboard.css?v=1.2.1') }}" rel="stylesheet" />
    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="{{ asset('css/demo.css') }}" rel="stylesheet" />
    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

@php
    if (!function_exists('classActivePath'))
    {
        function classActivePath($path)
        {
            return Request::is($path) ? ' class="active"' : '';
        }
    }

    if (!function_exists('classActiveSegment'))
    {
        function classActiveSegment($segment, $value)
        {
            if(!is_array($value)) {
                return Request::segment($segment) == $value ? ' active' : '';
            }
            else {
                foreach ($value as $v) {
                    if(Request::segment($segment) == $v) return 'active';
                }
            }
            return '';
        }
    }
@endphp

<body class="off-canvas-sidebar">
    <nav class="navbar navbar-primary navbar-transparent navbar-absolute">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href=" ../dashboard.html ">FlexFood Soluções em alimentos</a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="{{ classActiveSegment(1, 'register') }}">
                        <a href="{{ route('table.choose') }}">
                            <i class="material-icons">event_seat</i> Escolher mesa
                        </a>
                    </li>
                    <li class="{{ classActiveSegment(1, 'login') }}">
                        <a href="{{ route('login') }}">
                            <i class="material-icons">fingerprint</i> Login
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="wrapper wrapper-full-page">
        @yield('auth_content')
    </div>
</body>

<!--   Core JS Files   -->
<script src="{{ asset('js/dashboard/jquery-3.2.1.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/dashboard/dashboard/bootstrap.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/dashboard/dashboard/material.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/dashboard/dashboard/perfect-scrollbar.jquery.min.js') }}" type="text/javascript"></script>
<!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/dashboard/dashboard/2.4.1/core.js"></script>
<!-- Library for adding dinamically elements -->
<script src="{{ asset('js/dashboard/dashboard/arrive.min.js') }}" type="text/javascript"></script>
<!-- Forms Validations Plugin -->
<script src="{{ asset('js/dashboard/dashboard/jquery.validate.min.js') }}"></script>
<!--  Plugin for Date Time Picker and Full Calendar Plugin/// esse da cdn tem o pt-br-->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/dashboard/2.9.0/moment-with-locales.js"></script>
<!--script src="{{ asset('js/dashboard/moment.min.js') }}"></script-->
<!--  Charts Plugin, full documentation here: https://gionkunz.github.io/chartist-js/dashboard/ -->
<script src="{{ asset('js/dashboard/chartist.min.js') }}"></script>
<!--  Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
<script src="{{ asset('js/dashboard/jquery.bootstrap-wizard.js') }}"></script>
<!--  Notifications Plugin, full documentation here: http://bootstrap-notify.remabledesigns.com/    -->
<script src="{{ asset('js/dashboard/bootstrap-notify.js') }}"></script>
<!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
<script src="{{ asset('js/dashboard/bootstrap-datetimepicker.js') }}"></script>
<!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
<script src="{{ asset('js/dashboard/jquery-jvectormap.js') }}"></script>
<!-- Sliders Plugin, full documentation here: https://refreshless.com/nouislider/ -->
<script src="{{ asset('js/dashboard/nouislider.min.js') }}"></script>
<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!--  Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
<script src="{{ asset('js/dashboard/jquery.select-bootstrap.js') }}"></script>
<!--  DataTables.net Plugin, full documentation here: https://datatables.net/    -->
<script src="{{ asset('js/dashboard/jquery.datatables.js') }}"></script>
<!-- Sweet Alert 2 plugin, full documentation here: https://limonte.github.io/sweetalert2/ -->
<script src="{{ asset('js/dashboard/sweetalert2.js') }}"></script>
<!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
<script src="{{ asset('js/dashboard/jasny-bootstrap.min.js') }}"></script>
<!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
<script src="{{ asset('js/dashboard/fullcalendar.min.js') }}"></script>
<!-- Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
<script src="{{ asset('js/dashboard/jquery.tagsinput.js') }}"></script>
<!-- Material Dashboard javascript methods -->
<script src="{{ asset('js/dashboard/material-dashboard.js?v=1.2.1') }}"></script>
<!-- Material Dashboard DEMO methods, don't include it in your project! -->
<script src="{{ asset('js/dashboard/demo.js') }}"></script>

<script type="text/javascript">
    $().ready(function() {
        demo.checkFullPageBackgroundImage();
        demo.initFormExtendedDatetimepickers();
        setTimeout(function() {
            // after 1000 ms we add the class animated to the login/register card
            $('.card').removeClass('card-hidden');
        }, 700)
    });
</script>
@yield('extra_scripts')
</html>
