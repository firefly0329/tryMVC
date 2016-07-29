<?php
require_once('db2.php');
class deleteCooking_model{
    function getMenu($cookingId){
        $pdo = new db2;
        $pdoLink = $pdo->linkConnection();
        
        $grammer = "";
        $prepare = $pdoLink->prepare($grammer);
        $prepare->bindParam(':cookingId', $cookingId);
        $prepare->execute();
        $result = $prepare->fetch(PDO::FETCH_ASSOC);

        
        $pdo->closeConnection();
        return $result;
    }
}

?>