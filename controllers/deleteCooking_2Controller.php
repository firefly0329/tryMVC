<?php 
session_start();
header("Content-Type:text/html; charset=utf-8");
class deleteCooking_2Controller extends Controller {
    
    function guide($cookingId) {
        $user = $this->model("deleteCooking_2_model");
        // $user->name = $name;

        // delete
        $result = $user->deleteMenu($cookingId);
        echo "<script>alert('刪除成功!!');</script>";
        header("location: /EasyMVC/repice/guide");
        
    }
}


?>