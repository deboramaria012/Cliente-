<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title>- @yield('title') CriativeArte</title>
     <meta name="description" content="Fitmas - Gym & Fitness HTML Template">
     <meta name="keywords" content="Fitmas - Gym & Fitness HTML Template">
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

     <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Amatic+SC:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-...coloque-seu-código-de-integridade-aqui..." crossorigin="anonymous" />

     <!--GALERIA-->

     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">


     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">



   <!--  <link rel="stylesheet" href="{{ asset ('css/style.css') }}">-->

     <link rel="stylesheet" href="{{ asset ('css/bootstrap.min.css') }}">

     <link href="{{ asset('css/bootstrap-icons.css') }}" rel="stylesheet">

     <link rel="stylesheet" href="{{ asset ('css/fontawesome.min.css') }}">

     <link rel="stylesheet" href="{{ asset('css/nice-select.min.css') }}">

     <!-- CSS SOBRE-->

     <link rel="stylesheet" href="{{ asset('css/main.css') }}">

     <link rel="stylesheet" href="{{ asset('css/aos.css') }}">

     <link href="{{ asset('css/aos.css') }}" rel="stylesheet">
     <link href="{{ asset('css/glightbox.min.css') }}" rel="stylesheet">
     <link href="{{ asset('css/swiper-bundle.min.css') }}" rel="stylesheet">


</head>
<body >

    <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center me-auto me-lg-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
       <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1>CriativeArte<span>.</span></h1>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="{{ url('/') }}">Home</a></li>
          <li><a href="{{ url('/sobre') }}">Sobre</a></li>
          <li><a href="#menu">Menu</a></li>
          <li><a href="{{ url('/servico') }}">Serviços</a></li>
          <li><a href="{{ url('/contato') }}">Contato</a></li>
          <li><a href="#gallery">Gallery</a></li>
          </li>
        </ul>
      </nav><!-- .navbar -->

      <button>
        <span class="circle1"></span>
        <span class="circle2"></span>
        <span class="circle3"></span>
        <span class="circle4"></span>
        <span class="circle5"></span>
        <span class="{{ url('/login') }}">Login</span>
    </button>

    <a href="{{ url('/carrinho') }}" class="cart"><i class="fas fa-shopping-cart"></i></a>

    </div>
  </header><!-- End Header -->



     <main>
    @yield('conteudo')
   </main>

  <!-- ======= Hero Section ======= -->



  <footer class="footer-wrapper footer-layout1" data-bg-src="{{ asset('assets/img/bg/footer-1-bg.png') }}">
    <div class="container">
        <div class="widget-area">
            <div class="row justify-content-between">
                <div class="col-md-6 col-xl-3">
                    <div class="widget footer-widget">
                        <div class="widget-about">
                            <div class="footer-logo">
                                <a href="index.html"><img src="{{ asset('assets/img/logoVivaBem.svg') }}" alt="VivaBem"></a>
                            </div>
                            <p class="about-text">Uma academia, também conhecida como centro de fitness ou clube de saúde, é uma instalação dedicada à preparação física e academias de ginástica e normalmente oferece uma variedade de serviços.</p>
                            <div class="social-btn">
                                <a href="https://twitter.com/" tabindex="0"><i class="fab fa-twitter"></i></a>
                                <a href="https://linkedin.com/" tabindex="0"><i class="fab fa-linkedin-in"></i></a>
                                <a href="https://www.discord.com/" tabindex="0"><i class="fab fa-discord"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-auto">
                    <div class="widget widget_nav_menu footer-widget">
                        <h3 class="widget_title">Links Rápidos</h3>
                        <div class="menu-all-pages-container">
                            <ul class="menu">
                                <li><a href="{{ url('/') }}">Home</a></li>
                                <li><a href="{{ url('/sobre') }}">Sobre</a></li>
                                <li><a href="{{ url('/modalidade') }}">Modalidades</a></li>
                                <li><a href="{{ url('/treino') }}">Treino</a></li>
                                <li><a href="{{ url('/noticia') }}">Notícias</a></li>
                                <li><a href="{{ url('/contato') }}">Contato</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-auto">
                    <div class="widget footer-widget">
                        <h3 class="widget_title">Galeria</h3>
                        <div class="sidebar-gallery">
                            <!-- Adicione aqui suas imagens da galeria -->
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="widget footer-widget">
                        <h3 class="widget_title">Receba boletim informativo</h3>
                        <p class="footer-text">Ganhe 10% de desconto no seu primeiro pedido! Se apresse</p>

                        <form action="" method="POST" class="contact-form newsletter" id="new_letters">
                            @csrf
                            <div class="form-group">
                                <i class="far fa-envelope"></i>
                                <input class="form-control" name="emailNew" id="emailNew" type="email" placeholder="Email" required="">
                            </div>
                            <button type="submit" value="Inscreva-se" class="btn style-r0 style2" onclick="new_letters(event)">Se inscrever</button>
                            <div id="newsMensagem" class="msgContato"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="copyright-wrap">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto align-self-center"><p class="copyright-text text-center">© 2023 <a href="#">Fitmas.</a>Todos os direitos reservados.</p></div>
            </div>
        </div>
    </div>
</footer>

<div class="scroll-top">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;"></path>
    </svg>
</div>


<!-- JAVASCRIPT -->


<script src="{{ asset('js/cart.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>
<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('js/aos.js') }}"></script>
<script src="{{ asset('js/glightbox.min.js') }}"></script>
<script src="{{ asset('js/purecounter_vanilla.js') }}"></script>
<script src="{{ asset('js/swiper-bundle.min.js') }}assets/vendor/swiper/swiper-bundle.min.js"></script>


<script>
    AOS.init();
</script>

<!-- Template Main JS File -->


</html>

</body>
