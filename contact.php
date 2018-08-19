<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="images/icon.ico" type="image/x-icon">

    <title>COPROSA | Contacto</title>
    <link href="https://fonts.googleapis.com/css?family=Ubuntu:400,700" rel="stylesheet">

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <style>
    body {
      padding-top: 54px;
    }

    @media (min-width: 992px) {
      body {
        padding-top: 90px;
      }
    }</style>
  </head>

  <body>

    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="index.php">
          <img src="images/logo_3.png" alt="">
        </a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="index.php">INICIO</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="services.php">ACERCA DE</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Productos.php">PRODUCTOS</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.php">CONTACTO</a>
            </li>

          </ul>
        </div>
      </div>
    </nav>

    <div class="container">
      <div class="row">
       <div class="col-lg-8 mb-4">
         <h4>Ponte en contacto con nosotros</h4>
           <form   method="post" action="Sent.php">
           <div class="control-group form-group">
             <div class="controls">
               <label>Nombre:</label>
               <input type="text" class="form-control" name="name" required data-validation-required-message="Please enter your name.">
               <p class="help-block"></p>
             </div>
           </div>
           <div class="control-group form-group">
             <div class="controls">
               <label>Numero:</label>
               <input type="tel" class="form-control" name="phone" required data-validation-required-message="Please enter your phone number.">
             </div>
           </div>
           <div class="control-group form-group">
             <div class="controls">
               <label>Correo:</label>
               <input type="email" class="form-control" name="email" required data-validation-required-message="Please enter your email address.">
             </div>
           </div>
           <div class="control-group form-group">
             <div class="controls">
               <label>Mensaje:</label>
               <textarea rows="10" cols="100" class="form-control" name="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
             </div>
           </div>
           <?php
           if(isset($_GET['result']) && $_GET['result'] == 'Success') {
             ?>
             <div class="alert alert-success" role="alert">
              Mensaje Enviado
              </div>
              <?php
            }
            if(isset($_GET['result']) && $_GET['result'] == 'Error') {
              ?>
              <div class="alert alert-danger" role="alert">
                Hubo un error en el servidor. Intente de nuevo.
              </div>
               <?php
             }
             ?>


           <input type="submit" class="btn btn-primary" name="action"  value ="Enviar Mensaje" />
         </form>
       </div>
       <div class="col-lg-4 mb-4">
           <h4>Detalle</h4>
           <p>
             AV. Independencia  No. 27 <br>
             Bodega 4 Col. Independencia <br>
             C.P. 54915 <br>
             Tultitlan Edo de México
           </p>
           <p>
             <img src="images/phone.png" style="width:14px;"> (55) 5884-5560
           </p>
           <p>
               <img src="images/mail.png" style="width:14px;">
             <a href="mailto:polimeroscoprosa@hotmail.com">polimeroscoprosa@hotmail.com
           </p>
           <p>
             <img src="images/calendar.png" style="width:13px;"> Lunes - Viernes: 9:00 AM a 6:00 PM
           </p>
         </div>
     </div>
    </div>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1878.9356668706304!2d-99.18035834220046!3d19.632797796692745!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1f5f018e75e3f%3A0xb72e97fa6a54abbb!2sAv.+Independencia+27%2C+Adolfo+L%C3%B3pez+Mateos+Issemym%2C+Tultitl%C3%A1n+de+Mariano+Escobedo%2C+M%C3%A9x.!5e0!3m2!1ses!2smx!4v1532909069793" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center " style="color:#333; ">Copyright &copy; Comercializadora de Polimeros Pro, S.A de C.V. 2018</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Contact form JavaScript -->
    <!-- Do not edit these files! In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

  </body>

</html>
