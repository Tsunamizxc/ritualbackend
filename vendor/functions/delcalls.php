<?
include 'core.php';
if(isset($_POST['delCalls'])){
    $delProduct = $_POST['dellCallsId'];

    $users = $link ->query("DELETE FROM `calls` WHERE `id` = '$delProduct'");
    header('location:../../admin.php');
    
}

?>