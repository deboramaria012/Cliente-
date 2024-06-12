@extends('layout.layout')

@section('conteudo')

<!-- Link para Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

<!-- Estilos -->
<style>
  .services-section {
    background: #f9f9f9;
    padding: 60px 0;
  }
  .services-title {
    font-size: 36px;
    font-weight: 700;
    margin-bottom: 20px;
    text-align: center;
    color: #333;
  }
  .services-description {
    font-size: 18px;
    line-height: 1.6;
    margin-bottom: 30px;
    text-align: center;
    color: #555;
  }
  .services-content {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-around;
    margin-top: 30px;
  }
  .services-item {
    flex: 1 1 45%;
    margin: 20px;
    background: #fff;
    padding: 30px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    border-radius: 8px;
    transition: transform 0.3s;
    text-align: center;
  }
  .services-item:hover {
    transform: translateY(-10px);
  }
  .services-item h3 {
    font-size: 24px;
    margin-bottom: 15px;
    color: #ffc107;
  }
  .services-item p {
    font-size: 16px;
    line-height: 1.6;
    color: #666;
  }
  .services-item i {
    font-size: 40px;
    margin-bottom: 10px;
    color: #ffc107;
  }

  .gallery-section {
    background: #fff;
    padding: 60px 0;
    text-align: center;
  }
  .gallery-title {
    font-size: 36px;
    font-weight: 700;
    margin-bottom: 20px;
    color: #333;
  }
  .gallery-content img {
    width: 23%;
    margin: 1%;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  }

  .testimonials-section {
    background: #f9f9f9;
    padding: 60px 0;
    text-align: center;
  }
  .testimonials-title {
    font-size: 36px;
    font-weight: 700;
    margin-bottom: 20px;
    color: #333;
  }
  .testimonials-content {
    display: flex;
    flex-direction: column;
    align-items: center;
  }
  .testimonial-item {
    background: #fff;
    padding: 20px;
    margin: 10px;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    max-width: 600px;
    text-align: left;
  }
  .testimonial-item p {
    font-size: 16px;
    line-height: 1.6;
    color: #666;
  }
  .testimonial-item span {
    display: block;
    margin-top: 10px;
    font-size: 14px;
    font-weight: 700;
    color: #333;
  }

  .faq-section {
    background: #fff;
    padding: 60px 0;
    text-align: center;
  }
  .faq-title {
    font-size: 36px;
    font-weight: 700;
    margin-bottom: 20px;
    color: #333;
  }
  .faq-content {
    max-width: 800px;
    margin: 0 auto;
    text-align: left;
  }
  .faq-item {
    background: #f9f9f9;
    padding: 20px;
    margin: 10px 0;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  }
  .faq-item h3 {
    font-size: 20px;
    margin-bottom: 10px;
    color: #ffc107;
  }
  .faq-item p {
    font-size: 16px;
    line-height: 1.6;
    color: #666;
  }

  .contact-section {
    background: #f9f9f9;
    padding: 60px 0;
    text-align: center;
  }
  .contact-title {
    font-size: 36px;
    font-weight: 700;
    margin-bottom: 20px;
    color: #333;
  }
  .contact-description {
    font-size: 18px;
    line-height: 1.6;
    margin-bottom: 30px;
    color: #555;
  }
  .contact-content {
    max-width: 600px;
    margin: 0 auto;
    text-align: left;
  }
  .contact-content form {
    display: flex;
    flex-direction: column;
  }
  .contact-content label {
    font-size: 16px;
    margin-bottom: 5px;
    color: #333;
  }
  .contact-content input,
  .contact-content textarea {
    padding: 10px;
    margin-bottom: 20px;
    border: 1px solid #ccc;
    border-radius: 8px;
  }
  .contact-content button {
    padding: 10px 20px;
    border: none;
    border-radius: 8px;
    background-color: #ffc107;
    color: #fff;
    font-size: 16px;
    cursor: pointer;
    transition: background-color 0.3s;
  }
  .contact-content button:hover {
    background-color: #e0a800;
  }
