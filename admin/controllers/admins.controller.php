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
                echo '<pre>'; print_r($response); echo '</pre>';
            } else {

                echo '<div class="alert alert-danger">Erro no preenchimento dos campos</div>';
            }
        }
    }
}
