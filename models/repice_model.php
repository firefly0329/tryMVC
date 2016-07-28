<?php
session_start();
class repice_model{
    function decision(){
        if(isset($_POST["logout"])){
            unset($_SESSION['account']);
            return true;
        }
        if(isset($_POST["login"])){
            unset($_SESSION['account']);
            header("location: /EasyMVC/login/hello");
        }
    }
}




?>