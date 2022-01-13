<?php 
  session_start();

  if(!isset($_SESSION['correo'])){

    echo '<script type="text/javascript">alert("Por favor debes iniciar sesion"); window.location = "index.php";  </script>';
  
    session_destroy();
    die();
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

    <title>integrador</title>

</head>
<body>
    
    <header>
        <div class="container-fluid">
          <nav class="navbar  navbar-expand-lg navbar-dark color-fondo text-light fixed-top  ">
             
            <div class="container-fluid margenes-nav">
              <a class="navbar-brand" href="#confBsAs"><img src="imagenes/codoacodo.png" style="height:3.2rem; width:6.2rem;">Conf Bs As</a>
                
                <div class="container-fluid">
                  
                  <ul class="  navbar-nav justify-content-end ">
                    <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="#">La conferencia</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#oradores">Los oradores</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#ubicacion">El lugar y la fecha</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#inscripcion">Conviértete en orador</a>
                    </li> 
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Mi cuenta</a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="logout.php">Cerrar sesion</a></li>
                      </ul>
                    </li>
                                     
                    <li class="nav-item justify-content-end">
                      <a class="nav-link color-comprar " href="#tickets">Comprar tickets</a>
                    </li>
                  </ul>
                </div>

              </div>

            </nav>
          </div>
      </header>


    <section id="confBsAs">  


      <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="imagenes/ba1.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="imagenes/ba2.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="imagenes/ba3.jpg" class="d-block w-100" alt="...">
            </div>

        </div>
        <!--
        <div class="fondo">
            <div class="portada">
                <h1 class="centrarTexto">Conf Bs As</h1>
                <p class="parrafoJust mb-4">Bs As llega por primera vez a Argentina. Un evento para compartir con
                    nuestra
                    comunidad el conocimiento y experiencia de los expertos que están creando el futuro de Internet.
                    Ven
                    a conocer a miembros del evento, a otros estudiantes de Codo a Codo y los oradores de primer
                    nivel
                    que tenemos para tí. Te esperamos!
                </p>
                <div class="contenedorBtn">
                    <button type="button" class="btn btn-outline-primary btn-transp  btn-bg botton">Quiero ser
                        orador</button>
                    <button type="button" class="btn btn-primary btn-bg btn-green ms-2 botton">Comprar
                        tickets</button>
                </div>
            </div>
        </div>
        -->
    </div>

    <!--
      <div class="container-fluid imagen-bs-1">
        <div class="div-imagen-bs-1">
          <h1>Conf Bs As</h1>
          <p>Bs As llega por primera vez a Argentina. Un evento para compartir con nuestra 
          comunidad el conocimiento y experiencia de los expertos que están 
          creando el futuro de Internet. Ven a conocer miembros del evento, 
          a otros estudiantes de Codo a Codo y los oradores de primer nivel que tenemos para ti.
          Te esperamos!</p>
    
          <div class="container d-grid gap-2 d-md-flex justify-content-md-end">
            <button type="button" class="btn btn-outline-light pull-right">Quiero ser orador</button>
            <button type="button" class="btn boton-verde text-end pull-right">Comprar Tickets</button>
            </div>
        </div>
      </div>
  </section> 

  -->
    
  <section id="oradores">
      <div class=" container ">
          <p class="text-center text-uppercase fw-lighter" >Conoce a los </p>
          <h4 class="text-center text-uppercase">Oradores</h4>
      </div>

      <div class="container">

        <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col">
          <div class="card">
            <img src="imagenes/steve.jpg" class="card-img-top" alt="fotoSteve">
            <div class="card-body">
                <span class="badge bg-warning text-dark">JavaScript</span>
                <span class="badge bg-primary">React</span>
              <h5 class="card-title">Steve Jobs</h5>
              <p class="card-text ">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nesciunt, delectus consequatur! Quam beatae odit ipsa facere expedita ut sapiente ipsam. Odio nisi perferendis neque expedita aliquid doloremque tenetur minima excepturi!</p>
            </div>

          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="imagenes/bill.jpg" class="card-img-top" alt="fotoBill">
            <div class="card-body">
                <span class="badge bg-warning text-dark">JavaScript</span>
                <span class="badge bg-primary">React</span>
              <h5 class="card-title">Bill Gates</h5>
              <p class="card-text ">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Placeat nulla doloremque autem dicta enim quidem obcaecati illo ratione, et dignissimos eum ut soluta rem, accusamus alias nam consectetur, nobis rerum.</p>
            </div>

          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="imagenes/ada.jpeg" class="card-img-top" alt="fotoAda">
            <div class="card-body">
                <span class="badge bg-secondary">Negocios</span>
                <span class="badge bg-danger">Startups</span>
              <h5 class="card-title">Ada Lovelace</h5>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus, rem, veritatis neque molestiae accusamus excepturi corrupti saepe ducimus magnam incidunt officiis voluptatibus praesentium consectetur fugiat quaerat odio, laboriosam quidem doloribus?</p>
            </div>

          </div>
        </div>
      </div>
    </div>

    

  </section>


  <section id="ubicacion">
    <div class=" container pantalla-dividida d-md-flex   mt-4" >
      <div class="container izquierdo"></div>

      
      <div class="container derecho bg-dark text-white  ">
        <h2 class="fs-4">Bs As - Octubre</h2>
        <p class="text-white">Buenos Aires es la provincia más grande del estado de Argentina. En los Estados Unidos,
          Honolulu es la más sureña de entre las principales ciudades estadounidenses. 
          Aunque el nombre de Honolulu se refiere al área urbana en la costa sureste de la isla de Oahu, 
          la ciudad y el condado de Honolulu han formado una ciudad-condado
          consolidada que cubre toda la ciudad (aproximadamente 600km2 de superficie).</p>
        <button type="button" class="btn btn-outline-light">Conocé más</button>     
      </div>
      
    </div>

</section>

  <section id="inscripcion">
    <div class=" container text-center mt-4 ">
      <p class=" text-uppercase fw-lighter" >CONVIERTETE EN UN </p>
      <h4 class= text-uppercase">ORADOR</h4>
      <p>Anótate como orador para dar una <span> <abbr title="">charla ignite</abbr> </span>. Cuéntanos de qué quieres hablar!</p>
    </div>

    <div class=" container formulario mb-3 ">

      <div class="row mb-3">
        <div class="col">
          <input type="text" class="form-control" placeholder="Nombre">
        </div>
        <div class="col">
          <input type="text" class="form-control" placeholder="Apellido">
        </div>
      </div>

      <div class="mb-3">
        <textarea class="form-control fs-5" id="exampleFormControlTextarea1" placeholder="Sobre qué quieres hablar?" rows="3"></textarea>
        <div class="form-text">Recuerda incluir un titulo para tu charla</div>
      </div>
      <button type="submit" class="btn text-white w-100 color-boton">Enviar</button>
    </div>  
  </section>


  <section id="tickets" class="tickets" >
    <div class="container">

      <!------------------------------------- Tarjetas de descuento --------------------------------------------------------->
      <div class="row row-cols-1 row-cols-md-3  mb-3">

        <div class="col">
  
          <div class="card border-primary  ">
            <div class="card-body ">
              <h5 class="card-title text-center">Estudiante</h5>
              <p class="card-text text-center">Tiene un descuento</p>
              <h5 class="card-title text-center">80%</h5>
              <p class="card-text text-center pt-2"><small class="text-muted"> *presentar documentacion</small></p>
            </div>
          </div>
        </div>
  
        <div class="col">
          <div class="card border-success">  
            <div class="card-body ">
              <h5 class="card-title text-center">Trainee</h5>
              <p class="card-text text-center">Tiene un descuento</p>
              <h5 class="card-title text-center">50%</h5>
              <p class="card-text text-center pt-2"><small class="text-muted"> *presentar documentacion</small></p>
            </div>
          </div>
        </div>  
  
        <div class="col">
          <div class="card border-warning ">
            <div class="card-body ">
              <h5 class="card-title text-center">Junior</h5>
              <p class="card-text text-center">Tiene un descuento</p>
              <h5 class="card-title text-center">15%</h5>
              <p class="card-text text-center pt-2"><small class="text-muted"> *presentar documentacion</small></p>
            </div>
          </div>
        </div>
      </div>

      <!--------------------------------------------------------------------------------------------------------------------->

      <!------------------------------------- venta valor de ticket --------------------------------------------------------->
      <div class=" container mb-3 ">
        <p class="text-center text-uppercase fw-lighter" > Venta </p>
        <h4 class="text-center text-uppercase">VALOR DE TICKET $200</h4>
      </div>
      <!--------------------------------------------------------------------------------------------------------------------->

      <!---------------------------------------- Formulario Tickets --------------------------------------------------------->
      <div class=" container formulario mb-3 ">

        <div class="row mb-3">
          <div class="col">
            <input type="text" class="form-control" placeholder="Nombre" id="nombre" style="border-color: rgb(160, 171, 156);">
          </div>
          <div class="col">
            <input type="text" class="form-control" placeholder="Apellido" id="apellido" style="border-color: rgb(160, 171, 156);">
          </div>
        </div>
  
        <div class="mb-3">
          <input type="email" class="form-control" id="correo" placeholder="Correo" aria-describedby="emailHelp" style="border-color: rgb(160, 171, 156);">
        </div>
        

        <div class="row mb-3">
          <div class="col">
            <label class="form-label">Cantidad</label>
            <input type="text" class="form-control" placeholder="Cantidad" id="cantidad" style="border-color: rgb(160, 171, 156);">
          </div>
          <div class="col">
            <label class="form-label">Categoria</label>
            <select class="form-select" aria-label="Default select example" id="descuento" style="border-color: rgb(160, 171, 156);">
              <option selected value="1">Sin Descuento</option>
              <option value="2">Estudiante</option>
              <option value="3">Trainee</option>
              <option value="4">Junior</option>

            </select>
          </div>
        </div>

        <div class="alert alert-primary" role="alert" id="totalAPagar">
          Total a Pagar: $
        </div>

        <div class="row mb-3">
          <div class="col">
            <button type="button" class="btn text-white w-100 color-boton" onclick="borrar()">Borrar</button>
          </div>
          <div class="col">
            <button type="button" class="btn text-white w-100 color-boton" onclick="resumen()">Resumen</button>

            </select>
        </div>

      </div> 

      <!-------------------------------------------------------------------------------------------------------------------->

      <div class="container alert alert-danger" id="alertaFaltaDatos" role="alert" style="display: none;">  </div>

    </section>
  
  
  
    <?php require "footer.php" ?>; 
    
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="js/dom.js"></script>
</body>
</html>