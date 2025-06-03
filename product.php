<?
var_dump($_GET);
$getId = $_GET['id'];
include 'vendor/components/header.php';
$products = $link ->query("SELECT * FROM `products` WHERE `id` = '$getId'");
$theme = 'расчет пакета ' . $_GET['name'];

?>


      <main class="main">
        <div class="topdetail">
  <div class="container">
    <?foreach ($products as $key => $value) {?>
      <div class="topdetail__header">
      <h1 class="topdetail__header_title">
        Стоимость похорон и кремации в Омске пакет "<?=$value['title']?>"
      </h1>
    </div>
    <div class="topdetail__row">
      <div class="topdetail__row_img">
        <img src="img/upload/<?=$value['detailimg']?>" alt="" class="topdetail__img_item" />
      </div>
      <div class="topdetail__row_content">
        <p class="topdetail__content_item">
        <?=$value['detaildescription']?>
        </p>
      </div>
    </div>
    <?}?>
    
  
  </div>
</div>

        <div class="table-block">
  <div class="container">
    <div class="table-block__row">
      <table class="table">
        <thead>
          <tr>
            <th>Наименование</th>
            <th>Цена</th>
          </tr>
        </thead>
        <tbody>
          <?
          $allList = $link ->query("SELECT * FROM `serviceList` WHERE `id` = '$getId'");
          foreach ($allList as $key => $value) {?>
            <tr>
            <td><?=$value['name']?></td>
            <td><?=$value['price']?></td>
            </tr>
          <?}?>
        </tbody>
      </table>
      <a data-fancybox href="#hidden" class="table-block__btn_item">Оформить заказ</a>
    </div>
  </div>
</div>
<div class="contacts" id="contacts">
  <div class="container">
    <div class="contacts__header">
      <h2 class="contacts__header_title">Контакты</h2>
    </div>
    <div class="contacts__row">
      <div class="contacts__row_content">
        <div class="contacts__content">
          <h4 class="contacts__content_title">Услуги:</h4>
          <ul class="contacts__content_list">
            <li class="contacts__list_item">
              ул. Пограничная, 4/1 Петропавловск-Камчатский, Камчатский край,
              683032
            </li>
            <li class="contacts__list_item">
              ул. Завойко, 38, г. Елизово , Камчатский край, 684007.
            </li>
          </ul>
        </div>
        <div class="contacts__content">
          <h4 class="contacts__content_title">Телефоны:</h4>
          <ul class="contacts__content_list">
            <li class="contacts__list_item">
              <a href="tel:84152445501" class="contacts__list_link"
                >+7(4152)44-55-01</a
              >
            </li>
            <li class="contacts__list_item">
              <a href="tel:89146249288" class="contacts__list_link"
                >+7(914)62-49-288</a
              >
            </li>
          </ul>
        </div>
      </div>
      <div class="contacts__row_map">
        <iframe
          src="https://yandex.ru/map-widget/v1/?um=constructor%3A82df5d362e91b4a29e2e21323dffc56ab3b542392bc84d2f967363832ddac220&amp;source=constructor"
          frameborder="0"
        ></iframe>
      </div>
    </div>
  </div>
</div>

      </main>
      <?include 'vendor/components/footer.php';?>
