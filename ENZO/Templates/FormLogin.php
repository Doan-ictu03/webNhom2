<!DOCTYPE html>

<html lang="en">
<!-- <?php include_once "Templates/link.php";?> -->
<!-- <head>
    <?php include_once "Templates/Partials/Head.php";?>
</head> -->
<body>
    <style>
body, html {
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
}

    </style>
<div class="bg-light">
    <div class="container">
        <div class="row">
            <div class="col-3 mt-3 mb-3 bg-white rounded">
                <p class="p-login">ENZO Badminton</p>
                
                <img src="../image/login6.jpg" alt="">
            </div>
            <div class="col-8 ml-5 mt-3 mb-3 bg-white rounded">
                <form action="" method="POST">
                    <div><p class="p-login"><a href="http://localhost/ENZO/Templates/Home.php">Đăng Nhập Tài Khoản </a></p></div>
                    <div class="form-group">
                        <label for="">Email</label>
                        <input class="form-control" name="email" type="email" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <label for="">Mật khẩu</label>
                        <input class="form-control" name="password" type="password" placeholder="Mật khẩu">
                    </div>
                    <div><input type="submit" name="login" class="btn btn-primary" value="Đăng Nhập"></div>
                    <p>Chưa có tài khoản click <a class="a-blue" href="http://localhost/ENZO/Templates/FormRegister.php">Đăng ký </a> !</p>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>