<?
include 'core.php';
var_dump($_POST);
if(isset($_POST['delListitemsBtn'])){
    foreach ($_POST as $key => $value) {
        if($key != 'delListitemsBtn'){
            if($value == ''){
                $_SESSION['error']['delListitemsBtn']['inputs'] = 'Не все поля заполнены';
                header('location:../../admin.php');
            }else{
                if(isset($_SESSION['error']['delListitemsBtn']['inputs'])){
                 unset($_SESSION['error']['delListitemsBtn']['inputs']);
                }
        
                header('location:../../admin.php');
            }
        }
    }
}
if(!isset($_SESSION['error']['delListitemsBtn']['inputs'])){
   
    $delStatusReviews = $_POST['delStatusReviews'];
    $idReviews = $_POST['idReviews'];
    if($delStatusReviews == '1'){
        $updateReviews = $link ->query("UPDATE `reviews` SET `status`='$delStatusReviews' 
        WHERE `id` = '$idReviews'");
        header('location:../../admin.php');
    }elseif($delStatusReviews == '2'){
        $updateReviews = $link ->query("DELETE FROM `reviews` WHERE `id` = '$idReviews'");
        header('location:../../admin.php');
    }
    
   


   
   
}




?>