<?
include 'core.php';
var_dump($_POST);
if(isset($_POST['regbtn'])){
    foreach ($_POST as $key => $value) {
        if($key != 'regbtn'){
            if($value == ''){
                $_SESSION['error']['errorreg']['inputs'] = 'Не все поля заполнены';
                header('location:../../reg.php');
            }else{
                if(isset($_SESSION['error']['errorreg']['inputs'])){
                 unset($_SESSION['error']['errorreg']['inputs']);
                }
        
                header('location:../../reg.php');
            }
        }
    }
}
if(!isset($_SESSION['error']['errorreg']['inputs'])){
    $login = $_POST['login'];
    $pass = $_POST['pass'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $checkpass = $_POST['checkpass'];
    $phone = $_POST['phone'];
    $role = $_POST['role'];
    
    if($pass == ''){
        $_SESSION['error']['errorreg']['inputs'] = 'Не все поля заполнены';
        header('location:../../reg.php');
      
    }else{
   
        if($pass != $checkpass){
            $_SESSION['error']['errorreg']['checkpass'] = 'Пароли не совпадают';
            header('location:../../reg.php');
        }else{
            unset($_SESSION['error']['errorreg']['checkpass']);
            $users = $link ->query("INSERT INTO `users`(`login`, `name`, `phone`, `pass`, `role`) 
            VALUES ('$login','$name','$phone','$pass','$role')");
            header('location:../../login.php');
        }
    }
}




?>