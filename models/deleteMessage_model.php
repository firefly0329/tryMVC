<?php
require_once('db2.php');
class deleteMessage_model{
    
    function deleteMsg($messageId){
        $pdo = new db2;
        $pdoLink = $pdo->linkConnection();

        $grammer = "DELETE FROM `message` WHERE id like :messageId";
        $prepare = $pdoLink->prepare($grammer);
        $prepare->bindParam(':messageId', $messageId);
        $prepare->execute();
        // $result = $prepare->fetchAll(PDO::FETCH_ASSOC);

        $pdo->closeConnection();
        return $result;
    }
}
?>