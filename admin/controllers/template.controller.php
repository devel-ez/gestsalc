<?php


Class TemplateController{


/* -------------------------------------------------------------------------- */
/*                       Rota do sistema administrativo                       */
/* -------------------------------------------------------------------------- */

static public function path(){
    return "http://admin.gestsalc.com";
}



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