<?php
header("Content-Type:text/html; charset=utf-8");


class newCookingController extends Controller{
    function guide(){
        
        $user = $this->model("newCooking_model");
        $checkNewCooking = $user->decision();
        $this->view("Home/newCooking", $checkNewCooking);
        
       
    }
    
    

}









  
?>