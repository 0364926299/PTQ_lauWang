<?php 
    session_start();
    require_once ("../connect/views.php");
    if(!isset($_SESSION['FullName'])) {
        header("location: login.php");
        die('Kết nối cơ sở dữ liệu thất bại');
    }

    if(!isset($_SESSION['ids-order']) && !isset($_SESSION['btns-add']) && !isset($_SESSION['btns-delete'])) {
        $_SESSION['ids-order'] = array();
        $_SESSION['btns-add'] = array();
        $_SESSION['btns-delete'] = array();
    }

    if(!empty($_POST)) {
        $DiaChi = $_POST['DiaChi'];
        $TinhTrang = $_POST['chart'];
    }

    if(isset($_GET['action'])) {
        $action = $_GET['action'];

        if(!empty($action)&&$action==='Logout') {
            unset($_SESSION['FullName']);
            header("location: login.php");
            die();
        }
    }

    if(isset($_GET['ID'])&&isset($_GET['action'])) {
        $ID = $_GET['ID'];
        $action = $_GET['action'];

        switch($action) {
            case 'DELETE':
                $sql = "DELETE FROM `thucdon` WHERE `thucdon`.`Ma` = $ID";
                $result = connect($sql);
                break;
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
    * {
        margin: 0;
        padding: 0;
    }
    html {
        overflow-x: hidden;
    }
    .app {
        padding: 50px 40px;
    }

    .form2 {
        display: flex;
    }
    .form2,.form3{
        width: 100%;
        padding: 0 30px;
    }

    .form3 {
        display: none;
    }

    table {
        /* width: 80%; */
        margin: 40px 30px;
        border-collapse: collapse;
    }

    td,th {
        text-align: center;
        padding: 5px 20px;
    }

    .form-left {
        display: flex;
        margin-right: 30px;
        align-items: center;
    }

    select {
        margin-left: 5px;
    }

    input[type="radio"] {
        cursor: pointer;
    }

    .check {
        margin-left: 5px;
    }

    label {
        cursor: pointer;
    }

    input[type="submit"] {
        padding: 7px 40px;
        cursor: pointer;
        border: 1px solid #fe4b09;
        background-color: #fe4b09;
        color: white;
        border-radius: 20px;
    }

    .Category {
        display: flex;
        margin-top: 30px;
    }

    .user {
        text-align: end;
    }

    ul li {
        list-style: none;
    }

    .Category__left {
        width: 20%;
        border-right: 1px solid #000;
    }

    .Category__left ul li{
        margin-bottom: 10px;
        margin-top: 10px;
    }
    h2 {
        padding-left: 30px;
        width: fit-content;
        margin-bottom: 15px;
    }

    Select {
        border: none;
        border-bottom: 1px solid #000;
        outline: none;
        padding: 5px 20px;
    }

    .Category__right {
        flex: 1;
    }

    .heading {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    button {
        padding: 10px 25px;
        cursor: pointer;
        outline: none;
        border: none;
        border-radius: 10px;
        background-color: #fe4b09;
        color: white;
    }
    .form-group {
        margin-top: 15px;
        display: flex;
    }
    .form-group>span {
        width: 40px;
        display: inline-block;
        margin-right: 5px;
    }

    .form-group > input{
        height: 30px;
    }

    .submit-form {
        margin-top: 15px;
    }


</style>
<body>
    <div class="app">
        <h1 style="text-align: center;">Lẩu Vang</h1>
        <div class="Category">
            <div class="Category__left">
                <ul>
                    <li><a href="#">Bàn đã được đặt và bàn trống</a></li>
                    <li><a href="#">Cập nhật trạng thái</a></li>
                    <li><a href="#">Thực đơn</a></li>
                </ul>
            </div>
            <div class="Category__right">
                <div class="user">
                    <?php 
                        if(isset($_SESSION['FullName'])) {
                            echo '<span> Xin chào '.$_SESSION['FullName'].' <a href="?action=Logout">( Đăng xuất )</a></span>';
                        }
                    ?>
                </div>
                <div class="check-order">
                    <?php
                        // xử lý xoá
                        if(isset($_POST['storage-delete'])) {
                            $stringDelete = "DELETE FROM order_temp
                                            WHERE ma =" . $_POST['storage-id'];
                            if($conn->query($stringDelete)) {

                            } else {
                                echo "có lỗi: " . $conn->error;
                            }
                        }

                        // xử lý duyệt
                        if(isset($_POST['storage-add'])) {
                            // Lấy value từ bảng
                            $storageFullName = $_POST['storage-name'];
                            $storagePhoneNum = $_POST['storage-phone-number'];
                            $storageDate = $_POST['storage-date'];
                            $storageTime = $_POST['storage-time'];
                            $storageLocaltion = $_POST['storage-cs'];
                            $storageAdult = $_POST['storage-adult'];
                            $storageChild = $_POST['storage-child'];
                            $storageIdTable = $_POST['storage-id-table'];
                            $storageNote = $_POST['storage-note'];
                            echo "Note: " . $storageNote . "<br>";
                            echo "Ma bàn: " . $storageIdTable . "<br>";
                            // thêm vào bảng Khách hàng
                            $stringInsert = "INSERT INTO khachhang(HoTen, SDT, GhiChu, Ngay, Gio, MaCS, MaBan)
                                            VALUES('$storageFullName', '$storagePhoneNum', '$storageNote', '$storageDate', '$storageTime', $storageLocaltion, $storageIdTable)";
                            $conn->query($stringInsert);

                            // update bàn
                            $stringUpdate = "UPDATE coso JOIN ban ON coso.Ma = ban.MaCS
                                            SET ban.TinhTrang = 1
                                            WHERE ban.MaBan = $storageIdTable and coso.Ma = $storageLocaltion";
                            $conn->query($stringUpdate);

                            // xoá đơn hiện tại khỏi bảng chờ duyệt
                            $stringDelete = "DELETE FROM order_temp
                                            WHERE ma =" . $_POST['storage-id'];
                            $conn->query($stringDelete);
                        }
                    ?>
                    <h2>Bàn đang chờ duyệt</h2>
                    <form action="" method="post">
                        <table style="display: none" id="storage">
                            <tr>
                                <td><input type="text" name='storage-id' disable></td>
                            </tr>
                            <tr>
                                <td><input type="text" name='storage-name' disable></td>
                            </tr>
                            <tr>
                                <td><input type="text" name='storage-phone-number' disable></td>
                            </tr>
                            <tr>
                                <td><input type="text" name='storage-date' disable></td>
                            </tr>
                            <tr>
                                <td><input type="text" name='storage-time' disable></td>
                            </tr>
                            <tr>
                                <td><input type="text" name='storage-cs' disable></td>
                            </tr>
                            <tr>
                                <td><input type="text" name='storage-adult' disable></td>
                            </tr>
                            <tr>
                                <td><input type="text" name='storage-child' disable></td>
                            </tr>
                            <tr>
                                <td><input type="text" name='storage-note' disable></td>
                            </tr>
                            <tr>
                                <td><input type="text" name='storage-id-table' disable></td>
                            </tr>
                            <tr>
                                <td>
                                    <input id="storage-btn-add" type="submit" value="Duyệt" name="storage-add" >
                                    <input id="storage-btn-delete" type="submit" value="Huỷ" name="storage-delete" onclick='return confirmDelete()'>
                                </td>
                            </tr>
                        </table>
                        <table id="contain-data" border=1>
                            <tr>
                                <th>Mã</th>
                                <th>Họ tên</th>
                                <th>Số điện thoại</th>
                                <th>Ngày</th>
                                <th>Giờ</th>
                                <th>Cơ Sở</th>
                                <th>Số người lớn</th>
                                <th>Số trẻ em</th>
                                <th>Chi chú</th>
                                <th>Nhập mã bàn</th>
                            </tr>
                            <?php
                                $stringQueryTemp = "SELECT * 
                                                    FROM coso JOIN order_temp ON coso.Ma = order_temp.dia_chi";
                                $resultTemp = $conn->query($stringQueryTemp);
                                if ($resultTemp->num_rows > 0) {

                                    $tempIndex = 0;
                                    
                                    while($row = $resultTemp->fetch_assoc()) {
                                        // lưu mã order bàn
                                        if(!in_array($row['ma'], $_SESSION['ids-order'])) {
                                            array_push($_SESSION['ids-order'], $row['ma']); 
                                        }

                                        // lấy mã bàn trong tình trạng còn trống
                                        $maCoSo = $row['dia_chi']; //dia_chi ở đây là mã địa chỉ
                                        $selectIdTable = "SELECT MaBan
                                                        FROM coso JOIN ban ON coso.Ma = ban.MaCS
                                                        WHERE MaCS = $maCoSo AND TinhTrang = 0";
                                        $idTableByIdCS = $conn->query($selectIdTable);
                                        $stringContainIdTable = "";
                                        while($i = $idTableByIdCS->fetch_assoc()) {
                                            $stringContainIdTable .= "<option value='" . $i['MaBan'] . "'>" . $i['MaBan'] . "</option>";
                                        } 
                                      echo "
                                      <tr>
                                        <td>" . $row['ma'] . "</td>
                                        <td>" . $row['ho_ten'] . "</td>
                                        <td>" . $row['sdt'] . "</td>
                                        <td>" . $row['ngay'] . "</td>
                                        <td>" . $row['gio'] . "</td>
                                        <td value='$maCoSo'>" . $row['DiaChi'] . "</td>
                                        <td>" . $row['num_adult'] . "</td>
                                        <td>" . $row['num_child'] . "</td>
                                        <td>" . $row['note'] . "</td>
                                        <td>
                                            <select>
                                                $stringContainIdTable
                                            </select>
                                        </td>
                                        <td>
                                            <input type='submit' id='btn-add' style='width: 80px; display: inline-block; padding: 7px 0' value='Duyệt' name='add'>
                                            <input type='submit' id='btn-delete' style='width: 80px; display: inline-block; padding: 7px 0; margin-top: 8px' value='Huỷ' name='delete'>
                                        </td>
                                      </tr>
                                      ";
                                    }
                                }
                            ?>
                        </table>
                    </form>
                </div>
                <div class="Category__right-item">
                    <h2>Bàn đã được đặt và bàn trống</h2>
                    <form  method="POST" class="form2">
                        <div class="form-left">
                            <span>Cơ sở</span>
                            <select name="DiaChi">
                                <?php
                                    $sql = "SELECT * FROM coso";
                                    $result = renderViews($sql);
                                    foreach($result as $item) {
                                        echo '
                                        <option value='.$item['Ma'].'>'.$item['DiaChi'].'</option>
                                        ';
                                    }
                                ?>
                            </select>
                            
                            <div class="check">
                                <input type="radio" name="chart" value="0" id='emty' <?=$TinhTrang==0?'checked':false?>>
                                <label for="emty">Bàn trống</label>
                            </div>
                                    
                            <div class="check">
                                <input type="radio" name="chart" value="1" id='placed' <?=$TinhTrang!=0?'checked':false?>>
                                <label for="placed">Bàn được đặt</label>
                            </div>
                        </div>

                        <input type="submit" value="Lọc" name="filter">
                    </form>
                </div>
                <table border=1>
                    <tr>
                        <?php 
                        if(!empty($_POST)) {
                            echo $TinhTrang;
                            if($TinhTrang == 0 ) {
                                echo '
                                <tr>
                                    <th>Số Bàn</th>
                                    <th>Địa chỉ</th>
                                    <th>Số Người Tối Đa</th>
                                    <th>Tình Trạng</th>
                                </tr>
                                ';
                                $sql = "SELECT MaBan,DiaChi ,SoNguoiToiDa, TinhTrang FROM ban, coso  WHERE ban.MaCS = coso.Ma AND TinhTrang='$TinhTrang' AND coso.Ma = '$DiaChi'";
                            } else {
                                echo '
                                <tr>
                                    <th>Số Bàn</th>
                                    <th>Họ Tên</th>
                                    <th>Số Điện thoại</th>
                                    <th>Địa chỉ cơ sở</th>
                                    <th>Ngày</th>
                                    <th>Giờ</th>
                                    <th>Số Người Tối Đa</th>
                                </tr>
                                ';
                                $sql = "SELECT khachhang.MaBan,khachhang.HoTen,khachhang.SDT,khachhang.Ngay, khachhang.Gio ,coso.DiaChi,ban.SoNguoiToiDa,ban.TinhTrang 
                                        FROM khachhang, coso, ban WHERE khachhang.MaCS = coso.Ma AND ban.MaBan = khachhang.MaBan AND khachhang.MaCS ='$DiaChi'";
                            }
                            
                            $result = renderViews($sql);
                            
                            for($i=0;$i<count($result);$i++) {
                                $tinhtrang = $result[$i]['TinhTrang'] == '0'?"Bàn trống":"Bàn đã được đặt";
                                if($result[$i]['TinhTrang'] == 0) {
                                    echo '
                                    <tr>
                                        <td>'.$result[$i]['MaBan'].'</td>
                                        <td>'.$result[$i]['DiaChi'].'</td>
                                        <td>'.$result[$i]['SoNguoiToiDa'].'</td>
                                        <td>'.$tinhtrang.'</td>
                                    </tr>
                                    ';
                                } else {
                                    echo '
                                    <tr>
                                        <td>'.$result[$i]['MaBan'].'</td>
                                        <td>'.$result[$i]['HoTen'].'</td>
                                        <td>'.$result[$i]['SDT'].'</td>
                                        <td>'.$result[$i]['DiaChi'].'</td>
                                        <td>'.$result[$i]['Ngay'].'</td>
                                        <td>'.$result[$i]['Gio'].'</td>
                                        <td>'.$result[$i]['SoNguoiToiDa'].'</td>
                                    </tr>
                                    ';
                                }
                            }
                        }
                        ?>
                    </tr>
                </table>

                <div class="Category__right-item">
                    <div class="heading">
                        <h2>Thực Đơn</h2>
                        <button>Thêm thực đơn</button>
                    </div>
                    <table border="1">
                        <tr>
                            <th>Hình ảnh</th>
                            <th>Tên</th>
                            <th>Giá</th>
                            <th>Mô tả</th>
                        </tr>
                        <?php 
                            $sql = "SELECT * FROM thucdon";

                            $result = renderViews($sql);
                            $BaseURL = "../image/";
                            foreach($result as $item) {
                                echo '
                                <tr>
                                    <td><img src="'.$BaseURL.''.$item['image'].'" alt="" width="150px"></td>
                                    <td>'.$item['Ten'].'</td>
                                    <td>'.$item['gia'].'</td>
                                    <td>'.$item['MoTa'].'</td>
                                    <td>
                                        <a href="?action=DELETE&ID='.$item['Ma'].'" style="margin-right: 10px">Xóa</a>
                                        <a href="?action=UPDATE&ID='.$item['Ma'].'" onclick="UPDATE(this)">Sửa</a>
                                    </td>
                                </tr>
                                ';
                            }
                        ?>
                    </table>
                    <form method="post" enctype="multipart/form-data" class="form3">
                        <h2>THÊM / SỬA THỰC ĐƠN</h2>
                        <div class="form-group">
                            <span>Tên</span>
                            <input type="text" name="Ten">
                        </div>
                        <div class="form-group">
                            <span>Giá</span>
                            <input type="text" name="Giá">
                        </div>
                        <div class="form-group">
                            <span>Mô tả</span>
                            <textarea name="MoTa"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="file" name="image">
                        </div>
                        <div class="submit-form">
                            <input type="submit" value="Sửa">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        const $ = document.querySelector.bind(document)
        function UPADTE (e) {
            console.log(e);
            $('.form3').style.display = 'block';
        }
        function confirmDelete() {
            var result = confirm('Bạn có chắc chắn muốn xoá đơn đặt bàn này ?');
            return result;
        }
    </script>
    <script src="./handle.js"></script>
</body>
</html>