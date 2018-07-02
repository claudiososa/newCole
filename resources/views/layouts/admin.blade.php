<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Admin</title>
        <!-- Plugins CSS -->
         <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" rel="stylesheet">

        <link href="{{asset('admin/css/plugins/plugins.css')}}" rel="stylesheet">
        <link href="{{asset('admin/smart-form/smart-templates/css/smart-forms.css')}}" rel="stylesheet">
        <link href="{{asset('admin/js/plugins/morris-chart/morris.css')}}" rel="stylesheet">
        <link href="{{asset('admin/js/plugins/vector-map/jquery-jvectormap-2.0.2.css')}}" rel="stylesheet" />
        <link href="{{asset('admin/js/plugins/data-tables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
        <link href="{{asset('admin/js/plugins/data-tables/fixedHeader.bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{asset('admin/js/plugins/data-tables/responsive.bootstrap4.min.css')}}" rel="stylesheet">
        <link href="{{asset('admin/bower_components/toastr/toastr.min.css')}}" rel="stylesheet">
        <link href="{{asset('admin/css/linearicons/fonts.css')}}" rel="stylesheet')">
        <link href="{{asset('admin/css/style.css')}}" rel="stylesheet">
        <link href="{{asset('admin/themes/explorer-fa/theme.css')}}" rel="stylesheet">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" type="text/javascript"></script>

</head>

        <script src="https://cdn.ckeditor.com/4.8.0/standard/ckeditor.js"></script>
        <script src="{{asset('admin/themes/explorer-fa/theme.js')}}"></script>
        <script src="{{asset('admin/themes/fa/theme.js')}}"></script>


        <link href="{{asset('admin/css/fileinput.min.css')}}" media="all" rel="stylesheet" type="text/css" />
        <script src="{{asset('admin/js/fileinput.min.js')}}"></script>
        <script src="{{asset('admin/js/locales/es.js')}}"></script>
    </head>

    <body class="layout-vertical">

        <div class="page-wrapper">
            <nav id="sidebar" class="sidebar-nav light-sidebar">
                <div class="sidebar-inner content-scroll">

                    <div class="logo-header">
                        <a href="index.html"><img src="images/logo.jpg" alt=""></a>
                    </div><!--logo-->
                    <ul class="metismenu" id="menu">
                        <li class="nav-heading">
                            <span>Principal</span>
                        </li>
                        <li class="active">
                            <a href="index.html">
                                <i class="icon-home"></i>
                                <span class="nav-text">Dashboard</span></a>
                        </li>
                        <li>
                            <a class="has-arrow" href="{{route('administrator')}}" aria-expanded="false">
                                <i class="icon-flag3"></i>
                                <span class="nav-text">Publicaciones</span>
                            </a>

                        </li>

                        <li>
                            <a href="{{route('publicationCreate')}}">
                                <i class="icon-flag3"></i>
                                <span class="nav-text">Nueva Publicacion</span></a>
                        </li>
                        <li>
                            <a href="{{route('gallery')}}">
                                <i class="icon-flag3"></i>
                                <span class="nav-text">Galeria de Fotos</span></a>
                        </li>
                        <li>
                            <a href="/users">
                                <i class="icon-flag3"></i>
                                <span class="nav-text">Administrar Usuarios</span></a>
                        </li>




                    </ul>
                </div>
            </nav><!--sidebar nav-->
            <main class="main-content">
                <!--/////////////////////////////// End navbar////////////////////////////-->
                <header class="header">
                    <div class="container">
                        <div class="navbar navbar-expand-lg">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a href="javascript:void(0)" class=" btn-circle-round sidebar-toggler">
                                        <i class="icon-menu"></i>
                                    </a>
                                </li>
                                <li class="nav-item ml-3 hidden-md-down">
                                    <form class="form-inline my-2 my-lg-0">
                                        <input class="form-control mr-sm-2" type="text" placeholder="Buscar...">
                                        <button class="icon-search" type="submit"><i class="ion-ios-search-strong"></i></button>
                                    </form>
                                </li>
                            </ul>
                            <ul class="navbar-nav ml-auto">


                            </ul>
                        </div>
                    </div>
                </header><!--header-->
                <!--/////////////////////////////// End Header////////////////////////////-->


                <div class="content">
                    <div class="container">
                        <div class="page-title pt30 pb30">
                            <div class="row">
                                <div class="col-sm-12">
                                    <ol class="breadcrumb float-right">
                                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                                        <li class="breadcrumb-item active">Dashboard</li>
                                    </ol>
                                    <h4 class="mb0">Bienvenido Admin</h4>
                                </div>
                            </div>
                        </div><!--page title-->

                        <div class="row">
                          @yield('content')
                        </div>
                    </div><!--container-->
                </div><!--content-->
            </main><!--main content-->
            <!--/////////////////////////////// End Content////////////////////////////-->


            <footer id="footer" class="page-footer">
                <div class="container">
                    &copy; Copyright 2018. assan
                </div>
            </footer>
        </div><!--page wrapper-->
        <!-- jQuery first, then Tether, then Bootstrap JS. -->
        <script type="text/javascript" src="{{asset('admin/js/plugins/plugins.js')}}"></script>
        <script type="text/javascript" src="{{asset('admin/js/assan.custom.js')}}"></script>
        <!--dashboard plugins-->


        <script src="{{asset('admin/js/raphael-min.js')}}"></script>
        <script src="{{asset('admin/js/plugins/morris-chart/morris.min.js')}}"></script>
        <script src="{{asset('admin/js/plugins/vector-map/jquery-jvectormap-2.0.2.min.js')}}"></script>
        <script src="{{asset('admin/bower_components/chart.js/dist/Chart.min.js')}}"></script>
        <script src="{{asset('admin/js/plugins/vector-map/jquery-jvectormap-world-mill-en.js')}}"></script>
        <script type="text/javascript" src="{{asset('admin/js/plugins/data-tables/jquery.dataTables.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('admin/js/plugins/data-tables/dataTables.fixedHeader.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('admin/js/plugins/data-tables/dataTables.bootstrap4.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('admin/js/plugins/data-tables/dataTables.responsive.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('admin/js/plugins/data-tables/responsive.bootstrap4.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('admin/bower_components/toastr/toastr.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('admin/js/dashboard.custom.js')}}"></script>

        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" type="text/javascript"></script>
    </body>
</html>
