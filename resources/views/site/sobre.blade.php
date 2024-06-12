@extends('layout.layout')

@section('conteudo')

<style>
  .about-section {
    background: #f9f9f9;
    padding: 60px 0;
  }
  .about-title {
    font-size: 36px;
    font-weight: 700;
    margin-bottom: 20px;
    text-align: center;
    color: #333;
  }
  .about-description {
    font-size: 18px;
    line-height: 1.6;
    margin-bottom: 30px;
    text-align: center;
    color: #555;
  }
  .about-content {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-around;
    margin-top: 30px;
  }
  .about-item {
    flex: 1 1 45%;
    margin: 20px;
    background: #fff;
    padding: 30px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    border-radius: 8px;
    transition: transform 0.3s;
    text-align: center;
  }
  .about-item:hover {
    transform: translateY(-10px);
  }
  .about-item h3 {
    font-size: 24px;
    margin-bottom: 15px;
    color: #ffc107;
  }
  .about-item p {
    font-size: 16px;
    line-height: 1.6;
    color: #666;
  }
  .about-item i {
    font-size: 40px;
    margin-bottom: 10px;
    color: #ffc107;
  }


  .about-section {
    background: #f9f9f9;
    padding: 60px 0;
  }
  .about-title {
    font-size: 36px;
    font-weight: 700;
    margin-bottom: 20px;
    text-align: center;
    color: #333;
  }
  .about-description {
    font-size: 18px;
    line-height: 1.6;
    margin-bottom: 30px;
    text-align: center;
    color: #555;
  }
  .about-content {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-around;
    margin-top: 30px;
  }
  .about-item {
    flex: 1 1 45%;
    margin: 20px;
    background: #fff;
    padding: 30px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    border-radius: 8px;
    transition: transform 0.3s;
    text-align: center;
  }
  .about-item:hover {
    transform: translateY(-10px);
  }
  .about-item h3 {
    font-size: 24px;
    margin-bottom: 15px;
    color: #ffc107;
  }
  .about-item p {
    font-size: 16px;
    line-height: 1.6;
    color: #666;
  }
  .about-item i {
    font-size: 40px;
    margin-bottom: 10px;
    color: #ffc107;
  }

  .about-section {
    background: #f9f9f9;
    padding: 60px 0;
  }
  .about-title {
    font-size: 36px;
    font-weight: 700;
    margin-bottom: 20px;
    text-align: center;
    color: #333;
  }
  .about-description {
    font-size: 18px;
    line-height: 1.6;
    margin-bottom: 30px;
    text-align: center;
    color: #555;
  }
  .about-content {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-around;
    margin-top: 30px;
  }
  .about-item {
    flex: 1 1 45%;
    margin: 20px;
    background: #fff;
    padding: 30px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    border-radius: 8px;
    transition: transform 0.3s;
    text-align: center;
  }
  .about-item:hover {
    transform: translateY(-10px);
  }
  .about-item h3 {
    font-size: 24px;
    margin-bottom: 15px;
    color: #ffc107;
  }
  .about-item p {
    font-size: 16px;
    line-height: 1.6;
    color: #666;
  }
  .about-item i {
    font-size: 40px;
    margin-bottom: 10px;
    color: #ffc107;
  }


  /* Estilização da linha do tempo */
  .timeline {
    list-style-type: none;
    padding: 0;
    position: relative;
    max-width: 800px;
    margin: 0 auto;
  }
  .timeline::before {
    content: '';
    position: absolute;
    top: 0;
    left: 50%;
    transform: translateX(-50%);
    width: 2px;
    height: 100%;
    background: #ffc107;
  }
  .timeline li {
    padding: 20px;
    background: #fff;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    margin-bottom: 20px;
    position: relative;
    width: 45%;
  }
  .timeline li:nth-child(odd) {
    left: 0;
  }
  .timeline li:nth-child(even) {
    left: 55%;
  }
  .timeline li::before {
    content: '';
    position: absolute;
    top: 20px;
    right: -8px;
    border-style: solid;
    border-width: 8px 8px 8px 0;
    border-color: transparent #fff transparent transparent;
    display: block;
    width: 0;
  }
  .timeline li:nth-child(even)::before {
    left: -8px;
    right: auto;
    border-width: 8px 0 8px 8px;
    border-color: transparent transparent transparent #fff;
  }
  .timeline li strong {
    display: block;
    font-size: 18px;
    color: #ffc107;
    margin-bottom: 5px;
  }


