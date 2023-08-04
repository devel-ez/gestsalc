<?php


Class TemplateController{
/* -------------------------------------------------------------------------- */
/*                           Trás a página principal                          */
/* -------------------------------------------------------------------------- */
    public function index(){
        include "views/template.php";

    }

    /* -------------------------------------------------------------------------- */
    /*                       Rota para as imagens do sistema                      */
    /* -------------------------------------------------------------------------- */

    static public function srcImg(){
        return "http://gestsalc.com/";
    }

}