<?
include 'core.php';
var_dump($_POST);
if(isset($_POST['addProduct'])){
    foreach ($_POST as $key => $value) {
        if($key != 'addProduct'){
            if($value == ''){
                $_SESSION['error']['addProduct']['inputs'] = 'Не все поля заполнены';
                header('location:../../admin.php');
            }else{
                if(isset($_SESSION['error']['addProduct']['inputs'])){
                 unset($_SESSION['error']['addProduct']['inputs']);
                }
        
                header('location:../../admin.php');
            }
        }
    }
}
if(!isset($_SESSION['error']['addProduct']['inputs'])){
    $title = $_POST['title'];
    $price = $_POST['price'];
    $facedescription = $_POST['facedescription'];
    $detaildescription = $_POST['detaildescription'];
    $image = $_FILES['faceimg']['name'];
    $dir = "../../img/upload/" . $_FILES["faceimg"]["name"];
    move_uploaded_file($_FILES["faceimg"]["tmp_name"], $dir);
    $imagedet = $_FILES['detailimg']['name'];
    $dirdet = "../../img/upload/" . $_FILES["detailimg"]["name"];
    move_uploaded_file($_FILES["detailimg"]["tmp_name"], $dirdet);


    $addProd = $link ->query("INSERT INTO `products`(`title`, `price`, `facedescription`, `detaildescription`, `faceimg`, `detailimg`) 
    VALUES ('$title','$price','$facedescription','$detaildescription','$image','$imagedet')");
    header('location:../../admin.php');
   
}




?>