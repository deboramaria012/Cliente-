<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>CriativeArte</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,600,600i,700,700i|Satisfy|Comic+Neue:300,300i,400,400i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('css/animate.min.css') }}" rel="stylesheet">
  <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('css/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('css/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">

  <style>
    /* Estilos do Top Bar */
    #topbar {
      background: #333;
      color: #fff;
      font-size: 14px;
      padding: 10px 0;
    }
    #topbar .topbar-item {
      margin-right: 20px;
    }

    /* Estilos do Header */
    #header {
      background: #222;
      padding: 15px 0;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }
    #header .logo h1 {
      font-size: 28px;
      margin: 0;
      color: #ffc107;
      font-family: 'Satisfy', cursive;
    }
    #header .navbar {
      margin-left: auto;
    }
    #header .navbar ul {
      margin: 0;
      padding: 0;
      list-style: none;
    }
    #header .navbar ul li {
      display: inline-block;
      margin-left: 20px;
    }
    #header .navbar ul li a {
      color: #fff;
      padding: 8px 15px;
      transition: background 0.3s, color 0.3s;
    }
    #header .navbar ul li a:hover,
    #header .navbar ul li a.scrollto.active {
      background: #ffc107;
      color: #333;
    }
    .book-a-table-btn {
      margin-left: 20px;
      padding: 10px 25px;
      background: #ffc107;
      color: #333;
      border-radius: 50px;
      transition: background 0.3s, color 0.3s;
    }
    .book-a-table-btn:hover {
      background: #fff;
      color: #333;
    }

    /* Estilos do Footer */
    .footer {
      background-color: #1a1a1a;
      color: #fff;
      padding: 60px 0;
    }
    .footer-title {
      font-size: 24px;
      font-weight: bold;
      color: #ffc107;
      margin-bottom: 20px;
    }
    .footer-text {
      line-height: 1.8;
      margin-bottom: 20px;
    }
    .footer-list {
      list-style: none;
      padding: 0;
      margin-bottom: 20px;
    }
    .footer-list li {
      padding: 5px 0;
    }
    .footer-list li a {
      color: #fff;
      transition: color 0.3s;
    }
    .footer-list li a:hover {
      color: #ffc107;
    }
    .footer-contact p {
      margin-bottom: 10px;
    }
    .social-links a {
      font-size: 24px;
      display: inline-block;
      margin-right: 10px;
      color: #fff;
      transition: color 0.3s;
    }
    .social-links a:hover {
      color: #ffc107;
    }
    .credits {
      margin-top: 20px;
      color: #ccc;
      font-size: 14px;
    }
  </style>

</head>

<body>

  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-flex align-items-center fixed-top topbar-bg">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-center justify-content-lg-start">
      <div class="topbar-item d-flex align-items-center">
      </div>
      <div class="topbar-item ms-4 d-none d-lg-flex align-items-center">
        <i class="bi bi-clock"></i><span>Seg-Sab: 11:00 AM - 23:00 PM</span>
      </div>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center ">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
      <div class="logo me-auto">
        <h1><a href="{{ url('/') }}">CriativeArte</a></h1>
      </div>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto " href="{{ url('/') }}">Home</a></li>
          <li><a class="nav-link scrollto" href="{{ url('/sobre') }}">Sobre</a></li>
          <li><a class="nav-link scrollto" href="#menu">Menu</a></li>
          <li><a class="nav-link scrollto" href="{{ url('/servico') }}">Serviço</a></li>
          <li><a class="nav-link scrollto" href="#gallery">Galeria</a></li>
          <li><a class="nav-link scrollto" href="{{ url('/contato') }}">Contato</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>

      <a href="{{ url('/login') }}" class="book-a-table-btn scrollto">Login</a>
    </div>
  </header>

  <main>
    @yield('conteudo')
  </main>

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="container">
      <div class="row">
        <!-- Company Info -->
        <div class="col-lg-4 col-md-6 footer-info">
          <h3 class="footer-title">CriativeArte</h3>
          <p class="footer-text">Explorando a arte da criatividade para momentos únicos.</p>
        </div>

        <!-- Useful Links -->
        <div class="col-lg-3 col-md-6 footer-links">
          <h4 class="footer-title">Links Úteis</h4>
          <ul class="footer-list">
            <li><a href="#">Home</a></li>
            <li><a href="#">Sobre</a></li>
            <li><a href="#">Serviços</a></li>
            <li><a href="#">Contato</a></li>
          </ul>
        </div>

        <!-- Contact Info -->
        <div class="col-lg-5 col-md-6 footer-contact">
          <h4 class="footer-title">Entre em Contato</h4>
          <p><i class="bx bx-map"></i> Rua Exemplo, 123, Cidade, Estado, 12345</p>
          <p><i class="bx bx-phone"></i> +55 1234 56789</p>
          <p><i class="bx bx-envelope"></i> info@criativearte.com</p>
          <!-- Social Links -->
          <div class="social-links">
            <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
            <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
            <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
            <a href="#" class="google-plus"><i class="bx bxl-google"></i></a>
            <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
          </div>
        </div>
      </div>
    </div>

    <!-- Copyright Notice -->
    <div class="container text-center">
      <div class="credits">
        &copy; <strong>CriativeArte</strong>. Todos os Direitos Reservados
      </div>
    </div>
  </footer>



  <!-- Vendor JS Files -->
  <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('js/glightbox.min.js') }}"></script>
  <script src="{{ asset('js/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('js/swiper-bundle.min.js') }}"></script>
  {{-- <script src="{{ asset() }}assets/vendor/php-email-form/validate.js"></script> --}}

  <!-- Template Main JS File -->
  <script src="{{ asset('js/main.js') }}"></script>

</body>

</html>
