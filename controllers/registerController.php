<?php 

class registerController extends Controller {
    
    function guide() {
        $user = $this->model("register_model");
        $message = $user->decision();
        if($message = "login"){
            // header("location: /EasyMVC/login/guide");
        }
        $this->view("Home/register", $message);
        // $this->mainProgram($user);
    }
    
    //主程式
    // function mainProgram($user){
    //     if(isset($_POST["submit"])){

    //         $result = $user->getMember();
        
    //         $lastId = $this->repeat($result);//檢查帳號.名稱是否重複，並回傳最後一筆資料id
    //         if(isset($lastId)){ 
    //             $lastId = $lastId + 1;
    //             $user->setMember($lastId, $_POST['account'], $_POST['password'], $_POST['name']);
                
    //             $_SESSION['account'] = $_POST['name'];
    //             echo "<script>alert('申請成功，系統將自動跳轉至主頁面');location.href='/EasyMVC/repice/guide';</script>";
    //         }
    //     }
    //     if(isset($_POST["login"])){
    //         header("location: /EasyMVC/login/guide");
    //     }
    // }
    
    // //檢查帳號.名稱是否重複，並回傳最後一筆資料id
    // function repeat($result){
    //     foreach($result as $row){
    //         // var_dump($row);
    //         // echo $row["account"] ;
    //         if($_POST["account"] == $row["account"]){
    //             echo "您的帳號已被使用";
    //             $lastId = NULL;
    //             break;
    //         }else if($_POST["name"] == $row["name"]){
    //             echo "您的名稱已被使用";
    //             $lastId = NULL;
    //             break;
    //         }else{
    //             $lastId = $row["id"];
    //         }
            
    //     }
    //     return $lastId;
    // }
    
}










?>