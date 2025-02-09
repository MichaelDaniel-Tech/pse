@vite('resources/js/app.js')

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- META SECTION -->
    <title>PT Gaya Makmur Tractors</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="icon" href="favicon.ico" type="image/x-icon" />
    <!-- END META SECTION -->

    <!-- CSS INCLUDE -->
    <link rel="stylesheet" type="text/css" id="theme" href="{{ url('../css/theme-default.css') }}" />
    <!-- EOF CSS INCLUDE -->
</head>

<body bg-white text-black dark:bg-gray-900 dark:text-white>
    <!-- START PAGE CONTAINER -->
    <div class="page-container">
        @include('layouts.dashboard_partials._sidebar');
        <div class="page-content">
            @include('layouts.dashboard_partials._header')
            @yield('content')
        </div>
       @include('layouts.dashboard_partials._footer')

    </div>
    <!-- END PAGE CONTAINER -->

    <!-- MESSAGE BOX-->
    <div class="message-box animated fadeIn" data-sound="alert" id="mb-signout">

        <div class="mb-container">
            <div class="mb-middle">
                <div class="mb-title"><span class="fa fa-sign-out"></span> Log <strong>Out</strong> ?</div>
                <div class="mb-content">
                    <p>Are you sure you want to log out?</p>
                    <p>Press No if youwant to continue work. Press Yes to logout current user.</p>
                </div>
                <div class="mb-footer">
                    <div class="pull-right">
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <a href="#" class="btn btn-success btn-lg"
                                onclick="event.preventDefault(); this.closest('form').submit();">Yes</a>
                            <button class="btn btn-default btn-lg mb-control-close">No</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- END MESSAGE BOX-->

    <!-- START PRELOADS -->
    <audio id="audio-alert" src="{{ url('/audio/alert.mp3') }}" preload="auto"></audio>
    <audio id="audio-fail" src="{{ url('/audio/fail.mp3') }}" preload="auto"></audio>
    <!-- END PRELOADS -->

    <!-- START SCRIPTS -->
    <!-- START PLUGINS -->
    <script type="text/javascript" src="{{ url('/js/plugins/jquery/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ url('/js/plugins/jquery/jquery-ui.min.js') }}"></script>
    <script type="text/javascript" src="{{ url('/js/plugins/bootstrap/bootstrap.min.js') }}"></script>
    <!-- END PLUGINS -->

    <!-- START THIS PAGE PLUGINS-->
    <script type='text/javascript' src="{{ url('/js/plugins/icheck/icheck.min.js') }}"></script>
    <script type="text/javascript" src="{{ url('/js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js') }}"></script>
    <script type="text/javascript" src="{{ url('/js/plugins/scrolltotop/scrolltopcontrol.js') }}"></script>

    <script type="text/javascript" src="{{ url('/js/plugins/morris/raphael-min.js') }}"></script>
    <script type="text/javascript" src="{{ url('/js/plugins/morris/morris.min.js') }}"></script>
    <script type="text/javascript" src="{{ url('/js/plugins/rickshaw/d3.v3.js') }}"></script>
    <script type="text/javascript" src="{{ url('/js/plugins/rickshaw/rickshaw.min.js') }}"></script>
    {{-- <script type='text/javascript' src="{{ url('/js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>
    <script type='text/javascript' src="{{ url('/js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script> --}}
    <script type='text/javascript' src="{{ url('/js/plugins/bootstrap/bootstrap-datepicker.js') }}"></script>
    <script type="text/javascript" src="{{ url('/js/plugins/owl/owl.carousel.min.js') }}"></script>

    <script type="text/javascript" src="{{ url('/js/plugins/moment.min.js') }}"></script>
    <script type="text/javascript" src="{{ url('/js/plugins/daterangepicker/daterangepicker.js') }}"></script>
    <!-- END THIS PAGE PLUGINS-->

    <!-- START TEMPLATE -->
    {{-- <script type="text/javascript" src="{{ url('/js/settings.js') }}"></script> --}}

    <script type="text/javascript" src="{{ url('/js/plugins.js') }}"></script>
    <script type="text/javascript" src="{{ url('/js/actions.js') }}"></script>

    <!-- END TEMPLATE -->
    <!-- END SCRIPTS -->
</body>

</html>
