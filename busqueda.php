<html>
<head>
  <title>TOTAL SIMCARD</title>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>
<body>


<div class="row">
  <div class="col-md-4"></div>
  <div class="col-md-4">



    <center><h1>ESTADO DE SIMCARD</h1></center>
    <form method="POST" action="busqueda.php" >

  <div class="form-group">
      <input type="text" name="numero" class="form-control" id="numero" placeholder="Ingrese el numero de simcard que desea consultar">
  </div>
  <center><input type="submit" value="Consultar" class="btn btn-info" name="btnconsulta"></center>
  </form>



  <?php

    if(isset($_POST['btnconsulta']))
    {
      include("conexion.php");

        $chip = $_POST['numero'];
        if($chip=="") //PERMITE ENVIA UN MENSAJE AL USUARIO
          {echo "Debe ingresar un numero de simcard para validar la consulta.";}
        else
        {  
          $resultados = mysqli_query($conexion,"SELECT * FROM $tablac WHERE numero = $chip");
          while($consulta = mysqli_fetch_array($resultados))
          {
            echo 
            "

            <table width=\"100%\" border=\"0\">
            <td><b><center>NUMERO DE SIMCARD:</b></td><td>".$consulta['simcard']."</center></td>
            </table>
            <table width=\"100%\" border=\"0\">
            <td><b><center>NUMERO DE TELEFONO:</b></td><td>".$consulta['numero']."</center></td>
            </table>
            <table width=\"100%\" border=\"0\">
            <td><b><center>OPERADOR:</b></td><td>".$consulta['operador']."</center></td>
            </table>
            <table width=\"100%\" border=\"0\">
            <td><b><center>ESTADO DE LA SIMCARD:</b></td><td>".$consulta['estado']."</center></td>
            </table>
            ";
          }
        }

      include("cierre_conexion.php");
    }
  ?>

</div>
  <div class="col-md-4"></div>
</div>
 
<div class ="col xs 12 col -sm 10 col-sm-offset-1">
  <div class ="panel panel-default panel-resultados"></div>
  <div class ="col-sm-8 col-md-8">

  <?php

if(isset($_POST['btnconsulta']))
{
  include("conexion.php");

    $chip = $_POST['numero'];
    if($chip=="") //PERMITE ENVIA UN MENSAJE AL USUARIO
      {echo "Debe ingresar un numero de simcard para validar la consulta.";}
    else
    {  
      $resultados = mysqli_query($conexion,"SELECT * FROM $tablac WHERE numero = $chip");
      while($consulta = mysqli_fetch_array($resultados))
      {
        echo 
        "

        <table width=\"100%\" border=\"0\">
        <td><b><center>NUMERO DE SIMCARD:</b></td><td>".$consulta['simcard']."</center></td>
        </table>
        <table width=\"100%\" border=\"0\">
        <td><b><center>NUMERO DE TELEFONO:</b></td><td>".$consulta['numero']."</center></td>
        </table>
        <table width=\"100%\" border=\"0\">
        <td><b><center>OPERADOR:</b></td><td>".$consulta['operador']."</center></td>
        </table>
        <table width=\"100%\" border=\"0\">
        <td><b><center>ESTADO DE LA SIMCARD:</b></td><td>".$consulta['estado']."</center></td>
        </table>
        ";
      }
    }

  include("cierre_conexion.php");
}
?>

  </div>

  
  
</body>
</html>