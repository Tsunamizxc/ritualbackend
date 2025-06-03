<?
include 'core.php';
var_dump($_POST);
if(isset($_POST['addListBtn'])){
    foreach ($_POST as $key => $value) {
        if($key != 'addListBtn' && $key != 'addListId'){
            if($value == ''){
                $_SESSION['error']['addListBtn']['inputs'] = 'Не все поля заполнены';
                header('location:../../admin.php');
            }else{
                if(isset($_SESSION['error']['addListBtn']['inputs'])){
                 unset($_SESSION['error']['addListBtn']['inputs']);
                }
        
                header('location:../../admin.php');
            }
        }
    }
}
if(!isset($_SESSION['error']['addListBtn']['inputs'])){
    $nameList = $_POST['nameList'];
    $priceList = $_POST['priceList'];
    $addListId = $_POST['addListId'];



    $addList = $link ->query("INSERT INTO `serviceList`(`name`, `price`, `idProduct`) 
    VALUES ('$nameList','$priceList','$addListId')");
    header('location:../../admin.php');
   
}




?>