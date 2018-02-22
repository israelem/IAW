<?php
    # CONSTANTES

    define("HOST", "127.0.0.1");
    define("USER", "root");
    define("PASSWORD", "");
    define("DB", "test");
    define("PORT", 3306);

    # Conexión
    $conexion = mysqli_connect(HOST, USER, PASSWORD);

    # Comprobar si se ha producido un error
    if (mysqli_connect_error()) {
        echo("Se ha producido el error" . mysqli_connect_errno() . ": "
                . mysqli_connect_error());
    } else {
        # Seleccionar base de datos
        mysqli_select_db($conexion, DB);

        # Consulta
        $consulta = "SELECT * FROM alumnos";
        $resultado = mysqli_query($conexion, $consulta);
        while ($fila = mysqli_fetch_assoc($resultado)) {
            echo("Nombre: ". utf8_encode($fila["nombre"]). ", provincia: "
                . utf8_encode($fila["provincia"]) . "<br/>");
        }
        mysqli_free_result($resultado);
    }

    # Cerrar sesión
    mysqli_close($conexion);
?>
