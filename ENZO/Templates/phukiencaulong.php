<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sản phẩm : Phụ kiện cầu lông</title>
    <link rel="stylesheet" href="">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
</head>
<body>
    <style>
        *{
    margin: 0;
    padding: 0;
}
body{
    font-size: 14px;
    line-height: 1.15;
    color: #111;
}
#tong {
    max-width: 100%;
    margin: 0;
    position: relative;
}
/*home1*/
.top .home1{
    display: flex;
    justify-content: space-between; /*dua ra giua*/
    align-items: center;/*dua ra giua*/
    padding: 21px 30px;
    
}
#tong .top .home1 img{
    padding: 0px 100px;
    width: 220px;
    height: 92px;
}
ul#main-menu{
    display: flex;/**/
}
ul#main-menu li {
    list-style-type: none;
}
ul#main-menu li :hover{
    color: blue;
}
ul#main-menu li a{
    font-size: 28px;
    padding: 0px 35px;
    text-decoration: none;/*xoa gach chan*/
    text-transform: uppercase; /*viet hoa*/
    box-sizing: border-box; 
    color: #111;

}
/* home2 */
.home2 {
    text-align: center;
    margin: 0px 0px;
    font-size: 28px;
    
}
.home2 #main-menu2{
    border: 1px solid #fffafa;
    padding: 10px 400px;
    background-color: orange;
}
.top .home2{
    display: flex;
    justify-content: space-between; /*dua ra giua*/
    align-items: center;/*dua ra giua*/
    padding: 95px 3px;
}

ul#main-menu2{
    display: flex;
}
ul#main-menu2 li {
    list-style-type: none;
}
ul#main-menu2 li :hover{
    color: blue;
}
ul#main-menu2 li a{
color: #fffafa  ;
    padding: 0px 17px;
    text-decoration: none;/*xoa gach chan*/
    text-transform: uppercase; /*viet hoa*/
    box-sizing: border-box; 
}

/* sản phẩm */
.dropdown-content{
    display: none;
    position: absolute;
    background-color: rgb(236, 193, 134);
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgb(0, 0, 0);
    z-index: 1;
}
.dropdown-content a{
   color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}
.dropdown-content a:hover{
    background-color: rgb(255, 255, 255);
}
.dropdown:hover .dropdown-content{
    display: block;
}
/* Tai khoan */
.TaiKhoan2 {
    display: none;
    position: absolute;
    background-color: rgb(255, 255, 255);
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px black;
    z-index: 1;
}
.TaiKhoan2 a{
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}
.TaiKhoan2 a:hover{
    background-color: rgb(254, 254, 254);
}
.TaiKhoan1:hover .TaiKhoan2{
    display: block;
}
/* -----------------------------------Vot cau long--------------------------------------- */
.votcaulong1{
    text-align: center;
    margin: 40px 0px;

}
.votcaulong1 h1{
    border: 5px solid rgb(236, 144, 5);
    display: inline-block;
    font-weight: 600;
    padding: 60px 37.8%;    
    background-color: orange;
    color: #fff;
   
}
ul .sp1{
    list-style: none;
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
}
ul .sp1 li{
    flex-basis: 25%;
    padding-left: 15px;
    padding-right: 15px;
    box-sizing: border-box;
    margin-bottom: 30px;
}
.khung{
    border: 1px solid rgb(251, 247, 247);
    display: inline-block;
    font-weight: 600;
    padding: 3px 50px;
    padding-top: 5px;
    padding-bottom: 50px;
    

}
.khung .top .anh img{
    max-width: 270px;
    height: auto;

}
.khung .thongso{
    font-size: 14;
}
.khung a{
    text-decoration: none;
}
.top{
    position: relative;
    overflow: hidden;

}

.anh{
    display: block;
}
.anh:hover img{
    filter: opacity(75%);
}
.top a.muangay{
    text-align: center;/*đưa chữ ra giữa*/
    padding: 0px 93px;
    background-color: aqua;
}
.top a.muangay:hover{
    filter: opacity(80%);
}
.top a.muangay{
    text-transform: uppercase;
    text-decoration: none;
    text-align: center;
    display: block;
    background-color:#4da853 ;
    color: #fff;
    padding: 10px 0px;
    position:absolute ;
    bottom: -36px;
    width: 100%;
    transition: 0.25s ease-in-out;
    opacity: 0.85;
}
ul.sp1 li .khung:hover a.muangay{
    bottom: 100px;
}
#tong .logo-duoi img{

    width: 1541px;
    height: 350px;
    padding: 300px 0px;
    padding-bottom: inherit;
}
.top .home1 .main-menu2{
        letter-spacing: 15px;
}
    </style>

