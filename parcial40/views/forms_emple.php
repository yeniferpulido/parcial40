
<?php
include '../model/drivers/conexDB.php';
include '../controller/controlleremple.php';

use app\controllers\controlleremple;

$id = $_POST['id'] ?? $_GET['id'] ?? null; 

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar empleado</title>
</head>
<body>
    <h1>Registrar Empleado</h1>

    <form method="post"  action="../views/acciones/guardaremple.php">
        <div>
        <label for="">Ingrese su nombre</label>
        <input type="text" name="nombreInput" id="nombreInput" required>
        </div>

         <br>

        <div>
        <label for="">Ingrese su salario</label>
        <input type="number" name="salario_baseInput" id="salario_baseInput" required>
        </div>

           <br>

         <div>
        <label for="">Ingrese su comisón</label>
        <input type="number" name="comision_pctInput" id="comision_pctInput" required>
        </div>
        
        <button type="submit">REGISTRAR</button>

        <a href="../views/index.html">VOLVER</a>
    </form>
</body>
</html>