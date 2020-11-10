<style>
    body{
        background-color: burlywood;
        text-align: center;
    }
    fieldset {
        width: 400px;
        margin: 0px auto; // chinhkhungragiua
        text-align: center;
    }
    button{
        width: 100px;
        height: 30px;

    }
    form{
        position: absolute;
        left: 40%;
        top : 30%;
        border: 1px solid grey;
        width: 50px;
        height: 70px;
    }
</style>
<form method="post">
    <fieldset>
        <legend>DANG NHAP TAI KHOAN</legend>
        <span>Đăng nhập</span><br><br>
        <input type="text" name="email" placeholder="email"><br><br>
        <input type="password" name="password" placeholder="password"><br><br>
        <div> <input class="ad" type="submit" value="Đăng nhập"></div>
    </fieldset>
</form>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $email = $_POST["email"];
    $password = $_POST["password"];
    $account=[["luu","2001"],["hoang","2001"]];

    if($email == $account[0][0] && $password == $account[0][1]){
        header("location: QuadraticEquation.php"); //chuyen sang trang khac
    }else{
        echo "nhap email va password";
    }
}



