<?php 
session_start();
header("Content-Type:text/html; charset=utf-8");


class deleteCookingController extends Controller {
    
    function guide($cookingId) {
        $user = $this->model("deleteCooking_model");

        // $user->name = $name;

        // 判斷是不是作者，是的話回傳true
        $result = $user->getMenu($cookingId);
        // $row = mysql_fetch_assoc($result);
        if($_SESSION['account'] != $result['writer']){
            echo false;
        }else{
            echo true;
        }
        
    }
}




?>


