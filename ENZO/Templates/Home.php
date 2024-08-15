<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StoreThegioicaulong</title>
    
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
</head>
<body>
 <header>
    <style>
        *{
    margin: 0;
    padding: 0;
}
body{
    font-size: 14px;
    line-height: 1.15;
    color: #111;
    text-align: center;
}
#tong {
    max-width: 100%;
    margin: 0;
    position: relative;
    position: absolute;
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
    padding: 10px 403px;
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
/* giua */
.giua {
    padding: 0px;
    overflow: hidden;
    height: 80%;
    width: 100%;
    margin: 0 auto;
    position: relative;
  }
.anhmenutop {
    width: 2912px;
    -webkit-animation: slide 14s ease infinite;
}
.slide {
    float: left;
    height: 100%;
    width: 600px;
  }
  @-webkit-keyframes slide {
    25% {margin-left: 0%;}
    50% {margin-left: -8%;}
    75% {margin-left: -16%;}
    100% {margin-left: 0%;}
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
/*---------------silde js 1*/
#tong .logo-hang img {
    width: 1176px;
    height: 143px;
    padding: 50px 0px;
  }
#tong .logo-duoi img{

    width: 1539px;
    height: 355px;
    padding: 150px 0px;
    padding-bottom: inherit;
  }
.chaomung .chaomung1 h1{
    font-size: 50px;
    border: 1px solid orange;
}

.chaomung .h2{
    text-align: center;
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
                        <a href="FormLogin.php">Đăng nhập</a>
                        <a href="FormRegister.php">Đăng ký</a>
                    </div>
                    </li>
                    <li><a href=""><span class="material-symbols-outlined">
                        add_shopping_cart
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
        <div class="chaomung">
            <div class="chaomung1"><h1> 🏸✅Chào mừng bạn đến với ENZO Badminton️🏸✅</h1></div> <br> <br>
        <h2>   ENZO Badminton, địa chỉ tin cậy cho mọi nhu cầu cầu lông của bạn!✅</h2> 
        
        </div>
        <div class="logo-hang"><a href=""> <img src="../image/logohang.png" alt=""></a></div>
        <div class="giua">
            <div class="anhmenutop">
                <div class="slide"><img src="..//image/homechenlong.webp" alt=""></div>
                <!-- <div class="slide"><img src="..//image/homevictor2.png" alt=""></div>
                <div class="slide"><img src="..//image/homevictorgiay.png" alt=""></div> -->
            </div>
            <!-- <div class="anhmenubottom">
                <li>Linning</li>
                <li>Victor</li>
            </div> -->
        </div>
      
       <iframe width="560" height="315" src="https://www.youtube.com/embed/cP8hMFfLIzc?si=GquLjqHiPJlIVhyt" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        <div class="logo-duoi"><img src="../image/logo-duoi.png" alt=""></div>
            
        </div>

 </header>
</body>
</html>