<?php

    $accion = $_REQUEST['accion'];

    switch($accion){
        case 'getCustomers':
            GetCustomers();
            break;
        case 'obtener_nota':
                obtener_nota();
                break;
        case 'deleteCustomer':
                deleteCustomer();
                break;
    }

    function GetCustomers(){

        //Creando la coneccion
        $conexion = new mysqli("localhost","root","","proyecto_l");
        if (!$conexion) {
        echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
        echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
        echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
        exit;
        }

        //Realizando la consulta
        $sql = "SELECT id_customer, email, name, last_name, phone, date_of_birth, address, country, city, postal_code from customers_crm";
        $rs = $conexion->query($sql);
        $conexion->close();
        $cuerpoTabla = "<div class='container-lg'>";
        $cuerpoTabla .= "<div class='table-wrapper'>";
        $cuerpoTabla .= "<tbody>";
        $cuerpoTabla .= "<table class='table table-bordered grades'>";
        $cuerpoTabla .= "<thead>";
        $cuerpoTabla .= "<tr>";
        $cuerpoTabla .= "<th>ID</th>";
        $cuerpoTabla .= "<th>Email</th>";
        $cuerpoTabla .= "<th>Name</th>";
        $cuerpoTabla .= "<th>Last Name</th>";
        $cuerpoTabla .= "<th>Phone</th>";
        $cuerpoTabla .= "<th>Date Of Birth</th>";
        $cuerpoTabla .= "<th>Address</th>";
        $cuerpoTabla .= "<th>Country</th>";
        $cuerpoTabla .= "<th>City</th>";
        $cuerpoTabla .= "<th>Postal Code</th>";
        $cuerpoTabla .= "<th>Actions</th>";
        $cuerpoTabla .= "</tr>";
        $cuerpoTabla .= "</thead>";
            while($fila = $rs->fetch_assoc()){
                $cuerpoTabla .=  "<tr>";
                    $cuerpoTabla .= "<td>".$fila['id_customer']."</td>";
                    $cuerpoTabla .= "<td>".$fila['email']."</td>";
                    $cuerpoTabla .= "<td>".$fila['name']."</td>";
                    $cuerpoTabla .= "<td>".$fila['last_name']."</td>";
                    $cuerpoTabla .= "<td>".$fila['phone']."</td>";
                    $cuerpoTabla .= "<td>".$fila['date_of_birth']."</td>";
                    $cuerpoTabla .= "<td>".$fila['address']."</td>";
                    $cuerpoTabla .= "<td>".$fila['country']."</td>";
                    $cuerpoTabla .= "<td>".$fila['city']."</td>";
                    $cuerpoTabla .= "<td>".$fila['postal_code']."</td>";
                    $cuerpoTabla .= "<td>";
                    $cuerpoTabla .= "<a class='edit' href='index.php?accion=abrirFormActualizarNotas&id_usuario=".$fila['id_customer']."' title='Edit' data-toggle='tooltip' onclick='editarNota(".$fila['id_customer'].");'><i class='material-icons'>&#xE254;</i></a>";
                    $cuerpoTabla .= "<a class='delete' title='Delete' data-toggle='tooltip' onclick='deleteCustomer(".$fila['id_customer'].");'><i class='material-icons'>&#xE872;</i></a>";
                    $cuerpoTabla .= "</td>";
                $cuerpoTabla .=  "</tr>";
            }
        $cuerpoTabla .= "</tbody>";
        $cuerpoTabla .= "</div>";
        $cuerpoTabla .= "</div>";

        header("HTTP/1.1 200 OK");
        // echo json_encode($array_salida);
        echo $cuerpoTabla;

        exit;
    }

    function obtener_nota(){

        //Creando la coneccion
        $conexion = new mysqli("localhost","root","","proyecto_l");
        if (!$conexion) {
        echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
        echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
        echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
        exit;
        }

        $id_usuario = $_REQUEST['id_usuario'];
        //Realizando la consulta
        $sql = "SELECT u.id_usuario,usuario,nombre,apell1,apell2,matematica,espaniol,ciencias,estudios_sociales,ingles, role FROM usuarios u INNER JOIN notas n ON u.id_usuario = n.id_usuario WHERE u.id_usuario =".$id_usuario;
        $rs = $conexion->query($sql);
        $conexion->close();

        $cuerpoTabla = "<tbody>";
            while($fila = $rs->fetch_assoc()){
                $cuerpoTabla .=  "<tr>";
                    $cuerpoTabla .= "<td>".$fila['id_usuario']."</td>";
                    $cuerpoTabla .= "<td>".$fila['usuario']."</td>";
                    $cuerpoTabla .= "<td>".$fila['nombre']."</td>";
                    $cuerpoTabla .= "<td>".$fila['apell1']."</td>";
                    $cuerpoTabla .= "<td>".$fila['apell2']."</td>";
                    $cuerpoTabla .= "<td>".$fila['matematica']."</td>";
                    $cuerpoTabla .= "<td>".$fila['espaniol']."</td>";
                    $cuerpoTabla .= "<td>".$fila['ciencias']."</td>";
                    $cuerpoTabla .= "<td>".$fila['estudios_sociales']."</td>";
                    $cuerpoTabla .= "<td>".$fila['ingles']."</td>";
                $cuerpoTabla .=  "</tr>";
            }
        $cuerpoTabla .= "</tbody>";

        header("HTTP/1.1 200 OK");
        // echo json_encode($array_salida);
        echo $cuerpoTabla;

        exit;
    }

    function deleteCustomer(){
        $conexion = new mysqli("localhost","root","","proyecto_l");
        if (!$conexion) {
          echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
          echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
          echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
          exit;
        }
        $customer_id = $_REQUEST['customer_id'];
        $sql = "DELETE FROM customers_crm WHERE `customers_crm`.`id_customer` = ".$customer_id;
        $rs  = $conexion->query($sql);
      
        $conexion->close();
        header("HTTP/1.1 200 OK"); // las importantes
        echo "ok";// las importantes
        exit();// las importantes
    }

    header("HTTP/1.1 404 Bad_Request_Listar");

    exit;
?>