<!doctype html>
<html lang="es">
  <head>
    <title>Buscador</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- importante -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    
  </head>
  <body>


<?php include('conexion.php'); ?>

<div class="container mt-5">
    <div class="col-12">

        <div class="mb-3">

            <label class="form-label">INGRESE EL NUMERO DEL ANEXO</label>
            <input type="text" class="form-control" id="buscar" name="buscar">

            

        </div>
        <button  class="btn btn-success" onclick="buscar_ahora($('#buscar').val());">Buscar</button>

        <div class="card col-12 mt-5">
            <div class="card-body">
                <div id="datos_buscador" class="container pl-5 pr-5"></div>
            </div>
        </div>
        
    </div>
</div>





<script type="text/javascript">
        function buscar_ahora(buscar) {
        var parametros = {"buscar":buscar};
        $.ajax({
        data:parametros,
        type: 'POST',
        url: 'buscador.php',
        success: function(data) {
        document.getElementById("datos_buscador").innerHTML = data;
        }
        });
        }
     //   buscar_ahora();
</script>



  
 
  </body>
</html>