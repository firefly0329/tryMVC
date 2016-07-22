<!--申請會員-->
<?php 
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
    <body>
        <p style="margin-left:70px;">申請會員</p>
        <form method="post">
            <lable>帳號：</lable>
            <input type="text" name="account" placeholder=" 申請帳號 " required="required"/><br><br>
            <lable>密碼：</lable>
            <input type="password" name="password" placeholder=" 申請密碼 " required="required"/><br><br>
            <lable>名稱：</lable>
            <input type="text" name="name" placeholder=" 您的稱呼 " required="required"/><br><br>
            <input type="submit" value="送出申請" name="submit" style="margin-left:70px;"/>
        </form>
        <form method="post">
            <input type="submit" value="回登入頁面" name="login" style="margin:40px 0 0 65px"/>
        </form>
    </body>
</html>