</style>

<!-- Adicione este link na seção <head> do seu layout -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

<body>
  <!-- Seção Sobre -->
  <section class="about-section">
    <div class="container">
      <div class="section-title">
        <h2 class="about-title">Sobre Nós</h2>
        <p class="about-description">Conheça mais sobre a CriativeArte, nossa missão, visão e valores, e a equipe dedicada que torna tudo isso possível.</p>
      </div>

      <div class="about-content">
        <!-- Missão -->
        <div class="about-item">
          <i class="fas fa-bullseye"></i>
          <h3>Missão</h3>
          <p>Proporcionar brindes personalizados de alta qualidade que encantem nossos clientes e tornem seus momentos especiais ainda mais memoráveis.</p>
        </div>

        <!-- Visão -->
        <div class="about-item">
          <i class="fas fa-eye"></i>
          <h3>Visão</h3>
          <p>Ser referência no mercado de brindes personalizados, reconhecida pela criatividade, qualidade e excelência no atendimento ao cliente.</p>
        </div>

        <!-- Valores -->
        <div class="about-item">
          <i class="fas fa-heart"></i>
          <h3>Valores</h3>
          <p>Compromisso com a qualidade, inovação constante, atendimento personalizado, ética e responsabilidade social.</p>
        </div>

        <!-- Equipe -->
        <div class="about-item">
          <i class="fas fa-users"></i>
          <h3>Nossa Equipe</h3>
          <p>Formada por profissionais apaixonados pelo que fazem, nossa equipe está sempre pronta para criar produtos únicos e oferecer um atendimento excepcional.</p>
        </div>

        <!-- Compromisso com a Qualidade -->
        <div class="about-item">
          <i class="fas fa-check-circle"></i>
          <h3>Compromisso com a Qualidade</h3>
          <p>Trabalhamos com materiais de alta qualidade e tecnologias avançadas para garantir que cada brinde personalizado atenda às expectativas de nossos clientes.</p>
        </div>

        <!-- Processo de Personalização -->
        <div class="about-item">
          <i class="fas fa-cogs"></i>
          <h3>Processo de Personalização</h3>
          <p>Nosso processo de personalização é simples e intuitivo, permitindo que os clientes criem brindes únicos de maneira fácil e rápida.</p>
        </div>

        <!-- Depoimentos de Clientes -->
        <div class="about-item">
          <i class="fas fa-comments"></i>
          <h3>Depoimentos de Clientes</h3>
          <p>Confira o que nossos clientes têm a dizer sobre os produtos e serviços da CriativeArte. Estamos orgulhosos das avaliações positivas que recebemos.</p>
        </div>
      </div>
    </div>
  </section>

  <div class="about-content">
    <!-- Linha do Tempo -->
    <div class="about-item">
      <i class="fas fa-stream"></i>
      <h3>Linha do Tempo</h3>
      <p>Acompanhe os principais marcos da nossa trajetória e veja como evoluímos ao longo dos anos.</p>
      <ul class="timeline">
        <li><strong>2000:</strong> Fundação da CriativeArte</li>
        <li><strong>2005:</strong> Lançamento da primeira linha de produtos personalizados</li>
        <li><strong>2010:</strong> Expansão para o mercado internacional</li>
        <li><strong>2020:</strong> Lançamento da nossa plataforma de personalização online</li>
      </ul>
    </div>
  </div>
</div>
</body>


@endsection
