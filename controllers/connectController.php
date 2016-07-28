<?php 
class connectController extends Controller {
    
    function hello($letter) {
        $user = $this->model("connect_model");

        if($letter == "全部"){
            // $grammer = "select * from menu";
            $result = $user->getAllMenu();
        }else{
            // $grammer = "select * from menu where class like '$letter'";
            $result = $user->getOnceMenu($letter);
        }
  
        
        $totalPage = -1;
        foreach($result as $row){
        // while($row = mysql_fetch_assoc($result)){
            $totalPage++;
            
            // $grammer2 = "select * from message order by time desc";
            // $result2 = $db2->link($grammer2);
            $result2 = $user->getMessage();
            
            foreach($result2 as $row2){
            // while($row2 = mysql_fetch_assoc($result2)){
                if($row2['menuId'] == $row['id']){
                    $message .= sprintf("時間：%s　　作者：%s　　留言內容：%s<hr>",$row2['time'],$row2['messageWriter'],$row2['messageContent']);
                }
            }
            
            for($i = 1; $i <= $row['difficult']; $i++){
                $difficult .= "*";
            }
            
        
            $data .= sprintf(
            "<article class='grid-12 omega bgc-1'>
                <div class='grid-6'>
                    <img src='/EasyMVC/image/%s' class='img'></img>
                </div>
                <secition class='grid-6'>
                    <div class='grid-12 omega pd-t-1'>菜名:%s</div>
                    <div class='grid-12 omega pd-t-1'>難易度:%s</div>
                    <div class='grid-12 omega pd-t-1'>作者:%s</div>
                    <div class='grid-12 omega pd-t-1'>分類:%s</div>
                    <div class='grid-12 omega pd-t-1'>分享時間:%s</div>
                    <div class='grid-12 omega pd-t-1'>材料:<br>%s</div>
                    <div class='grid-12 omega pd-t-1'>製作過程:<br>%s</div>
                    <div class='grid-12 omega pd-t-1'>小提醒:<br>%s</div>
                    <div class='grid-12 omega pd-t-3'>
                        <a href='/EasyMVC/modifyCooking_2/hello/%s'>修改</a>
                        <a onclick='click_delete(%s)'>刪除</a>
                    </div>
                    
                </secition>
                <div class='grid-12 omega pd-t-1 message cf pd-lr-5'>
                    <h1 class=''>留言</h1><br>
                    <p class=''>%s</p>
                    <br><br><a href='/EasyMVC/message/hello/%s'>新增/刪除留言</a>
                </div>
            </article>"
            ,$row['picture'], $row['dishName'], $difficult, $row['writer'], 
            $row['class'], $row['time'], $row['stuff'], $row['make'], $row['ps'], 
            $row['id'], $row['id'], $message, $row['id']);
            $message = "";
            $difficult = "";
        }
        
        $data .= "<div id='totalPage'>$totalPage</div>";
        // $x .= "<script>i = $totalPage;</script>";
        
        echo $data;
        
    }
}



?>
