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
            if(isset($_REQUEST['accion'])){
                $this->accion = $_REQUEST['accion'];
            }

            switch($this->accion){
                case "":
                    $this->LoginForm();
                  break;
                case "loginCheck":
                    $this->LoginValidation();
                    break;
                case "SignIn":
                    $this->ShowRegisterUserForm();               
                     break;
                case "registerUser":
                    $this->RegisterNewUser();
                    break;
                // case "editar_usuario":
                //     $this->c_editarUsuario();
                //     break;
                // case "actualizar_usuario":
                //     $this->c_editUsuario();
                //     break;    
            }
        }

        function LoginForm(){
            //This function will check if the user is already logged in.
            if(isset($_SESSION['USER'])){
                $this->smarty->setAssign('role', $_SESSION['ROLE']);
                $this->smarty->setAssign('user', $_SESSION['USER']);
                $this->smarty->setDisplay('header.tpl');
                $this->smarty->setDisplay('index.tpl');
                $this->smarty->setDisplay('footer.tpl');
            }else{
                $this->smarty->setDisplay('loginForm.tpl');
            }
        }
        function LoginValidation(){
            //Getting the information from the request - values set in the HTML
            $user = $_REQUEST['username'];
            $password = $_REQUEST['password'];
            //Validate information agai nst DB
            $rs = $this->ins_model->m_validarLogin($user, $password);
            //Check if the response does return data. If not, username and password is not correct.
            if(sizeof($rs)>0){
                if($rs["id_user"] > 0){
                    //Saving user & usernmae as session variables.
                    $_SESSION['USER'] = $user;
                    $_SESSION['USERNAME'] = $rs["username"];
                    //Role will depend on role ID. Setting a smarty variable to handle different views in HTML.
                    // 3- WareHouse Management User
                    // 2- HR Partner
                    // 1- Customer Service
                    if($rs["id_role"]==3){
                        $_SESSION['ROLE'] = "WareHouse Management User";
                        $this->smarty->setAssign('role', $_SESSION['ROLE']);
                        
                    }
                    elseif($rs["id_role"]==2){
                        $_SESSION['ROLE'] = "HR Partner";
                        $this->smarty->setAssign('role', $_SESSION['ROLE']);
                        
                    }else{
                        $_SESSION['ROLE'] = "Customer Service";
                        $this->smarty->setAssign('role', $_SESSION['ROLE']);   
                    }
                    //Showing the index website, depending on the role
                    $this->smarty->setAssign('user', $_SESSION['USER']);
                    $this->smarty->setAssign('id_user', $rs["id_user"]); 
                    $this->smarty->setDisplay('header.tpl');
                    $this->smarty->setDisplay('index.tpl');
                    $this->smarty->setDisplay('footer.tpl');
                }
            }else{
                echo "<p>Username & Password is not matching or is not registered in the database. Please check or sign in</p>";
                $this->smarty->setDisplay('loginForm.tpl');
                
            }
        }
        function ShowRegisterUserForm(){
            $this->smarty->setDisplay('registerUserForm.tpl');
        }
        function RegisterNewUser(){
            $user =  $_REQUEST["user"];
            $password =  $_REQUEST["password"];
            $username =  $_REQUEST["username"];
            $lastname =  $_REQUEST["lastname"];
            $id_role =  $_REQUEST["id_role"];


            $arr = array();
            $arr[] = $user;
            $arr[] = $password;
            $arr[] = $username;
            $arr[] = $lastname;
            $arr[] = $id_role;


            $rs =  $this->ins_model->m_registerUser($arr);

            if($rs){
                echo("<p>User created successfully!</p>");
                $this->smarty->setDisplay('loginForm.tpl');
            }else {
                // $this->smarty->setAssign("mensaje","Error creando usuario");
                // $this->smarty->setDisplay("login.tpl");
                echo("<p>User not created, try again.</p>");
                $this->smarty->setDisplay('registerUserForm.tpl');
            }
        }

        
    }
?>