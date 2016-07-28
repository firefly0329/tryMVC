<?php 

require_once('db2.php');

class register_model{
    
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