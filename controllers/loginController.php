<?php 


class loginController extends Controller {
    
    function hello() {
        $user = $this->model("login_model");
       
        $loginCheck = $this->mainProgram($user);

        $this->view("Home/login", $loginCheck);
        
       
    }
    
    function mainProgram($user){
        //主程式
        if(isset($_POST["login"])){
            $loginCheck = $user->decision();
            // echo gettype($loginCheck);
        }
        
        if(isset($_POST["register"])){
            header("location: /EasyMVC/register/hello");
        }
        if(isset($_POST["visitor"])){
            header("location: /EasyMVC/repice/hello");
        }
        return $loginCheck;
    }
    
      
}


?>