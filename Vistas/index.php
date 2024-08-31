<?php
    
    include("../Conexion/conexion.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styles.css">
    <title>Document</title>
    <style>
        .container{
            margin-top:40px;
        }

        #alumnos{
            font-size:18px; 
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h4 class="title">Visualizar Datos</h4>
            </div>
            <div class="panel-body">
            <table class="table table-bordered table-striped table-hover table-responsive" id="alumnos">
                <tr>
                    <th>Empleado Id</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Correo Electronico</th>
                    <th>Numero de Telefono</th>
                    <th>Fecha de Contratacion</th>
                    <th>Titulo de Trabajo</th>
                    <th>Departamento</th>
                    <th>Salario</th>
                    <th>Activo</th>
                </tr>
                
                <?php  
                  $consulta = $conn->prepare("SELECT * FROM Empleados");
                $consulta->execute();

                while($datos=$consulta->fetch(PDO::FETCH_OBJ))
                {
                ?> 

                <tr>
                    <th><?php echo $datos->EmpleadoID ?></th>
                    <th><?php echo $datos->Nombre ?></th>
                    <th><?php echo $datos->Apellido ?></th>
                    <th><?php echo $datos->CorreoElectronico ?></th>
                    <th><?php echo $datos->NumeroTelefono ?></th>
                    <th><?php echo $datos->FechaContratacion ?></th>
                    <th><?php echo $datos->TituloTrabajo ?></th>
                    <th><?php echo $datos->Departamento ?></th>
                    <th><?php echo $datos->Salario ?></th>
                    <th><?php echo $datos->Activo ?></th>

                </tr>

                <?php
                }
                ?>

            </table>
            </div>
        </div>

    </div>
    
</body>
</html>