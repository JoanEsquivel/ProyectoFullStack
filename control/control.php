<?php

    session_start();

    require_once 'libs/smarty_4_1_0/config_smarty.php'; 
    require_once 'model/model.php';

    class control{

        private $smarty;
        private $accion;
        private $ins_model;

        function __construct(){
            $this->smarty = new config_smarty();
            $this->ins_model = new model();
            $this->accion = "";
        } 

        function menu(){
            //SIEMPRE PRIMERO LOS ASSIGN ANTES QUE EL DISPLAY

            if(isset($_REQUEST['accion'])){
                $this->accion = $_REQUEST['accion'];
            }

            switch($this->accion){
                case "":
                    $this->MostrarFRMLogin();
                  break;
                case "login":
                    $this->validarLogin();
                    break;
                case "registro":
                    $this->ver_frm_registro();
                    break;
                case "crear_usuario":
                    $this->c_crearUsuario();
                    break;
                case "editar_usuario":
                    $this->c_editarUsuario();
                    break;
                case "actualizar_usuario":
                    $this->c_editUsuario();
                    break;    
                
            }
        }

        function c_editUsuario(){



        }

        function ver_frm_registro(){

            $this->smarty->setDisplay("Frm_registro_Cliente.tpl");
        }
  
        function c_editarUsuario(){
  
          $id_usuario = $_REQUEST['id_usuario'];

          $rs = $this->ins_model->m_select($id_usuario);
  
          //
          //ir al modelo, enviarle este id y que nos retorne nombre, los apellidos, y el usuario
  
          $this->smarty->setAssign("id_usuario",$id_usuario);
          $this->smarty->setAssign("nombre",$rs['nombre']);
          $this->smarty->setAssign("apellido1",$rs['apellido1']);
          $this->smarty->setAssign("apellido2",$rs['apellido2']);
          $this->smarty->setAssign("usuario",$rs['usuario']);
          $this->smarty->setAssign("password",$rs['password']);
          $this->smarty->setAssign("role",$rs['role']);
  
  
            $this->smarty->setDisplay("frm_editar_Cliente.tpl");
          //$rs =  $this->ins_model->m_editarUsuario($arr_usuario,$id_usuario);//es del modelo
        }
        function c_borrarUsuario(){
          //$rs =  $this->ins_model->m_borrarUsuario($id_usuario);//es del modelo
        }

        function c_crearUsuario(){
            //$rs =  $this->ins_model->m_crearUsuario($arr_usuario);//es del modelo
    
    
            $nombre =  $_REQUEST["nombre"];
            $apellido1 =  $_REQUEST["apellido1"];
            $apellido2 =  $_REQUEST["apellido2"];
            $usuario =  $_REQUEST["usuario"];
            $password =  $_REQUEST["password"];
            $role =  $_REQUEST["role"];
    
            $arr = array();
            $arr[] = $usuario;
            $arr[] = $password;
            $arr[] = $nombre;
            $arr[] = $apellido1;
            $arr[] = $apellido2;
            $arr[] = $role;
    
    
            $rs =  $this->ins_model->m_crearUsuario($arr);
    
            if($rs){
              $this->smarty->setAssign("mensaje","Usuario creado Correctamente");
              $this->smarty->setDisplay("login.tpl");
            }else {
                $this->smarty->setAssign("mensaje","Error creando usuario");
                $this->smarty->setDisplay("login.tpl");
            }
    
            //usuario,pass,nombre,apell1,apell2,role
          }

        function validarLogin(){
            $usuario  = $_REQUEST['usuario'];
            $password = $_REQUEST['password'];
  
            $rs =  $this->ins_model->m_validarLogin($usuario, $password);//es del modelo
  
            if(sizeof($rs)>0){
                if($rs["id_usuario"] > 0){

                  $_SESSION['usuario'] = $usuario;
                  $_SESSION['nombre'] = $rs["nombre"];
                  $_SESSION['role'] = $rs["role"];

  
                  $this->smarty->setAssign("title","Progra III");
                  $this->smarty->setDisplay("header.tpl");
                  $this->smarty->setDisplay("Frm_registro_Cliente.tpl");
                  $this->smarty->setDisplay("footer.tpl");
  
                }else{
                    $this->smarty->setAssign("mensaje","");
                    $this->smarty->setDisplay("login.tpl");
                }
            }else{
              $this->smarty->setAssign("mensaje","");
              $this->smarty->setDisplay("login.tpl");
            }
 
        }


        function MostrarFRMLogin(){

          if(isset($_SESSION['usuario'])){
            $this->smarty->setAssign("title","Progra III");
            $this->smarty->setDisplay("header.tpl");
            $this->smarty->setDisplay("Frm_registro_Cliente.tpl");
            $this->smarty->setDisplay("footer.tpl");
          }

            try{
              $this->smarty->setAssign("mensaje","");
              $this->smarty->setDisplay("login.tpl");
            }catch(Exception $e) {
                  echo "error de varible smarty";
            }
    
          }


    }


?>