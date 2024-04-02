@extends('layout.layout')

@section ('title')

@section ('conteudo')



<div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="{{ asset('img/camisa.jpg') }}" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="{{ asset('img/caneca.png') }}" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="{{ asset('img/agenda.jpg') }}" class="d-block w-100" alt="...">
      </div>
    </div>
  </div>



<div class="container py-5">
    <div class="text-center mb-5">
        <h5 class="section-title text-primary">Nossos serviços</h5>
        <h1 class="mb-5">Explore nossos serviços</h1>
    </div>
    <div class="row">
        <div class="col-lg-3 col-sm-6">
            <div class="card border-primary shadow-lg wow animate__animated animate__fadeInUp">
                <div class="card-body">
                    <h5 class="card-title">Garantia de Qualidade</h5>
                    <p class="card-text">Utilizamos os melhores materiais para garantir produtos duráveis e de alta qualidade.</p>
                </div>
                <div class="go-corner">
                    <div class="go-arrow"></div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6">
            <div class="card border-primary shadow-lg wow animate__animated animate__fadeInUp" data-wow-delay="0.2s">
                <div class="card-body">
                    <h5 class="card-title">Atendimento ao Cliente</h5>
                    <p class="card-text">Nosso compromisso é proporcionar uma experiência excepcional a cada cliente.</p>
                </div>
                <div class="go-corner">
                    <div class="go-arrow"></div>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-sm-6">
            <div class="card border-primary shadow-lg wow animate__animated animate__fadeInUp" data-wow-delay="0.4s">
                <div class="card-body">
                    <h5 class="card-title">Entrega Rápida e Segura</h5>
                    <p class="card-text">Nossos produtos são entregues de forma rápida e segura garantido.</p>
                </div>
                <div class="go-corner">
                    <div class="go-arrow"></div>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-sm-6">
            <div class="card border-primary shadow-lg wow animate__animated animate__fadeInUp" data-wow-delay="0.6s">
                <div class="card-body">
                    <h5 class="card-title">Ideias de Presentes Criativos</h5>
                    <p class="card-text">Desde canecas personalizadas com fotos e mensagens especiais até camisetas.</p>
                </div>
                <div class="go-corner">
                    <div class="go-arrow"></div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container">
    <h2 class="text-center mb-4">Catalogo de Produtos</h2>

    <div class="row">
        <div class="col-md-3">
            <div class="produto-card">
                <img src="caminho_para_imagem_produto_1.jpg" alt="Produto 1">
                <h4>Nome do Produto 1</h4>
                <p>Descrição breve do Produto 1.</p>
                <a href="#" class="btn btn-primary">Ver Detalhes</a>
            </div>
        </div>
        <div class="col-md-3">
            <div class="produto-card">
                <img src="caminho_para_imagem_produto_2.jpg" alt="Produto 2">
                <h4>Nome do Produto 2</h4>
                <p>Descrição breve do Produto 2.</p>
                <a href="#" class="btn btn-primary">Ver Detalhes</a>
            </div>
        </div>
        <div class="col-md-3">
            <div class="produto-card">
                <img src="caminho_para_imagem_produto_3.jpg" alt="Produto 3">
                <h4>Nome do Produto 3</h4>
                <p>Descrição breve do Produto 3.</p>
                <a href="#" class="btn btn-primary">Ver Detalhes</a>
            </div>
        </div>
        <div class="col-md-3">
            <div class="produto-card">
                <img src="caminho_para_imagem_produto_4.jpg" alt="Produto 4">
                <h4>Nome do Produto 4</h4>
                <p>Descrição breve do Produto 4.</p>
                <a href="#" class="btn btn-primary">Ver Detalhes</a>
            </div>
        </div>
    </div>
</div>




<div class="portfolio-area space-top space-extra-bottom">
    <div class="container">
        <h1 class="text-center">NOSSA GALERIA</h1>
        <div class="row gy-30">
            <div class="col-md-4">
                <div class="portfolio-thumb">
                    <a class="popup-image icon-btn" href="{{ asset('img/galeria.png') }}"><i class="far fa-eye"></i></a>
                    <img src="{{ asset('img/galeria.png') }}" alt="portfolio">
                </div>
            </div>
            <div class="col-md-4">
                <div class="portfolio-thumb">
                    <a class="popup-image icon-btn" href="{{ asset('img/galeria1.png') }}"><i class="far fa-eye"></i></a>
                    <img src="{{ asset('img/galeria1.png') }}" alt="portfolio">
                </div>
            </div>
            <div class="col-md-4">
                <div class="portfolio-thumb">
                    <a class="popup-image icon-btn" href="{{ asset('img/galeria2.png') }}"><i class="far fa-eye"></i></a>
                    <img src="{{ asset('img/galeria2.png') }}" alt="portfolio">
                </div>
            </div>
            <div class="col-md-4">
                <div class="portfolio-thumb">
                    <a class="popup-image icon-btn" href="{{ asset('img/galeira3.png') }}"><i class="far fa-eye"></i></a>
                    <img src="{{ asset('img/galeria3.png') }}" alt="portfolio">
                </div>
            </div>
            <div class="col-md-4">
                <div class="portfolio-thumb">
                    <a class="popup-image icon-btn" href="{{ asset('img/galeria4.png') }}"><i class="far fa-eye"></i></a>
                    <img src="{{ asset('img/galeria4.png') }}" alt="portfolio">
                </div>
            </div>
            <div class="col-md-4">
                <div class="portfolio-thumb">
                    <a class="popup-image icon-btn" href="{{ asset('img/galeira5.png') }}"><i class="far fa-eye"></i></a>
                    <img src="{{ asset('img/galeria5.png') }}" alt="portfolio">
                </div>
            </div>
            <div class="col-md-4">
                <div class="portfolio-thumb">
                    <a class="popup-image icon-btn" href="{{ asset('img/galeria6.png') }}"><i class="far fa-eye"></i></a>
                    <img src="{{ asset('img/galeira6.png') }}" alt="portfolio">
                </div>
            </div>
            <div class="col-md-4">
                <div class="portfolio-thumb">
                    <a class="popup-image icon-btn" href="{{ asset('img/galeria7.png') }}"><i class="far fa-eye"></i></a>
                    <img src="{{ asset('img/galeria7.png') }}" alt="portfolio">
                </div>
            </div>
            <div class="col-md-4">
                <div class="portfolio-thumb">
                    <a class="popup-image icon-btn" href="{{ asset('img/galeria8.png') }}"><i class="far fa-eye"></i></a>
                    <img src="{{ asset('img/galeria8.png') }}" alt="portfolio">
                </div>
            </div>
        </div>
    </div>
</div>



@endsection