</style>

<!-- Seção Serviços -->
<section class="services-section">
  <div class="container">
    <div class="section-title">
      <h2 class="services-title">Nossos Serviços</h2>
      <p class="services-description">Conheça os serviços oferecidos pela CriativeArte e como eles podem tornar seus momentos especiais ainda mais únicos e memoráveis.</p>
    </div>

    <div class="services-content">
      <!-- Serviço 1 -->
      <div class="services-item">
        <i class="fas fa-paint-brush"></i>
        <h3>Serviço de Personalização</h3>
        <p>Personalize seus brindes com designs exclusivos, cores vibrantes e materiais de alta qualidade para criar presentes únicos e memoráveis.</p>
      </div>

      <!-- Serviço 2 -->
      <div class="services-item">
        <i class="fas fa-shipping-fast"></i>
        <h3>Entrega Rápida</h3>
        <p>Garantimos uma entrega rápida e segura dos seus produtos personalizados para que você possa desfrutar dos momentos especiais sem preocupações.</p>
      </div>

      <!-- Serviço 3 -->
      <div class="services-item">
        <i class="fas fa-gift"></i>
        <h3>Assistência Personalizada</h3>
        <p>Nossa equipe está sempre disponível para oferecer assistência personalizada, tirar dúvidas e garantir sua satisfação com nossos produtos e serviços.</p>
      </div>

      <!-- Serviço 4 -->
      <div class="services-item">
        <i class="fas fa-certificate"></i>
        <h3>Garantia de Qualidade</h3>
        <p>Trabalhamos apenas com materiais de alta qualidade e tecnologias avançadas para garantir a durabilidade e excelência de cada brinde personalizado.</p>
      </div>
    </div>
  </div>
</section>

<!-- Seção Galeria -->
<section class="gallery-section">
  <div class="container">
    <h2 class="gallery-title">Galeria de Produtos</h2>
    <div class="gallery-content">
      <img src="produto1.jpg" alt="Produto 1">
      <img src="produto2.jpg" alt="Produto 2">
      <img src="produto3.jpg" alt="Produto 3">
      <img src="produto4.jpg" alt="Produto 4">
    </div>
  </div>
</section>

<!-- Seção Depoimentos -->
<section class="testimonials-section">
  <div class="container">
    <h2 class="testimonials-title">Depoimentos</h2>
    <div class="testimonials-content">
      <div class="testimonial-item">
        <p>"Os produtos da CriativeArte são de excelente qualidade. Personalizei brindes para meu evento e todos adoraram!"</p>
        <span>- Maria Souza</span>
      </div>
      <div class="testimonial-item">
        <p>"A entrega foi super rápida e os produtos ficaram exatamente como eu queria. Recomendo a CriativeArte a todos!"</p>
        <span>- João Pereira</span>
      </div>
    </div>
  </div>
</section>

<!-- Seção FAQ -->
<section class="faq-section">
  <div class="container">
    <h2 class="faq-title">Perguntas Frequentes</h2>
    <div class="faq-content">
      <div class="faq-item">
        <h3>Quais são as opções de pagamento disponíveis?</h3>
        <p>Oferecemos diversas opções de pagamento, incluindo cartões de crédito, débito, transferência bancária e boleto.</p>
      </div>
      <div class="faq-item">
        <h3>Posso personalizar um design que já tenho?</h3>
        <p>Sim, aceitamos designs enviados pelos clientes. Nossa equipe pode ajudá-lo a adaptar o design para que fique perfeito no produto escolhido.</p>
      </div>
      <div class="faq-item">
        <h3>Quais são as políticas de devolução?</h3>
        <p>Se você não estiver satisfeito com o seu pedido, entre em contato conosco dentro de 7 dias após a entrega para discutir uma devolução ou troca.</p>
      </div>
    </div>
  </div>
</section>



@endsection
