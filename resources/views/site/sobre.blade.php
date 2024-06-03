@extends('layout.layout')

@section ('title',)

@section ('conteudo')


<main id="main">

    <section id="about" class="about">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-5 align-items-stretch">
              <!-- Fallback Image for Testing -->
              <img src="{{ asset('/img/sobre2.png') }}" alt="About Image">
            </div>
            <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch">
              <div class="content">
                <h3>Sobre a <strong>CriativeArte</strong></h3>
                <p>
                  Na CriativeArte, nos especializamos em brindes personalizados de alta qualidade, perfeitos para todas as ocasiões. Nossa missão é ajudar você a criar lembranças únicas e inesquecíveis através de nossos produtos personalizados.
                </p>
                <p class="fst-italic">
                  Oferecemos uma ampla gama de produtos que podem ser personalizados conforme suas necessidades, seja para presentes corporativos, festas, eventos especiais ou uso pessoal.
                </p>
                <ul>
                  <li><i class="bx bx-gift"></i> Personalização de canecas, camisetas, agendas e muito mais.</li>
                  <li><i class="bx bx-customize"></i> Produtos de alta qualidade com impressões duradouras.</li>
                  <li><i class="bx bx-check-double"></i> Atendimento personalizado para garantir sua total satisfação.</li>
                </ul>
                <p>
                  Na CriativeArte, estamos comprometidos em oferecer produtos que não apenas atendam, mas superem suas expectativas. Seja qual for a ocasião, temos o brinde perfeito para você.
                </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section><!-- End About Section -->



@endsection
