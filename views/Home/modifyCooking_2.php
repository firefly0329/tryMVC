<?php
$row = $data[0];
if(isset($data[1])){
    echo "<script>alert('修改成功!!');location.href='/EasyMVC/repice/guide';</script>";
}

?>

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>sakamoto_menu</title>
        <link rel="stylesheet" type="text/css" href="/EasyMVC/css/firefly_frame.css" media="screen">
        <link rel="stylesheet" type="text/css" href="/EasyMVC/css/UI.css" media="screen">
        <link rel="stylesheet" type="text/css" href="/EasyMVC/css/newCooking.css" media="screen">
        <meta name="viewport" content="width=device-width, user-scalabel=no, initial-scale=1.0">
        <script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
    </head>
    <body>
        <h1 class="pd-t-1">修改菜單</h1>
        <form method="post" enctype="multipart/form-data">
            
            <div class="pd-t-3">
                <label class="">菜名:</label>
                <input class="" type="text" name="dishName" required="required" value="<?php echo $row['dishName']; ?>"/>
            </div>
                
            <div class="w-100">
                <label>難度:</label>
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
                <label>分類:</label>
                <!--<input type="text" name="class" required="required" placeholder=" 分類 "/>-->
                <select name="class" class="">
		        <option value="主食">主食</option>
		        <option value="配菜">配菜</option>
		        <option value="甜點">甜點</option>
		        <option value="飲品">飲品</option>
		    </select>
            </div>
            
            <div class="w-100">
                <label>圖片:</label>
                <input type="file" name="file"/>
            </div>
            
            <div class="w-100">
                <label class="">材料:</label>
                <textarea name="stuff" maxlength="200" required="required"><?php echo $row['stuff']; ?></textarea>
            </div>
                
            <div class="w-100">
                <label>製作過程:</label>
                <textarea name="make" maxlength="2000" required="required"><?php echo $row['make']; ?></textarea>
            </div>
                
            <div class="w-100">
                <label>小提醒:</label>
                <textarea name="ps" maxlength="200" ><?php echo $row['ps']; ?></textarea>
            </div>
            
            <div class="w-100">
                <input type="submit" value="確認送出" name="submit"/>
            </div>
            
        </form>
    </body>
</html>