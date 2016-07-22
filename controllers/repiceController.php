<?php 
session_start();
class repiceController extends Controller {
    
    function hello() {
        // $user = $this->model("login_model");
        // $user->name = $name;
        $this->view("Home/repice", $user);
        // echo "Hello! $user->name";
        $this->mainProgram($user);
        
        

    }
    
    function mainProgram($user){
        if(isset($_POST["logout"])){
            unset($_SESSION['account']);
            echo "<script>alert('登出成功');location.href='/EasyMVC/repice/hello';</script>";
        }
        if(isset($_POST["login"])){
            unset($_SESSION['account']);
            header("location: /EasyMVC/login/hello/1");
        }
    }
}
    
?>