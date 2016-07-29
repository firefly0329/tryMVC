<?php
session_start();
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
        // echo var_dump($result[1]);
        return $result;
    }
    
    function decision(){
        //登入檢查
        
        $result = $this->getMember();
        $check = false;
        foreach($result as $row){
            // echo $row['account'];
            if($row['account'] == $_POST['account'] && $row['password'] == $_POST['password']){
                $_SESSION['account'] = $row['name'];
                $check = true;
            }
        }

        return $check;
            
        
        
        
        
    }
}



?>