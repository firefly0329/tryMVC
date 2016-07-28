<?php
require_once('db2.php');
class modifyCooking_2_model{
    function getMenu($cookingId){
        $pdo = new db2;
        $pdoLink = $pdo->linkConnection();
        
        $grammer = "select * from menu where id = :cookingId";
        $prepare = $pdoLink->prepare($grammer);
        $prepare->bindParam(':cookingId', $cookingId);
        $prepare->execute();
        $result = $prepare->fetch(PDO::FETCH_ASSOC);
    
        $pdo->closeConnection();
        return $result;
    }
    function changeMenu($id,$dishName,$writer,$picture,$difficult,$class,$time,$make,$ps,$stuff,$cookingId){
        $pdo = new db2;
        $pdoLink = $pdo->linkConnection();
        
        $grammer = "UPDATE menu SET id=:id,`dishName`=:dishName,
        `writer`=:writer,`picture`=:picture,`difficult`=:difficult,`class`=:class,
        `time`=:time,`make`=:make,`ps`=:ps,`stuff`=:stuff WHERE id like :id";

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
        $result = $prepare->fetch(PDO::FETCH_ASSOC);
    
        $pdo->closeConnection();
        return $result;
    }
}







?>