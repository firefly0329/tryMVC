<?php
require_once('db2.php');

    class message_model{
        function getMessage($menuId){
            $pdo = new db2;
            $pdoLink = $pdo->linkConnection();
            
            $grammer = "SELECT * FROM `message` WHERE `menuId` LIKE :menuId ORDER BY `time` DESC";
            $prepare = $pdoLink->prepare($grammer);
            $prepare->bindParam(':menuId', $menuId);
            $prepare->execute();
            $result = $prepare->fetchAll(PDO::FETCH_ASSOC);

            $pdo->closeConnection();
            return $result;
        }
        function getMenu($menuId){
            $pdo = new db2;
            $pdoLink = $pdo->linkConnection();
            
            $grammer = "SELECT * from `menu` WHERE `id` LIKE :menuId";
            $prepare = $pdoLink->prepare($grammer);
            $prepare->bindParam(':menuId', $menuId);
            $prepare->execute();
            $result = $prepare->fetch(PDO::FETCH_ASSOC);
            
            // $result = $this->links($grammer);
            $pdo->closeConnection();
            return $result;
        }
        function setMessage($messageWriter,$messageContent,$time,$letter){
            $pdo = new db2;
            $pdoLink = $pdo->linkConnection();
            
            $grammer = "INSERT INTO `message` (`messageWriter`, `messageContent`, `time`, `menuId`)
                    values (:messageWriter, :messageContent, :time, :letter )";
            $prepare = $pdoLink->prepare($grammer);
            $prepare->bindParam(':messageWriter', $messageWriter);
            $prepare->bindParam(':messageContent', $messageContent);
            $prepare->bindParam(':time', $time);
            $prepare->bindParam(':letter', $letter);
            $prepare->execute();
            
            $pdo->closeConnection();
            // $this->links($grammer);
            // return $result;
        }
        function deleteMessage($menuId){
            $pdo = new db2;
            $pdoLink = $pdo->linkConnection();
            
            $grammer = "DELETE FROM `message` WHERE id like :menuId";
            $prepare = $pdoLink->prepare($grammer);
            $prepare->bindParam(':menuId', $menuId);
            $prepare->execute();
            
            $pdo->closeConnection();
            // $this->links($grammer);
        }
        
        
    }



?>