<div id="tong">
    <div class="top">
        <div class="home1">
           <img src="../image/badminton-logo.png" alt="">
           <ul id="main-menu">
               <li><a href="">📞Hotline: 0989999686 | 0998566878</a></li>
               <li><a href="diachi.php">địa chỉ</a></li>
               <li class="TaiKhoan1"><a href="">Tài Khoản</a>
               <div class="TaiKhoan2">
                   <a href="#">Đăng nhập</a>
                   <a href="#">Đăng ký</a>
               </div>
               </li>
               <li><a href="http://127.0.0.1:5500/index/index.html"><span class="material-symbols-outlined">
                arrow_back
                </span></a></li>
           </ul>
        </div>
        <div class="home2">
           <ul id="main-menu2">
               <li><a href="http://localhost/ENZO/Templates/Home.php">Trang chủ</a></li>
               <li class="dropdown">
                   <a class="dropbtn">Sản phẩm</a>
                   <div class="dropdown-content">
                       <a href="http://localhost/ENZO/Templates/votcaulong.php">Vợt cầu lông</a>
                       <a href="http://localhost/ENZO/Templates/giaycaulong.php">Giày cầu lông</a>
                       <a href="http://localhost/ENZO/Templates/phukiencaulong.php">Phụ kiện cầu lông</a>

                   </div>
               </li>
               <li><a href="http://localhost/ENZO/Templates/tintuc.php">Tin tức</a></li>
               <li><a href="http://localhost/ENZO/Templates/gioithieu.php">Giới thiệu</a></li>
           </ul>

        </div>
   </div>
    <div class="votcaulong">
        <div class="votcaulong1">
            <h1>Danh mục : Phụ kiện cầu lông️ 🛒 </h1><br><br>

        </div>
       
            <ul class="sp1">
                <li>
                    <div class="khung">
                        <div class="top">
                        <a href="" class="anh"><img src="../image/br5016cny.webp" alt=""></a><br>
                        <a href="" class="muangay">MUA NGAY</a>
                        </div>
                        <div class="thong so">
                        Balo Cầu Lông Victor BR5016CNY-Trắng <br> (Nội Địa Trung)
                        <br>Mã: 6600
                        <br>Thương hiệu: Victor   |   Tình trạng: Còn hàng
                        <br>Giá 1.350.000 ₫
                        <br><a href="#">Xem thêm thông số</a>
                        </div>
                    </div>

                    <div class="khung">
                        <div class="top">
                        <a href="" class="anh"><img src="../image/br5016cni.webp" alt=""></a><br>
                        <a href="" class="muangay">MUA NGAY</a>
                        </div>
                        <div class="thong so">
                        Balo Cầu Lông Victor BR5016CNY - Đỏ<br> (Nội Địa Trung)
                        <br>Mã: 6601
                        <br>Thương hiệu: Victor   |   Tình trạng: Còn hàng
                        <br>Giá 1.350.000 ₫
                        <br><a href="#">Xem thêm thông số</a>
                        </div>
                    </div>

                    <div class="khung">
                        <div class="top">
                        <a href="" class="anh"><img src="../image/br6017l.webp" alt=""></a><br>
                        <a href="" class="muangay">MUA NGAY</a>
                        </div>
                        <div class="thong so">
                        Balo Cầu Lông Victor BR 6017L -Hồng <br> (Chính Hãng)
                        <br>Mã: 6602
                        <br>Thương hiệu: Victor   |   Tình trạng: Còn hàng
                        <br>Giá 720.000 ₫ 
                        <br><a href="#">Xem thêm thông số</a>
                        </div>
                    </div>

                    <div class="khung">
                        <div class="top">
                        <a href="" class="anh"><img src="../image/br7017bs.webp" alt=""></a><br>
                        <a href="" class="muangay">MUA NGAY</a>
                        </div>
                        <div class="thong so">
                        Balo Cầu Lông Victor BR 7017 BS - Xanh Đỏ<br> (Chính Hãng)
                        <br>Mã: 6603
                        <br>Thương hiệu: Victor   |   Tình trạng: Còn hàng
                        <br>Giá 850.000 ₫
                        <br><a href="#">Xem thêm thông số</a>
                        </div>
                    </div>

                    <div class="khung">
                        <div class="top">
                        <a href="" class="anh"><img src="../image/br9213tty.webp" alt=""></a><br>
                        <a href="" class="muangay">MUA NGAY</a>
                        </div>
                        <div class="thong so">
                        Túi Cầu Lông Victor BR9213 TTY<br> (Chính Hãng)
                        <br>Mã: 6604
                        <br>Thương hiệu: Victor   |   Tình trạng: Còn hàng
                        <br>Giá 1.500.000 ₫
                        <br><a href="#">Xem thêm thông số</a>
                        </div>
                    </div>

                    <div class="khung">
                        <div class="top">
                        <a href="" class="anh"><img src="../image/br6219r.webp" alt=""></a><br>
                        <a href="" class="muangay">MUA NGAY</a>
                        </div>
                        <div class="thong so">
                        Túi Cầu Lông Victor BR6219R <br>(Nội Địa Trung) 
                        <br>Mã: 6605
                        <br>Thương hiệu: Victor   |   Tình trạng: Còn hàng
                        <br>Giá 790.000 ₫
                        <br><a href="#">Xem thêm thông số</a>
                        </div>
                    </div>

                    <div class="khung">
                        <div class="top">
                        <a href="" class="anh"><img src="../image/br9612-55b.webp" alt=""></a><br>
                        <a href="" class="muangay">MUA NGAY</a>
                        </div>
                        <div class="thong so">
                        Túi Cầu Lông Victor BR9612-55/B<br> (Chính Hãng)
                        <br>Mã: 6606
                        <br>Thương hiệu: Victor   |   Tình trạng: Còn hàng
                        <br>Giá 1.340.000 ₫
                        <br><a href="#">Xem thêm thông số</a>
                        </div>
                    </div>

                    <div class="khung">
                        <div class="top">
                        <a href="" class="anh"><img src="../image/bg-32ktf.webp" alt=""></a><br>
                        <a href="" class="muangay">MUA NGAY</a>
                        </div>
                        <div class="thong so">
                        Túi Đựng Phụ Kiện Victor Hello <br>Kitty BG-32KT F Navy (Chính Hãng)
                        <br>Mã: 6607
                        <br>Thương hiệu: Victor   |   Tình trạng: Còn hàng
                        <br>Giá 400.000 ₫
                        <br><a href="#">Xem thêm thông số</a>
                        </div>
                    </div>

                    <div class="khung">
                        <div class="top">
                        <a href="" class="anh"><img src="../image/75th.webp" alt=""></a><br>
                        <a href="" class="muangay">MUA NGAY</a>
                        </div>
                        <div class="thong so">
                        Vớ Cầu Lông Yonex 75th Dài Xịn Sọc Đỏ<br>
                        <br>Mã: 7700
                        <br>Thương hiệu: Victor   |   Tình trạng: Còn hàng
                        <br>Giá 60.000 ₫
                        <br><a href="#">Xem thêm thông số</a>
                        </div>
                    </div>

                    <div class="khung">
                        <div class="top">
                        <a href="" class="anh"><img src="../image/77th.webp" alt=""></a><br>
                        <a href="" class="muangay">MUA NGAY</a>
                        </div>
                        <div class="thong so">
                        Vớ Cầu Lông Yonex Xịn 2023 - Trắng<br> Viền Tím
                        <br>Mã: 7701
                        <br>Thương hiệu: Victor   |   Tình trạng: Còn hàng
                        <br>Giá 60.000 ₫
                        <br><a href="#">Xem thêm thông số</a>
                        </div>
                    </div>

                    
                </li>
            </ul>
</div>
<div class="logo-duoi"><img src="../image/logo-duoi.png" alt=""></div>
</div>
</body>
</html>