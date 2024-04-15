@extends('layout.layout')

@section ('title',)

@section ('conteudo')


<main id="main">

<section id="about" class="about">
    <div class="container" data-aos="fade-up">
      <div class="section-header">
        <h2>Sobre nós</h2>
        <p><span>CriativeArte</span></p>
      </div>
      <div class="row gy-4">
        <div class="col-lg-7 position-relative about-img" style="background-image: url(assets/img/about.jpg);" data-aos="fade-up" data-aos-delay="150">
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
              <a href="#" class="btn btn-primary">Saiba Mais</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  
</section><!-- End About Section -->


@endsection
