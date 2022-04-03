<?php

    require_once 'conexion/conn.php';

    class model{
        private $inst_conn;
        private $conn;
        

        function __construct(){
            $this->inst_conn = new conn();
        }

        function m_validarLogin($usuario, $password){
            $this->conn = $this->inst_conn->AbrirBD();
            $arr_rs = array();

            /**
             * cambiar el query acorde a la base de datos que tengo que crear
             */
            $sql  = "select id_usuario, nombre, apellido1,apellido2,role from usuarios where ";
            $sql  .= " usuario='$usuario' and pass=md5('proyecto_$pass')";

            $rs  = $this->conn->query($sql);
             
            while ($fila = $rs->fetch_assoc()) {
                $arr_rs["id_usuario"] = $fila['id_usuario'];
                $arr_rs["nombre"]     = $fila['nombre'];
                $arr_rs["apellido1"]     = $fila['apellido1'];
                $arr_rs["apellido2"]     = $fila['apellido2'];
                $arr_rs["role"]       = $fila['role'];
              }
            $this->inst_conn->CerrarBD();
              return $arr_rs;

        }

        function m_borrarUsuario($id_usuario){
            $this->conn = $this->inst_conn->AbrirBD();
            $sql = "delete from usuarios where id_usuario=".$id_usuario;
            $rs  = $this->conn->query($sql);
        
        
            $this->inst_conn->CerrarBD();
        
        }

        function m_crearUsuario($arr_usuario){
            $this->conn = $this->inst_conn->AbrirBD();
            $sql = "insert into usuarios(usuario,pass,nombre,apellido1,apellido2,role) ";
            $sql .= "values('".$arr_usuario[0]."',md5('proyecto_".$arr_usuario[1]."'), '".$arr_usuario[2]."','".$arr_usuario[3]."','".$arr_usuario[4]."',".$arr_usuario[5].");";
            $rs  = $this->conn->query($sql);
        
            $this->inst_conn->CerrarBD();
            return $rs;
        
          }
          function m_editarUsuario($arr_usuario,$id_usuario){
                $this->conn = $this->inst_conn->AbrirBD();
        
                $sql = "update usuarios set  ";
                $sql .= "nombre ='".$arr_usuario[0]."'";
                $sql .= ",apellido1='".$arr_usuario[1]."'";
                $sql .= ",apellido2='".$arr_usuario[2]."'";
                $sql .= " where id_usuario=".$id_usuario;
        
                $rs  = $this->conn->query($sql);
                $this->inst_conn->CerrarBD();
          }

        function m_select($id_usuario){
            $this->conn = $this->inst_conn->AbrirBD();
            $sql = "select nombre, apellido1, apellido2, usuario, password, role from usuarios where ";
            $sql .="id_usuario='$id_usuario'";
            $rs = $this->conn->query($sql);

            while($fila = $rs->fetch_assoc()){
                $arr["nombre"] = $fila['nombre'];
                $arr["apellido1"] = $fila['apellido1'];
                $arr["apellido2"] = $fila['apellido2'];
                $arr["usuario"] = $fila['usuario'];
                $arr["password"] = $fila['password'];
                $arr["role"] = $fila['role'];
            }
            $this->inst_conn->CerrarBD();
            return $arr;

        }  



    }

?>