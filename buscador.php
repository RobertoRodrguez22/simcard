<?php include("conexion.php");



$buscardor = mysql_query("SELECT * FROM consolidado WHERE n_simcard LIKE LOWER('%".$_POST["buscar"]."%') OR operador LIKE LOWER ('%".$_POST["buscar"]."%') "); 
$numero = mysql_num_rows($buscardor); ?>


<h5 class="card-tittle">Resultados encontrados(<?php echo $numero; ?>):</h5>

<?php while($resultado = mysql_fetch_assoc($buscardor)){ ?>


<p class="card-text"><?php echo $resultado["n_simcard"]; ?> - <?php echo $resultado["operador"] ?></p>


<?php } ?>