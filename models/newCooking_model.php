<?php
require_once('db2.php');
class newCooking_model{
    function getMenuId(){
        $pdo = new db2;
        $pdoLink = $pdo->linkConnection();
        
        $grammer = "select id from menu";
        $prepare = $pdoLink->prepare($grammer);
        $prepare->execute();
        $result = $prepare->fetchAll(PDO::FETCH_ASSOC);
    
        $pdo->closeConnection();
        return $result;
    }
    function setMenu($id,$dishName,$writer,$picture,$difficult,$class,$time,$make,$ps,$stuff){
        $pdo = new db2;
        $pdoLink = $pdo->linkConnection();
        
        $grammer = "insert into menu (`id`, `dishName`, `writer`, `picture`, `difficult`, `class`, `time`, `make`, `ps`, `stuff`) 
                            value(:id, :dishName, :writer, :picture, :difficult, :class, :time, :make, :ps, :stuff)";

        // $grammer = "select id from menu";
        $prepare = $pdoLink->prepare($grammer);
        $prepare->bindParam(':id', $id);
        $prepare->bindParam(':dishName', $dishName);
        $prepare->bindParam(':writer', $writer);
        $prepare->bindParam(':picture', $picture);
        $prepare->bindParam(':difficult', $difficult);
        $prepare->bindParam(':class', $class);
        $prepare->bindParam(':time', $time);
        $prepare->bindParam(':make', $make);
        $prepare->bindParam(':ps', $ps);
        $prepare->bindParam(':stuff', $stuff);
        $prepare->execute();
        // echo "<script>alert('$grammer');</script>";
        $result = $prepare->fetchAll(PDO::FETCH_ASSOC);
    
        $pdo->closeConnection();
        return $grammer;

    }
}





?>