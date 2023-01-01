<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title') - Latihan</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="{{ asset('style/apple-icon.png')}}">
    <link rel="shortcut icon" href="{{ asset('style/favicon.ico')}}">

    <link rel="stylesheet" href="{{ asset('style/vendors/bootstrap/dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('style/vendors/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{ asset('style/vendors/themify-icons/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{ asset('style/vendors/flag-icon-css/css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{ asset('style/vendors/selectFX/css/cs-skin-elastic.css')}}">
    <link rel="stylesheet" href="{{ asset('style/vendors/jqvmap/dist/jqvmap.min.css')}}">


    <link rel="stylesheet" href="{{ asset('style/assets/css/style.css')}}">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

</head>

<body>

    <script src="{{ asset('style/vendors/jquery/dist/jquery.min.js')}}"></script>
    <script src="{{ asset('style/vendors/popper.js/dist/umd/popper.min.js')}}"></script>
    <script src="{{ asset('style/vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('style/assets/js/main.js')}}"></script>

    <script src="{{ asset('style/vendors/chart.js/dist/Chart.bundle.min.js')}}"></script>
    <script src="{{ asset('style/assets/js/dashboard.js')}}"></script>
    <script src="{{ asset('style/assets/js/widgets.js')}}"></script>
    <script src="{{ asset('style/vendors/jqvmap/dist/jquery.vmap.min.js')}}"></script>
    <script src="{{ asset('style/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js')}}"></script>
    <script src="{{ asset('style/vendors/jqvmap/dist/maps/jquery.vmap.world.js')}}"></script>
    <script>
        (function($) {
            "use strict";

            jQuery('#vmap').vectorMap({
                map: 'world_en',
                backgroundColor: null,
                color: '#ffffff',
                hoverOpacity: 0.7,
                selectedColor: '#1de9b6',
                enableZoom: true,
                showTooltip: true,
                values: sample_data,
                scaleColors: ['#1de9b6', '#03a9f5'],
                normalizeFunction: 'polynomial'
            });
        })(jQuery);
    </script>

    <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="{{ url('home')}}">POS Sederhana</a>
                <a class="navbar-brand hidden" href=""><i class="menu-icon fa fa-home"></i></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="{{ url('home')}}"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                    </li>
                    <li class="active">
                        <a href="{{('/kategori/kategori')}}"> <i class="menu-icon fa fa-tasks"></i>Kategori </a>
                    </li>
                    <li class="active">
                        <a href="{{('/produk/produk')}}"> <i class="menu-icon fa fa-truck"></i>Product </a>
                    </li>
                    <li class="active">
                        <a href="{{ url('Barang-masuk/Barang-masuk')}}"> <i class="menu-icon fa fa-money"></i>Barang Masuk</a>
                    </li>
                    <li class="active">
                        <a href="{{ url('pengeluaran')}}"> <i class="menu-icon fa fa-shopping-cart"></i>Pengeluaran </a>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-file"></i>Rekap Laporan</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-file"></i><a href="{{ url('laporan-kategori') }}">Rekap Kategori</a></li>
                            <li><i class="fa fa-file"></i><a href="{{ url('laporan-produk') }}">Rekap Product</a></li>
                            <li><i class="fa fa-file"></i><a href="{{ url('laporan-barang-masuk') }}">Rekap Laporan Barang Masuk</a></li>
                            <li><i class="fa fa-file"></i><a href="{{ url( 'laporan-pengeluaran' ) }}">Rekap Laporan Pengeluaran</a></li>
                        </ul>
                    </li>
                   
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                   
                   
                </div>

                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="{{ asset('style/images/admin.jpg') }}" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">
                            <a class="nav-link" href="{{ route('logout') }}"><i class="fa fa-power-off"></i> Logout</a>
                        </div>
                    </div>

                   

                </div>
            </div>

        </header>
        <!-- Header-->

        @yield('breadcrumbs')

        @yield('content')

    


    </div><!-- /#right-panel -->

    <!-- Right Panel -->

    

</body>

</html>
