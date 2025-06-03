<?
include 'core.php';
if(isset($_POST['delListitemsBtn'])){
    $delList = $_POST['delListItems'];

    $listItems = $link ->query("DELETE FROM `serviceList` WHERE `id` = '$delList'");
    header('location:../../admin.php');
    
}

?>