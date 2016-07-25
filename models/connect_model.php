<?php 
require_once('db.php');
    class connect_model{
        function getAllMenu(){
            $db1 = new db;
            $result = $db1->link("select * from menu");
            return $result;
        }
        function getOnceMenu($class){
            $db2 = new db;
            $result = $db2->link("select * from menu where class like '$class'");
            return $result;
        }
        function getMessage(){
            $db2 = new db;
            $result = $db2->link("select * from message order by time desc");
            return $result;
        }
        
        
    }






?>