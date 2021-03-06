<!DOCTYPE html>
<html>
<head>
	<title>
		
	</title>
</head>
<body>

	<div id="departments">
		
	<select name="">
        
        <?php
          include 'conexion.php';

          $consulta="SELECT * FROM departments";
          $ejecutar= mysqli_query($conexion,$consulta) or die(mysqli_error($conexion)); ?>

          

          <?php foreach ($ejecutar as $opciones): ?>

            <option value="<?php echo $opciones['namedepto'] ?>"> <?php echo $opciones['namedepto'] ?></option>

          <?php endforeach ?>
          

        </select>


	</div>

</body>
</html>