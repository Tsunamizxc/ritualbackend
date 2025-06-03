<?
include 'core.php';
var_dump($_POST);
if(isset($_POST['addReviewsBtn'])){
    foreach ($_POST as $key => $value) {
        if($key != 'addReviewsBtn' && $key != 'addListId'){
            if($value == ''){
                $_SESSION['error']['addReviewsBtn']['inputs'] = 'Не все поля заполнены';
                header('location:../../admin.php');
            }else{
                if(isset($_SESSION['error']['addReviewsBtn']['inputs'])){
                 unset($_SESSION['error']['addReviewsBtn']['inputs']);
                }
        
                header('location:../../admin.php');
            }
        }
    }
}
if(!isset($_SESSION['error']['addReviewsBtn']['inputs'])){
    $reviewsName = $_POST['reviewsName'];
    $reviewsText = $_POST['reviewsText'];
    $dateReviews = $_POST['dateReviews'];
    $statusReviews = $_POST['statusReviews'];


    $addList = $link ->query("INSERT INTO `reviews`(`name`, `date`, `text`, `status`) 
    VALUES ('$reviewsName','$dateReviews','$reviewsText','$statusReviews')");
    header('location:../../index.php');
   
}




?>