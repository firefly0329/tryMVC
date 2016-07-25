<?php
header("Content-Type:text/html; charset=utf-8");
session_start();

class newCookingController extends Controller{
    function hello(){
        if(!isset($_SESSION['account'])){
            echo "<script>alert('請先登入');location.href='/EasyMVC/login/hello';</script>";
        }
        $user = $this->model("newCooking_model");
        $this->view("Home/newCooking");
        
        $this->mainProgram($user);
    }
    function mainProgram($user){
        if(isset($_POST["submit"])){
            $result = $user->getMenuId();
            $lastId = $this->repeat($result);
            $lastId = $lastId+1;
            $imgId = $lastId . substr(strrchr($_FILES['file']['name'], '.'), 0);
            move_uploaded_file($_FILES['file']['tmp_name'],'image/'.$imgId);
            //time
            date_default_timezone_set('Asia/Taipei');
            $time = date("Y-m-d H:i:s");
            //\n轉<br>
            $make = $_POST['make'];
            $make = nl2br($make);
            $user->setMenu($lastId,$_POST['dishName'],$_SESSION['account'],$imgId
            ,$_POST['difficult'],$_POST['class'],$time,$make,$_POST['ps'],$_POST['stuff']);
            echo "<script>alert('新增完成');location.href='/EasyMVC/repice/hello';</script>";
        }
    }
    function repeat($result){
        while($row = mysql_fetch_assoc($result)){
            if($lastId < $row["id"]){
                $lastId = $row["id"];
                
            }
        }
    return $lastId;
    }
    

}









  
?>