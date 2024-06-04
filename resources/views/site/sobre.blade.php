@extends('layout.layout')



@section ('conteudo')


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
  </style>
</head>
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
          <h3>Missão</h3>
          <p>Proporcionar brindes personalizados de alta qualidade que encantem nossos clientes e tornem seus momentos especiais ainda mais memoráveis.</p>
        </div>

        <!-- Visão -->
        <div class="about-item">
          <h3>Visão</h3>
          <p>Ser referência no mercado de brindes personalizados, reconhecida pela criatividade, qualidade e excelência no atendimento ao cliente.</p>
        </div>

        <!-- Valores -->
        <div class="about-item">
          <h3>Valores</h3>
          <p>Compromisso com a qualidade, inovação constante, atendimento personalizado, ética e responsabilidade social.</p>
        </div>

        <!-- Equipe -->
        <div class="about-item">
          <h3>Nossa Equipe</h3>
          <p>Formada por profissionais apaixonados pelo que fazem, nossa equipe está sempre pronta para criar produtos únicos e oferecer um atendimento excepcional.</p>
        </div>

        <!-- Compromisso com a Qualidade -->
        <div class="about-item">
          <h3>Compromisso com a Qualidade</h3>
          <p>Trabalhamos com materiais de alta qualidade e tecnologias avançadas para garantir que cada brinde personalizado atenda às expectativas de nossos clientes.</p>
        </div>

        <!-- Processo de Personalização -->
        <div class="about-item">
          <h3>Processo de Personalização</h3>
          <p>Nosso processo de personalização é simples e intuitivo, permitindo que os clientes criem brindes únicos de maneira fácil e rápida.</p>
        </div>

        <!-- Depoimentos de Clientes -->
        <div class="about-item">
          <h3>Depoimentos de Clientes</h3>
          <p>Confira o que nossos clientes têm a dizer sobre os produtos e serviços da CriativeArte. Estamos orgulhosos das avaliações positivas que recebemos.</p>
        </div>
      </div>
    </div>
  </section>
</body>


@endsection
