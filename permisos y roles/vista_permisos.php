<?php

    sesion_star();

    include("conexion.php");

    $documento = $_SESSION["documento"];

    $sql = "SELECT * FROM permisos WHERE documento = '$documento'";

    if (!$result = $db->query($sql))
    {
        die ('Hay un error en la consulta o datos no encontrados [' . $db->error . ']');
    }

    while ($row = $result->fetch_assoc())
    {
        $rrol = stripslashes($row{"rol"});
        if ($rrol == "1")
        {
            echo "<a href = 'vista_administrador.php'>Administrador</a><br>";
            $_SESSION{"admin"} = "1";
        }

        if ($rrol == "2")
        {
            echo "<a href = 'vista_usuario.php'>Administrador</a><br>";
            $_SESSION{"usuario"} = "1";
        }

        if ($rrol == "3")
        {
            echo "<a href = 'vista_vendedor.php'>Administrador</a><br>";
            $_SESSION{"vendedor"} = "1";
        }

        if ($rrol == "4")
        {
            echo "<a href = 'vista_supervisor.php'>Administrador</a><br>";
            $_SESSION{"supervisor"} = "1";
        }
    }



    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";

    echo "<a href = 'salir.php'>Cerrar sesión</a><br>";

?>