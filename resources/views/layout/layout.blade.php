<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title>- @yield('title')M.L Canecas</title>
     <meta name="description" content="Fitmas - Modelo HTML de Academia e Fitness">
     <meta name="keywords" content="Fitmas - Modelo HTML de Academia e Fitness">
     <meta name="robots" content="INDEX,FOLLOW">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <meta name="csrf-token" content="{{ csrf_token() }}">


         <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/img/favicons/favicon.png') }}">
         <link rel="manifest" href="{{ asset('assets/img/favicons/manifest.json') }}">
         <meta name="msapplication-TileColor" content="#ffffff">
         <meta name="msapplication-TileImage" content="{{ asset('assets/img/favicons/ms-icon-144x144.png') }}">
         <meta name="theme-color" content="#ffffff">


     <link rel="preconnect" href="https://fonts.googleapis.com">

     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

     <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">



     <link rel="stylesheet" href="{{ asset ('css/style.css') }}">

     <link rel="stylesheet" href="{{ asset ('css/bootstrap.min.css') }}">

     <link rel="stylesheet" href="{{ asset ('css/jquery.flipster.min.css') }}">

     <link rel="stylesheet" href="{{ asset ('css/slick.min.css') }}">

     <link rel="stylesheet" href="{{ asset ('css/magnific-popup.min.css') }}">

     <link rel="stylesheet" href="{{ asset ('css/fontawesome.min.css') }}">

     <link rel="stylesheet" href="{{ asset('css/nice-select.min.css') }}">

     <!-- CSS SOBRE-->

     <link rel="stylesheet" href="{{ asset('csssobre/animated.css') }}">

     <link rel="stylesheet" href="{{ asset('csssobre/fontawesome.css') }}">

     <link rel="stylesheet" href="{{ asset('csssobre/owl.css') }}">

     <link rel="stylesheet" href="{{ asset('csssobre/templatemo-onix-digital.css') }}">



</head>
<body>
    <header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <nav class="main-nav">
                <!-- ***** Logo Start ***** -->
                <a href="index.html" class="logo">
                  <img src="assets/images/logo.png">
                </a>
                <!-- ***** Logo End ***** -->
                <!-- ***** Menu Start ***** -->
                <ul class="nav">
                  <li class="scroll-to-section"><a href="{{ url('/') }}" class="active">Home</a></li>
                  <li class="scroll-to-section"><a href="{{ url('/sobre') }}">Sobre</a></li>
                  <li class="scroll-to-section"><a href="{{ url('/servico') }}">Serviço</a></li>
                  <li class="scroll-to-section"><a href="{{ url('/contato') }}">Contato</a></li>
                  <li class="scroll-to-section"><div class="main-red-button-hover"><a href="{{ url('/login') }}">Login</a></div></li>
                </ul>
                <a class='menu-trigger'>
                    <span>Menu</span>
                </a>
                <!-- ***** Menu End ***** -->
              </nav>
            </div>
          </div>
        </div>
      </header>
      <!-- ***** Header Area End ***** -->

        <main>
        @yield('conteudo')
       </main>



   


    <!--==============================
    All Js File
    ============================== -->
    <!-- Jquery -->
    <script src="{{ asset ('js/jquery-3.6.0.min.js')}}"></script>
    <!-- Slick Slider -->
    <script src="{{ asset ('js/slick.min.js') }}"></script>
    <!-- Bootstrap -->
    <script src="{{ asset ('js/bootstrap.min.js') }}"></script>
    <!-- Magnific Popup -->
    <script src="{{ asset('js/jquery.magnific-popup.min.js')}}"></script>
    <!-- Counter Up -->
    <script src="{{ asset ('js/jquery.counterup.min.js')}}"></script>
    <!-- Range Slider -->
    <script src="{{ asset ('js/jquery-ui.min.js')}}"></script>
    <!-- Flip Slider -->
    <script src="{{asset  ('js/jquery.flipster.min.js')}}"></script>
    <!-- Isotope Filter -->
    <script src="{{ asset ('js/imagesloaded.pkgd.min.js') }}"></script>

    <script src="{{ asset('js/isotope.pkgd.min.js') }}"></script>

    <script src="{{ asset ('js/bmi.calculator.js')}}"></script>

    <!-- Main Js File -->
    <script src=" {{ asset ('js/main.js') }}"></script>

    <script src=" {{ asset ('js/script.js') }}"></script>


    <!-- JS SOBRE-->

    <script src="{{ asset('jssobre/bmi.calculator.js') }}"></script>

    <script src="{{ asset('jssbore/jquery.min.js') }}"></script>

    <script src="{{ asset('jssobre/animation.js') }}"></script>

    <script src="{{ asset('jssobre/bootstrap.bundle.min.js') }}"></script>

   <script src="{{ asset('jssobre/custom.js') }}"></script>

   <script src="{{ asset('jssobre/imagesloaded.js') }}"></script>

    </body>
</html>
