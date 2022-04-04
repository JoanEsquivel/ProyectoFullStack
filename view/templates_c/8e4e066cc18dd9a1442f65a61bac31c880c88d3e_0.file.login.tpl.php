<?php
/* Smarty version 4.1.0, created on 2022-04-04 04:28:44
  from 'C:\xampp\htdocs\Progra3-ProyectoFinal-master\view\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_624a57dc8d4bc9_94515487',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8e4e066cc18dd9a1442f65a61bac31c880c88d3e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Progra3-ProyectoFinal-master\\view\\templates\\login.tpl',
      1 => 1649027296,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_624a57dc8d4bc9_94515487 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Iniciar Sesión</title>
    <link rel="stylesheet" href="./css/general.css">
    <link rel="stylesheet" href="./css/iniciar_sesion.css">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
</head>
<body>
    <header class="main_header">
        <nav>
            <a href="index.html">
            <img class="img_logo" src="imagenes/logo.png" width="61" height="80" alt="Logo Costa Rica Educa">
            </a>
            <div class="float-right middle2">
                <div class="float-right mr-2">
                    
                    <a href="       " class="registrar_cuenta ml-1">Registro Clientes</a>
                    <a href="       " class="registrar_cuenta ml-1">Registro Factura</a>
                    <a href="       " class="registrar_cuenta ml-1">Editar Clientes</a>
                    <a href="       " class="registrar_cuenta ml-1">Login</a>
                    
                </div>
            </div>
        </nav>
    </header>

    
    <div class="wrapper">
        <div class="section">

            <div class="cont">
                    <h1 class="center inicio color_text">Iniciar sesión</h1>
                <form action="index.php" method="post">
                <input type="hidden" name="accion" value="login">
                        <label class="label2 color_text" for="txt_correo">Usuario</label>
                        <input class="form-control border_input" name="usuario" type="text" id="txt_correo" placeholder="usuario">
                        <label class="label2 color_text" for="txt_contrasenna">Contraseña</label>
                        <input class="form-control border_input" name="password" type="password" id="txt_contrasenna" placeholder="password">
                        <div class="center">
                        <button  class="ingresar" id="btn_ingresar">Ingresar</button>
                        </div>
                        
                </form>

                <form action="index.php" method="post">
                <input type="hidden" name="accion" value="registro">

                <div class="center">
                        <button  class="ingresar" id="btn_ingresar">Registrar</button>
                </div>
                </form>
            </div>
        </div>
    </div>



</body>
</html><?php }
}
