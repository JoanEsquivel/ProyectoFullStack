<?php
    require_once 'connection/conn.php';

    class model{
        private $inst_conn; 
        private $conn;

        function __construct()
        {
            $this->inst_conn = new conn;            
        }

        function m_validarLogin($user, $pass){
            $this->conn = $this->inst_conn->AbrirBD();
            $arr_rs = array();

            $sql = "SELECT id_user, user, username, lastname, id_role FROM usuarios_crm WHERE ";
            $sql .= " user='$user' and password=md5('proyecto_$pass')";
            $rs = $this->conn->query($sql);
            while($fila = $rs->fetch_assoc()){
                $arr_rs["id_user"] =  $fila['id_user'];
                $arr_rs["user"] =  $fila['user'];
                $arr_rs["username"] =  $fila['username'];
                $arr_rs["lastname"] =  $fila['lastname'];
                $arr_rs["id_role"] =  $fila['id_role'];
            }
            $this->conn = $this->inst_conn->CerrarBD();
            return $arr_rs;
        }

        function m_borrarUsuario($id_usuario){
            $this->conn = $this->inst_conn->AbrirBD();
            $arr_rs = array();

            $sql = "DELETE FROM usuarios WHERE id_usuario =". $id_usuario;
            $rs = $this->conn->query($sql);
            $this->conn = $this->inst_conn->CerrarBD();


        }
        function m_registerUser($arr_user){
            $this->conn = $this->inst_conn->AbrirBD();
            $sql = "insert into usuarios_crm(user,password,username,lastname,id_role) ";
            $sql .= "VALUES ('".$arr_user[0]."', md5('proyecto_".$arr_user[1]."'), '".$arr_user[2]."', '".$arr_user[3]."', ".$arr_user[4].");";
            $rs = $this->conn->query($sql);
            $this->inst_conn->CerrarBD();

            return $rs;
            
        }
        function m_registerCustomer($arr_user){
            $this->conn = $this->inst_conn->AbrirBD();
            $sql = "insert into customers_crm(email,name,last_name,phone,date_of_birth,address,country,city,postal_code) ";
            $sql .= "VALUES ('".$arr_user[0]."', '".$arr_user[1]."', '".$arr_user[2]."', '".$arr_user[3]."', '".$arr_user[4]."', '".$arr_user[5]."', '".$arr_user[6]."', '".$arr_user[7]."', ".$arr_user[8].");";
            $rs = $this->conn->query($sql);
            $this->inst_conn->CerrarBD();

            return $rs;
            
        }
        function m_crearNota($usuario, $pass){

            $this->conn = $this->inst_conn->AbrirBD();
            $arr_rs = array();

            $sql = "SELECT id_usuario, usuario, nombre, apell1, apell2, role FROM usuarios WHERE ";
            $sql .= " usuario='$usuario' and pass=md5('proyecto_$pass')";

            
            $rs = $this->conn->query($sql);

            while($fila = $rs->fetch_assoc()){

                $arr_rs["id_usuario"] =  $fila['id_usuario'];
                $arr_rs["role"] =  $fila['role'];
            }

            if($arr_rs["role"] == 2){
                $sql = "insert into notas(id_usuario, matematica, espaniol, ciencias, estudios_sociales, ingles) ";
               $sql .= "VALUES ('".$arr_rs["id_usuario"]."', '0', '0', '0', '0', '0');";
               $rs  = $this->conn->query($sql);
            }

            $this->conn = $this->inst_conn->CerrarBD();



            return $arr_rs;

            // $this->conn = $this->inst_conn->AbrirBD();
            // $sql = "insert into notas(id_usuario, matematica, espaniol, ciencias, estudios_sociales, ingles) ";
            // //                  Usuario             Contrasenia                             nombre              apellido                apellido2           role
            // // $sql .= "values('".$arr_usuario[0]."',md5('proyecto_".$arr_usuario[1]."),'".$arr_usuario[2]."','".$arr_usuario[3]."','".$arr_usuario[4]."',".$arr_usuario[5].");";
            // $sql .= "VALUES ('".$id_usuario."', '100', '90', '80', '90', '50');";
            
            // $rs = $this->conn->query($sql);
            // $this->inst_conn->CerrarBD();

            // return $rs;
        }
        function m_updateCustomer($arr_customer){
            $this->conn = $this->inst_conn->AbrirBD();
            //
            // $sql = "insert into usuarios(usuario,pass,nombre,apell1,apell2,role) ";
            // $sql .= "values('".$arr_usuario[0]."',md5('proyecto_".$arr_usuario[1]."'), '".$arr_usuario[2]."','".$arr_usuario[3]."','".$arr_usuario[4]."',".$arr_usuario[5].");";
            // $rs  = $this->conn->query($sql);
            
            $sql = "UPDATE customers_crm set email = '".$arr_customer[1]."', name = '".$arr_customer[2]."', last_name = '".$arr_customer[3]."', phone = '".$arr_customer[4]."', date_of_birth = '".$arr_customer[5]."', address = '".$arr_customer[6]."', country = '".$arr_customer[7]."', city = '".$arr_customer[8]."', postal_code = '".$arr_customer[9]."' where id_customer = ".$arr_customer[0].";";
            $rs  = $this->conn->query($sql);

            $this->inst_conn->CerrarBD();
            return true;
        }
        function m_getCustomer($customer_id){
            $this->conn = $this->inst_conn->AbrirBD();
            $arr_rs = array();
            $sql = "SELECT email, name, last_name, phone, date_of_birth, address, country, city, postal_code FROM customers_crm  WHERE id_customer =".$customer_id;
            $rs = $this->conn->query($sql);
            while($fila = $rs->fetch_assoc()){
                $arr_rs["email"] =  $fila['email'];
                $arr_rs["name"] =  $fila['name'];
                $arr_rs["last_name"] =  $fila['last_name'];
                $arr_rs["phone"] =  $fila['phone'];
                $arr_rs["date_of_birth"] =  $fila['date_of_birth'];
                $arr_rs["address"] =  $fila['address'];
                $arr_rs["country"] =  $fila['country'];
                $arr_rs["city"] =  $fila['city'];
                $arr_rs["postal_code"] =  $fila['postal_code'];
            }
            $this->conn = $this->inst_conn->CerrarBD();
            return $arr_rs;
        }
        function m_getEmployee($id_user){
            $this->conn = $this->inst_conn->AbrirBD();
            $arr_rs = array();
            $sql = "SELECT user, username, lastname, id_role, vacation_days FROM usuarios_crm  WHERE id_user =".$id_user;
            $rs = $this->conn->query($sql);
            while($fila = $rs->fetch_assoc()){
                $arr_rs["user"] =  $fila['user'];
                $arr_rs["username"] =  $fila['username'];
                $arr_rs["lastname"] =  $fila['lastname'];
                $arr_rs["id_role"] =  $fila['id_role'];
                $arr_rs["vacation_days"] =  $fila['vacation_days'];
            }
            $this->conn = $this->inst_conn->CerrarBD();
            return $arr_rs;
        }
        function m_updateEmployee($arr_customer){
            $this->conn = $this->inst_conn->AbrirBD();

            $sql = "UPDATE usuarios_crm set user = '".$arr_customer[1]."', username = '".$arr_customer[2]."', lastname = '".$arr_customer[3]."', id_role = ".$arr_customer[4].", vacation_days = ".$arr_customer[5]." where id_user = ".$arr_customer[0].";";
            $rs  = $this->conn->query($sql);

            $this->inst_conn->CerrarBD();
            return true;
        }
        function m_getSalary($id_salary){
            $this->conn = $this->inst_conn->AbrirBD();
            $arr_rs = array();
            $sql = "SELECT id_role, salary_amount FROM salary_crm  WHERE id_salary =".$id_salary;
            $rs = $this->conn->query($sql);
            while($fila = $rs->fetch_assoc()){
                $arr_rs["id_role"] =  $fila['id_role'];
                $arr_rs["salary_amount"] =  $fila['salary_amount'];
            }
            $this->conn = $this->inst_conn->CerrarBD();
            return $arr_rs;
        }
        function m_updateSalary($arr_customer){
            $this->conn = $this->inst_conn->AbrirBD();

            $sql = "UPDATE salary_crm set id_role = ".$arr_customer[1].", salary_amount = ".$arr_customer[2]." where id_salary = ".$arr_customer[0].";";
            $rs  = $this->conn->query($sql);

            $this->inst_conn->CerrarBD();
            return true;
        }
    }

?>