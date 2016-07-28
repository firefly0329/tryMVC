<?php 
require_once('db2.php');
    
    class deleteCooking_2_model{
        function deleteMenu($cookingId){
            
            $pdo = new db2;
            $pdoLink = $pdo->linkConnection();
            
            $grammer = "DELETE FROM menu where id like :cookingId";
            $prepare = $pdoLink->prepare($grammer);
            $prepare->bindParam(':cookingId', $cookingId);
            $prepare->execute();
            $result = $prepare->fetch(PDO::FETCH_ASSOC);
            
            $pdo->closeConnection();
            // return $result;
        }
    }
?>