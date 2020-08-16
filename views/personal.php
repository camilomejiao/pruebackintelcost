<?php


$misbienes = $obj_conexion->query("SELECT b.Id, b.Direccion, b.Ciudad, b.Telefono, b.Codigo_Postal, b.Tipo, b.Precio 
                                FROM bienes AS b
                                INNER JOIN misbienes AS mb ON(b.Id=mb.id_bienes)
                                ORDER BY b.Id ");

while($row = $misbienes->fetch_object()){
                      
echo  ' <div class="row">
            <div class="col-lg-6">
                <div>
                    <img class="card-img" src="img/home.jpg" alt="Card image cap">
                </div>
                <div></br>
                    <input class="boton" type="button" name="Eliminar" id="Eliminar" onClick="eliminar('.$row->Id.')"; value="Eliminar">
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