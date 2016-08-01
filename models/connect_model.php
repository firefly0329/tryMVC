<?php 
require_once('db2.php');
    class connect_model{
        function getAllMenu(){
            $pdo = new db2;
            $pdoLink = $pdo->linkConnection();
            
            $grammer = "select * from menu";
            $prepare = $pdoLink->prepare($grammer);
            $prepare->execute();
            $result = $prepare->fetchAll(PDO::FETCH_ASSOC);
            
            $pdo->closeConnection();
            return $result;
        }
        function getOnceMenu($class){
            $pdo = new db2;
            $pdoLink = $pdo->linkConnection();
            
            $grammer = "SELECT * FROM `menu` WHERE `class` LIKE :class";
            $prepare = $pdoLink->prepare($grammer);
            $prepare->bindParam(':class', $class);
            $prepare->execute();
            $result = $prepare->fetchAll(PDO::FETCH_ASSOC);
            // $this->db = null;
            // $result = $this->links("select * from menu where class like '$class'");
            $pdo->closeConnection();
            return $result;
        }
        function getMessage(){
            // $db = new PDO("mysql:host=localhost;dbname=recipe;port=3306", "root", "");
            // $db->exec("SET CHARACTER SET utf8");
            $pdo = new db2;
            $pdoLink = $pdo->linkConnection();
            
            $grammer = "SELECT * FROM `message` ORDER BY `time` DESC";
            $prepare = $pdoLink->prepare($grammer);
            $prepare->execute();
            $result = $prepare->fetchAll(PDO::FETCH_ASSOC);
            // $this->db = null;         
            // $result = $this->links("select * from message order by time desc");
            $pdo->closeConnection();
            return $result;
        }
        
        
    }






?>