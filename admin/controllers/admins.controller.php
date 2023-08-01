<?php

Class AdminsController{

    public function login(){


    if(isset($_POST["loginEmail"])){
    echo '<div class="alert alert-warning">'.$_POST["loginEmail"].' '.$_POST["loginPassword"].'</div>';
    }
}
}