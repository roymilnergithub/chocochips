<!doctype html>
<html lang="es">
  <!-- HEAD -->
  <head>
    <title>Infoproducto</title>
      <?php include 'inc/head_common.php'; ?>

      <link rel="stylesheet" href="/css/workshops.css">  <meta charset="utf-8">
      <link rel="stylesheet" href="./css/bootstrap.css">
      <script src="./js/bootstrap.min.js"></script>
      <script src="./js/jquery-1.11.1.js" type="text/javascript"></script> 
      
  </head>

<body>

  <?php include 'inc/header.php'; ?>
  
        <div id="page-wrap" class="container">

          <div id="contenedor" class="row">
            <div id="contenedor_c" class="col-xs-3" >
              
              <br><br><br><br>
              <h3>CATEGORIAS</h3> <hr>

                <a href="#" id="helados" class="enlace">Helados</a><br>
                <a href="#" id="galletas">Galletas</a><br>
                <a href="#" id="icesandwich" >Ice Sandwich</a><br>
                <a href="#" id="milkshakes" >Milkshakes</a><br>
            </div>

            
            <div id="principal" class="col-xs-9" >
                 Aquí se cargará el contenido de cada página del menú a la que invoques en cada link 
                
                <!-- 1. SALUD -->
                <!-- Primera Linea -->
                <div class="row" >
                    <br><br><br>
                  <h3> HELADERIA CHOCOCHIPS </h3>
                  <hr>

                  <div class="col-xs-4 ">
                    <!-- Imagen -->
                    <link href="#"><img src="img/galletas/chocochips.jpg" width="100%"></link>
                    <br></br>
                    <ul id="descripcion-producto">
                      <li>TALLER DE EJERCITACION DIARIA </li>
                      <li><a href="#"> Precio: $49.00 </a> </li>
                    </ul>

                  </div>
                  <div class="col-xs-4">
                    <!-- Imagen -->
                    <link href="#"><img src="img/galletas/oreo.jpg" width="100%"></link>
                    <br></br>
                    <ul id="descripcion-producto">
                      <li>RUTINA PARA OBTENER ABDOMINALES </li>
                      <li><a href="#"> Precio: $29.00 </a> </li>
                    </ul>

                  </div>
                  <div class="col-xs-4">
                    <!-- Imagen -->
                    <link href="#"><img src="img/galletas/chocolate.jpg" width="85%"></link>
                    <br></br>
                    <ul id="descripcion-producto">
                      <li>RUTINA PARA OBTENER ABDOMINALES </li>
                      <li><a href="#"> Precio: $29.00 </a> </li>
                    </ul>
                  </div>
                  
                </div>


                <div>
                  <div class="col-xs-4 ">
                    <!-- Imagen -->
                    <link href="#"><img src="img/icesandwich/icesandwich2.jpg" width="100%" ></link>
                    <br></br>
                    <ul id="descripcion-producto">
                      <li>ICE SANDWICH 1 BOLA </li>
                      <li><a href="#"> 2 galletas + 1 sabor de helado </a> </li>
                    </ul>

                  </div>
                  <div class="col-xs-4">
                    <!-- Imagen -->
                    <link href="#"><img src="img/icesandwich/icesandwich.jpg" width="100%" ></link>
                    <br></br>
                    <ul id="descripcion-producto">
                      <li>ICE SANDWICH 2 BOLAS </li>
                      <li><a href="#"> 2 galletas + 2 sabores de helado </a> </li>
                    </ul>

                  </div>
                </div>
                
            </div>

            

          </div>        

        </div>
</body>

  <?php include 'inc/footer.php'; ?>
  <?php include 'inc/footer_common.php'; ?>

    <script type="text/javascript">
      $(document).ready(function() { 
        $("#helados").click(function(event) { $("#principal").load('html/helados.html'); }); 
        $("#galletas").click(function(event) { $("#principal").load('html/galletas.html'); }); 
        $("#icesandwich").click(function(event) { $("#principal").load('html/icesandwich.html'); }); 
        $("#milkshakes").click(function(event) { $("#principal").load('html/milkshakes.html'); }); 

        $("#c_salud").click(function(event) { $("#principal").load('html/helados.html'); }); 
        $("#c_cocina").click(function(event) { $("#principal").load('html/galletas.html'); }); 
        $("#c_idiomas").click(function(event) { $("#principal").load('html/icesandwich.html'); }); 
        $("#c_desarrollopersonal").click(function(event) { $("#principal").load('html/milkshakes.html'); }); 
      }); 
    </script>

</html>


