<?php

$usuarios = $_POST['usuario'];
$contraseña = $_POST['contraseña'];

session_start();

$_SESSION['usuario'] = $usuarios;

// Esta linea de codigo indica la dirrecion del archivo a la conexion de la base de datos
require_once('../db_conexion/conexion.php');

$resultado = mysqli_query($conexion, "SELECT * FROM usuarios
                                      WHERE usuario = '$usuarios'
                                      AND contraseña = '$contraseña'");
                  //echo $results; esta linea de codigo es para ver
                  //los resultados de la consulta, si la informacion es incorreta

// Verificar si se encontró un usuario
if ($registro = mysqli_fetch_assoc($resultado)) {
      // Verificar si el usuario es administrador
      if ($registro['FK_permisos'] == 1) {
          // Establecer la sesión y redirigir al panel de administrador
          header("Location:../resources/views/paneladmin.blade.php");
          exit;
      } elseif ($registro['FK_permisos'] == 2) {
          // Redirigir al panel de empleado
          header("Location:../resources/views/panelempleado.blade.php");
          exit;
      } else {
          // Si el usuario no tiene permisos válidos, mostrar un mensaje de error y redirigir al formulario de inicioasdadfasfaff de sesión
          echo '<script>alert("El usuario no tiene permisos de administrador.");
                window.location="../../../resources/views/login.blade.php";</script>';
          exit;
      }
      } else {
      // Si no se encontró el usuario, mostrar un mensaje de error y redirigir al formulario de inicioasdadfasfaff de sesión
      echo '<script>alert("El usuario o la contraseña son incorrectos o no existen.");
            window.location="../../../resources/views/login.blade.php";</script>';
      exit;
  }

?>
