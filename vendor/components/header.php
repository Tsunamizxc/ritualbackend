<?
include 'vendor/functions/core.php';
// var_dump($_SESSION);
// var_dump($_POST);
?>

<!DOCTYPE html>
<html lang="ru" class="page">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="theme-color" content="#111111" />
    <title>Все ритуальные услуги | DOMHORON.RU</title>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css"
    />

    <!-- <link rel="preload" href="fonts/MullerRegular.woff2" as="font" type="font/woff2" crossorigin> -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />

    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="css/vendor.css" />
    <link rel="stylesheet" href="css/main.css" />
    <script defer src="js/main.js"></script>
  </head>

  <body class="page__body">
    <div class="site-container">
      <header class="header" id="top">
        <div class="container">
          <div class="header__row">
            <div class="header__row_logo">
              <a href="index.php" class="header__logo_item">
                <img src="img/logo.svg" alt="" class="header__logo_img" />
              </a>
            </div>
            <div class="header__row_menu">
              <ul class="header__menu"  <?if(isset($_SESSION['user'])){
                  if($_SESSION['user']['role'] == 'admin'){?>
                  style='width:55rem;'
                  <?}
                }?>>
                <li class="header__menu_item">
                  <a href="index.php#main" class="header__menu_link"
                    >Главная</a
                  >
                </li>
                <li class="header__menu_item">
                  <a href="index.php#catalog" class="header__menu_link"
                    >Каталог</a
                  >
                </li>
                <li class="header__menu_item">
                  <a href="index.php#reviews" class="header__menu_link"
                    >Отзывы</a
                  >
                </li>
                <li class="header__menu_item">
                  <a href="#contacts" class="header__menu_link">Контакты</a>
                </li>
                <?if(isset($_SESSION['user'])){
                  if($_SESSION['user']['role'] == 'admin'){?>
                  <li class="header__menu_item">
                    <a href="admin.php" class="header__menu_link" style='color:red;'>Админ панель</a>
                  </li>
                  <?}
                }?>
                <?if(isset($_SESSION['user'])){?>
                  <li class="header__menu_item">
                    <a href="logout.php" class="header__menu_link" style='color:red;'>Выйти</a>
                  </li>
                  <?
                }else{?>
                 <li class="header__menu_item">
                    <a href="login.php" class="header__menu_link" style='color:red;'>Войти</a>
                  </li>
                <?}?>
              </ul>
            </div>
            <div class="header__row_btn">
              <a data-fancybox href="#hidden" class="header__btn_item"
                >Обратный звонок</a
              >
            </div>
          </div>
        </div>
      </header>