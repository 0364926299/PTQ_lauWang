<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="./css/app.css">
    <title>Lẩu Wang - Vua Buffet Lẩu - Hệ Thống Chuỗi Nhà Hàng Buffet Hà Nội</title>
</head>
<body>
    <!-- connect database -->
    <?php
        require "./page/connect/views.php";
    ?>
    <!-- header -->
    <div class="header">
        <div class="container header__content">
            <div class="header_left">
                <a href="#">
                    <img src="https://lauwang.vn/wp-content/uploads/2020/08/logo-Lẩu-Wang-01.png" alt="" style="width:150px">
                </a>
            </div>
            <div class="header_center">
                <ul class="header__menu">
                    <li class="header__menu-item"><a href="">Trang Chủ</a></li>
                    <li class="header__menu-item"><a href="">Giới Thiệu</a></li>
                    <li class="header__menu-item"><a href="">Thực Đơn</a></li>
                    <li class="header__menu-item"><a href="">Ưu Đãi</a></li>
                    <li class="header__menu-item"><a href="">Đặt Bàn</a></li>
                    <li class="header__menu-item"><a href="">Blog</a></li>
                </ul>
            </div>
            <div class="header_right">
                <div class="header-icon">
                    <a href="">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="">
                        <i class="fab fa-youtube"></i>
                    </a>
                </div>
            </div>
    
        </div>
    </div>

    <!-- container -->
    <div class="container">
        <div class="container__banner">
            <img src="./assets/img/banner.jpg" alt="" class="container__banner-img">
            <a href="" class="container__banner-order-btn">Đặt bàn ngay</a href="">
        </div>

        <div class="container__main">
            <div class="container__story">
                <div class="story__wrap">
                    <div class="story__head">
                        <div class="story__head-title">Câu chuyện thương hiệu</div>
                        <div class="story__head-descript">- Tinh hoa ẩm thực việt -</div>
                    </div>

                    <div class="margin-top-60"></div>
    
                    <div class="story__content">
                        <div class="story__content-para">
                            <p class="story__content-para-descript">
                                Lẩu Wang là hệ thống chuỗi nhà hàng buffet lẩu tại Hà Nội được
                                tin tưởng và đánh giá cao về chất lượng và giá cả với 3 set buffet
                                119K – 159K – 189K, khách hàng sẽ được thưởng thức tới gần 50 món ăn
                                từ ba chỉ bò Mỹ, hải sản tổng hợp, khai vị hấp dẫn với cá chiên hoàng bào, ghẹ sữa rang muối, 
                                ngao xào cùng vô vàn những món ăn, thức uống hấp dẫn khác.
                            </p>
                            <p class="story__content-para-descript">
                                Với sự phát triển không ngừng, đến nay Lẩu Wang đã xây dựng và hoạt động 7 cơ sở: 
                            </p>
                            <ul class="story__content-list">
                                
                                <li class="story__list-item">
                                    CS1: 134 Trần Đại Nghĩa, Hai Bà Trưng.
                                </li>
                                <li class="story__list-item">
                                    CS3: Số 21 đường 19/5, Văn Quán, Hà Đông (cổng sau Học Viện An Ninh).
                                </li>
                                <li class="story__list-item">
                                    CS4: 17 Tam Khương (số 17 ngõ 10 Tôn Thất Tùng).
                                </li>
                                <li class="story__list-item">
                                    CS5: 81B Nguyễn Khang, Yên Hòa, Cầu Giấy.
                                </li>
                                <li class="story__list-item">
                                    CS6: 265 Tô Hiệu, Cầu Giấy.
                                </li>
                                <li class="story__list-item">
                                    CS7: Số 51A Hồ Tùng Mậu, Cầu Giấy.
                                </li>
    
                            </ul>
                        </div>
                        <div class="story__content-avatar">
                            <img src="./assets/img/stores1.jpg" alt="" class="story__content-avatar-img">
                        </div>
                    </div>
                </div>

                <div class="margin-top-30"></div>

                <div class="story__wrap">
                    <div class="story__head">
                        <div class="story__head-title">TINH HOA NGŨ VỊ LẨU</div>
                        <div class="story__head-descript">- Hương vị lẩu chỉ có tại Wang -</div>
                    </div>

                    <div class="margin-top-60"></div>
    
                    <div class="story__content">
                        <div class="story__content-avatar">
                            <img src="./assets/img/5-vi.jpg" alt="" class="story__content-avatar-img">
                        </div>
                        
                        <div class="story__content-para">
                            <p class="story__content-para-descript">
                                Ẩm thực chính là tấm gương phản chiếu văn hóa của mỗi quốc gia. Hiểu được điều này, 
                                Lẩu Wang luôn kế thừa và giữ gìn cốt lõi vị lẩu bản địa đồng thời phát huy điều chỉnh 
                                hương vị lẩu để hợp ý người Việt mang lại sự trải nghiệm vẹn toàn với 5 hương vị tuyệt 
                                vời của tinh hoa sắc vị.
                            </p>
                            <ul class="story__content-list">
                                
                                <li class="story__list-item">
                                    Nước lẩu Wang: Độc quyền nước lẩu thần thánh là sự kết hợp hoàn hảo các loại gia vị lẩu của
                                    Thái và Nhật, chua chua cay cay của hương vị thái kết hợp với vừng mè ăn ngon khó cưỡng. 
                                </li>
                                <li class="story__list-item">
                                    Lẩu Thái: Chua cay truyền thống với sự kết hợp của gia vị thật tài tình và hợp lý,
                                    đủ chua, đủ cay mang đến sự cảm nhận tê tê đầu lưỡi, thật sự tuyệt hảo.
                                </li>
                                <li class="story__list-item">
                                    Lẩu Kim chi: Những hương vị cầu kỳ cay nồng mang hương vị chuẩn xứ kim chi.
                                </li>
                                <li class="story__list-item">
                                    Lẩu Tứ Xuyên: Vị cay nồng hòa quyện với hương thơm của thảo mộc đánh thức vị giác
                                </li>
                                <li class="story__list-item">
                                    Lẩu Nấm: Thanh tao, ngọt vị phù hợp với mọi lứa tuổi.
                                </li>
    
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container__option">
                <div class="story__head">
                    <div class="story__head-title">Thực đơn</div>
                    <div class="story__head-descript">- Tất cả các ngày trong tuần -</div>
                </div>

                <div class="margin-top-40"></div>

                <div class="option__content gutter-30">
                    <div class="option__content-item w33pc col">
                        <div class="option__content-item-wrap">
                            <a href="" class="opion__item-link">
                                <img src="./assets/img/bf199.jpg" alt="" class="option__item-img">
                            </a>
                            <div class="option__item-brand">
                                <span>Buffet</span>
                                <span class="price">119k</span>
                            </div>
                        </div>
                        <p class="option__item-descript">
                            Buffet 119K thả ga hơn 15 món ăn đặc biệt của Lẩu Wang. Kết hợp cùng nồi lẩu 2 ngăn 
                            thoả thích các bạn lựa chọn vị Lẩu Thái, Lẩu Kim Chi, Lẩu Wang đặc biệt sẽ phù hợp cho nhiều 
                            khách hàng với nhiều lựa chọn vị lẩu khác nhau.
                        </p>
                    </div>
                    <div class="option__content-item w33pc col">
                        <div class="option__content-item-wrap">
                            <a href="" class="opion__item-link">
                                <img src="./assets/img/bf159.jpg" alt="" class="option__item-img">
                            </a>
                            <div class="option__item-brand">
                                <span>Buffet</span>
                                <span class="price">159k</span>
                            </div>
                        </div>
                        <p class="option__item-descript">
                            Buffet 159K là thực đơn được nhiều khách hàng lựa chọn nhất. Thả ga với 35 món ăn với nhiều món 
                            khai vị vô cùng đặc biệt như Cá chiên hoàng bào, Nộm chân gà pha lê, Salad hoa quả nho khô, Salad 
                            rau xanh Hàn Quốc, Ngao xào sốt Thái, Ghẹ sữa rang muối,...
                        </p>
                    </div>
                    <div class="option__content-item w33pc col">
                        <div class="option__content-item-wrap">
                            <a href="" class="opion__item-link">
                                <img src="./assets/img/bf189.jpg" alt="" class="option__item-img">
                            </a>
                            <div class="option__item-brand">
                                <span>Buffet</span>
                                <span class="price">189k</span>
                            </div>
                        </div>
                        <p class="option__item-descript">
                            Với set 189K, thực đơn bổ sung thêm 10 món hải sản tươi ngon như Cá ngừ đại dương fillet, 
                            Tôm Sú, Mực Trứng, Bạch Tuộc, Thanh Cua,... Khách hàng sẽ đắm chìm gần 40 món ăn siêu ngon cùng những vị 
                            lẩu vô cùng đặc biệt chỉ có tại Lẩu Wang ...
                        </p>
                    </div>
                </div>
            </div>

            <div class="container__option">
                <div class="story__head">
                    <div class="story__head-title">Đặt bàn online</div>
                    <div class="story__head-descript hotline">- Hotline 1900 0081 -</div>
                </div>

                <div class="margin-top-40"></div>

                <div class="option__content gutter-10">
                    <div class="option__content-item w65pc col">
                        <img src="./assets/img/order-img.jpg" alt="" class="option__content-img-order">
                    </div>
                    <div class="option__content-item w35pc col">

                        <!-- form order -->
                        <form action="./page/user/hanlde-order.php" class="form-order" id='form-order' method="POST">
                            <div class="form__wrap">
                                <div class="form__feild">
                                    <div class="form__wrap-input">
                                        <i class="fas fa-user form__field-icon"></i>
                                        <input type="text" class="form__field-input" name="fullname" id="fullname" placeholder="Họ và Tên">
                                    </div>
                                    <span class="form__mess-error"></span>
                                </div>
    
                                <div class="form__feild">
                                    <div class="form__wrap-input">
                                        <i class="fas fa-phone-square-alt form__field-icon"></i>
                                        <input type="text" class="form__field-input" name="phone-number" id="phone-number" placeholder="Số điện thoại">
                                    </div>
                                    <span class="form__mess-error"></span>
                                </div>
    
                                <div class="form__feild">
                                    <div class="form__wrap-input">
                                        <i class="far fa-calendar-alt form__field-icon"></i>
                                        <input type="text" name="date" id="date" class="form__field-input" placeholder="Ngày" onfocus="this.type='date'" onblur="(this.type='text')">
                                        <select name="time" id="time" class="form__select">
                                            <option value="">Giờ</option>
                                            <option value="11:00">11:00</option>
                                            <option value="11:15">11:15</option>
                                            <option value="11:30">11:30</option>
                                            <option value="11:45">11:45</option>
                                            <option value="12:00">12:00</option>
                                            <option value="12:15">12:15</option>
                                            <option value="12:30">12:30</option>
                                            <option value="12:45">12:45</option>
                                            <option value="13:00">13:00</option>
                                            <option value="11:15">11:15</option>
                                            <option value="11:30">11:30</option>
                                            <option value="11:45">11:45</option>
                                        </select>
                                    </div>
                                    <span class="form__mess-error"></span>
                                </div>
    
                                <div class="form__feild">
                                    <div class="form__wrap-input">
                                        <i class="fas fa-search-location form__field-icon"></i>
                                        <select name="location" id="location" class="form__select">
                                            <!-- get laction in db -->
                                            <option value="">Chọn địa chỉ</option>
                                            <?php
                                                if(!empty($conn)) {
                                                    $quertLocation = "SELECT * FROM coso";
                                                    $data = $conn->query($quertLocation);
                                                    while($row = $data->fetch_assoc()) {
                                                        echo "<option value='" . $row['Ma'] ."'>" . $row['DiaChi'] . "</option>";
                                                    }
                                                }
                                            ?>
                                        </select>
                                    </div>
                                    <span class="form__mess-error"></span>
                                </div>
    
                                <div class="form__feild">
                                    <div class="form__wrap-input num-people">
                                        <i class="fas fa-user form__field-icon form__field-icon"></i>
                                        <input type="text" class="form__field-input" id="num-adult" name="adult" placeholder="Người lớn">
                                        <input type="text" class="form__field-input" id="num-child" name="child"  placeholder="Trẻ em">
                                    </div>
                                    <span class="form__mess-error"></span>
                                </div>
    
                                <div class="form__feild field-note">
                                    <div class="form__wrap-input">
                                        <i class="fas fa-pencil-alt form__field-icon"></i>
                                        <textarea class="form__note" type="text" cols="40" rows="3" name="note" aria-invalid="false" placeholder="Ghi chú"></textarea>
                                    </div>
                                </div>
                                <div class="form__feild-wrap-submit">
                                    <input type="submit" name="btn-submit" value="Đặt Bàn" class="form-order__submit">
                                </div>
                            </div>
                        </form>

                    </div>
                </div>

                <div class="margin-top-40"></div>

            </div>
        </div>

        <!-- Phần khoảnh khắc -->
        <div class="container__monent">
            <div class="opacity"style="background-color:rgba(221,153,51,0.7); "></div>
            <div class="container__monent-content">
                <div class="container__moment-head">
                    <div class="container__moment-title">Khoảnh khắc về lẩu wang</div>
                    <div class="container__moment-descript">- Khai chương lẩu wang Tam Khương -</div>
                </div>
                
                <div class="margin-top-35"></div>

                <div class="container__moment-content-wrap">
                    <div class="container__moment-content-item col w25pc">
                        <img src="./assets/img/khoanh-khac-1.jpg" alt="" class="container__moment-content-item-img">
                    </div>
                    <div class="container__moment-content-item col w25pc">
                        <img src="./assets/img/khoanh-khac-2.jpg" alt="" class="container__moment-content-item-img">
                    </div>
                    <div class="container__moment-content-item col w50pc">
                        <iframe class="container__moment-content-item-video" width="972" height="547" src="https://www.youtube.com/embed/6N_atuav4oU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
                        </iframe>
                    </div>
                </div>

                <div class="margin-top-35"></div>

            </div>
        </div>

        <!-- phần phản hồi khách hàng -->
        <div class="container__option">
            <div class="story__wrap">
                <div class="story__head">
                    <div class="story__head-title">Phản hồi khách hàng</div>
                    <div class="story__head-descript">- Sẵn sàng lắng nghe -</div>
                </div>

                <div class="margin-top-60"></div>

                <div class="feedback__list">
                    <div class="w33pc">
                        <div class="feedback__item">
                            <div class="feedback__item-marker">&#10075;&#10075;</div>
                            <p class="feedback__item-content">
                                Lẩu Wang là nhà hàng mình thấy đặc biệt ngon và phù hợp với các bạn trẻ. Đồ ăn ở đây vừa tươi, 
                                ngon miệng rất vừa vị mà còn đẹp mắt. Mọi người cứ thử đến ăn Lẩu Wang để trải nghiệm nhé. Minh Vương 
                                nghiện Lẩu Wang mất rồi. Chắc chắn sẽ còn đến đây nhiều lần đấy !
                            </p>
                            <h3 class="feedback__item-author">Ca sĩ Minh Vương</h3>
                            <img src="./assets/img/feedback1.png" alt="" class="feedback__item-img">
                        </div>
                    </div>

                    <div class="w33pc">
                        <div class="feedback__item">
                            <div class="feedback__item-marker">&#10075;&#10075;</div>
                            <p class="feedback__item-content">
                                Thu Quỳnh thực sự hài lòng về đồ ăn tại Lẩu Wang. Nhiều đồ ăn tươi ngon giá cả lại hợp lý với hầu hết các 
                                bạn trẻ. Khi nào có liên hoan đông người chắc chắn Quỳnh sẽ rủ bạn bè đến đây. Hi vọng nhà hàng sẽ phát triển 
                                hơn nữa. Nhiều bạn đến đây sẽ thích cho xem. 
                            </p>
                            <h3 class="feedback__item-author">Diễn viên Thu Quỳnh</h3>
                            <img src="./assets/img/feedbak2.jpg" alt="" class="feedback__item-img">
                        </div>
                    </div>

                    <div class="w33pc">
                        <div class="feedback__item">
                            <div class="feedback__item-marker">&#10075;&#10075;</div>
                            <p class="feedback__item-content">
                                Lan Ngọc có dịp ghé Lẩu Wang vào dịp trời thu Hà Nội. Ăn một lần mà rất nhớ vị lẩu ở đây, có gì đó khác 
                                so với các nhà hàng buffet mình đã từng ăn. Nếu có dịp quay lại Hà Nội, mình sẽ lại ghé qua lần nữa. 
                                Mọi người cứ đến ăn Lẩu Wang để trải nghiệm như Lan Ngọc nhé.
                            </p>
                            <h3 class="feedback__item-author">Diễn viên Ninh Dương Lan Ngọc</h3>
                            <img src="./assets/img/feedbak3.png" alt="" class="feedback__item-img">
                        </div>
                    </div>
                </div>
                <div class="margin-top-60"></div>
                <div class="feedback_duration">
                    <ul>
                        <li></li>
                        <li class="active"></li>
                        <li></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="margin-top-30"></div>

        <!-- phần tin tức -->
        <div class="container__option">
            <div class="story__head">
                <div class="story__head-title">Tin tức</div>
                <div class="story__head-descript">- Thông tin cập nhật -</div>
            </div>
            <div class="margin-top-40"></div>
            <div class="news">
                <div class="w33pc">
                    <div class="news__item">
                        <div class="news__wrap-img">
                            <a href="" class="news__img-link">
                                <img src="./assets/img/new1.jpg" alt="" class="news__img">
                            </a>
                        </div>
                        <div class="news__content">
                            <h3 class="news__content-head">
                                <a href="" class="news__content-link">
                                    Tin tuyển dụng – Lẩu Wang tuyển dụng nhiều vị trí
                                </a>
                            </h3>
                            <p class="news__content-para">
                                Quay trở lại sau thời gian tạm dừng hoạt động do tình hình dịch bệnh căng thẳng, 
                                Chuỗi nhà hàng Lẩu Wang đã mở bán trở lại và tuyển dụng nhiều vị trí với mức lương 
                                cực kì đáng mong đợi! Với mong muốn mở rộng hệ thống, nâng cao chất lượng dịch vụ, Lẩu…
                            </p>
                        </div>
                    </div>
                </div>

                <div class="w33pc">
                    <div class="news__item">
                        <div class="news__wrap-img">
                            <a href="" class="news__img-link">
                                <img src="./assets/img/new2.jpg" alt="" class="news__img">
                            </a>
                        </div>
                        <div class="news__content">
                            <h3 class="news__content-head">
                                <a href="" class="news__content-link">
                                    Lẩu Wang comeback cực mạnh – Đặt bàn ngay thôi!
                                </a>
                            </h3>
                            <p class="news__content-para">
                                LẨU WANG COMEBACK – MÁCH CHO 500 ANH EM CÙNG ĐẾN Cuối cùng sau những tháng tạm đóng 
                                cửa vì tình hình dịch bệnh phức tạp, Lẩu Wang đã chính thức mở bán trở lại từ 18h ngày 
                                15/10/2021 rồi nha! Nhớ khách yêu của Lẩu Wang quá đi mất thôi. Nên mọi người hãy…
                            </p>
                        </div>
                    </div>
                </div>

                <div class="w33pc">
                    <div class="news__item">
                        <div class="news__wrap-img">
                            <a href="" class="news__img-link">
                                <img src="./assets/img/news3.jpg" alt="" class="news__img">
                            </a>
                        </div>
                        <div class="news__content">
                            <h3 class="news__content-head">
                                <a href="" class="news__content-link">
                                    Ra mắt món mới – Lẩu Wang giảm sâu 50%
                                </a>
                            </h3>
                            <p class="news__content-para">
                                Sol la si đố ai bỏ lỡ ƯU ĐÃI 50% của Lẩu Wang! Thêm món mới lại giảm đậm sâu 50% 
                                tại Lẩu Wang mà bạn lại bỏ lỡ thì đúng là quá sai lầm Nội dung chương trình: 
                                Áp dụng giảm 50% cho người thứ 2, thứ 4, thứ 6,… (tính theo lũy kế)…
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="margin-top-180"></div>

    <!-- phần footer -->
    <footer class="footer">
        <div class="grid">
            <div class="grid__row">
                <div class="grid__column-2-4">
                        <h3 class="footer_heading">Lẩu Wang – Vua Buffet Lẩu</h3>
                        <ul class="footer_list">
                                <li class="footer-item">
                                        <a href="" class="footer-item-link">Hotline: 1900 0081</a>
                                </li>
                                <li class="footer-item">
                                        <a href="" class="footer-item-link">Lẩu Wang là hệ thống chuỗi nhà hàng buffet lẩu tại Hà Nội được đánh giá cao về chất lượng và giá cả. Buffet tại Lẩu Wang gồm: 119K – 159K – 189K, khách hàng sẽ được thưởng thức tới gần 50 món ăn từ ba chỉ bò Mỹ, hải sản tổng hợp, khai vị hấp dẫn với Cá chiên hoàng bào, Ghẹ sữa rang muối, Ngao xào sốt Thái cùng vô vàn những món ăn, thức uống hấp dẫn khác…</a>
                                </li>

                        </ul>
                </div>
                    <div class="grid__column-2-4">
                            <h3 class="footer_heading">Hệ thống cơ sở Lẩu Wang</h3>
                            <ul class="footer_list">
                                    <li class="footer-item">
                                            <a href="" class="footer-item-link">Cơ sở 1: 134 Trần Đại Nghĩa, HBT, Hà Nội </a>
                                    </li>
                                    <li class="footer-item">
                                            <a href="" class="footer-item-link">Cơ sở 3: Số 21 đường 19/5, Hà Đông, Hà Nội</a>
                                    </li>
                                    <li class="footer-item">
                                            <a href="" class="footer-item-link">Cơ sở 4: 17 Tam Khương, Đống Đa, Hà Nội</a>
                                            
                                    </li>
                                    <li class="footer-item">
                                            <a href="" class="footer-item-link">Cơ sở 5: 81B Nguyễn Khang, Cầu Giấy, Hà Nội</a>
                                    </li>
                                    <li class="footer-item">
                                            <a href="" class="footer-item-link"> Cơ sở 7: 51A Hồ Tùng Mậu, Cầu Giấy, Hà Nội</a>  
                                    </li>
                                    <li class="footer-item">
                                            <a href="" class="footer-item-link"> Cơ sở 8: 143 Trâu Quỳ, Gia Lâm, Hà Nội</a>
                                            
                                    </li>
                                    
                            </ul>
                    </div>
                    <div class="grid__column-2-4">
                        <h3 class="footer_heading">Theo dõi chúng tôi</h3>
                        <ul class="footer_list">
                            <li
                            class="footer-item">
                                    <a href="" class="footer-item-link"> Theo dõi chúng tôi tại các trang thông tin</a>
                            </li>
                                <li class="footer-item">
                                        <a href="" class="footer-item-link">
                                                <i class="footer-item-icon fab fa-facebook"></i>
                                                Facebook
                                        </a>
                                </li>
                                <li class="footer-item">
                                        <a href="" class="footer-item-link">                                                            
                                                <i class="footer-item-icon fab fa-instagram-square"></i>
                                                Instagram
                                        </a>
                                </li>
                                <li class="footer-item">
                                        <a href="" class="footer-item-link">
                                            <i class="footer-item-icon fab fa-linkedin"></i>
                                            Linkdin
                                        </a>
                                        
                                </li>
                        </ul>
                </div>
            </div>

        </div>
        <div class="footer_bottom">
            <div class="grid_footer">
                <span class=".">  <a href="" class=" grid__row-from ">Đặt Bàn</a> </span>
                <span class=".">  <a href="" class=" grid__row-from ">Tuyển Dụng</a> </span>
                <span class=".">  <a href="" class=" grid__row-from ">Liên Hệ</a> </span>
            </div>
        </div>
</footer>

<!-- script -->
<script src="./js/validate.js"></script>
<script>
    Validator({
        form: '#form-order',
        rules: [
            Validator.isRequired('#fullname'),
            Validator.isRequired('#num-adult', "Số lượng người lớn là bắt buộc"),
            Validator.isPhoneNumber('#phone-number'),
            Validator.isRequired('#location', 'Vui lòng chọn địa chỉ'),
            Validator.isRequired('#date', 'Vui lòng chọn đủ ngày và giờ'),
            Validator.isRequired('#time', 'Vui lòng chọn đủ ngày và giờ')
        ]
    })
</script>

</body>
</html>