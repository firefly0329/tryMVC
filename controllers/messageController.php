<?php
    session_start();
    
class messageController extends Controller {
    
    function hello($letter) {
        if(!isset($_SESSION['account'])){
        echo "<script>alert('請先登入');location.href='/EasyMVC/login/hello/1';</script>";
        }
        // $letter = $_GET["letter"];
        $user = $this->model("message_model");
        // $user->name = $name;
        $result = $user->getMessage($letter);
        $result2 = $user->getMenu($letter);
        $this->view("Home/message", Array($result,$result2,$letter));
        // echo "Hello! $user->name";
        
        $this->mainProgram($user,$letter);
    }
    
    function mainProgram($user,$letter) {
        
        
        //主程式--新增留言
        if(isset($_POST['newMessageBtn'])){
            date_default_timezone_set('Asia/Taipei');
            $time = date("Y-m-d H:i:s");
            $_POST['message'] = str_replace("'","&#39",$_POST['message']);//將'換成&#39
            $user->setMessage($_SESSION['account'],$_POST['message'],$time,$letter);
            echo "<script>alert('留言成功!!!');location.href='/EasyMVC/message/hello/$letter';</script>";
            // header("location: message.php?letter=$letter");
        }
        //主程式--刪除留言
        if(isset($_POST['deleteMessageBtn'])){
             $user->deleteMessage($_POST['id']);
            echo "<script>alert('刪除成功')</script>";
            // header("location: message.php?letter=$letter");
        }      
        
        
        
        
    }
}

    
    
    
?>