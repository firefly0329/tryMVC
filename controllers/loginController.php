<?php 
session_start();

class loginController extends Controller {
    
    function hello() {
        $user = $this->model("login_model");
        // $user->name = $name;
        $this->view("Home/login", $user);
        // echo "Hello! $user->name";
        $this->mainProgram($user);
    }
    
    function mainProgram($user){
        //主程式
        if(isset($_POST["login"])){
            $result = $user->getMember();
            
            echo $this->login($result); //登入檢查
        }
        
        if(isset($_POST["register"])){
            header("location: /EasyMVC/register/hello");
        }
        if(isset($_POST["visitor"])){
            header("location: /EasyMVC/repice/hello");
        }
    }
    
    //登入檢查
    function login($result){
        while($row = mysql_fetch_assoc($result)){
            if($row['account'] == $_POST['account'] && $row['password'] == $_POST['password']){
                echo $_SESSION['account'] = $row['name'];
                echo "<script>alert('登入成功，系統將自動跳轉至主頁面');location.href='/EasyMVC/repice/hello/123';</script>";
            }
        }
        // echo "<script>alert('登入成功')</script>";
        return "請檢查帳號密碼!!!!!!!";
    }  
}


?>