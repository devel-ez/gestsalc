<?php

class AdminsController
{

    /* -------------------------------------------------------------------------- */
    /*                          Login dos administradores                         */
    /* -------------------------------------------------------------------------- */
    public function login()
    {
        if (isset($_POST["loginEmail"])) {

            /* -------------------------------------------------------------------------- */
            /*                       Validação pelo lado do servidor                      */
            /* -------------------------------------------------------------------------- */

            if (preg_match('/^[.a-zA-Z0-9_]+([.][.a-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$/', $_POST["loginEmail"])) {

                $url = "users?login=true&suffix=user";
                $method = "POST";

                $fields = array(
                    "email_user" => $_POST["loginEmail"],
                    "password_user" => $_POST["loginPassword"]

                );
                $response = CurlController::request($url, $method, $fields);
                
                if($response->status == 200){
                    if($response->results[0]->rol_user != "admin"){
                        echo '<div class="alert alert-danger">Você não permissão para logar</div>';
                        return;
                    }

                    echo '<script>
                    window.location = "'.$_SERVER["ReQUEST_URI"].'"
                    </script>';
                    
                }else{
                echo '<div class="alert alert-danger">'.$response->results.'</div>';
                }
            } else {

                echo '<div class="alert alert-danger">Erro no preenchimento dos campos</div>';
            }
        }
    }
}
