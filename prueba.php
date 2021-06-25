<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <div class="col-md-12">
        <strong class="lgris">Ingrese los datos del programa</strong>
        <br>
        <label class="lgris">Nombre programa: </label>
            <input class="form-control" style="text-transform:uppercase;" type="text" name="nombre" value="" placeholder="Nombre programa" required/>
            
        <label class="lgris">Tipo programa: 
            <select name="tipo" class="lgris"> 
                <?php 
                    include 'funciones.php';
                    $consulta="SELECT * FROM tiposprograma";
                    $ejecutar=mysqli_query($conexion, $consulta) or die(mysqli_error($conexion));
                ?>
                <?php  foreach ($ejectuar as $opciones): ?>
                    <option value="<?php echo $opciones['tiposp_tipo']?>"><?php echo $opciones['tiposp_tipo']?></option>
                <?php endforeach?>
            </select></label>

            <input class="btn btn-primary" type="submit" value="Guardar">
    </div>
</body>
</html>