<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
<link rel="icon" href="images/icon.ico" type="image/x-icon">
    <title>COPROSA | Productos</title>
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
    padding-top: 56px;
  }
}</style>
  </head>

  <body>

    <!-- Navigation -->
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

    <!-- Page Content -->
    <div class="container">
<h3 class="my-4 text-center">Productos</h3>
      <div class="row">

        <div class="col-lg-3">

          <div class="list-group">
            <a  class="list-group-item Mirame" id="Todos" onClick="MostrarTodos(this.id)">Todos</a>
            <a  class="list-group-item Mirame" id="Base" onClick="SeleccionaTipo(this.id)">Base</a>
            <a  class="list-group-item Mirame" id="Carro" onClick="SeleccionaTipo(this.id)">Carro</a>
            <a  class="list-group-item Mirame" id="Caja" onClick="SeleccionaTipo(this.id)">Caja</a>
            <a  class="list-group-item Mirame" id="Charola" onClick="SeleccionaTipo(this.id)">Charola</a>
            <a  class="list-group-item Mirame" id="Bote" onClick="SeleccionaTipo(this.id)">Bote</a>
            <a  class="list-group-item Mirame" id="Contenedor" onClick="SeleccionaTipo(this.id)">Contenedor</a>
            <a  class="list-group-item Mirame" id="Papelera" onClick="SeleccionaTipo(this.id)">Papelera</a>
            <a  class="list-group-item Mirame" id="Plataforma" onClick="SeleccionaTipo(this.id)">Plataforma</a>
            <a  class="list-group-item Mirame" id="Tambo" onClick="SeleccionaTipo(this.id)">Tambo</a>
            <a  class="list-group-item Mirame" id="Tapa" onClick="SeleccionaTipo(this.id)">Tapa</a>
            <a  class="list-group-item Mirame" id="Otros" onClick="SeleccionaTipo(this.id)">Otros</a>
          </div>
        </div>
        <!-- PRODUCTO CARD -->
        <div class="col-lg-9 margenSuperior">

          <div class="row">
            <?php
            $row = 0;
            if (($handle = fopen("Productos.csv", "r")) !== FALSE) {
              while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
                if($row <> 0){

                $num = count($data);
                // var_dump($data);
                /*AQui es donde construye todo*/
                    echo '<div class="col-lg-4 col-md-6 mb-4 CartitasShidoris" id="Cartita_'.$data[12].'">
                           <div class="card h-100">
                             <a href="#Modal_BaseTrafitambo_'.$row.'" data-toggle="modal">
                               <div style="heigt:100 px" >
                               <div  class="text-center" style="background-color:#656363; height:150px">
                               <img class="card-img-top Sizer" src="images/PRD/'.$data[8].'.jpg" alt=""></div>
                               </div>
                             <div class="card-body text-center" style="height: 90px !important;">
                              <h5 class="">'.$data[0].'</h5>
                             <p class="card-text">
                               '.$data[1].'
                             </p>
                             </div>
                             <div class="card-footer">
                               <small class="text-muted">Ver más...</small>
                             </div>
                           </a>
                         </div>
                       </div>



                       <div id="Modal_BaseTrafitambo_'.$row.'" class="modal fade">
                           <div class="modal-dialog">
                               <div class="modal-content">
                                   <div class="modal-header">
                                       <h4 class="modal-title">'.$data[0].'</h4>
                                   </div>
                                   <div class="modal-body">
                                     <div class="row">
                                       <div class="col-lg-6 mb-6 text-center">
                                         <img class="card-img-top Sizer_Max" id="MuestraImagen_'.$row.'"  src="images/PRD/'.$data[8].'.jpg" alt="">
                                       </div>
                                       <div class="col-lg-6 mb-6">
                                         <h4>Descripción</h4>
                                         <p align="justify">
                                           '.str_replace("?",",",$data[7]).'
                                         </p>
                                         <div class="row">
                                           <div class="col-lg-3 mb-3">
                                             <strong>Alto</strong><br>
                                             <p>'.$data[3].'</p>
                                           </div>
                                           <div class="col-lg-3 mb-3">
                                             <strong>Ancho</strong><br />
                                             <p>'.$data[4].'</p>
                                           </div>
                                           <div class="col-lg-3 mb-3">
                                             <strong>Fondo</strong><br />
                                             <p>'.$data[5].'</p>
                                           </div>
                                           <div class="col-lg-3 mb-3">
                                             <strong>Capacidad</strong><br />
                                             <p>'.$data[2].'</p>
                                           </div>
                                         </div>
                                         <div class="row">
                                           <div class="col-lg-6 mb-6">
                                             <strong>Colores</strong><br />
                                             <p>'.str_replace("?",",",$data[6]).'</p>
                                           </div>
                                           <div class="col-lg-3 mb-3">
                                             <strong>Descargar Ficha</strong><br />
                                             <div >
                                               <a href="pdf/'.$data[13].'" target="_blank"><img src="images/down.png" style="width: 36px;"/></a>
                                             </div>
                                           </div>
                                         </div>
                                         <h5>Imagenes Relacionadas</h5>
                                         <br>
                                         <div class="row">';
                                         if ($data[8]!='') {
                                           echo '<div class="col-lg-3 mb-3">
                                             <div style="height: 130px;" class="text-center">
                                                <img class="card-img-top Sizer_Mini" src="images/PRD/'.$data[8].'.jpg" onClick="CambiarImagen(this)" id="'.$data[8].'" alt="'.$row.'">
                                             </div>
                                           </div>';
                                         }
                                         if ($data[9]!='') {
                                           echo '<div class="col-lg-3 mb-3">
                                             <div style="height: 130px;" class="text-center">
                                                <img class="card-img-top Sizer_Mini" src="images/PRD/'.$data[9].'.jpg" onClick="CambiarImagen(this)" id="'.$data[9].'" alt="'.$row.'">
                                             </div>
                                           </div>';
                                         }
                                         if ($data[10]!='') {
                                           echo '<div class="col-lg-3 mb-3">
                                             <div style="height: 130px;" class="text-center">
                                                <img class="card-img-top Sizer_Mini" src="images/PRD/'.$data[10].'.jpg" onClick="CambiarImagen(this)" id="'.$data[10].'" alt="'.$row.'">
                                             </div>
                                           </div>';
                                         }
                                         if ($data[11]) {
                                           echo '<div class="col-lg-3 mb-3">
                                             <div style="height: 130px;" class="text-center">
                                                <img class="card-img-top Sizer_Mini" src="images/PRD/'.$data[11].'.jpg" onClick="CambiarImagen(this)" id="'.$data[11].'" alt="'.$row.'">
                                             </div>
                                           </div>';
                                         }

                                        echo '</div>
                                       </div>
                                     </div>
                                   </div>
                                   <div class="modal-footer">
                                       <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                   </div>
                               </div>
                           </div>
                       </div>
                       ';
                     }

                $row++;
              }
              fclose($handle);
            }
             ?>

          </div>
          <!-- /.row -->

        </div>
        <!-- /.col-lg-9 -->

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

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
    <script type="text/javascript">

    function SeleccionaTipo(id) {
      var h = document.getElementsByClassName("CartitasShidoris");
      for (var i = 0; i < h.length; i++) {
        if (h[i].id=='Cartita_'+id) {

            h[i].classList.add("MuestraElemento")
            h[i].classList.remove("OcultaElemento")

        }else{
          h[i].classList.remove("MuestraElemento")
          h[i].classList.add("OcultaElemento")
        }
      }

    }

    function MostrarTodos(id) {
      var h = document.getElementsByClassName("CartitasShidoris");
      for (var i = 0; i < h.length; i++) {
        h[i].classList.add("MuestraElemento")
        h[i].classList.remove("OcultaElemento")
      }
    }

    function CambiarImagen(obj) {
      var h = document.getElementById('MuestraImagen_'+obj.alt)
      h.src=obj.src;
    }

    </script>

  </body>

</html>
