<?include 'vendor/components/header.php';
$theme = 'обратный звонок с главной страницы';
?>
        <main class="main">
            <div class="popup" style="border: unset; margin: 0 auto;">
    <h2>Регистрация</h2>
    <form action="vendor/functions/regcode.php" class="popup__form" method="post">
        <div class="popup__form_item">
            <label for="" class="popup__item_label">Введите почту:</label>
            <input type="text" class="popup__item_input" name="email"/>
        </div>
        <div class="popup__form_item">
            <label for="" class="popup__item_label">Введите логин:</label>
            <input type="text" class="popup__item_input" name="login"/>
        </div>
        <div class="popup__form_item">
            <label for="" class="popup__item_label">Введите имя:</label>
            <input type="text" class="popup__item_input" name="name"/>
        </div>
        <div class="popup__form_item">
            <label for="" class="popup__item_label">Введите номер:</label>
            <input type="text" class="popup__item_input" name="phone"/>
        </div>
        <div class="popup__form_item">
            <label for="" class="popup__item_label">Введите пароль:</label>
            <input type="text" class="popup__item_input" name="pass"/>
        </div>
        <div class="popup__form_item">
            <label for="" class="popup__item_label">Повторите пароль:</label>
            <input type="text" class="popup__item_input" name="checkpass"/>
        </div>
        <div class="popup__form_item">
          <input type="hidden" value="user" name="role">
            <button class="popup__item_btn" name="regbtn">Регистрация</button>
        </div>
        <p class="popup__form_text">Есть аккаунт? <a href="login.php" class="popup__form_link">Войдите</a></p>
        <?
        if(isset($_SESSION['error']['errorreg'])){
          foreach ($_SESSION['error']['errorreg'] as $key => $value) {
          ?>
          <p class='errortext'>
            <?=$value?>
          </p>
          <?
          }
        }
        ?>
    </form>
</div>
  
        </main>
        <?include 'vendor/components/footer.php';?>