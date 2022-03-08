
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="public/style.css">

    <title>Jornada Académica UVAQ </title>
</head>
<body id="body">
    <header>
        <div class="coontainer-fluid mt-2">
            <ul class="list-inline text-center">
                <li class="list-inline-item"><img src="public/img/escudologo.png" id="img_logo" alt=""></li>
                <li class="list-inline-item display-5">BIENVENID@S</li>
            </ul>
        </div>
    </header>

    <br>
        <div class="container">
            <p class="text-center alert alert-info display-6">Por favor captura la información requerida en el formulario.</p>
        </div>
    <br>
    <div class="container text-center border border-dark mt-2">
        <div class="row">
            <div class="col-md-6">
            <img src="public/img/uvaq_logo.jpg" id="img_form">
        <div class="card">
            <form action="bd/acciones/save.php" method="post">
                <div class="row">
                    <div class="col-6">
                        <input type="text" name="nombre" class="form-control" placeholder="Nombre completo" required>
                    </div>
                    <div class="col-6">
                        <input type="email"  name="correo" class="form-control" placeholder="Correo electrónico" required>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-6">
                        <input type="number" name="tel" class="form-control" placeholder="Teléfono" required>
                    </div>
                    <div class="col-6">
                        <input type="text" name="institucion" class="form-control" placeholder="Institución" required>
                    </div>
                </div>
                <div class="container mt-2">
                    <select name="enteraste"  class="form-select" required>
                        <option value="">¿Cómo te enteraste del evento?</option>
                        <option value="Docente">Docente</option>
                        <option value="Alumno">Alumno</option>
                        <option value="UVAQ">UVAQ</option>
                        <option value="Invitado de HONOR">Invitado de honor</option>
                        <option value="Redes sociales">Redes sociales</option>
                        <option value="Otro">Otro</option>
                    </select>
                </div>
                <div class="container mt-2">
                    <input type="text" class="form-control" name="quienteinvito" placeholder="Escribe el nombre">
                </div>

                <div class="contianer text-center mt-4">
                    <input type="submit" name="save" class="btn btn-success" value="REGISTRAR">
                </div>
            </form>
            <br>
        </div>
            </div>
            <div class="col-md-6">
                <img src="public/img/testtimonio.jpeg" class="mt-2" alt="" id="img_testimonio"
                style="  width: 450px;
                        height: 800px;
                        border-radius: 20px;">
            </div>
        </div>
      <br>
    </div>

    <br>

  
<footer>
    <div class="container-fluid text-center mt-2">
        <div class="row">
            <div class="col-12">
               <p>Desarrollado por <a href="https://engineerweb.com.mx/" target="_blank" >Engineerweb</a></p> 
            </div>
        </div>
    </div>
</footer>   

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>