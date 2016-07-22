<?php 
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
        
    </head>
    <body>
        <div id="wrapper" class="cf"><!--wrapper-->
            <div id="cooking" class="grid-12 omega relative">
        <!--有幾筆資料就產生幾頁-->
<!--<?php while($row = mysql_fetch_assoc($result)): ?>-->
<!--    <article class="grid-12 omega bgc-1" data-page="1">-->
        
<!--        <div class="grid-6">-->
<!--            <img src="image/<?php echo $row['picture']; ?>" class="img"></img>-->
<!--        </div>-->
        
<!--        <secition class="grid-6">-->
<!--            <div class="grid-12 omega pd-t-1">菜名:<?php echo $row['dishName']; ?></div>-->
<!--            <div class="grid-12 omega pd-t-1">難易度:<?php echo $row['difficult']; ?></div>-->
<!--            <div class="grid-12 omega pd-t-1">作者:<?php echo $row['writer']; ?></div>-->
<!--            <div class="grid-12 omega pd-t-1">分類:<?php echo $row['class']; ?></div>-->
<!--            <div class="grid-12 omega pd-t-1">分享時間:<?php echo $row['time']; ?></div>-->
<!--            <div class="grid-12 omega pd-t-1">材料:<?php echo $row['stuff']; ?></div>-->
<!--            <div class="grid-12 omega pd-t-1">製作過程:<br><?php echo $row['make']; ?></div>-->
<!--            <div class="grid-12 omega pd-t-1">小提醒:<?php echo $row['ps']; ?></div>-->
<!--            <div class="grid-12 omega pd-t-3">-->
<!--                <a href="modifyCooking.php" class="">修改</a>-->
<!--                <a href="modifyCooking.php" class="">刪除</a>-->
<!--            </div>-->
<!--        </secition>-->
<!--    </article>-->
<!--<?php endwhile ?>-->
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
        <a href="/EasyMVC/newCooking/hello">新增食譜</a>
        </div>
            
            <div class="menuBtn icon-menu"></div>
	    
   
        <script type="text/javascript" src="/EasyMVC/js/ajax_connect.js"></script><!--ajax讀菜單-->
        <script type="text/javascript" src="/EasyMVC/js/changeCooking.js"></script><!--上下頁-->
        <script type="text/javascript" src="/EasyMVC/js/menu_btn.js"></script><!--menu-->
        <script type="text/javascript" src="/EasyMVC/js/deleteCooking.js"></script><!--刪除食譜-->

    </body>
    
</html>
