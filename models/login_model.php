<?php
require_once('db2.php');
class login_model{
    
    function getMember(){
        $pdo = new db2;
        $pdoLink = $pdo->linkConnection();
        
        $grammer = "select * from member";
        $prepare = $pdoLink->prepare($grammer);
        $prepare->execute();
        $result = $prepare->fetchAll(PDO::FETCH_ASSOC);
    
        $pdo->closeConnection();
        return $result;
    }
}



?>