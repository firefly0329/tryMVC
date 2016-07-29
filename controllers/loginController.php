<?php 
session_start();

class loginController extends Controller {
    
    function guide() {
        $user = $this->model("login_model");
       
        $loginCheck = $user->decision();
        
        echo $loginCheck;

        if($loginCheck == ""){
            $this->view("Home/login", $loginCheck);
        }else if(!$loginCheck){
            $this->view("Home/login", $loginCheck);
        }else{
            header("location: /EasyMVC/repice/guide");
        }
        
        
       
    }
    
    function mainProgram($user){
        //主程式
        if(isset($_POST["login"])){
            $loginCheck = $user->decision();
            // echo gettype($loginCheck);
        }
        
        if(isset($_POST["register"])){
            header("location: /EasyMVC/register/guide");
        }
        if(isset($_POST["visitor"])){
            header("location: /EasyMVC/repice/guide");
        }
        return $loginCheck;
    }
    
      
}


?>