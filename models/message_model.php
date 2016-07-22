<?php
require_once('db.php');

    class message_model{
        function __construct(){
            
        }
        function getMessage($menuId){
            $db1 = new db;
            $grammer = "select * from message where menuId like $menuId order by time desc";
            $result = $db1->link($grammer);
            return $result;
        }
        function getMenu($menuId){
            $db2 = new db;
            $grammer = "select * from menu where id like $menuId";
            $result = $db2->link($grammer);
            return $result;
        }
        function setMessage($messageWriter,$messageContent,$time,$letter){
            $db3 = new db;
            $grammer = "insert into message (messageWriter, messageContent, time, menuId)
                    values ('$messageWriter', '$messageContent', '$time', $letter )";
            $result = $db3->link($grammer);
            return $result;
        }
        function deleteMessage($menuId){
            $db4 = new db;
            $grammer = "DELETE FROM `message` WHERE id like $menuId";
            $result = $db4->link($grammer);
            return $result;
        }
        
        
    }



?>