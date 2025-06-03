<?
include 'core.php';
if(isset($_POST['delProductBtn'])){
    $delProduct = $_POST['delProduct'];

    $users = $link ->query("DELETE FROM `products` WHERE `id` = '$delProduct'");
    header('location:../../admin.php');
    
}

?>