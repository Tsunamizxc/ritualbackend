<?
include 'core.php';
var_dump($_POST);
if(isset($_POST['addCalls'])){
    foreach ($_POST as $key => $value) {
        if($key != 'addCalls' && $key != 'themeCalls'){
            if($value == ''){
                $_SESSION['error']['addCalls']['inputs'] = 'Не все поля заполнены';
                header('location:../../index.php');
            }else{
                if(isset($_SESSION['error']['addCalls']['inputs'])){
                 unset($_SESSION['error']['addCalls']['inputs']);
                }
        
                header('location:../../index.php');
            }
        }
    }
}
if(!isset($_SESSION['error']['addCalls']['inputs'])){
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $themeCalls = $_POST['themeCalls'];



    $addCalls = $link ->query("INSERT INTO `calls`(`name`, `phone`, `theme`) 
    VALUES ('$name','$phone','$themeCalls')");
    header('location:../../index.php');
   
}




?>