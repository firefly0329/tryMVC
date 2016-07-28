<?php
$result = $data[0];
$result2 = $data[1];
$munuId = $data[2];
$row2 = $result2;
 ?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>sakamoto_menu</title>
        <script type="text/javascript" src="/EasyMVC/js/jquery-1.11.3.min.js"></script>
        <link rel="stylesheet" type="text/css" href="/EasyMVC/css/firefly_frame.css" media="screen">
        <link rel="stylesheet" type="text/css" href="/EasyMVC/css/UI.css" media="screen">
        <link rel="stylesheet" type="text/css" href="/EasyMVC/css/message.css" media="screen">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
    </head>
    <body>
        <div id="wrapper" class="cf pd-b-5">
            <h1 class="pd-t-1">留言</h1>
            <!--============= 顯示菜單 =============-->
            <div class="menu pd-t-3"><!--menu-->
                <div class="w-50 float-l">
                    <img src='/EasyMVC/image/<?php echo $row2 ['picture']; ?>' class=""></img>
                </div>
                <div class="w-50 float-l bgc-1">
                    <div class="w-100 omega pd-t-5"><h2><?php echo $row2['dishName']; ?></h2></div>
                    <div class="w-100 omega pd-t-3">難易度:<?php for($i = 0; $i < $row2['difficult']; $i++){echo "*";} ?></div>
                    <div class="w-100 omega pd-t-1">作者:<?php echo $row2['writer']; ?></div>
                    <div class="w-100 omega pd-t-1">分類:<?php echo $row2['class']; ?></div>
                    <div class="w-100 omega pd-t-1">分享時間:<?php echo $row2['time']; ?></div>
                    
                </div>
            </div>
            <!--============= 留言 =============-->
            <article class="grid-12 pd-t-5">
                <h2>留言內容</h2>
                <?php foreach( $result as $row){ ?>
                    <div class="cf">
                        <p class=""><?php echo "留言時間：{$row['time']}　　　作者：{$row['messageWriter']}　　　留言內容：{$row['messageContent']}"; ?></p>
                        
                        <?php if($_SESSION['account'] == $row['messageWriter']): ?>
                        <button class="" onclick="deleteMessage(<?php echo $row['id'] ?>,<?php echo $munuId ?>)">刪除</button>
                        <?php endif ?>
                    </div>
                    <hr>
                <?php } ?>
                <form method='post' class='pd-t-3 cf pd-lr-5'>
                    <lable class=''>新增留言：</lable>
                    <input class='' type='text' name='message' required='required' placeholder=' 留言內容 '/>
                    <input type='submit' value='送出' name='newMessageBtn'/>
                </form>
            </article>
            
            <a href="/EasyMVC/repice/hello/1" class="fix">回主頁</a>
            
        </div>

 
        <script>
            function deleteMessage(x,y){
                if(confirm('您確定要刪除本留言?')){
                    url = "/EasyMVC/deleteMessage/hello/"+ x +"/" + y;
                    // alert(url);
                    alert("刪除成功");
                    location.href = url;
                }
            }
        </script>
        
    </body>
</html>