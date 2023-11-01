<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Horarios</h1>
    <a href="frmIngresar.php">
        Nuevo Horario
    </a>
    <hr>
    <table>
        <thead>
            <tr>
                <th>Acciones</th>
                <th>ID</th>
                <th>descripcion</th>
            </tr>
        </thead>
        <tbody>
            <?php

                require_once("../../Conexion/Conexion.php");
                require_once("../../Controlador/horarios.php");
                require_once("../../Modelo/Horario.php");
                $ob_horario = new Horarios();
                if($ob_horario->abrirConexion()){
                    $rs = $ob_horario->listar("SELECT * FROM Horarios ORDER BY Orden asc");
                

                    foreach($rs as $key=>$value){
                        echo"<tr>";
                        echo"<td><a href='frmEditar.php? id=".$value->getId()."'> Editar </a> </td>";
                        echo"<td>".$value->getId()."</td>";
                        echo"<td>".$value->getDescripcion()."</td>";
                        echo"</tr>";
                    }

                    $ob_horario->cerrarConexion();
                }else{echo"ERROR!";}


            ?>
        </tbody>
    </table>
</body>
</html>