<?include 'vendor/components/header.php';
$theme = 'обратный звонок с главной страницы';?>

      <main class="main">
        <div class="hello" id="main">
          <div class="container">
            <div class="hello__content">
              <h1 class="hello__content_title">Организация похорон в Омске</h1>
              <p class="hello__content_description">
                Организация похорон в Омске от ритуальной службы DomHoron.ru —
                это гарантия, что похороны вашего близкого пройдут
                в соответствии с волеизъявлением почившего и пожеланиями
                родственников. После вашего звонка организация похорон
                становится полностью заботой наших специалистов.
              </p>
              <a data-fancybox href="#hidden" class="hello__content_btn">
                Рассчитать стоимость похорон
              </a>
            </div>
          </div>
        </div>
        <div class="price" id="catalog">
          <div class="container">
            <div class="price__header">
              <h2 class="price__header_title">
                Цены на ритуальные услуги в Омске
              </h2>
              <p class="price__header_description">
                Показываются цены с учетом предусмотренного законодательством
                федерального пособия на погребение российскимх граждан. Пособие
                для проживающих в Омске граждан и имеющих городскую прописку
                можт быть увеличено на сумму регионаьных доплат и компенсаций.
              </p>
            </div>
            <div class="price__row">


            <?
                $products = $link ->query("SELECT * FROM `products`");
                if($products->num_rows == 0){?>
                    <p class='errortext'>
                       Пакетов услуг нету
                    </p>
                <?}else{
                  foreach ($products as $key => $value) {?>
                  <div class="price__row_card">
                <div class="price__card_top">
                  <p class="price__top_title"><?=$value['title']?></p>
                  <p class="price__top_price">от <?=$value['price']?></p>
                </div>
                <p class="price__card_description">
                  <?=$value['facedescription']?>
                </p>
                <img src="img/upload/<?=$value['faceimg']?>" alt="" class="price__card_img" />
                <a href="product.php?id=<?=$value['id']?>&name=<?=$value['title']?>" class="price__card_btn">Подробнее</a>
              </div>
                <?}?>
                <?}?>
          
             
                
              
        
            </div>
          </div>
        </div>
        <div class="reviews" id="reviews">
          <div class="container">
            <div class="reviews__header">
              <h2 class="reviews__header_title">Отзывы</h2>
            </div>

            <div class="swiper mySwiper">
              <div class="reviews__row swiper-wrapper">

              <?
                $reviews = $link ->query("SELECT * FROM `reviews` WHERE `status` = '1'");
                if($reviews->num_rows == 0){?>
                    <p class='errortext'>
                      Отзывов нету
                    </p>
                <?}else{
                  foreach ($reviews as $key => $value) { 
                    foreach ($reviews as $key => $value) {?>
                    <div class="reviews__row_card swiper-slide">
                       <h4 class="reviews__card_name"><?=$value['name']?></h4>
                       <p class="reviews__card_date"><?=$value['date']?></p>
                       <p class="reviews__card_content">
                       <?=$value['text']?>
                       </p>
                     </div>
                     <?}?>
                <?}?>
         
                <?}?>
              
                
                
              </div>
            </div>
            <?if(isset($_SESSION['user'])){?>
              <a data-fancybox href="#reviewsform" class="hello__content_btn" style="margin-top:2rem;">
                Оставить отзыв
              </a>
                  <?
                }?>
            
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
                      ул. Пограничная, 4/1 Петропавловск-Камчатский, Камчатский
                      край, 683032
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