<?php
    require "../connect/views.php";
    if(!empty($_POST)) {
        $fullName = $_POST['fullname'];
        $phoneNumber = $_POST['phone-number'];
        $date = $_POST['date'];
        $time = $_POST['time'];
        $location = $_POST['location'];
        $numAdult = $_POST['adult'];
        $numChild = $_POST['child'];
        $note = $_POST['note'];

        $stringInsertOrderTemp = "INSERT INTO order_temp(ho_ten, sdt, ngay, gio, dia_chi, num_adult, num_child, note)
                                VALUES('$fullName', '$phoneNumber', '$date', '$time', '$location', '$numAdult', '$numChild', '$note')";

        if($conn->query($stringInsertOrderTemp) === TRUE) {
            echo "Đặt bàn thành công ";
        } else {
            echo $conn->error;
            echo "Có lỗi khi đặt bàn, LH: 098123";
        }
        $conn->close();
    }
?>
<br>
<a href="../../index.php">Quay về trang chủ</a>