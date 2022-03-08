<?php

    $usuario = $_POST['user'];
    $password = $_POST['pass'];

    if ($usuario === "oarredondo@uvaq.edu.mx" && $password ===  "arredondo") {
        echo '<script>
                 

        alert("BIENVENIDO MAESTRO OMAR");
        location.href = "dashboard.php";

         </script>';  
    }else {
     
   echo '<script>
                 

        alert("ERROR EN LOS ACCESOS");
        location.href = "login.html";

        </script>';  
    }


?>