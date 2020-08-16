
function guardar(id){
    //alert('ok');
    var id = id;

    $.ajax({
        url: 'guardar/guardar.php',
        async: true, 
        cache: false, 
        type: "POST",
        data: {
            Accion: 'guardar',
            id: id
        },
        beforeSend: function() {            
            
        },
        success: function(data) {            
            //console.log(data);            
            if(data == 'false'){
                alert('Registro ya se encuentra asignado a este usuario');
            } else {
                alert('Registro exitoso');
            }
            location.reload();
        },
        error: function(xhr) { 
            alert(xhr.statusText + xhr.responseText+"\nArchivo: causarfacturaselectronicas.php"); 
        }
    });
}

function eliminar(id){
    //alert('ok');
    var id = id;

    $.ajax({
        url: 'guardar/guardar.php',
        async: true, 
        cache: false, 
        type: "POST",
        data: {
            Accion: 'eliminar',
            id: id
        },
        beforeSend: function() {            
            
        },
        success: function(data) {            
            //console.log(data);            
            if(data == 'false'){
                alert('Registro no ha sido eliminado');
            } else {
                alert('Registro eliminado exitosamente');
            }
             location.reload();
        },
        error: function(xhr) { 
            alert(xhr.statusText + xhr.responseText+"\nArchivo: causarfacturaselectronicas.php"); 
        }
    });
}