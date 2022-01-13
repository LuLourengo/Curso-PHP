<?php

    session_start();

    require 'conexion_bd.php';
    
    if(isset($_SESSION['correo'])){
        header("location: inicio.php");
    }    

    if (isset($_POST['mailIngreso']) && isset($_POST['passwordIngreso'])) { 
        $mail = $_POST['mailIngreso'];
        $password = $_POST['passwordIngreso'];

        $validar_login = mysqli_query($conexion,"SELECT * FROM usuarios WHERE mail = '$mail' and contraseña = '$password'" );

        if(mysqli_num_rows($validar_login) > 0){
            $_SESSION['correo'] = $mail;
            header("location: inicio.php");
        }else{
            echo '<script type="text/javascript">alert("Los datos ingresados no son validos, por favor verifique los datos indroducidos"); window.location = "index.php";  </script>';
        }
    }    

  /*
  if (isset($_POST['mailIngreso']) && isset($_POST['passwordIngreso'])) {
    $mail = $_POST['mailIngreso'];
    $password = $_POST['passwordIngreso'];
    $records = $conexion->prepare("SELECT *FROM usuarios WHERE mail == $mail");
    $records->execute();
    //$results = $records->fetch(PDO::FETCH_ASSOC);
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $message = '';
    
    if (count($results) > 0 && password_verify($_POST['passwordIngreso'], $results['contraseña'])) {
      //$_SESSION['user_id'] = $results['id'];
      //header("Location: /php-login");
    } else {
      $message = 'Sorry, those credentials do not match';
    }
  }
  */

?>



<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="css/estilos.css">
        <link rel="stylesheet" href="css/estilo_login.css">

        <title>integrador</title>

    </head>
    
    <body>
        
        <?php require "header.php" ?>;
        
 
            <div class= "conteiner ingreso mb-4">
                <form action="index.php" method="post" onsubmit="return ingresar()">
                    <h2> Iniciar Sesion</h2>
                    <div class=" container mt-4 pt-2">
                        <div class="mb-3 mt-4">
                            <input type="email" name="mailIngreso" class="form-control" id="correoIngreso" placeholder="Correo" aria-describedby="emailHelp" style="border-color: rgb(160, 171, 156);">
                        </div>
                        <div class="mb-3 mt-4">
                            <input type="password" name="passwordIngreso" class="form-control" id="passwordIngreso"placeholder="Contraseña" aria-describedby="emailHelp" style="border-color: rgb(160, 171, 156);" >
                        </div>

                        <div class="container alert alert-danger" id="alertaFaltaDatosIngreso" role="alert" style="display: none;">  </div>
                        
                        <div class=" mt-4">
                            <button type="submit" class="btn text-white w-100 color-boton" onclick="ingresar()">Iniciar Sesión</button>
                        </div>
                        <div class= " text-center mt-2" >
                            <span>¿Aún no tienes cuenta? <a href="registro.php" >Registrar</a></span>
                        </div>
                        

                    </div> 

                </form>
                      
            </div>   
            
            <?php require "footer.php" ?>;



        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="js/login.js"></script>
    </body>  

</html>