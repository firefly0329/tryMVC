<?php
session_start();
require_once('db2.php');
class login_model{
    
    function getMember(){
        $pdo = new db2;
        $pdoLink = $pdo->linkConnection();
        
        $grammer = "SELECT * FROM `member` WHERE `account` = :account and `password` = :password";
        $prepare = $pdoLink->prepare($grammer);
        $prepare->bindParam(':account', $_POST['account']);
        $prepare->bindParam(':password', $_POST['password']);
        $prepare->execute();
        $result = $prepare->fetch(PDO::FETCH_ASSOC);
    
        $pdo->closeConnection();
        // echo var_dump($result[1]);
        return $result;
    }
    
    function decision(){
        //登入檢查
        if($_POST['login']){
            $result = $this->getMember();
            if($result){
                $_SESSION['account'] = $result['name'];
                $_SESSION['alert'] = "登入成功!!";
                return "1";
            }else{
                return false;
            }
        }else{
            return "2";
        }

        
        // if(isset($_POST["register"])){
        //     header("location: /EasyMVC/register/guide");
        // }
        // if(isset($_POST["visitor"])){
        //     header("location: /EasyMVC/repice/guide");
        // }

    }
}



?>