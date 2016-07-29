<?php
header("Content-Type:text/html; charset=utf-8");
session_start();
class modifyCooking_2Controller extends Controller{
    function guide($menuId){
        $user = $this->model("modifyCooking_2_model");
        
        $row = $user->getMenu($menuId);
        $checkModify = $user->decision($menuId);
        
        $this->view("Home/modifyCooking_2",Array($row,$checkModify));
    }
    
 
}



?>