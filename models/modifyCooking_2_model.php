<?php
session_start();
require_once('db2.php');
class modifyCooking_2_model{
    
    function decision($menuId){
        $row = $this->getMenu($menuId);
        if($_SESSION['account'] != $row['writer']){
            // echo "<script>alert('您不是本篇作者');location.href='/EasyMVC/repice/guide';</script>";
            return "notWrite";
        }
        
        if(isset($_POST["submitModify"])){
            $imgId = $menuId . substr(strrchr($_FILES['file']['name'], '.'), 0);
            move_uploaded_file($_FILES['file']['tmp_name'],'image/'.$imgId);
            $time = date("Y/m/d");
            //判斷有沒有修改圖片
            if(!$_FILES["file"]["tmp_name"]){
                $imgId = $row['picture'];
            }
            //修改
            $make = $_POST['make'];//\n轉<br>
            $make = nl2br($make);
            $grammer = $this->changeMenu($menuId,$_POST['dishName'],$_SESSION['account'],
                $imgId,$_POST['difficult'],$_POST['class'],$time,$make,$_POST['ps'],
                $_POST['stuff'],$menuId);
            return "OK";
            // echo "<script>alert('修改成功!!');location.href='/EasyMVC/repice/guide';</script>";
        }
    }
    
    function getMenu($cookingId){
        $pdo = new db2;
        $pdoLink = $pdo->linkConnection();
        
        $grammer = "SELECT * FROM `menu` WHERE `id` = :cookingId";
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
        
        $grammer = "UPDATE `menu` SET `id`=:id,`dishName`=:dishName,
        `writer`=:writer,`picture`=:picture,`difficult`=:difficult,`class`=:class,
        `time`=:time,`make`=:make,`ps`=:ps,`stuff`=:stuff WHERE `id` LIKE :id";

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