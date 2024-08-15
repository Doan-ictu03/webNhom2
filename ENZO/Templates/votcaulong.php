<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sản phẩm : Vợt cầu lông</title>
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
    padding: 60px 39.7%;
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
    background-color:#446084 ;
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
               <li><a href="http://localhost/ENZO/Templates/">Trang chủ</a></li>
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
            <h1>Danh mục : Vợt cầu lông️🏸</h1><br><br>

        </div>
       
            <ul class="sp1">
                <li>
                    <div class="khung">
                        <div class="top">
                        <a href="" class="anh"><img src="../image/ryuga1.webp" alt=""></a><br>
                        <a href="" class="muangay">MUA NGAY</a>
                        </div>
                        <div class="thong so">
                        Vợt Cầu Lông Victor Thruster RYUGA D <br>(Chính hãng)
                        <br>Mã: 1100
                        <br>Thương hiệu: Victor   |   Tình trạng: Còn hàng
                        <br>Giá 2.850.000 ₫
                        <br><a href="#">Xem thêm thông số</a>
                        </div>
                    </div>

                    <div class="khung">
                        <div class="top">
                        <a href="" class="anh"><img src="../image/ryuga2.jpg" alt=""></a><br>
                        <a href="#" class="muangay">MUA NGAY</a>
                        </div>
                        <div class="thong so">
                        Vợt Cầu Lông Victor Thruster RYUGA II <br>(Chính Hãng)
                        <br>Mã: 1101
                        <br>Thương hiệu: Victor   |   Tình trạng: Còn hàng
                        <br>Giá 3.049.000 ₫
                        <br><a href="#">Xem thêm thông số</a>
                        </div>
                    </div>
                    <div class="khung">
                        <div class="top">
                        <a href="" class="anh"><img src="../image/ryugametalic.webp" alt=""></a><br>
                        <a href="#" class="muangay">MUA NGAY</a>
                        </div>
                        <div class="thong so">
                        Vợt Cầu Lông Victor Thruster RYUGA <br> Metallic (Nội địa Trung)
                        <br>Mã: 1102
                        <br>Thương hiệu: Victor   |   Tình trạng: Còn hàng
                        <br>Giá 5.990.000 ₫
                        <br><a href="#">Xem thêm thông số</a>
                        </div>
                    </div>
                    <div class="khung">
                        <div class="top">
                        <a href="" class="anh"><img src="../image/arshs.webp" alt=""></a><br>
                        <a href="#" class="muangay">MUA NGAY</a>
                        </div>
                        <div class="thong so">
                        Vợt Cầu Lông Victor ARS HS (Chính Hãng) <br>
                        <br>Mã: 1103
                        <br>Thương hiệu: Victor   |   Tình trạng: Còn hàng
                        <br>Giá 2.750.000 ₫
                        <br><a href="#">Xem thêm thông số</a>
                        </div>
                    </div>
                    <div class="khung">
                        <div class="top">
                        <a href="" class="anh"><img src="../image/tkfden.webp" alt=""></a><br>
                        <a href="#" class="muangay">MUA NGAY</a>
                        </div>
                        <div class="thong so">
                        Vợt Cầu Lông Victor TK-F Đen <br>(Chính Hãng)
                        <br>Mã: 1104
                        <br>Thương hiệu: Victor   |   Tình trạng: Còn hàng
                        <br>Giá 2.840.000 ₫
                        <br><a href="#">Xem thêm thông số</a>
                        </div>
                    </div>

                    <div class="khung">
                        <div class="top">
                        <a href="" class="anh"><img src="../image/ars9000.webp" alt=""></a><br>
                        <a href="#" class="muangay">MUA NGAY</a>
                        </div>
                        <div class="thong so">
                        Vợt Cầu Lông Victor ARS 9000 <br> (Chính Hãng) 
                        <br>Mã: 1105
                        <br>Thương hiệu: Victor   |   Tình trạng: Còn hàng
                        <br>Giá 1.450.000 ₫
                        <br><a href="#">Xem thêm thông số</a>
                        </div>
                    </div>

                    <div class="khung">
                        <div class="top">
                        <a href="" class="anh"><img src="../image/JS10.webp" alt=""></a><br>
                        <a href="#" class="muangay">MUA NGAY</a>
                        </div>
                        <div class="thong so">
                        Vợt Cầu Lông Victor JS10 C <br>New - Đen Vàng Chính Hãng
                        <br>Mã: 1106
                        <br>Thương hiệu: Victor   |   Tình trạng: Còn hàng
                        <br>Giá 2.650.000 ₫
                        <br><a href="#">Xem thêm thông số</a>
                        </div>
                    </div>

                    <div class="khung">
                        <div class="top">
                        <a href="" class="anh"><img src="../image/ars9.webp" alt=""></a><br>
                        <a href="#" class="muangay">MUA NGAY</a>
                        </div>
                        <div class="thong so">
                        Vợt Cầu Lông Victor ARS 9 - Hồng <br>(Nội Địa Trung)
                        <br>Mã: 1107
                        <br>Thương hiệu: Victor   |   Tình trạng: Còn hàng
                        <br>Giá 900.000 ₫
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