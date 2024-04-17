@extends('layout.layout')

@section ('title')

@section ('conteudo')


<section id="hero" class="hero d-flex align-items-center section-bg">
    <div class="container">
      <div class="row justify-content-between gy-5">
        <div class="col-lg-5 order-2 order-lg-1 d-flex flex-column justify-content-center align-items-center align-items-lg-start text-center text-lg-start">
          <h2 data-aos="fade-up">Personalize seus Brindes<br>e Encante seus Clientes</h2>
          <p data-aos="fade-up" data-aos-delay="100">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum vitae quam et mauris congue faucibus. Nam varius ultrices nisi sit amet finibus.</p>
          <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
            <a href="#book-a-table" class="btn-book-a-table">Solicitar Orçamento</a>
        </div>
        <div class="col-lg-5 order-1 order-lg-2 text-center text-lg-start">
          <img src="assets/img/hero-img.png" class="img-fluid" alt="" data-aos="zoom-out" data-aos-delay="300">
        </div>
      </div>
    </div>
  </section><!-- End Hero Section -->


  <main id="main">

    <section id="about" class="about">
        <div class="container" data-aos="fade-up">
          <div class="section-header">
            <h2>Sobre nós</h2>
            <p><span>CriativeArte</span></p>
          </div>
          <div class="row gy-4">
            <div class="col-lg-7 position-relative about-img" data-aos="fade-up" data-aos-delay="150">
              <img src="{{ asset('img/sobre1.jpg') }}" alt="Imagem Sobre Nós" class="img-fluid">
              <!-- Conteúdo da imagem -->
            </div>
            <div class="col-lg-5 d-flex align-items-center text-center" data-aos="fade-up" data-aos-delay="300">
              <div class="content ps-0 ps-lg-5">
                <p class="fst-italic fs-5">
                  A CriativeArte é uma empresa especializada em oferecer produtos personalizados de alta qualidade. Nossa missão é transformar momentos especiais em lembranças únicas por meio de canecas e brindes personalizados.
                </p>
                <ul class="fs-5">
                  <li><i class="bi bi-check2-all"></i> Personalização de produtos exclusivos para cada ocasião.</li>
                  <li><i class="bi bi-check2-all"></i> Design único e de alta qualidade em cada item.</li>
                  <li><i class="bi bi-check2-all"></i> Variedade de opções para expressar sua criatividade.</li>
                </ul>
                <div class="mt-4">
                  <a href="{{ url('/sobre') }}" class="btn btn-primary">Saiba Mais</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>


    </section><!-- End About Section -->

    <section id="why-us" class="why-us section-bg">
        <div class="container" data-aos="fade-up">

          <!-- Texto centralizado -->
          <div class="row gy-4 justify-content-center text-center">
            <div class="col-lg-12">
              <h3 class="mb-4 special-heading">Por que escolher a CriativeArte?</h3>
            </div>
          </div>

          <div class="row gy-4">
            <div class="col-xl-4" data-aos="fade-up" data-aos-delay="200">
              <div class="icon-box d-flex flex-column justify-content-center align-items-center special-box">
                <i class="fas fa-cogs"></i>
                <h4>Personalização de Qualidade</h4>
                <p>Brindes personalizados com os melhores materiais e impressão de alta qualidade.</p>
              </div>
            </div><!-- End Icon Box -->

            <div class="col-xl-4" data-aos="fade-up" data-aos-delay="300">
              <div class="icon-box d-flex flex-column justify-content-center align-items-center special-box">
                <i class="fas fa-gem"></i>
                <h4>Variedade e Inovação</h4>
                <p>Ampla variedade de produtos exclusivos e opções criativas para sua marca.</p>
              </div>
            </div><!-- End Icon Box -->

            <div class="col-xl-4" data-aos="fade-up" data-aos-delay="400">
              <div class="icon-box d-flex flex-column justify-content-center align-items-center special-box">
                <i class="fas fa-truck"></i>
                <h4>Entrega Rápida e Segura</h4>
                <p>Envio rápido e seguro para todo o Brasil, garantindo a satisfação dos nossos clientes.</p>
              </div>
            </div><!-- End Icon Box -->
          </div>

        </div>
      </section>


      <section id="menu" class="menu">
        <div class="container" data-aos="fade-up">
          <div class="section-header">
            <h2>Nossos Produtos</h2>
            <p>CriativeArte<span></span></p>
          </div>

          <ul class="nav nav-tabs d-flex justify-content-center" data-aos="fade-up" data-aos-delay="200">
            <li class="nav-item">
              <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#produtos-camisetas">
                <h4>Camisetas</h4>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="tab" data-bs-target="#produtos-canecas">
                <h4>Canecas</h4>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="tab" data-bs-target="#produtos-agendas">
                <h4>Agendas</h4>
              </a>
            </li>
          </ul>

          <div class="tab-content" data-aos="fade-up" data-aos-delay="300">
            <div class="tab-pane fade active show" id="produtos-camisetas">
              <div class="row gy-5">

                <!-- Produto 1 - Camiseta -->
                <div class="col-lg-4 menu-item">
                  <a href="assets/img/menu/menu-item-1.png" class="glightbox"><img src="assets/img/menu/menu-item-1.png" class="menu-img img-fluid" alt=""></a>
                  <h4>Magnam Tiste</h4>
                  <p class="ingredients">
                    Lorem, deren, trataro, filede, nerada
                  </p>
                  <p class="price">
                    $5.95
                  </p>
                </div><!-- Menu Item -->

                <!-- Adicione mais produtos de camisetas conforme necessário -->

              </div>
            </div><!-- End Produtos Camisetas -->

            <div class="tab-pane fade" id="produtos-canecas">
              <div class="row gy-5">

                <!-- Produto 1 - Caneca -->
                <div class="col-lg-4 menu-item">
                  <a href="" class="glightbox"><img src="{{ asset('img/caneca1.png') }}" class="menu-img img-fluid" alt=""></a>
                  <h4>Caneca Magna</h4>
                  <p class="ingredients">
                    Lorem, deren, trataro, filede, nerada
                  </p>
                  <p class="price">
                    $10.95
                  </p>
                </div><!-- Menu Item -->

                <div class="col-lg-4 menu-item">
                    <a href="" class="glightbox"><img src="{{ asset('img/caneca2.png') }}" class="menu-img img-fluid" alt=""></a>
                    <h4>Caneca Magna</h4>
                    <p class="ingredients">
                      Lorem, deren, trataro, filede, nerada
                    </p>
                    <p class="price">
                      $10.95
                    </p>
                  </div><!-- Menu Item -->

                  <div class="col-lg-4 menu-item">
                    <a href="" class="glightbox"><img src="{{ asset('img/caneca3.png') }}" class="menu-img img-fluid" alt=""></a>
                    <h4>Caneca Magna</h4>
                    <p class="ingredients">
                      Lorem, deren, trataro, filede, nerada
                    </p>
                    <p class="price">
                      $10.95
                    </p>
                  </div><!-- Menu Item -->
                <!-- Adicione mais produtos de canecas conforme necessário -->

              </div>
            </div><!-- End Produtos Canecas -->

            <div class="tab-pane fade" id="produtos-agendas">
              <div class="row gy-5">

                <!-- Produto 1 - Agenda -->
                <div class="col-lg-4 menu-item">
                  <a href="assets/img/menu/menu-item-1.png" class="glightbox"><img src="assets/img/menu/menu-item-1.png" class="menu-img img-fluid" alt=""></a>
                  <h4>Agenda Premium</h4>
                  <p class="ingredients">
                    Lorem, deren, trataro, filede, nerada
                  </p>
                  <p class="price">
                    $15.95
                  </p>
                </div><!-- Menu Item -->

                <!-- Adicione mais produtos de agendas conforme necessário -->

              </div>
            </div><!-- End Produtos Agendas -->
          </div><!-- End Tab Content -->

      </section>

  </main>

  <section id="gallery" class="gallery section-bg">
    <div class="container" data-aos="fade-up">

      <div class="section-header">
        <h2>Galeria</h2>
        <p>Check <span>Our Gallery</span></p>
      </div>

      <div class="gallery-slider swiper">
        <div class="swiper-wrapper align-items-center">
          <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="{{ asset('img/galeria.png') }}"><img src="{{ asset('img/galeria.png') }}" class="img-fluid" alt=""></a></div>
          <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="{{ asset('img/galeria1.png') }}"><img src="{{ asset('img/galeria1.png') }}" class="img-fluid" alt=""></a></div>
          <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="{{ asset('img/galeria2.png') }}"><img src="{{ asset('img/galeria2.png') }}" class="img-fluid" alt=""></a></div>
          <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="{{ asset('img/galeria.png') }}"><img src="{{ asset('img/galeria.png') }}" class="img-fluid" alt=""></a></div>
          <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="{{ asset('img/galeria1.png') }}"><img src="{{ asset('img/galeria1.png') }}" class="img-fluid" alt=""></a></div>
          <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="{{ asset('img/galeria2.png') }}"><img src="{{ asset('img/galeria2.png') }}" class="img-fluid" alt=""></a></div>
          <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="{{ asset('img/galeria1.png') }}"><img src="{{ asset('img/galeria1.png') }}" class="img-fluid" alt=""></a></div>
          <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="{{ asset('img/galeria2.png') }}"><img src="{{ asset('img/galeria2.png') }}" class="img-fluid" alt=""></a></div>
        </div>
        <div class="swiper-pagination"></div>
      </div>

    </div>
  </section><!-- End Gallery Section -->



@endsection
