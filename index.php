<!doctype html>
<html lang="es">
  <!-- HEAD -->
  <head>
    <title>Infoproducto</title>
      <?php include 'inc/head_common.php'; ?>

      <link rel="stylesheet" href="/css/workshops.css">  <meta charset="utf-8">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
      <!-- Latest compiled and minified JavaScript -->
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
      <script src="./js/jquery-1.11.1.js" type="text/javascript"></script> 
      
  </head>

<body>

  <?php include 'inc/header.php'; ?>
  
        <div id="page-wrap" class="container">

          <div id="contenedor" class="row">
            <div id="contenedor_c" class="col-md-3 col-sm-6 col-xs-12" >
              
              <br><br><br><br>
              <h3>CATEGORIAS</h3> <hr>

                <a href="#" id="helados" class="enlace">Helados</a><br>
                <a href="#" id="galletas">Galletas</a><br>
                <a href="#" id="icesandwich" >Ice Sandwich</a><br>
                <a href="#" id="milkshakes" >Milkshakes</a><br>
            </div>

            
            <div id="principal" class="col-md-9 col-sm-4 col-xs-12" >
                 Loading...
                
                <!-- 1. SALUD -->
                <!-- Primera Linea -->
                <div class="row" >
                    <br><br><br>
                  <h3> HELADERIA CHOCOCHIPS </h3>
                  <hr>

                  <div class="col-md-4 col-sm-4 col-xs-12" >
                    <!-- Imagen -->
                    <link href="#"><img src="img/galletas/chocochips.jpg" width="100%"></link>
                    <br></br>
                    <ul id="descripcion-producto">
                      <li>GALLETA CHOCOCHIPS </li>
                      <li><a href="#"> Precio: S/2.50 </a> </li>
                    </ul>

                  </div>
                  <div class="col-md-4 col-sm-4 col-xs-12" >
                    <!-- Imagen -->
                    <link href="#"><img src="img/galletas/oreo.jpg" width="100%"></link>
                    <br></br>
                    <ul id="descripcion-producto">
                      <li>GALLETA OREO </li>
                      <li><a href="#"> Precio: S/2.50 </a> </li>
                    </ul>

                  </div>
                  <div class="col-md-4 col-sm-4 col-xs-12" >
                    <!-- Imagen -->
                    <link href="#"><img src="img/galletas/chocolate.jpg" width="85%"></link>
                    <br></br>
                    <ul id="descripcion-producto">
                      <li>GALLETA DE CHOCOLATE </li>
                      <li><a href="#"> Precio: S/1.50 </a> </li>
                    </ul>

                  </div>
              </div>
              <div class="row" >

                  <div class="col-md-4 col-sm-6 col-xs-12" >
                    <!-- Imagen -->
                    <link href="#"><img src="img/icesandwich/icesandwich2.jpg" width="100%" ></link>
                    
                    <ul id="descripcion-producto">
                      <li>ICE SANDWICH 1 BOLA </li>
                      <li><a href="#"> 2 galletas + 1 sabor de helado </a> </li>
                    </ul>

                  </div>
                  <div class="col-md-4 col-sm-6 col-xs-12" >
                    <!-- Imagen -->
                    <link href="#"><img src="img/icesandwich/icesandwich.jpg" width="100%" ></link>
                    
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


