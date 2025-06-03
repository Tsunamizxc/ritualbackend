<footer class="footer">
        <div class="container">
          <div class="footer__row">
            <div class="footer__row_logo">
              <a href="index.php" class="footer__logo_item">
                <img src="img/logo.svg" alt="" class="footer__logo_img" />
              </a>
            </div>
            <div class="footer__row_menu">
              <ul class="footer__menu">
                <li class="footer__menu_item">
                  <a href="index.php#main" class="footer__menu_link"
                    >Главная</a
                  >
                </li>
                <li class="footer__menu_item">
                  <a href="index.php#catalog" class="footer__menu_link"
                    >Каталог</a
                  >
                </li>
                <li class="footer__menu_item">
                  <a href="index.php#reviews" class="footer__menu_link"
                    >Отзывы</a
                  >
                </li>
                <li class="footer__menu_item">
                  <a href="#contacts" class="footer__menu_link">Контакты</a>
                </li>
              </ul>
            </div>
            <div class="footer__row_btn">
              <a data-fancybox href="#hidden" class="footer__btn_item"
                >Обратный звонок</a
              >
            </div>
          </div>
          <div class="footer__bottom">
            <div class="footer__bottom_name">
              © 2016-2025 «Domhoron.ru». Все права защищены.
            </div>
            <div class="footer__bottom_name">Дипломный проект Ивана Вовка</div>
          </div>
        </div>
      </footer>
      <a href="#top" class="movetop">Наверх</a>
    </div>

    <div style="display: none; width: 500px" id="hidden">
      <div class="popup">
        <h2>Форма обратной связи</h2>
        <form action="vendor/functions/addcalls.php" method="post" class="popup__form">
          <div class="popup__form_item">
            <label for="" class="popup__item_label">Введите имя:</label>
            <input type="text" class="popup__item_input" name="name"/>
          </div>
          <div class="popup__form_item">
            <label for="" class="popup__item_label">Введите номер:</label>
            <input type="text" class="popup__item_input" name="phone"/>
          </div>
          <input type="hidden" name="themeCalls" value="<?=$theme?>">
          <div class="popup__form_item">
            <button class="popup__item_btn" name="addCalls">Отправить</button>
          </div>
          <?
    if(isset($_SESSION['error']['addCalls'])){
      foreach ($_SESSION['error']['addCalls'] as $key => $value) {
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
    </div>
    <div style="display: none; width: 500px" id="reviewsform">
      <div class="popup">
        <h2>Форма обратной связи</h2>
        <form action="vendor/functions/addreviews.php" method="post" class="popup__form">
          <div class="popup__form_item">
            <label for="" class="popup__item_label">Введите имя:</label>
            <input type="text" class="popup__item_input" name="reviewsName" value="<?=$_SESSION['user']['name']?>"/>
          </div>
          <div class="popup__form_item">
            <label for="" class="popup__item_label">Ваш отзыв:</label>
            <textarea class="admin__line_textarea" name="reviewsText" id=""></textarea>
          </div>
          <input type="hidden" name="dateReviews" value="<?=date("m.d.y")?>">
          <input type="hidden" name="statusReviews" <?
          if(!isset($_SESSION['user'])){
          }else{
            if($_SESSION['user']['role'] !='admin'){?>
             value='0'
            <?}else{?>
             value='1'
            <?}
          }
          ?>
          \>
          <div class="popup__form_item">
            <button class="popup__item_btn" name="addReviewsBtn">Отправить отзыв</button>
          </div>
          <?
    if(isset($_SESSION['error']['addReviewsBtn'])){
      foreach ($_SESSION['error']['addReviewsBtn'] as $key => $value) {
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
    </div>
  </body>
</html>
