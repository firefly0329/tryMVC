<?php
header("Content-Type:text/html; charset=utf-8");
session_start();
class modifyCooking_2Controller extends Controller{
    function hello($menuId){
        $user = $this->model("modifyCooking_2_model");
        $result = $user->getMenu($menuId);
        $row = mysql_fetch_assoc($result);
        $row['make'] = preg_replace('/<br\\s*?\/??>/i','',$row['make']);
        
        $this->view("Home/modifyCooking_2",Array($row));
        
    //     $this->mainProgram($row,$user,$menuId);
    // }
    // function mainProgram($row,$user,$menuId){
        
        
        //判斷是否為作者
        if($_SESSION['account'] != $row['writer']){
            echo "<script>alert('您不是本篇作者');location.href='/EasyMVC/repice/hello';</script>";
        }
        if(isset($_POST["submit"])){
            $imgId = $_GET['cookingId'] . substr(strrchr($_FILES['file']['name'], '.'), 0);
            move_uploaded_file($_FILES['file']['tmp_name'],'image/'.$imgId);
            $time = date("Y/m/d");
            //判斷有沒有修改圖片
            if(!$_FILES["file"]["tmp_name"]){
                $imgId = $row['picture'];
            }
            //修改
            $make = $_POST['make'];//\n轉<br>
            $make = nl2br($make);
            $grammer = $user->changeMenu($menuId,$_POST['dishName'],$_SESSION['account'],
                $imgId,$_POST['difficult'],$_POST['class'],$time,$make,$_POST['ps'],
                $_POST['stuff'],$menuId);
            echo "<script>alert('修改成功!!');location.href='/EasyMVC/repice/hello';</script>";
        }
    }
}



?>