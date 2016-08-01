<!--申請會員-->
<?php 
if($data == "checkRegister"){
    // echo $data;
    // $data = null;
    echo "<script>alert('申請成功，系統將自動跳轉至主頁面');location.href='/EasyMVC/repice/guide';</script>";
}

?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" type="text/css" href="/EasyMVC/css/required.css" media="screen" />
    </head>
    <body>
        <p style="margin-left:90px;">申請會員</p>
        <form method="post">
            <label required>帳號:</label>
            <input type="text" name="account" placeholder=" 申請帳號 " required="required" pattern="[A-z,0-9]{3,20}"/><br><br>
            <label required>密碼:</label>
            <input type="password" name="password" placeholder=" 申請密碼 " required="required" pattern="[A-z,0-9]{3,20}"/><br><br>
            <label required>名稱:</label>
            <input type="text" name="name" placeholder=" 您的稱呼 " required="required" pattern="[A-z,0-9]{3,20}"/><br><br>
            <input type="submit" value="送出申請" name="submit" style="margin-left:70px;"/>
        </form>
        <form method="post">
            <input type="submit" value="回登入頁面" name="login" style="margin:40px 0 0 65px"/>
        </form>
    </body>
</html>