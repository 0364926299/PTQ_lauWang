<?php 
    require_once ('config.php');

    function connect ($sql) {
        $conn = new mysqli(Server,User,Password,Database);

        mysqli_set_charset($conn,'utf-8');

        if($conn->connect_error) {
            die("Kết nối cơ sở dữ liệu thất bại");
        }

        $conn->query($sql);

        $conn->close();
    }

    function renderViews ($sql, $isSingle=false) {
        $conn = new mysqli(Server,User,Password,Database);
        $data = null;
        mysqli_set_charset($conn,'utf-8');

        if($conn->connect_error) {
            die();
        }

        $result = $conn->query($sql);
        if($isSingle) {
            $data = mysqli_fetch_array($result,1);
        } else {
            $data = [];
            foreach($result as $item) {
                $data[] = $item;
            }
        }

        $conn->close();

        return $data;
    }




    // // chuyển đổi mật khẩu
    // function convertMD5 ($pwd) {
    //     return md5(md5($pwd).key);
    // }
    $conn = new mysqli(Server,User,Password,Database);

    // Check connection
    if ($conn->connect_error) {
        die("Có lỗi khi kết nối: " . $conn->connect_error);
    }
