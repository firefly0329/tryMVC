<?php
    session_start();
    header("content-type:text/html; charset=utf-8");
    
class messageController extends Controller {
    
    function guide($letter) {
        //判斷有無登入
        if(!isset($_SESSION['account'])){
        echo "<script>alert('請先登入');location.href='/EasyMVC/login/guide';</script>";
        }
        $user = $this->model("message_model");
        // 傳值到view
        $result = $user->getMessage($letter);
        $result2 = $user->getMenu($letter);
        $this->view("Home/message", Array($result,$result2,$letter));
        //run主程式
        $this->mainProgram($user,$letter);
    }
    
    function mainProgram($user,$letter) {
        //主程式--新增留言
        if(isset($_POST['newMessageBtn'])){
            //time
            date_default_timezone_set('Asia/Taipei');
            $time = date("Y-m-d H:i:s");
            //將'換成&#39
            $_POST['message'] = str_replace("'","&#39",$_POST['message']);
            //寫入資料庫
            $user->setMessage($_SESSION['account'],$_POST['message'],$time,$letter);
            echo "<script>alert('留言成功!!!');location.href='/EasyMVC/message/guide/$letter';</script>";
        }
        //主程式--刪除留言
        if(isset($_POST['deleteMessageBtn'])){
             $user->deleteMessage($_POST['id']);
            echo "<script>alert('刪除成功')</script>";
        }      
  
    }
}

    
    
    
?>