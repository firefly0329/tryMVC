<?php
session_start();
class decision{
    function repice_unsetSESSION(){
        unset($_SESSION['account']);
    }
}




?>