
<?php

    //requerimos base de datos
     require_once('../conexion.php');


    //Recuperar las variables que vienen desde el formulario


    if ($_POST['save']) {

        $nombre = $_POST['nombre'];
        $correo = $_POST['correo'];
        $telefono = $_POST['tel'];
        $institucion = $_POST['institucion'];
        $enteraste = $_POST['enteraste'];
        $invito = $_POST['quienteinvito'];

        $query = "INSERT INTO registrojornada(NombreCompleto,Correo,Telefono,Institucion,Comoteenteraste,Escribeelnombre)
                                VALUES ('$nombre','$correo',' $telefono','$institucion',' $enteraste ','$invito')";

        $result =  $conn->query($query);
        
        
        if (!$result) {
            echo '<script language="javascript">alert("ERROR");</script>';
        }else {
            echo 
            '<script>
                 

                alert("GUARDADO CON ÉXITO");
                 location.href = "../../colecta.html";

            </script>';
           
        }
    }

   







?>