<?php

    require_once 'libs/smarty_4_1_0/Smarty.class.php';

    /**
     * el objetivo es decirle a la clase config_smarty donde estan 
     * las carpetas distribuidas dentro del proyecto
     */

    class config_smarty{
    private $obj_smarty;

    /**
     * inicializa las variables
     */
    function __construct(){
        
        //esta clase esta definida en Smarty.class.php
        $this->obj_smarty = new Smarty();
        $this->setRutas();
    } 

    function setRutas(){
        $this->obj_smarty ->template_dir = 'view/templates';
        $this->obj_smarty ->compile_dir = 'view/templates_c';
        $this->obj_smarty ->cache_dir = 'control/cache';
        $this->obj_smarty ->config_dir = 'control/configs'; 
    }

    function setAssign($variable, $valor){
        //se encarga de asociar un valor php a un elemento en html
        //$variable es un elemento en html
        //$valor es un dato en php
        $this->obj_smarty->assign($variable, $valor);
    }

    function setDisplay($pantalla){
        //se encarga de mostrar una u otra pantalla html   
        $this->obj_smarty->display($pantalla);
    }

    }

?>