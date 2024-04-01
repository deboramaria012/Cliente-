@extends('layout.layout')

@section ('title',)

@section ('conteudo')


<div id="about" class="about-us section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 align-self-center">
          <div class="left-image">
            <img src="{{ asset('img/about-left-image.png') }}" alt="Two Girls working together">
          </div>
        </div>
        <div class="col-lg-6">
          <div class="section-heading">
            <h2>Sobre nós <em>SEO Tools</em> &amp; <span>Project</span> Management</h2>
            <p>A L.M. Canecas é uma empresa especializada em oferecer produtos personalizados de alta qualidade. Nossa missão é transformar momentos especiais em lembranças únicas por meio de canecas e brindes personalizados. Com uma ampla variedade de designs e opções de personalização, garantimos que cada produto conte uma história e transmita emoções. Seja para presentear alguém especial ou para promover sua marca, na L.M. Canecas você encontra a combinação perfeita entre criatividade, qualidade e exclusividade.</p>
            <div class="row">
              <div class="col-lg-4">
                <div class="fact-item">
                  <div class="count-area-content">
                    <div class="icon">
                      <img src="{{ asset('img/service-icon-01.png') }}" alt="">
                    </div>
                    <div class="count-digit">320</div>
                    <div class="count-title">SEO Projects</div>
                    <p>Lorem ipsum dolor sitti amet, consectetur.</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="fact-item">
                  <div class="count-area-content">
                    <div class="icon">
                      <img src="{{ asset('img/service-icon-02.png') }}" alt="">
                    </div>
                    <div class="count-digit">640</div>
                    <div class="count-title">Websites</div>
                    <p>Lorem ipsum dolor sitti amet, consectetur.</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="fact-item">
                  <div class="count-area-content">
                    <div class="icon">
                      <img src="{{ asset('img/service-icon-03.png') }}" alt="">
                    </div>
                    <div class="count-digit">120</div>
                    <div class="count-title">Satisfied Clients</div>
                    <p>Lorem ipsum dolor sitti amet, consectetur.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>



@endsection
