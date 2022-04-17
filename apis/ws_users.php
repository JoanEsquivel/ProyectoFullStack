<?php

    $accion = $_REQUEST['accion'];

    switch($accion){
        case 'getUsers':
            GetUsers();
            break;
        case 'getSalaries':
            GetSalaries();
            break;
        case 'payrolReport':
            GeneratePayrollReport();
            break;
        case 'deleteUser':
                deleteUser();
                break;
    }

    function GetUsers(){

        //Creando la coneccion
        $conexion = new mysqli("localhost","root","","proyecto_l");
        if (!$conexion) {
        echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
        echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
        echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
        exit;
        }

        //Realizando la consulta
        $sql = "SELECT u.id_user, user, username, lastname, u.id_role, vacation_days,salary_amount  from usuarios_crm u INNER JOIN salary_crm s ON u.id_role = s.id_role";
        $rs = $conexion->query($sql);
        $conexion->close();
        $cuerpoTabla = "<div class='container-lg'>";
        $cuerpoTabla .= "<div class='table-wrapper'>";
        $cuerpoTabla .= "<tbody>";
        $cuerpoTabla .= "<table class='table table-bordered grades'>";
        $cuerpoTabla .= "<thead>";
        $cuerpoTabla .= "<tr>";
        $cuerpoTabla .= "<th>Employee ID</th>";
        $cuerpoTabla .= "<th>Employee User</th>";
        $cuerpoTabla .= "<th>Employee Name</th>";
        $cuerpoTabla .= "<th>Employee Last Name</th>";
        $cuerpoTabla .= "<th>Employee Role</th>";
        $cuerpoTabla .= "<th>Vacation Days Left</th>";
        $cuerpoTabla .= "<th>Salary Per Month</th>";
        $cuerpoTabla .= "<th>Actions</th>";
        $cuerpoTabla .= "</tr>";
        $cuerpoTabla .= "</thead>";
            while($fila = $rs->fetch_assoc()){
                $cuerpoTabla .=  "<tr>";
                    $cuerpoTabla .= "<td>".$fila['id_user']."</td>";
                    $cuerpoTabla .= "<td>".$fila['user']."</td>";
                    $cuerpoTabla .= "<td>".$fila['username']."</td>";
                    $cuerpoTabla .= "<td>".$fila['lastname']."</td>";
                    $cuerpoTabla .= "<td>".$fila['id_role']."</td>";
                    $cuerpoTabla .= "<td>".$fila['vacation_days']."</td>";
                    $cuerpoTabla .= "<td>".$fila['salary_amount']."</td>";
                    $cuerpoTabla .= "<td>";
                    $cuerpoTabla .= "<a class='edit' href='index.php?accion=openUpdateUserForm&id_usuario=".$fila['id_user']."' title='Edit' data-toggle='tooltip');'><i class='material-icons'>&#xE254;</i></a>";
                    $cuerpoTabla .= "<a class='delete' title='Delete' data-toggle='tooltip' onclick='deleteUser(".$fila['id_user'].");'><i class='material-icons'>&#xE872;</i></a>";
                    $cuerpoTabla .= "</td>";
                $cuerpoTabla .=  "</tr>";
            }
        $cuerpoTabla .= "</tbody>";
        $cuerpoTabla .= "</div>";
        $cuerpoTabla .= "<a href='#' title='generateReport' onclick='genereReport();'>Generate PayRoll Report(based on today's date)</a>";
        $cuerpoTabla .= "</div>";

        header("HTTP/1.1 200 OK");
        // echo json_encode($array_salida);
        echo $cuerpoTabla;

        exit;
    }

    function GetSalaries(){

        //Creando la coneccion
        $conexion = new mysqli("localhost","root","","proyecto_l");
        if (!$conexion) {
        echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
        echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
        echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
        exit;
        }

        //Realizando la consulta
        $sql = "SELECT id_salary,id_role,salary_amount from salary_crm";
        $rs = $conexion->query($sql);
        $conexion->close();
        $cuerpoTabla = "<div class='container-lg'>";
        $cuerpoTabla .= "<div class='table-wrapper'>";
        $cuerpoTabla .= "<p> Roles: 1- Customer Service User | 2- HR Partner User | 3- Warehouse Management User </p>";
        $cuerpoTabla .= "<tbody>";
        $cuerpoTabla .= "<table class='table table-bordered grades'>";
        $cuerpoTabla .= "<thead>";
        $cuerpoTabla .= "<tr>";
        $cuerpoTabla .= "<th>ID</th>";
        $cuerpoTabla .= "<th>Role</th>";
        $cuerpoTabla .= "<th>Salary Amount</th>";
        $cuerpoTabla .= "<th>Actions</th>";
        $cuerpoTabla .= "</tr>";
        $cuerpoTabla .= "</thead>";
            while($fila = $rs->fetch_assoc()){
                $cuerpoTabla .=  "<tr>";
                    $cuerpoTabla .= "<td>".$fila['id_salary']."</td>";
                    $cuerpoTabla .= "<td>".$fila['id_role']."</td>";
                    $cuerpoTabla .= "<td>".$fila['salary_amount']."</td>";
                    $cuerpoTabla .= "<td>";
                    $cuerpoTabla .= "<a class='edit' href='index.php?accion=openUpdateUserForm&id_usuario=".$fila['id_salary']."' title='Edit' data-toggle='tooltip');'><i class='material-icons'>&#xE254;</i></a>";
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

    function GeneratePayrollReport(){
        //Creando la coneccion
        $conexion = new mysqli("localhost","root","","proyecto_l");
        if (!$conexion) {
        echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
        echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
        echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
        exit;
        }

        //Realizando la consulta
        $sql = "INSERT INTO payment_crm (id_user,salary_amount) SELECT u.id_user,salary_amount  from usuarios_crm u INNER JOIN salary_crm s ON u.id_role = s.id_role";
        $rs = $conexion->query($sql);
        $conexion->close();

        header("HTTP/1.1 200 OK");

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

    function deleteUser(){
        $conexion = new mysqli("localhost","root","","proyecto_l");
        if (!$conexion) {
          echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
          echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
          echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
          exit;
        }
        $id_usuario = $_REQUEST['id_usuario'];
        $sql = "DELETE FROM customers_crm WHERE `customers_crm`.`id_customer` = ".$id_usuario;
        $rs  = $conexion->query($sql);
      
        $conexion->close();
        header("HTTP/1.1 200 OK"); // las importantes
        echo "ok";// las importantes
        exit();// las importantes
    }

    header("HTTP/1.1 404 Bad_Request_Listar");

    exit;
?>