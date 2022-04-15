<?php
/* Smarty version 4.1.0, created on 2022-04-15 22:19:19
  from 'C:\xampp\htdocs\proyectoPrograFinal\view\templates\loginForm.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6259d3471a01d6_97611771',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '211d2184a5dc781df551caf194440be8b7467612' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectoPrograFinal\\view\\templates\\loginForm.tpl',
      1 => 1650053883,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6259d3471a01d6_97611771 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRM UH - LOGIN</title>
    <link rel="stylesheet" href="css/login.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <?php echo '<script'; ?>
 src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"><?php echo '</script'; ?>
>
</head>

<body>
    <div class="wrapper fadeInDown">
        <div id="formContent">
          <!-- Tabs Titles -->
      
          <!-- Icon -->
          <div class="fadeIn first">
            <img src="https://img.icons8.com/windows/344/user.png" id="icon" alt="User Icon" />
          </div>
      
          <!-- Login Form -->
          <form action="index.php" method="post">
            <input type="hidden" name="accion" value="loginCheck">
            <input type="text" id="login" class="fadeIn second" name="username" placeholder="login">
            <input type="text" id="password" class="fadeIn third" name="password" placeholder="password">
            <input type="submit" class="fadeIn fourth" value="Log In">
          </form>
      
          <!-- Remind Passowrd -->
          <div id="formFooter">
            <a class="underlineHover" href="#">Forgot Password?</a>
            <p></p>
            <a class="underlineHover" href="index.php?accion=SignIn">Sign In</a>
          </div>
      
        </div>
      </div>
</body>

</html><?php }
}
