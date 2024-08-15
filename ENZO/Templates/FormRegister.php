<!DOCTYPE html>
<html>
<!-- <?php include_once "Templates/link.php";?>
<head>
    <?php include_once "Templates/Partials/Head.php";?>
</head> -->
<body>
    <style >body, html {
    height: 100%;
    margin: 0;
    font-family: Arial, sans-serif;
}

.bg-light {
    background-color: #f8f9fa;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.container {
    width: 80%;
    max-width: 1200px;
}

.row {
    display: flex;
    justify-content: center;
}

.col-3, .col-8 {
    margin: 15px;
    padding: 20px;
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
}

.p-login {
    font-size: 24px;
    color: #333;
    text-align: center;
    margin-bottom: 20px;
}

.form-group {
    margin-bottom: 15px;
}

label {
    display: block;
    margin-bottom: 5px;
}

.input, .btn {
    width: 100%;
    padding: 10px;
    margin: 5px 0 20px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

.btn {
    background-color: #007bff;
    color: white;
    border: none;
}

.btn:hover {
    opacity: 0.8;
}

.a-blue {
    color: #007bff;
}

.a-blue:hover {
    text-decoration: underline;
}</style>
<!-- <nav>
    <?php include_once "Templates/Partials/Header.php";?>
</nav> -->
<div class="bg-light">
    <div class="container">
        <div class="row">
            <div class="col-3 mt-3 mb-3 bg-white rounded">
                <p class="p-login">Tạo Tài Khoản</p>
                <p>Tạo tài khoản để theo dõi đơn hàng.</p>
                <img src="../image/login5.jpg" alt="">
            </div>
            <div class="col-8 bg-white mt-3 mb-3 ml-5 rounded">
                <form method="POST" action="">
                    <div><p class="p-login">Tạo Tài Khoản người dùng mới.</p></div>
                    <div class="form-group">
                        <label for="">Tên Người Dùng</label>
                        <input class="form-control" type="text" name="name" placeholder="Tên người dùng">
                    </div>
                    <div class="form-group">
                        <label for="">Email</label>
                        <input class="form-control" type="email" name="email" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <label for="">Số Điện Thoại</label>
                        <input class="form-control" type="number" name="phone" placeholder="Số điện thoại">
                    </div>
                    <div class="form-group">
                        <label for="">Địa Chỉ</label>
                        <input class="form-control" type="text" name="address" placeholder="Địa chỉ">
                    </div>
                    <div class="form-group">
                        <label for="">Mật khẩu</label>
                        <input class="form-control" type="password" name="password" placeholder="Mật khẩu">
                    </div>
                    <div class="form-group">
                        <label for="">Nhập Lại Mật khẩu</label>
                        <input class="form-control" type="password" name="repassword" placeholder="Nhập lại mật khẩu">
                    </div>
                    <div><input type="submit" class="btn btn-primary" name="register" value="Đăng Ký"></div>
                    <p>Đã có tài khoản  <a class="a-blue" href="http://localhost/ENZO/Templates/FormLogin.php">Đăng nhập</a> !</p>
                </form>
            </div>  
        </div>
    </div>
</div>
<!-- <footer>
    <?php include_once "Templates/Partials/Footer.php";?>
</footer> -->
</body>
</html>