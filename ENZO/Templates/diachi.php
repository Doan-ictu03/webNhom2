<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Website của Tôi</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            width: 80%;
            margin: auto;
            overflow: hidden;
        }
        header {
            background:orange;
            color: white;
            padding-top: 30px;
            min-height: 70px;
            border-bottom: #e8491d 3px solid;
        }
        header a {
            color: #ffffff;
            text-decoration: none;
            text-transform: uppercase;
            font-size: 16px;
        }
        header ul {
            padding: 0;
            list-style: none;
        }
        header li {
            float: left;
            display: inline;
            padding: 0 20px 0 20px;
        }
        header #branding {
            float: left;
        }
        header #branding h1 {
            margin: 0;
        }
        header nav {
            float: right;
            margin-top: 10px;
        }
        header .highlight, header .current a {
            color: #e8491d;
            font-weight: bold;
        }
        header a:hover {
            color: #ffffff;
            font-weight: bold;
        }
        .container img{
            max-width: 100%;
            padding: 0px 0px;
        }
    </style>
</head>
<body>
    <header>
        <div class="container">
            <div id="branding">
                <h1><span class="highlight">Địa Chỉ</span> Của Tôi</h1>
            </div>
            <nav>
                <ul>
                    <li class="current"><a href="index.html">Trang Chủ</a></li>
                    <li><a href="gioithieu.php">Về Chúng Tôi</a></li>
                    <li><a href="home.php">Quay lai</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <div class="container">
        <img src="../image/map1.jpg" alt="">
    </div>
</body>
</html>