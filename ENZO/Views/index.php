<?php
session_start();
require_once "Controllers/Controller.php"
// controller
$Controll = new Controller();
$task =isset($_GET['task'])?$_GET['task']:null;

//login

$name = isset($_POST['name'])? $_POST['name']:null;
$email = isset($_POST['email'])? $_POST['email']:null;
$phone = isset($_POST['phone'])? $_POST['phone']:null;
$address = isset($_POST['address'])? $_POST['address']:null;
$password = isset($_POST['password'])? $_POST['password']:null;
$repassword = isset($_POST['repassword'])? $_POST['repassword']:null;
$created = date("Y.m.d");

// dang nhap
if (isset($_POST['login'])){
    $Controll->doLogin();
}
// dang ky
if (isset($_POST['register'])){
    if (empty($name) || empty($email) || empty($phone || empty($address)  || empty($password) || empty($repassword))){
        $message = "Không được để trống !";
        echo "<script type='text/javascript'>alert('$message');</script>";
    }elseif ($password != $repassword){
        $message = "Mật khẩu không trùng nhau !";
        echo "<script type='text/javascript'>alert('$message');</script>";
    }elseif (isset($name) && isset($email) && isset($phone) && isset($address)  && isset($password) && isset($repassword) && $repassword = $password){
        $Controll->doRegister($name, $email, $phone, $address, $password, $created);
    }
}
// // them san pham
// if (isset($_POST['add_product'])){
//     $ControllShoe->addProduct($name_product, $price, $quanity, $trandmark, $type, $created, $size);
// }
// // sủa sản phẩm
// if (isset($_POST['update_product'])){
//     $ControllShoe->doUpdateProduct();
// }
switch ($task){

    case 'pagehome':
        $Controll->getPageHome();
        break;
    // case 'pagecontact':
    //     $Controller->getPageContact();
    //     break;
    // case 'pagenews':
    //     $Controller->getPageNews();
    //     break;
 
    case 'pagelogin':
        $Controll->getPageLogin();
        break;
    case 'pageregister':
        $Controll->getPageRegister();
        break;
    case 'pageuser':
        $Controll->getPageUser();
        break;
    // case 'pageproduct':
    //     $ControllShoe->getPageProduct();
    //     break;
  
    // case 'deleteuser':
    //     $ControllShoe->deleteUser();
    //     break;
    // case 'editproduct':
    //     $ControllShoe->getPageEditProduct();
    //     break;
    // case 'deleteproduct':
    //     $ControllShoe->delProduct();
    //     break;
   
    case 'logout':
        session_destroy();
        header("location:index.php?task=pagehome");
        break;
    default:
        $Controll->getPageHome();
        break;
}
?>