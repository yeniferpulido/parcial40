<?php
include '../model/drives/conexB.php';
include '../model/entities/entyty.php';
include '../models/entities/bills.php';
include '../controller/controlleremple.php';

use app\controllers\controlleremple;
use app\models\entities\employe;

$controller = new controlleremple();
$reports = $controller->queryAllEmploye();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registrar empleado</title>
</head>
<body>
    <h1>Registrar empleado</h1>
    <br>
    <table>
        <thead>
            <tr>
                <th>Valor gastado</th>
                <th>Año</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach($reports as $report){ //
                echo '<tr>';
                echo ' <td>'.$report->get('month').'</td>';
                echo ' <td>'.$report->get('year').'</td>';
                echo ' <td>';
                echo ' </td>';
                echo '</tr>';
            }
            ?>
        </tbody>
    </table>
</body>
</html>