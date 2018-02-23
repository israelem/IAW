<?php
    # CONSTANTES

    define("HOST", "127.0.0.1");
    define("USER", "root");
    define("PASSWORD", "");
    define("DB", "test");
    define("PORT", 3306);

    # Conexión
    $conexion = new mysqli(HOST, USER, PASSWORD);

    # Comprobar si se ha producido un error
    if ($conexion->connect_error) {
        echo("Se ha producido el error" . $conexion->connect_errno . ": "
            . $conexion->connect_error);
    } else {
        # Seleccionar base de datos
        $conexion->select_db(DB);

        # Consulta
        $consulta = "SELECT * FROM alumnos";
        $resultado = $conexion->query($consulta);
        while ($fila = $resultado->fetch_assoc()) {
            echo("Nombre: ". utf8_encode($fila["nombre"]) . ", provincia: "
                . utf8_encode($fila["provincia"]) . "<br/>");
        }
        $resultado->free_result();

    }

    # Cerrar sesión
    $conexion->close();

?>
