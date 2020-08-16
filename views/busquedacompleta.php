<?php

$ciudad = (!empty ($_POST['ciudad']) ) ? $_POST['ciudad'] : NULL; 
$tipo = (!empty ($_POST['tipo']) ) ? $_POST['tipo'] : NULL; 

if($ciudad != '' && $tipo != ''){
    $bienes = $obj_conexion->query("SELECT Id, Direccion, Ciudad, Telefono, Codigo_Postal, Tipo, Precio 
                                FROM bienes
                                WHERE Ciudad = '$ciudad' AND Tipo = '$tipo' ");

} else {
    $bienes = $obj_conexion->query("SELECT Id, Direccion, Ciudad, Telefono, Codigo_Postal, Tipo, Precio 
                                FROM bienes");
}

while($row = $bienes->fetch_object()){
                      
echo  ' <div class="row">
            <div class="col-lg-6">
                <div>
                    <img class="card-img" src="img/home.jpg" alt="Card image cap">
                </div>
                <div></br>
                    <input class="boton" type="button" name="Guardar" id="Guardar" onClick="guardar('.$row->Id.')"; value="Guardar">
                </div>
            </div>
            <div class="col-lg-6">       
                <div class="">
                    <h6 class="card-subtitle mb-2 text-muted">Direccion:  <p>'.$row->Direccion.'</p>  </h6>                            
                    <h6 class="card-subtitle mb-2 text-muted">Ciudad: <p>'.$row->Ciudad.'</p></h6>
                    <h6 class="card-subtitle mb-2 text-muted">Telefono: <p>'.$row->Telefono.'</p></h6>                    
                    <h6 class="card-subtitle mb-2 text-muted">Codigo Postal: <p>'.$row->Codigo_Postal.'</p></h6>                    
                    <h6 class="card-subtitle mb-2 text-muted">Tipo: <p>'.$row->Tipo.'</p></h6>                    
                    <h6 class="card-subtitle mb-2 text-muted">Precio: <p>'.$row->Precio.'</p></h6>                    
                </div> 
            </div>    
        </div>      
      <div class="divider"></div>';

}