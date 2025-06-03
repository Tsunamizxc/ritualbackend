<?include 'vendor/components/header.php';
$theme = 'обратный звонок с главной страницы';
?>
        <main class="main">
            <div class="popup" style="border: unset; margin:150px auto;">
    <h2>Авторизация</h2>
    <form action="vendor/functions/logincode.php" class="popup__form" method='POST'>
      
        <div class="popup__form_item">
            <label for="" class="popup__item_label">Введите логин:</label>
            <input type="text" class="popup__item_input"  name="login"/>
        </div>
        <div class="popup__form_item">
            <label for="" class="popup__item_label">Введите пароль:</label>
            <input type="text" class="popup__item_input"  name="pass"/>
        </div>
    
        <div class="popup__form_item">
            <button class="popup__item_btn" name="loginbtn">Отправить</button>
        </div>
        <p class="popup__form_text">Нету аккаунта? <a href="reg.php" class="popup__form_link">Зарегистрируйтесь</a></p>
    </form>
    <?
    if(isset($_SESSION['error']['loginerror'])){
      foreach ($_SESSION['error']['loginerror'] as $key => $value) {
      ?>
      <p class='errortext'>
        <?=$value?>
      </p>
      <?
      }
    }
    ?>
</div>
        </main>
        <?include 'vendor/components/footer.php';?>