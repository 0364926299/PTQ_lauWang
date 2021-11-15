<?php
   session_start();
   if(isset($_SESSION['FullName'])) {
       header("location: index.php");
       die();
   }
    require_once ('../connect/views.php');

    if(!empty($_POST)) {
        $user = $_POST['User'];
        $pwd = $_POST['Password'];


        $msErorr = [];

        if($user === "") {
            $msErorr['user']['require'] = "Vui lòng nhập user";
        }

        if($pwd === "") {
            $msErorr['password']['require'] = 'Vui lòng nhập mật khẩu';
        }

        if(!empty($user)&&!empty($pwd)) {

            // chuyển đổi maart sang bảo mật 2 lớp
            // $pwd = convertMD5($pwd);

            $sql = "SELECT * FROM NhanVien WHERE userName='$user' and MatKhau = '$pwd'";
            
            $result = renderViews ($sql,true);

            if($result != null) {
                $_SESSION['FullName'] = $result['HoTen'];
                header("location: index.php");
                die();    
            } else {
                $msErorr['action']['erorr'] = 'Đăng nhập thất bại';
            }
        }

    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    *{
        margin: 0;
        padding: 0;
    }
    .app {
        width: 500px;
        height: 350px;
        border: 1px solid #ccc;
        display: flex;
        flex-direction: column;
        align-items: center;
        margin: 50px auto;
        padding: 25px;
    }

    h2 {
        font-size: 50px;
        margin-bottom: 30px;
    }

    .form-group,.form-submit {
        display: flex;
        flex-direction: column;
        justify-content: flex-start;
        width: 300px;
    }

    .form-submit{
        margin-top: 30px;
        justify-content: center;
    }

    label {
        margin-top: 4px;
        margin-bottom: 5px;
    }

    :is(input[type='text'],input[type='password']) {
        height: 30px;
        outline: none;
        padding-left: 5px;
    }
    span {
        margin-bottom: 15px;
        color: red;
    }
    input[type='submit'] {
        padding: 10px 20px;
        cursor: pointer;
        border: none;
        border-radius: 40px;
        transition: all .2s;
    }

    .form-submit:hover [type='submit'] {
        background-color: #fe4b09;
        color: #fff;
    }
</style>
<body>
    <div class="app">
        <h2>Đăng Nhập</h2>
        <form method="post">
            <div class="form-group">
                <label for="User">User: </label>
                <input type="text" name="User" id="User" value="<?=$user?>">
                <span class="messeageErorr">
                    <?=isset($msErorr['user']['require'])?$msErorr['user']['require']:false?>
                </span>
            </div>
            <div class="form-group">
                <label for="password">Password: </label>
                <input type="password" name="Password" id="password" value="<?=isset($_POST['Password'])?$_POST['Password']:false?>">
                <span class="messeageErorr">
                    <?=isset($msErorr['password']['require'])?$msErorr['password']['require']:false?>
                </span>
            </div>
            <span><?=isset($msErorr['action']['erorr'])?$msErorr['action']['erorr']:false?></span>
            <div class="form-submit">
                <input type="submit">
            </div>
        </form>
    </div>
</body>
</html>