<?php 
session_start();

class loginController extends Controller {
    
    function guide() {
        $user = $this->model("login_model");
       
        $loginCheck = $user->decision();
        
        // echo $loginCheck;

        if($loginCheck == "2"){
            $this->view("Home/login", $loginCheck);
        }else if(!$loginCheck){
            $this->view("Home/login", $loginCheck);
        }else if($loginCheck == "1"){
            header("location: /EasyMVC/repice/guide");
        }
        
        if(isset($_POST["login"])){
            $loginCheck = $user->decision();
        }
        
        if(isset($_POST["register"])){
            header("location: /EasyMVC/register/guide");
        }
        if(isset($_POST["visitor"])){
            header("location: /EasyMVC/repice/guide");
        }
        
        
       
    }

    
      
}


?>