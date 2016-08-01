<?php
session_start();
require_once('db2.php');
class newCooking_model{
    
    function decision(){
        if(!isset($_SESSION['account'])){
            // echo "<script>alert('請先登入');location.href='/EasyMVC/login/guide';</script>";
            return "notLogin";
        }
        
        if(isset($_POST["submit"])){
            $result = $this->getMenuId();
            foreach($result as $row){
                if($lastId < $row["id"]){
                    $lastId = $row["id"];
                }
            }
            $lastId = $lastId+1;
            $imgId = $lastId . substr(strrchr($_FILES['file']['name'], '.'), 0);
            move_uploaded_file($_FILES['file']['tmp_name'],'image/'.$imgId);
            //time
            date_default_timezone_set('Asia/Taipei');
            $time = date("Y-m-d H:i:s");
            //\n轉<br>
            $make = $_POST['make'];
            $make = nl2br($make);
            $this->setMenu($lastId,$_POST['dishName'],$_SESSION['account'],$imgId
            ,$_POST['difficult'],$_POST['class'],$time,$make,$_POST['ps'],$_POST['stuff']);
            // echo "<script>alert('新增完成');location.href='/EasyMVC/repice/guide';</script>";
            return "OK";
        }
    }
    
    
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
        
        $grammer = "INSERT INTO `menu` (`id`, `dishName`, `writer`, `picture`, `difficult`, `class`, `time`, `make`, `ps`, `stuff`) 
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