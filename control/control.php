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
                case "addCustomerForm":
                    $this->AddCustomerForm();
                    break;
                case "registerCustomer":
                    $this->RegisterCustomer();
                    break;
                case "showUpdateCustomerForm":
                    $this->ShowUpdateCustomerForm();
                    break;
                case "updateCustomer":
                    $this->UpdateCustomer();
                    break;
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
        function AddCustomerForm(){
            $this->smarty->setAssign('user', $_SESSION['USER']);
            $this->smarty->setAssign('role', $_SESSION['ROLE']);
            $this->smarty->setDisplay('header.tpl');
            $this->smarty->setDisplay('registerCustomerForm.tpl');
            $this->smarty->setDisplay('footer.tpl'); 
        }
        function RegisterCustomer(){
            $email =  $_REQUEST["email"];
            $name =  $_REQUEST["name"];
            $last_name =  $_REQUEST["last_name"];
            $phone =  $_REQUEST["phone"];
            $date_of_birth =  $_REQUEST["date_of_birth"];
            $address =  $_REQUEST["address"];
            $country =  $_REQUEST["country"];
            $city =  $_REQUEST["city"];
            $postal_code =  $_REQUEST["postal_code"];

            $arr = array();
            $arr[] = $email;
            $arr[] = $name;
            $arr[] = $last_name;
            $arr[] = $phone;
            $arr[] = $date_of_birth;
            $arr[] = $address;
            $arr[] = $country;
            $arr[] = $city;
            $arr[] = $postal_code;

            $rs =  $this->ins_model->m_registerCustomer($arr);

            if($rs){
                echo("<p>Customer created successfully!</p>");
            }else {
                echo("<p>User not created, try again.</p>");
            }

            $this->smarty->setAssign('user', $_SESSION['USER']);
            $this->smarty->setAssign('role', $_SESSION['ROLE']);
            $this->smarty->setDisplay('header.tpl');
            $this->smarty->setDisplay('registerCustomerForm.tpl');
            $this->smarty->setDisplay('footer.tpl'); 
        }
        function ShowUpdateCustomerForm(){
            $customer_id = $_REQUEST['customer_id'];
            $rs =  $this->ins_model->m_getCustomer($customer_id);
            $this->smarty->setAssign("id_customer",$customer_id);
            $this->smarty->setAssign("email",$rs['email']);
            $this->smarty->setAssign("name",$rs['name']);
            $this->smarty->setAssign("last_name",$rs['last_name']);
            $this->smarty->setAssign("phone",$rs['phone']);
            $this->smarty->setAssign("date_of_birth",$rs['date_of_birth']);
            $this->smarty->setAssign("address",$rs['address']);
            $this->smarty->setAssign("country",$rs['country']);
            $this->smarty->setAssign("city",$rs['city']);
            $this->smarty->setAssign("postal_code",$rs['postal_code']);
            $this->smarty->setAssign('user', $_SESSION['USER']);
            $this->smarty->setAssign('role', $_SESSION['ROLE']);
            $this->smarty->setDisplay('header.tpl');
            $this->smarty->setDisplay('updateCustomerForm.tpl');
            $this->smarty->setDisplay('footer.tpl'); 
        }
        function UpdateCustomer(){
            $id_customer =  $_REQUEST["id_customer"];
            $email =  $_REQUEST["email"];
            $name =  $_REQUEST["name"];
            $last_name =  $_REQUEST["last_name"];
            $phone =  $_REQUEST["phone"];
            $date_of_birth =  $_REQUEST["date_of_birth"];
            $address =  $_REQUEST["address"];
            $country =  $_REQUEST["country"];
            $city =  $_REQUEST["city"];
            $postal_code =  $_REQUEST["postal_code"];

            $arr = array();
            $arr[] = $id_customer;
            $arr[] = $email;
            $arr[] = $name;
            $arr[] = $last_name;
            $arr[] = $phone;
            $arr[] = $date_of_birth;
            $arr[] = $address;
            $arr[] = $country;
            $arr[] = $city;
            $arr[] = $postal_code;

            $rs =  $this->ins_model->m_updateCustomer($arr);

            if($rs){
                // $this->smarty->setAssign("mensaje","Usuario creado Correctamente");
                // $this->smarty->setDisplay("login.tpl");
                echo("<p>Customer Updated!</p>");
            }else {
                // $this->smarty->setAssign("mensaje","Error creando usuario");
                // $this->smarty->setDisplay("login.tpl");
                echo("<p>Customer NOT Updated!</p>");
            }

            if(isset($_SESSION['USER'])){
                $this->smarty->setAssign('user', $_SESSION['USER']);
                $this->smarty->setAssign('role', $_SESSION['ROLE']);
                $this->smarty->setDisplay('header.tpl');
                $this->smarty->setDisplay('registerCustomerForm.tpl');
                $this->smarty->setDisplay('footer.tpl');
            }
            
            
        }
        
    }
?>