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
                
                /* -------------------------------------------------------------------------- */
                /*                  Validar se escreveu os dados corretamente                 */
                /* -------------------------------------------------------------------------- */

                if($response->status == 200){
                /* -------------------------------------------------------------------------- */
                /*                        Validar se o usuário é admin                        */
                /* -------------------------------------------------------------------------- */
                    if($response->results[0]->rol_user != "admin"){
                        echo '<div class="alert alert-danger">Você não tem permissão para logar</div>';
                        return;
                    }

                    /* -------------------------------------------------------------------------- */
                    /*                          Criar variáveis de sessão                         */
                    /* -------------------------------------------------------------------------- */

                    $_SESSION["admin"] = $response->results[0];

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
