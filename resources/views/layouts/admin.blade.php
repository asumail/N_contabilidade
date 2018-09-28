<!DOCTYPE html>
<html>
    <head>
        
        <!-- Title -->
        <title>N'Contabilidade</title>
        
        <meta content="width=device-width, initial-scale=1" name="viewport"/>
        <meta charset="UTF-8">
        <meta name="description" content="Admin Dashboard Template" />
        <meta name="keywords" content="admin,dashboard" />
        <meta name="author" content="Steelcoders" />
        
        <!-- Styles -->
        <link href="{{ URL::asset('css/css.css')}}" rel='stylesheet' type='text/css'>
        <link href="{{ URL::asset('assets/plugins/pace-master/themes/blue/pace-theme-flash.css')}}" rel="stylesheet"/>
        <link href="{{ URL::asset('assets/plugins/uniform/css/uniform.default.min.css')}}" rel="stylesheet"/>
        <link href="{{ URL::asset('assets/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{ URL::asset('assets/plugins/fontawesome/css/font-awesome.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{ URL::asset('assets/plugins/line-icons/simple-line-icons.css')}}" rel="stylesheet" type="text/css"/>	
        <link href="{{ URL::asset('assets/plugins/offcanvasmenueffects/css/menu_cornerbox.css')}}" rel="stylesheet" type="text/css"/>	
        <link href="{{ URL::asset('assets/plugins/waves/waves.min.css')}}" rel="stylesheet" type="text/css"/>	
        <link href="{{ URL::asset('assets/plugins/switchery/switchery.min.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{ URL::asset('assets/plugins/3d-bold-navigation/css/style.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{ URL::asset('assets/plugins/slidepushmenus/css/component.css')}}" rel="stylesheet" type="text/css"/>	
        <link href="{{ URL::asset('assets/plugins/weather-icons-master/css/weather-icons.min.css')}}" rel="stylesheet" type="text/css"/>	
        <link href="{{ URL::asset('assets/plugins/metrojs/MetroJs.min.css')}}" rel="stylesheet" type="text/css"/>	
        <link href="{{ URL::asset('assets/plugins/toastr/toastr.min.css')}}" rel="stylesheet" type="text/css"/>	
        	
        <!-- Theme Styles -->
        <link href="{{ URL::asset('assets/css/modern.min.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{ URL::asset('assets/css/themes/green.css')}}" class="theme-color" rel="stylesheet" type="text/css"/>
        <link href="{{ URL::asset('assets/css/custom.css')}}" rel="stylesheet" type="text/css"/>
        
        <script src="{{ URL::asset('assets/plugins/3d-bold-navigation/js/modernizr.js')}}"></script>
        <script src="{{ URL::asset('assets/plugins/offcanvasmenueffects/js/snap.svg-min.js')}}"></script>
        
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        @yield('cssLocal')
        
    </head>
    <body class="page-header-fixed">
        @include('layouts.header')
        <main class="page-content content-wrap">
            @include('layouts.sidebar')
            <div class="page-inner">
                <div id="main-wrapper">
                    @yield('content')
                </div><!-- Main Wrapper -->
                @include('layouts.footer')
            </div><!-- Page Inner -->
        </main><!-- Page Content -->
        
        <div class="cd-overlay"></div>
	

        <!-- Javascripts -->
        <script src="{{ URL::asset('assets/plugins/jquery/jquery-2.1.4.min.js')}}"></script>
        <script src="{{ URL::asset('assets/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
        <script src="{{ URL::asset('assets/plugins/pace-master/pace.min.js')}}"></script>
        <script src="{{ URL::asset('assets/plugins/jquery-blockui/jquery.blockui.js')}}"></script>
        <script src="{{ URL::asset('assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
        <script src="{{ URL::asset('assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
        <script src="{{ URL::asset('assets/plugins/switchery/switchery.min.js')}}"></script>
        <script src="{{ URL::asset('assets/plugins/uniform/jquery.uniform.min.js')}}"></script>
        <script src="{{ URL::asset('assets/plugins/offcanvasmenueffects/js/classie.js')}}"></script>
        <script src="{{ URL::asset('assets/plugins/offcanvasmenueffects/js/main.js')}}"></script>
        <script src="{{ URL::asset('assets/plugins/waves/waves.min.js')}}"></script>
        <script src="{{ URL::asset('assets/plugins/3d-bold-navigation/js/main.js')}}"></script>
        <script src="{{ URL::asset('assets/plugins/waypoints/jquery.waypoints.min.js')}}"></script>
        <script src="{{ URL::asset('assets/plugins/jquery-counterup/jquery.counterup.min.js')}}"></script>
        <script src="{{ URL::asset('assets/plugins/toastr/toastr.min.js')}}"></script>
        <script src="{{ URL::asset('assets/plugins/flot/jquery.flot.min.js')}}"></script>
        <script src="{{ URL::asset('assets/plugins/flot/jquery.flot.time.min.js')}}"></script>
        <script src="{{ URL::asset('assets/plugins/flot/jquery.flot.symbol.min.js')}}"></script>
        <script src="{{ URL::asset('assets/plugins/flot/jquery.flot.resize.min.js')}}"></script>
        <script src="{{ URL::asset('assets/plugins/flot/jquery.flot.tooltip.min.js')}}"></script>
        <script src="{{ URL::asset('assets/plugins/curvedlines/curvedLines.js')}}"></script>
        <script src="{{ URL::asset('assets/plugins/metrojs/MetroJs.min.js')}}"></script>
        <script src="{{ URL::asset('assets/js/modern.js')}}"></script>
        <script src="{{ URL::asset('assets/js/pages/dashboard.js')}}"></script>

        @yield('scripts')
        
    </body>
</html>