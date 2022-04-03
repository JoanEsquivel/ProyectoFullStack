<?php


$accion = $_REQUEST['accion'];

switch ($accion) {
  case 'listar_usuarios':
    listarUsuarios();
    break;
  case 'borrar_usuario':
      borrarUsuario();
      break;
}



function borrarUsuario(){
  $conexion = new mysqli("localhost","root","","proyecto_Final");
  if (!$conexion) {
    echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
    echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
    echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
    exit;
  }
  $id_usuario = $_REQUEST['id_usuario'];
  $sql  = "delete from usuarios where id_usuario =".$id_usuario;
  $rs  = $conexion->query($sql);

  $conexion->close();
  header("HTTP/1.1 200 OK"); // las importantes
  echo "ok";// las importantes
  exit();// las importantes
}



function listarUsuarios(){

  $conexion = new mysqli("localhost","root","","proyecto_Final");

  if (!$conexion) {
    echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
    echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
    echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
    exit;
  }


  $sql  = "select id_usuario, nombre, apellido1,apellido2,role,usuario from usuarios ";
  $rs  = $conexion->query($sql);

   $tablaUsuarios = "<h2>Lista de Usuarios</h2>";
   $tablaUsuarios .= "<table WIDTH='70%' HEIGHT='70%'>";
   $tablaUsuarios .= "<tr>";
    $tablaUsuarios .= "<td>Id Usuario</td>";
    $tablaUsuarios .= "<td>Nombre</td>";
    $tablaUsuarios .= "<td>Apellido 1</td>";
    $tablaUsuarios .= "<td>Apellido 2</td>";
    $tablaUsuarios .= "<td>Usuario</td>";
    $tablaUsuarios .= "<td>Role</td>";
    $tablaUsuarios .= "<td>Editar</td>";
    $tablaUsuarios .= "<td>Borrar</td>";
  $tablaUsuarios .= "</tr>";

  while ($fila = $rs->fetch_assoc()) {
        $tablaUsuarios .= "<tr>";
          $tablaUsuarios .= "<td>".$fila['id_usuario']."</td>";
          $tablaUsuarios .= "<td>".$fila['nombre']."</td>";
          $tablaUsuarios .= "<td>".$fila['apellido1']."</td>";
          $tablaUsuarios .= "<td>".$fila['apellido2']."</td>";
          $tablaUsuarios .= "<td>".$fila['usuario']."</td>";
          $tablaUsuarios .= "<td>".$fila['role']."</td>";
          $tablaUsuarios .= "<td><img src='images/lapiz.png'  onclick='abrirFrmEditarUsuario(".$fila['id_usuario'].");'></td>";
          $tablaUsuarios .= "<td><img src='images/delete.png' onclick='borrarUsuario(".$fila['id_usuario'].");'></td>";


        $tablaUsuarios .= "</tr>";
    }
    $conexion->close();
  $tablaUsuarios .= "</table>";

  header("HTTP/1.1 200 OK"); // las importantes

  echo $tablaUsuarios;// las importantes

  exit();// las importantes
}


header("HTTP/1.1 404 Bad Request"); // las importantes
exit();// las importantes
?>



?>