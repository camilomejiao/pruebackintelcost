<?php
/*
Home del proyecto
*/

include ('conex/conex.php');

?>

<html>

<head>
  <title>Formulario</title>
  <meta charset="utf-8">
  <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
  <link type="text/css" rel="stylesheet" href="css/customColors.css" media="screen,projection" />
  <link type="text/css" rel="stylesheet" href="css/ion.rangeSlider.css" media="screen,projection" />
  <link type="text/css" rel="stylesheet" href="css/ion.rangeSlider.skinFlat.css" media="screen,projection" />
  <link type="text/css" rel="stylesheet" href="css/index.css" media="screen,projection" />
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />  
</head>

<body>
  <div class="contenedor">
    <div class="card rowTitulo">
      <h1>Bienes Intelcost</h1>
    </div>
    <div class="colFiltros">
      <form action="#" method="post" id="formulario">
        <div class="filtrosContenido">
          <div class="tituloFiltros">
            <h5>Filtros</h5>
          </div>
          <div class="filtroCiudad input-field">
            <p><label for="selectCiudad">Ciudad:</label><br></p>
            <select name="ciudad" id="selectCiudad">
              <option value="" selected>Elige una ciudad</option>
                <?php
                  //Consultamos las ciudades y evitamos que se repitan
                  $sqlCiudad = $obj_conexion->query("SELECT DISTINCT Ciudad FROM bienes");                   
                  while($row = $sqlCiudad->fetch_object()){
                    echo '<option value="'.$row->Ciudad.'" >'.$row->Ciudad.'</option>';                  
                  }
                ?>
            </select>
          </div>
          <div class="filtroTipo input-field">
            <p><label for="selecTipo">Tipo:</label></p>
            <br>
            <select name="tipo" id="selectTipo">
              <option value="">Elige un tipo</option>
                <?php 
                  //Consultamos las tipos de bienes y evitamos que se repitan
                  $sqlTipo = $obj_conexion->query("SELECT DISTINCT Tipo FROM bienes");                    
                  while($row = $sqlTipo->fetch_object()){
                    echo '<option value="'.$row->Tipo.'" >'.$row->Tipo.'</option>';                  
                  }
                ?>
            </select>
          </div>
          <div class="filtroPrecio">
            <label for="rangoPrecio">Precio:</label>
            <input type="text" id="rangoPrecio" name="precio" value="" />
          </div>
          <div class="botonField">
            <input type="submit" class="btn white" value="Filtrar" id="submitButton">
                </br></br>
            <input type="submit" class="btn white" value="Mostrar Todos" id="submitButton">
          </div>
        </div>
      </form>
    </div>
    <div id="tabs" style="width: 75%;">
      <ul>
        <li><a href="#tabs-1">Bienes disponibles</a></li>
        <li><a href="#tabs-2">Mis bienes</a></li>
      </ul>
      <div id="tabs-1">
        <div class="colContenido" id="divResultadosBusqueda">
          <div class="tituloContenido card" style="justify-content: center;">
            <h5>Resultados de la búsqueda:</h5>
            <div class="divider"></div>                
              <?php
                //Agregamos el include de las consultas
                include ('views/busquedacompleta.php'); 
              ?>
          </div>
        </div>
      </div>

      <div id="tabs-2">
        <div class="colContenido" id="divResultadosBusqueda">
          <div class="tituloContenido card" style="justify-content: center;">
            <h5>Bienes guardados:</h5>
            <div class="divider"></div>
            <?php 
              //Agregamos el include de las opciones selccionadas por el usuario
              include ('views/personal.php'); 
            ?>
          </div>
        </div>
      </div>
    </div>
    <script type="text/javascript" src="js/jquery-1.12.4.js"></script>
    <script type="text/javascript" src="js/ion.rangeSlider.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script type="text/javascript" src="js/index.js"></script>
    <script type="text/javascript" src="js/buscador.js"></script>
    <script type="text/javascript" src="js/jquery-ui.js"></script>
    <script type="text/javascript" src="js/guardar.js"></script>
    <script type="text/javascript">  
      $(document).ready(function() {
        $("#tabs").tabs();        
      });      
    </script>
</body>

</html>