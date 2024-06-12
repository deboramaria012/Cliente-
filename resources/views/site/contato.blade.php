<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="./style.css" rel="stylesheet" >
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <title>Formulário de Contato</title>
  </head>

  <style>
    *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
@import url("https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css");

.container{
    width: 60%;
    padding: 45px;
    border-radius: 0;
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translate(-50%,-50%);
}
.row{
    box-shadow: rgba(50, 50, 93, 0.25) 0px 6px 12px -2px, rgba(0, 0, 0, 0.3) 0px 3px 7px -3px;

}
.col-md-7{
    padding: 20px;
}
.col-md-5{
    background: #1089ff;
    padding: 20px;
    color: white;

}
.form-control {
    height: 52px;
    background: #fff;
    color: #000;
    font-size: 14px;
    border-radius: 2px;
    -webkit-box-shadow: none !important;
    box-shadow: none !important;
    border: 1px solid rgba(0, 0, 0, 0.1);
}

.bi{
    font-size: 20px;
}
.d-flex p{
    font-size: 18px;
    padding-left: 10px;
    font-family: Verdana, Geneva, Tahoma, sans-serif;
}

@media only screen and (max-width:600px){
    .container{
        width: 100%;
        position: absolute;
        left: 50%;
        top: 90%;
    }
}
  </style>
  <body>
    <div class="container">
        <div class="row">
            <div class="col-md-7">
              <h4>Entrar em contato</h4>
                <form action="send_mail.php" method="POST">
                  <div class="mb-3">
                      <label for="formGroupExampleInput" class="form-label">Name</label>
                      <input type="text" class="form-control" name="name" id="formGroupExampleInput" placeholder="Enter your name" required>
                  </div>
                  <div class="mb-3">
                      <label for="formGroupExampleInput2" class="form-label">Email</label>
                      <input type="email" class="form-control" name="email" id="formGroupExampleInput2" placeholder="Enter your email" required>
                  </div>
                  <div class="mb-3">
                      <label for="formGroupExampleInput2" class="form-label">Número de contato</label>
                      <input type="text" class="form-control" name="contact_number" id="formGroupExampleInput2" placeholder="Enter your number" required>
                  </div>
                  <div class="mb-3">
                      <label for="exampleFormControlTextarea1" class="form-label">Mensagem</label>
                      <textarea class="form-control" name="message" id="exampleFormControlTextarea1" rows="3" required></textarea>
                  </div>
                  <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
            </div>
            <div class="col-md-5">
              <h4>Contate-nos</h4><hr>
              <div class="mt-4">
                  <div class="d-flex">
                    <i class="bi bi-geo-alt-fill"></i>
                    <p>Endereço: Av. Marechal Tito, 1500 São Miguel Paulista, São Paulo - SP, 08010-090</p>
                  </div><hr>
                  <div class="d-flex">
                    <i class="bi bi-telephone-fill"></i>
                    <p>Contanto: +55 11932205849</p>
                  </div><hr>
                  <div class="d-flex">
                    <i class="bi bi-envelope-fill"></i>
                    <p>Email: Contact@gmail.com</p>
                  </div><hr>
              </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
