<?php
require_once('db.php');
class login_model{
    
    function getMember(){
        $grammer = "select * from member";
        $db1 = new db;
        $result = $db1->link($grammer);
        return $result;
    }
}



?>