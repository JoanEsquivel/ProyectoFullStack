<?php
/* Smarty version 4.1.0, created on 2022-04-04 04:45:48
  from 'C:\xampp\htdocs\Progra3-ProyectoFinal-master\view\templates\Frm_principal.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_624a5bdcb29615_01936816',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd37a58c1d15736ccb01d9c18c6faadd658bb073d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Progra3-ProyectoFinal-master\\view\\templates\\Frm_principal.tpl',
      1 => 1649027296,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_624a5bdcb29615_01936816 (Smarty_Internal_Template $_smarty_tpl) {
?><body>

   <!-- Section: Header -->
   <header class="header">
      <section class="container">
         <div class="wrapper">
            <a href="./index.html" class="brand">Proyecto Final</a>
            <button type="button" class="burger" id="burger">
               <span class="burger-line"></span>
               <span class="burger-line"></span>
               <span class="burger-line"></span>
               <span class="burger-line"></span>
            </button>
            <span class="overlay" id="overlay"></span>
            <nav class="navbar" id="navbar">
               <ul class="menu">
                  <li class="menu-item"><a href="#">Home</a></li>

                  <li class="menu-item"><a href="#" onclick="desplegarContenidoUsuarios();">Clientes</a></li>

                  <li class="menu-item"><a href="#">Proyecto</a></li>
                  <li class="menu-item menu-item-child">
                     <a href="#" data-toggle="sub-menu">Services<i class="expand"></i></a>
                     <ul class="sub-menu">
                        <li class="menu-item"><a href="#">Clientes</a></li>
                        <li class="menu-item"><a href="#">Factura</a></li>
                        <li class="menu-item"><a href="#">Empleados</a></li>
                        
                     </ul>
                  </li>
                  
                  <li class="menu-item"><a href="#">Contact</a></li>

                  <li class="menu-item"><a href="control/logout.php">Salir</a></li>
               </ul>

            </nav>

         </div>

      </section>


   </header>


    <br><br><br><br><br>

    <section class="container">

        <div id="contenedor" class="wrapper">
        </div>
    </section>

   <?php echo '<script'; ?>
 defer src="./public/js/script.js"><?php echo '</script'; ?>
>
   <?php echo '<script'; ?>
 src="js/utileria.js"><?php echo '</script'; ?>
>

</body>
<?php }
}
