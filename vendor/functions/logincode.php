<?
include 'core.php';

$login = $_POST['login'];
$pass = $_POST['pass'];

$users = $link ->query("SELECT * FROM `users` WHERE `login` = '$login' AND `pass` = '$pass'");
if($users -> num_rows > 0){
    $user = $users ->fetch_assoc();
    $_SESSION['user'] = [
        'id' => $user['id'],
        'login' => $user['login'],
        'name' => $user['name'],
        'phone' => $user['phone'],
        'role' => $user['role']
    ];
    unset($_SESSION['error']['loginerror']);
    header('location:../../index.php');
    // var_dump($_POST);
}else{
    $_SESSION['error']['loginerror']['login'] = 'Аккаунт не найден';
    header('location:../../login.php');
    // var_dump($_POST);
    
}

?>