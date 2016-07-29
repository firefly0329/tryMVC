<?php 
session_start();
require_once('db2.php');

class register_model{
    
    function decision(){
        if(isset($_POST["submit"])){

            $result = $this->getMember();
        
            $lastId = $this->repeat($result);//檢查帳號.名稱是否重複，並回傳最後一筆資料id
            if(isset($lastId)){ 
                $lastId = $lastId + 1;
                $user->setMember($lastId, $_POST['account'], $_POST['password'], $_POST['name']);
                
                $_SESSION['account'] = $_POST['name'];
                // echo "<script>alert('申請成功，系統將自動跳轉至主頁面');location.href='/EasyMVC/repice/guide';</script>";
            }
            return "checkRegister";
        }
        if(isset($_POST["login"])){
            // header("location: /EasyMVC/login/guide");
            return "login";
        }
    }
    
    function repeat($result){
        foreach($result as $row){
            // var_dump($row);
            // echo $row["account"] ;
            if($_POST["account"] == $row["account"]){
                echo "您的帳號已被使用";
                $lastId = NULL;
                break;
            }else if($_POST["name"] == $row["name"]){
                echo "您的名稱已被使用";
                $lastId = NULL;
                break;
            }else{
                $lastId = $row["id"];
            }
            
        }
        return $lastId;
    }
    
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
    function setMember($id, $account, $password, $name){
        $pdo = new db2;
        $pdoLink = $pdo->linkConnection();
        $grammer = "insert into member (id, account, password, name) 
            value(:id, :account, :password, :name)";
        $prepare = $pdoLink->prepare($grammer);
        $prepare->bindParam(':id', $id);
        $prepare->bindParam(':account', $account);
        $prepare->bindParam(':password', $password);
        $prepare->bindParam(':name', $name);
        $prepare->execute();
        // $result = $prepare->fetchAll(PDO::FETCH_ASSOC);
    
        $pdo->closeConnection();
        // return $result;
    }
}


    




?>