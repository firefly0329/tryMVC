<?php
    class deleteMessageController extends Controller {
    
    function hello($messageId,$menuId) {
        $user = $this->model("deleteMessage_model");
        $this->mainProgram($user,$messageId,$menuId);
    }
    
    
    function mainProgram($user,$messageId,$menuId){
        $user->deleteMsg($messageId);
        header("location: /EasyMVC/message/hello/$menuId");
    }
}




?>