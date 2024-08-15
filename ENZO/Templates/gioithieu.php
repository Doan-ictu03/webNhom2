<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tin tuc cau long</title>
    <link rel="stylesheet" href="">
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
    font-size: 26px;
    padding: 0px 42px;
    text-decoration: none;/*xoa gach chan*/
    text-transform: uppercase; /*viet hoa*/
    box-sizing: border-box; 
    color: #111;

}
/* home2 */
.home2 {
    text-align: center;
    margin: 0px 0px;
  
    font-size: 27px;
}
.home2 #main-menu2{
    border: 1px solid #fffafa;
    padding: 10px 236.2px;
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
    padding: 0px 61px;
    text-decoration: none;/*xoa gach chan*/
    text-transform: uppercase; /*viet hoa*/
    box-sizing: border-box; 
}
/* giua
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
  } */
  
    


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
  /* .tintuccaulong { font-family: Arial, sans-serif; }
  header, footer { background-color: #333; color: white; padding: 10px 20px; }
  h1 { margin: 0; }
  article { margin-bottom: 20px; padding: 20px; border-bottom: 1px solid #ccc; }
  .news-date { color: #888; } */
  .gioithieucuahang { font-family: Arial, sans-serif; }
  header, footer { background-color: #333; color: white; padding: 10px 20px; }
  h1, h2 { margin: 0; }
  .introduction { margin-bottom: 20px; padding: 20px; border-bottom: 1px solid #ccc; }
  .store-details { color: #555; }
  .store-details h2 { color: #000; }

.gioithieucuahang header{
    background-color: #8dd6cc;
    color: black;
}
.gioithieucuahang .gt {
    color: black;
}
.gioithieucuahang h5{
    text-align: left;
    color: #869190;
}
.gioithieucuahang .gt p{
    text-align: left;
    line-height: 2;
    font-size: 20px;
}
.gioithieucuahang .gt big{
    color: red;
}

    </style>
    <div id="tong">
        <div class="top">
             <div class="home1">
                <img src="../image/badminton-logo.png" alt="">
                <ul id="main-menu">
                    <li><a href="">Hotline: 0989999686 | 0998566878</a></li>
                    <li><a href="diachi.php">địa chỉ</a></li>
                    <li class="TaiKhoan1"><a href="">Tài Khoản</a>
                    <div class="TaiKhoan2">
                        <a href="#">Đăng nhập</a>
                        <a href="#">Đăng ký</a>
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
      
        <div class="gioithieucuahang">
            <h5> 
            👤 ENZOSports__
             ✉ Enzobadminton@gmail.com__ 
            🕐Thai Nguyen. 26-03-2024
            </h5>
            <br> <br>
            <header>
            <h1>Chào mừng bạn đến với ENZO Badminton️🏸✅</h1>
          </header>
          <br> <br>
          <div class="gt">
            <h2>Cửa Hàng ENZO Badminton</h2> <br>
            <p> <big>ENZO Badminton✅</big>, địa chỉ tin cậy cho mọi nhu cầu cầu lông của bạn! <br>
                <big>Tại đây</big>, chúng tôi tự hào cung cấp một loạt sản phẩm chất lượng cao, từ vợt cầu lông được thiết kế tinh xảo, giày cầu lông đảm bảo sự thoải mái và ổn định, đến balo cầu lông tiện lợi và phong cách, cùng với đó là vô số phụ kiện cầu lông khác. Mỗi sản phẩm của chúng tôi đều được chọn lọc kỹ lưỡng để đảm bảo bạn có thể chơi với phong độ tốt nhất. <br>

                Hãy ghé thăm cửa hàng của chúng tôi để trải nghiệm sự đa dạng của các sản phẩm cầu lông hàng đầu và tìm kiếm sự tư vấn chuyên nghiệp từ đội ngũ nhân viên nhiệt tình của chúng tôi. ENZO Badminton - Nâng tầm trải nghiệm cầu lông của bạn! <br> <br>

                <big>Về bảo hành ✅</big>: Tất cả sản phẩm tại <big>ENZO Badminton</big> đều đi kèm với chính sách bảo hành rõ ràng để đảm bảo quyền lợi của khách hàng. Để biết thông tin chi tiết về thời gian bảo hành cụ thể cho từng sản phẩm, bạn có thể liên hệ trực tiếp với cửa hàng hoặc tham khảo thông tin trên website của chúng tôi. Chúng tôi cam kết hỗ trợ khách hàng mọi vấn đề liên quan đến chất lượng sản phẩm.✅ <br><br>

                <big>Các khuyến mãi & ưu đãi🎟️</big> :Chắc chắn rồi! Tại <big></big>ENZO Badminton</big>, chúng tôi thường xuyên tổ chức các chương trình khuyến mãi hấp dẫn để tri ân khách hàng. Bạn có thể tìm thấy các ưu đãi đặc biệt như giảm giá cho các sản phẩm nổi bật, quà tặng kèm khi mua hàng, hoặc các sự kiện đặc biệt dành cho các thành viên thân thiết. Để không bỏ lỡ bất kỳ chương trình khuyến mãi nào, hãy theo dõi trang web và trang mạng xã hội của chúng tôi để cập nhật thông tin mới nhất!🎟️ <br><br>

                <big>Giá cả của sản phẩm🎫</big> tại <big>ENZO Badminton </big>rất cạnh tranh và phù hợp với mọi ngân sách. Chúng tôi cung cấp các mức giá đa dạng, từ những sản phẩm giá rẻ cho người mới bắt đầu, đến những dòng sản phẩm cao cấp dành cho các vận động viên chuyên nghiệp. Để biết thông tin giá cụ thể, bạn có thể truy cập website của chúng tôi hoặc liên hệ trực tiếp để nhận báo giá chi tiết và các chương trình khuyến mãi hiện hành🎫. <br><br> <br> <br>

                <big>Cảm ơn bạn đã quan tâm đến ENZO Badminton</big>. Chúng tôi luôn sẵn lòng cung cấp những sản phẩm và dịch vụ tốt nhất để đáp ứng nhu cầu của bạn. Với chính sách bảo hành đáng tin cậy, mức giá cạnh tranh, và những chương trình khuyến mãi thường xuyên, chúng tôi tin rằng bạn sẽ có những trải nghiệm mua sắm tuyệt vời. Hãy ghé thăm cửa hàng hoặc website của chúng tôi để khám phá thêm và tận hưởng những ưu đãi đặc biệt từ ENZO Badminton. Chúc bạn có những giờ phút vui vẻ trên sân cầu lông! 🏸

            </p>
           
          </div>
          
          <footer>
            <p>Bản quyền © 2024 Cửa Hàng Cầu Lông Thế Giới</p>
          </footer></div>
        <div class="logo-duoi"><img src="../image/logo-duoi.png" alt=""></div>
            
        </div>
    </div>

 </header>
</body>
</html>