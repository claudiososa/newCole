<!DOCTYPE html>
<html dir="ltr" lang="zxx">

  <head>
    <meta charset="utf-8">
    <title>Copef Salta | Inicio</title>
    <meta name="description" content="Sitio Web oficial - Copef Salta">
    <meta name="author" content="author">

    <!-- Mobile Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicon -->
    <link rel="shortcut icon" href="images/favicon.ico">

    <!-- Web Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=PT+Serif" rel="stylesheet">

    <!-- Bootstrap core CSS -->
    <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet">

    <!-- Font Awesome CSS -->
    <link href="{{asset('css/font-awesome/css/font-awesome.css')}}" rel="stylesheet">

    <!-- Plugins -->
    <link href="{{asset('plugins/magnific-popup/magnific-popup.css')}}" rel="stylesheet">
    <link href="{{asset('plugins/rs-plugin-5/css/settings.css')}}" rel="stylesheet">
    <link href="{{asset('plugins/rs-plugin-5/css/layers.css')}}" rel="stylesheet">
    <link href="{{asset('plugins/rs-plugin-5/css/navigation.css')}}" rel="stylesheet">
    <link href="{{asset('css/animations.css')}}" rel="stylesheet">
    <link href="{{asset('plugins/slick/slick.css')}}" rel="stylesheet">

    <!-- The Project's core CSS file -->
    <!-- Use css/rtl_style.css for RTL version -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet" >
    <!-- The Project's Typography CSS file, includes used fonts -->
    <!-- Used font for body: Roboto -->
    <!-- Used font for headings: Raleway -->
    <!-- Use css/rtl_typography-default.css for RTL version -->
    <link href="{{asset('css/typography-default.css')}}" rel="stylesheet" >
    <!-- Color Scheme (In order to change the color scheme, replace the blue.css with the color scheme that you prefer) -->
    <link href="{{asset('css/skins/red.css')}}" rel="stylesheet">

    <!-- Custom css -->
    <link href="{{asset('css/custom.css')}}" rel="stylesheet">


  </head>

  <!-- body classes:  -->
  <!-- "boxed": boxed layout mode e.g. <body class="boxed"> -->
  <!-- "pattern-1 ... pattern-9": background patterns for boxed layout mode e.g. <body class="boxed pattern-1"> -->
  <!-- "transparent-header": makes the header transparent and pulls the banner to top -->
  <!-- "gradient-background-header": applies gradient background to header -->
  <!-- "page-loader-1 ... page-loader-6": add a page loader to the page (more info @components-page-loaders.html) -->
  <body class="front-page transparent-header">

    <!-- scrollToTop -->
    <!-- ================ -->
    <div class="scrollToTop circle"><i class="fa fa-angle-up"></i></div>

    <!-- page wrapper start -->
    <!-- ================ -->
    <div class="page-wrapper">
      <!-- header-container start -->
      <div class="header-container">
        <!-- header-top start -->
        <!-- classes:  -->
        <!-- "dark": dark version of header top e.g. class="header-top dark" -->
        <!-- "colored": colored version of header top e.g. class="header-top colored" -->
        <!-- ================ -->
        <div class="header-top ">
          <div class="container">
            <div class="row">
              <div class="col-3 col-sm-6 col-lg-9">
                <!-- header-top-first start -->
                <!-- ================ -->
                <div class="header-top-first clearfix">
                  <ul class="social-links circle small clearfix hidden-sm-down">
                    <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li class="youtube"><a href="#"><i class="fa fa-youtube-play"></i></a></li>
                    <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li class="pinterest"><a href="#"><i class="fa fa-pinterest"></i></a></li>
                  </ul>
                  <div class="social-links hidden-md-up circle small">
                    <div class="btn-group dropdown">
                      <button id="header-top-drop-1" type="button" class="btn dropdown-toggle dropdown-toggle--no-caret" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-share-alt"></i></button>
                      <ul class="dropdown-menu dropdown-animation" aria-labelledby="header-top-drop-1">
                        <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li class="youtube"><a href="#"><i class="fa fa-youtube-play"></i></a></li>
                        <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li class="pinterest"><a href="#"><i class="fa fa-pinterest"></i></a></li>
                      </ul>
                    </div>
                  </div>
                  <ul class="list-inline hidden-md-down">
                    <li class="list-inline-item"><i class="fa fa-map-marker pr-1 pl-2"></i>Calle O'higgins 1.550, Oficina 3</li>
                    <li class="list-inline-item"><i class="fa fa-phone pr-1 pl-2"></i>+54-387-4214450</li>
                    <li class="list-inline-item"><i class="fa fa-envelope-o pr-1 pl-2"></i> copefsalta@gmail.com</li>
                  </ul>
                </div>
                <!-- header-top-first end -->
              </div>
              <div class="col-9 col-sm-6 col-lg-3">

                <!-- header-top-second start -->
                <!-- ================ -->
                <div id="header-top-second"  class="clearfix">

                  <!-- header top dropdowns start -->
                  <!-- ================ -->


                  <div class="header-top-dropdown text-right">
                    @yield('formLogin')



                  <!--  header top dropdowns end -->
                </div>
                <!-- header-top-second end -->
              </div>
            </div>
          </div>
        </div>
        <!-- header-top end -->

        <!-- header start -->
        <!-- classes:  -->
        <!-- "fixed": enables fixed navigation mode (sticky menu) e.g. class="header fixed clearfix" -->
        <!-- "fixed-desktop": enables fixed navigation only for desktop devices e.g. class="header fixed fixed-desktop clearfix" -->
        <!-- "fixed-all": enables fixed navigation only for all devices desktop and mobile e.g. class="header fixed fixed-desktop clearfix" -->
        <!-- "dark": dark version of header e.g. class="header dark clearfix" -->
        <!-- "centered": mandatory class for the centered logo layout -->
        <!-- ================ -->
        <header class="header fixed fixed-desktop clearfix">
          <div class="container">
            <div class="row">
              <div class="col-md-auto hidden-md-down">
                <!-- header-first start -->
                <!-- ================ -->
                <div class="header-first clearfix">

                  <!-- logo -->
                  <div id="logo" class="logo">
                    <a href="{{route('welcome')}}"><img id="logo_img" src="{{asset('images/logo.jpg')}}" alt="Copef Salta"></a>
                  </div>

                  <!-- name-and-slogan -->
                  {{-- <div class="site-slogan">
                    Colegio de Profesionales<br> de Educación Física
                  </div> --}}

                </div>
                <!-- header-first end -->

              </div>
              <div class="col-lg-8 ml-auto">

                <!-- header-second start -->
                <!-- ================ -->
                <div class="header-second clearfix">
                  @yield('mainNavigation')
                <!-- main-navigation start -->

                <!-- main-navigation end -->
                </div>
                <!-- header-second end -->

              </div>
              <div class="col-auto hidden-md-down">
                <!-- header dropdown buttons -->
                <div class="header-dropdown-buttons">
                  <div class="btn-group">
                    <button type="button" class="btn dropdown-toggle dropdown-toggle--no-caret" id="header-drop-1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-search"></i></button>
                    <ul class="dropdown-menu dropdown-menu-right dropdown-animation" aria-labelledby="header-drop-1">
                      <li>
                        <form role="search" class="search-box margin-clear">
                          <div class="form-group has-feedback">
                            <input type="text" class="form-control" placeholder="Search">
                            <i class="fa fa-search form-control-feedback"></i>
                          </div>
                        </form>
                      </li>
                    </ul>
                  </div>

                </div>
                <!-- header dropdown buttons end -->
              </div>
            </div>
          </div>
        </header>
        <!-- header end -->
      </div>
      <!-- header-container end -->
      <!-- banner start -->
      @yield('sliderPrincipal')

      <!-- banner end -->

      <div id="page-start"></div>

      <!-- section start -->
      @yield('section')
      <!-- section end -->
      <!-- footer start (Add "dark" class to #footer in order to enable dark footer) -->
      <!-- ================ -->
      <footer id="footer" class="clearfix ">

        <!-- .footer start -->
        <!-- ================ -->
        <div class="footer">
          <div class="container">
            <div class="footer-inner">
              <div class="row">
                <div class="col-lg-3">
                  <div class="footer-content">
                    <div class="logo-footer"><img id="logo-footer" src="{{asset('images/logo.jpg')}}" alt=""></div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus illo vel dolorum soluta consectetur doloribus sit. Delectus non tenetur odit dicta vitae debitis suscipit doloribus. Ipsa, aut voluptas quaerat... <a href="page-about.html">Learn More<i class="fa fa-long-arrow-right pl-1"></i></a></p>
                    <div class="separator-2"></div>
                    <nav>
                      <ul class="nav flex-column">
                        <li class="nav-item"><a class="nav-link" href="#">Support</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Lorem</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Terms</a></li>
                        <li class="nav-item"><a class="nav-link" href="page-about.html">About</a></li>
                      </ul>
                    </nav>
                  </div>
                </div>
                <div class="col-lg-3">
                  <div class="footer-content">
                    <h2 class="title">Últimas novedades</h2>
                    <div class="separator-2"></div>
                    @foreach ($publicationsFooter as $publication)


                    <div class="media margin-clear">
                      <div class="d-flex pr-2">
                        <div class="overlay-container">
                          @foreach ($publication->picture as $image)
                             <img src="{{Storage::disk('public')->url($image->name)}}" alt="" class="img-fluid">
                           @endforeach
                          {{-- @foreach ($publicationsFooter->image as $image)
                            <img src="{{Storage::disk('public')->url($image->name)}}" alt="">
                          @endforeach --}}

                          {{-- <img class="media-object" src="{{asset('images/blog-thumb-1.jpg')}}" alt="blog-thumb"> --}}
                          <a href="{{route('noticia',['id'=>$publication->id])}}" class="overlay-link small"><i class="fa fa-link"></i></a>
                        </div>
                      </div>
                      <div class="media-body">
                        <h6 class="media-heading"><a href="{{route('noticia',['id'=>$publication->id])}}"> {{substr($publication->title,0,25)."..."}}</a></h6>
                        <p class="small margin-clear"><i class="fa fa-calendar pr-2"></i>
                          <span class="day">{{ucwords($publication->created_at->format('l'))}}
                            {{$publication->created_at->format('d')}}
                            {{ucwords($publication->created_at->format('F '))}}de
                            {{ucwords($publication->created_at->format(' Y'))}}
                          </span>
                          </p>
                      </div>
                    </div>
                    <hr>
                    @endforeach
                    <div class="text-right space-top">
                      <a href="{{route('news')}}" class="link-dark"><i class="fa fa-plus-circle pl-1 pr-1"></i>Más</a>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3">
                  <div class="footer-content">
                    <h2 class="title">Galeria de Fotos</h2>
                    <div class="separator-2"></div>
                    <div class="row grid-space-10">
                      @foreach ($albums as $album)
                        @foreach ($album->Photos as $photo)
                          <div class="col-4 col-lg-6">
                            <div class="overlay-container mb-10">
                              {{-- <img src="{{asset('images/gallery-1.jpg')}}" alt=""> --}}
                              <img src="{{Storage::disk('public')->url($photo->imageLittle)}}" alt="">
                              <a href="{{route('photos')}}" class="overlay-link small">
                                <i class="fa fa-link"></i>
                              </a>
                            </div>
                          </div>
                        @endforeach
                      @endforeach
                    </div>
                    <div class="text-right space-top">
                      <a href="{{route('photos')}}" class="link-dark"><i class="fa fa-plus-circle pl-1 pr-1"></i>Más</a>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3">
                  <div class="footer-content">
                    <h2 class="title">Encuentranos</h2>
                    <div class="separator-2"></div>
                    <p>En nuestra oficina puedes encontrarnos de luens a viernes desde hrs. 9 am a 13 pm. También puedes visitar nuestras redes sociales. </p>
                    <ul class="social-links circle animated-effect-1">
                      <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                      <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                      <li class="googleplus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                      <li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                      <li class="xing"><a href="#"><i class="fa fa-xing"></i></a></li>
                    </ul>
                    <div class="separator-2"></div>
                    <ul class="list-icons">
                      <li><i class="fa fa-map-marker pr-2 text-default"></i>Calle O'higgins 1.550, Oficina 3</li>
                      <li><i class="fa fa-phone pr-2 text-default"></i>+54-387-4214450</li>
                      <li><a href="mailto:email@domain.com"><i class="fa fa-envelope-o pr-2"></i>copefsalta@gmail.com</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- .footer end -->

        <!-- .subfooter start -->
        <!-- ================ -->
        <div class="subfooter">
          <div class="container">
            <div class="subfooter-inner">
              <div class="row">
                <div class="col-md-12">
                  <p class="text-center">Copyright © 2018 Copef Salta. Todos los derechos reservados.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- .subfooter end -->

      </footer>
      <!-- footer end -->
    </div>
    <!-- page-wrapper end -->

    <!-- JavaScript files placed at the end of the document so the pages load faster -->
    <!-- ================================================== -->
    <!-- Jquery and Bootstap core js files -->
    <script src="{{asset('plugins/jquery.min.js')}}"></script>
    <script src="{{asset('bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('plugins/rs-plugin-5/js/jquery.themepunch.tools.min.js')}}"></script>
    <script src="{{asset('plugins/rs-plugin-5/js/jquery.themepunch.revolution.min.js')}}"></script>
    <!-- jQuery Revolution Slider  -->
    <script type="text/javascript" src="{{asset('plugins/rs-plugin-5/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
  	<script type="text/javascript" src="{{asset('plugins/rs-plugin-5/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
  	<script type="text/javascript" src="{{asset('plugins/rs-plugin-5/js/extensions/revolution.extension.navigation.min.js')}}"></script>

    <!-- Isotope javascript -->
    <script src="{{asset('plugins/isotope/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{asset('plugins/isotope/isotope.pkgd.min.js')}}"></script>
    <!-- Magnific Popup javascript -->
    <script src="{{asset('plugins/magnific-popup/jquery.magnific-popup.min.js')}}"></script>
    <!-- Appear javascript -->
    <script src="{{asset('plugins/waypoints/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('plugins/waypoints/sticky.min.js')}}"></script>
    <!-- Count To javascript -->
    <script src="{{asset('plugins/countTo/jquery.countTo.js')}}"></script>
    <!-- Slick carousel javascript -->
    <script src="{{asset('plugins/slick/slick.min.js')}}"></script>
    <!-- Initialization of Plugins -->
    <script src="{{asset('js/template.js')}}"></script>
    <!-- Custom Scripts -->
    <script src="{{asset('js/custom.js')}}"></script>

  </body>
</html>
