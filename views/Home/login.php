<!--會員登入-->
<?php
?>

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" type="text/css" href="/EasyMVC/css/required.css" media="screen" />
    </head>
    <body>
        <p style="margin-left:70px;">會員登入</p>
        <form  method="post">
            <label required>帳號:</label>
            <input type="text" name="account" placeholder=" 請輸入帳號 " required="required" pattern="[A-z,0-9]{3,20}"/><br><br>
            <label required>密碼:</label>
            <input type="password" name="password" placeholder=" 請輸入密碼 " required="required" pattern="[A-z,0-9]{3,20}"/><br><br>
            <input type="submit" value="登入" name="login" style="margin-left:80px;"/>
        </form>
        <form  method="post">
        <input type="submit" value="註冊會員" name="register" style="margin:40px 0 0 20px;"/>
        <input type="submit" value="訪客瀏覽" name="visitor" style="margin:40px 0 0 20px;"/>
        </form>
    </body>
</html>