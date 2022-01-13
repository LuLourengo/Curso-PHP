<?php

    require 'conexion_bd.php';

    if (isset($_POST['nombreRegistro']) && isset($_POST['apellidoRegistro']) && isset($_POST['dniRegistro']) && isset($_POST['mailRegistro'])&& isset($_POST['passwordRegistro'])) {

        $nombre = $_POST['nombreRegistro'];
        $apellido = $_POST['apellidoRegistro'];
        $dni = $_POST['dniRegistro'];
        $telefono = $_POST['telefonoRegistro'];
        $mail = $_POST['mailRegistro'];
        $password = $_POST['passwordRegistro'];

        $query = "INSERT INTO `usuarios`(`id`, `nombre`, `apellido`, `dni`, `telefono`, `mail`, `contraseña`) VALUES ('','$nombre','$apellido','$dni','$telefono','$mail','$password')";


        //Verifico que no este regitrado ese mail en la base de datos
        $esta_repetido = false; 
        $verificar_correo = mysqli_query($conexion,"SELECT * FROM usuarios WHERE mail = '$mail'");
        if(mysqli_num_rows($verificar_correo) > 0){
            echo '<script type="text/javascript">alert("El mail ingresado ya esta registrado."); </script>';
            $esta_repetido = true;
        }

        if(!$esta_repetido){
            $ejecutar = mysqli_query($conexion,$query);

        
            if($ejecutar){
                echo'<script type="text/javascript">  alert("Usuario registrado correctamente");   window.location = "index.php"; </script>';
            }else{
                echo'<script type="text/javascript">  alert("Ha ocurrido un error, intentelo nuevamente");   window.location = "registro.php";  </script>';
            }
        }
        

        mysqli_close($conexion);
        

    }



?>


<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="css/estilos.css">
        <link rel="stylesheet" href="css/estilo_registro.css">

        <title>integrador</title>

    </head>
    
    <body>
        
        <?php require "header.php" ?>;
        
 
        <div class= "conteiner registro">

                
            <h2> Registrarse</h2>
            <form action="registro.php" method="post" onsubmit="return registrar()">
                <div class=" container mt-4"></div>
                    <div class="row mb-3">
                        <div class="col">
                        <input type="text" name="nombreRegistro" class="form-control" placeholder="Nombre" id="nombre" style="border-color: rgb(160, 171, 156);">
                        </div>
                        <div class="col">
                        <input type="text" name="apellidoRegistro" class="form-control" placeholder="Apellido" id="apellido" style="border-color: rgb(160, 171, 156);">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col">
                        <input type="text" name="dniRegistro" class="form-control" placeholder="Dni" id="dni" style="border-color: rgb(160, 171, 156);">
                        </div>
                        <div class="col">
                        <input type="text" name="telefonoRegistro" class="form-control" placeholder="Telefono" id="telefono" style="border-color: rgb(160, 171, 156);">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="mb-3">
                            <input type="email" name="mailRegistro" class="form-control" id="correoRegistro" placeholder="Correo" aria-describedby="emailHelp" style="border-color: rgb(160, 171, 156);">
                        </div>
                        <div class="mb-3">
                            <input type="password" name="passwordRegistro" class="form-control" id="passwordRegistro"placeholder="Contraseña" aria-describedby="emailHelp" style="border-color: rgb(160, 171, 156);" >
                        </div>
                    </div>

                    <div class="container alert alert-danger" id="alertaFaltaDatosRegistro" role="alert" style="display: none">  </div>
                    
                    <div class="row mb-3">
                        <div class="col">
                        <button type="button" class="btn text-white w-100 color-boton" onclick="borrarFormularioRegistro()">Borrar</button>
                        </div>
                        <div class="col">
                        <button type="submit" class="btn text-white w-100 color-boton" onclick="registrar()">Registrar</button>
                        </div>
                        
                    </div>
                </div>
            </form>    
        </div> 
        
            
            <?php require "footer.php" ?>;



        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="js/registro.js"></script>
    </body>  

</html>