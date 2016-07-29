<?php 
session_start();
if($data == true){
    echo "<script>alert('登出成功!!');location.href='/EasyMVC/repice/guide';</script>";
}
if(isset($_SESSION['alert'])){
    echo "<script>alert('".$_SESSION['alert']."');</script>";
    unset($_SESSION['alert']);
}

?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>sakamoto_menu</title>
        <script type="text/javascript" src="/EasyMVC/js/jquery-1.11.3.min.js"></script>
        <link rel="stylesheet" type="text/css" href="/EasyMVC/css/firefly_frame.css" media="screen">
        <link rel="stylesheet" type="text/css" href="/EasyMVC/css/UI.css" media="screen">
        <link rel="stylesheet" type="text/css" href="/EasyMVC/css/repice.css" media="screen">
        <link rel="stylesheet" type="text/css" href="/EasyMVC/fontello/css/fontello.css" media="screen">
        
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
        <?PHP
            
        ?>
    </head>
    <body>
        <div id="wrapper" class="cf"><!--wrapper-->
            <div id="cooking" class="grid-12 omega relative">

            </div>

        </div><!--wrapper end-->
        
        
        
        
       <!--fix-->
        <div class="fix">
            <div id="btn_order" class="icon-left-open"></div>
            <div id="btn_next" class="icon-right-open"></div>
        </div>
        
        
        <!--選單-->
        <div class="menuBlock">
            <select id="changeClass" class="">
                <option value="">全部</option>
		        <option value="">主食</option>
		        <option value="">配菜</option>
		        <option value="">甜點</option>
		        <option value="">飲品</option>
		    </select> 
		    <!--<div id="changeClassBtn">更換</div>-->


		    <form method="post">
    		    <?php if(!isset($_SESSION['account'])){ ?>
                    <input type="submit" value="登入會員" name="login"/>
                <?php }else{ ?>
                    <input type="submit" value="登出會員" name="logout"/>
                <?php } ?>
            </form>
        <a href="/EasyMVC/newCooking/guide">新增食譜</a>
        </div>
            
            <div class="menuBtn icon-menu"></div>
	    
   
        <script type="text/javascript" src="/EasyMVC/js/ajax_connect.js"></script><!--ajax讀菜單-->
        <script type="text/javascript" src="/EasyMVC/js/changeCooking.js"></script><!--上下頁-->
        <script type="text/javascript" src="/EasyMVC/js/menu_btn.js"></script><!--menu-->
        <script type="text/javascript" src="/EasyMVC/js/deleteCooking.js"></script><!--刪除食譜-->

    </body>
    
</html>
