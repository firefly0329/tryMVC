<?php
?>

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>sakamoto_menu</title>
        <link rel="stylesheet" type="text/css" href="../css/firefly_frame.css" media="screen">
        <link rel="stylesheet" type="text/css" href="../css/UI.css" media="screen">
        <link rel="stylesheet" type="text/css" href="../css/newCooking.css" media="screen">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
        <script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
    </head>
    <body>
        <h1 class="pd-t-1">新增食譜</h1>
        <form method="post" enctype="multipart/form-data">
            
            <div class="pd-t-3">
                <lable class="">菜名:</lable>
                <input class="" type="text" name="dishName" required="required" placeholder=" 菜名 "/>
            </div>
                
            <div class="w-100">
                <lable>難度:</lable>
                <!--<input type="text" name="difficult" required="required" placeholder=" 難易度 "/>-->
                <select name="difficult" class="">
    		        <option value="1" name="1" id="1">1</option>
    		        <option value="2" name="2" id="1">2</option>
    		        <option value="3" name="3" id="1">3</option>
    		        <option value="4" name="4" id="1">4</option>
    		        <option value="5" name="5" id="1">5</option>
    		    </select>
            </div>
                
            <div class="w-100">
                <lable>分類:</lable>
                <!--<input type="text" name="class" required="required" placeholder=" 分類 "/>-->
                <select name="class" class="">
		        <option value="主食">主食</option>
		        <option value="配菜">配菜</option>
		        <option value="甜點">甜點</option>
		        <option value="飲品">飲品</option>
		    </select>
            </div>
            
            <div class="w-100">
                <lable>圖片:</lable>
                <input type="file" name="file" required="required"/>
            </div>
            
            <div class="w-100">
                <lable class="">材料:</lable>
                <textarea name="stuff" maxlength="200" required="required" placeholder=" 材料 "></textarea>
            </div>
                
            <div class="w-100">
                <lable>製作過程:</lable>
                <textarea name="make" maxlength="2000" required="required" placeholder=" 製作過程 "></textarea>
            </div>
                
            <div class="w-100">
                <lable>小提醒:</lable>
                <textarea name="ps" maxlength="200" placeholder=" 小提醒 "></textarea>
            </div>
            
            <div class="w-100">
                <input type="submit" value="新增菜單" name="submit"/>
            </div>
            
        </form>
    </body>
</html>