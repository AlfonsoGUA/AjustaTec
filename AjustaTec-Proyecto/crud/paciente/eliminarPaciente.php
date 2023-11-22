<?php
include("../../php/conexion.php");
$idPaciente = $_GET['idPaciente'];

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar Paciente</title>

    <link rel="stylesheet" href="css/estiloForm.css">
</head>
<body>

<div id="myModalEliminarPacientes_<?php echo $idPaciente; ?>" class="modal">

        <div class="modal-content">
            
            <h2>Eliminar usuario</h2>
            
            <form action="../../AjustaTec/php/paciente/eliminarPaciente.php" method="post">

            <input type="hidden" name="idPaciente" value="<?php echo $idPaciente; ?>">
        
            <label>¿Seguro que quieres eliminar este Paciente?</label>
                
                <button type="submit" >Eliminar</button>
            </form>

          
        </div>
    </div>
    
</body>
</html>
