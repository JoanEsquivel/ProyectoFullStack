<?php
    // include 'libs/smarty_4_1_0/Smarty.class.php';
    // include_once 'libs/smarty_4_1_0/Smarty.class.php';
    // require 'libs/smarty_4_1_0/Smarty.class.php';
    require_once 'libs/smarty_4_1_0/Smarty.class.php';
    class config_smarty{
        private $obj_smarty;

        function __construct(){
            $this->obj_smarty = new Smarty();
            $this->setRutas();
        }

        function setRutas(){
            $this->obj_smarty->template_dir = 'view/templates';
            $this->obj_smarty->compile_dir = 'view/templates_c';
            $this->obj_smarty->cache_dir = 'control/cache';
            $this->obj_smarty->config_dir = 'control/configs';
        }

        function setAssign($variable, $valor){
            $this->obj_smarty->assign($variable, $valor);
        }

        function setDisplay($pantalla){
            $this->obj_smarty->display($pantalla);
        }
    }
?>