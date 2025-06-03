<?include 'vendor/components/header.php';
$theme = 'обратный звонок с главной страницы';
if(!isset($_SESSION['user'])){
    header('location:index.php');

}else{
    if($_SESSION['user']['role'] !='admin'){
        header('location:index.php');
    
    }
}
?>

        <main class="main">
            <div class="admin">
    <div class="container">
        <div class="admin__header">
            <h1 class="admin__header_title">
                Панель администрирования
            </h1>
        </div>
        <div class="admin__row">
            <div class="admin__row_forms">
                
                <form action="vendor/functions/addproduct.php" class="admin__forms_form" method="post" enctype="multipart/form-data">
                    <h2 class="admin__form_title">
                        Добавление пакета услуг
                    </h2>
                    <div class="admin__form_line">
                        <label for="" class="admin__line_label">Название пакета услуг:</label>
                        <input type="text" class="admin__line_input" name="title">
                    </div>
                    <div class="admin__form_line">
                        <label for="" class="admin__line_label">Цена пакета услуг:</label>
                        <input type="text" class="admin__line_input" name="price">
                    </div>
                    <div class="admin__form_line">
                        <label for="" class="admin__line_label">Внешнее описание пакета услуг:</label>
                        <textarea class="admin__line_textarea" name="facedescription" id=""></textarea>
                    </div>
                    <div class="admin__form_line">
                        <label for="" class="admin__line_label">Детальное описание пакета услуг:</label>
                        <textarea class="admin__line_textarea" name="detaildescription" id=""></textarea>
                    </div>
                    <div class="admin__form_line">
                        <label for="" class="admin__line_label">Внешнее изображение пакета услуг:</label>
                        <input type="file" class="admin__line_input" name="faceimg">
                    </div>
                    <div class="admin__form_line">
                        <label for="" class="admin__line_label">Детальное изображение пакета услуг:</label>
                        <input type="file" class="admin__line_input" name="detailimg">
                    </div>
                    <div class="admin__form_line">
                        <button class="admin__line_btn" name="addProduct">Добавить</button>
                    </div>
                    <?
                    if(isset($_SESSION['error']['addProduct'])){
                    foreach ($_SESSION['error']['addProduct'] as $key => $value) {
                    ?>
                    <p class='errortext'>
                        <?=$value?>
                    </p>
                    <?
                    }
                    }
                    ?>
                </form>
                <form action="vendor/functions/delproduct.php" class="admin__forms_form" method="post" enctype="multipart/form-data">
                    <h2 class="admin__form_title">
                        Удаление пакета услуг
                    </h2>
                    <div class="admin__form_line">
                        <label for="" class="admin__line_label">Выбор пакета услуг:</label>
                        <select name="delProduct" id="" class="admin__line_select">
                            <?
                            $products = $link ->query("SELECT * FROM `products`");
                            foreach ($products as $key => $value) {?>
                               <option value="<?=$value['id']?>"><?=$value['title']?></option>
                            <?}
                            ?>
                            
                  
                        </select>
                    </div>
                    <div class="admin__form_line">
                        <button class="admin__line_btn" name="delProductBtn">Удалить</button>
                    </div>
                </form>
                <form action="vendor/functions/addlistitems.php" class="admin__forms_form" method="post" enctype="multipart/form-data">
                    <h2 class="admin__form_title">
                        Добавление услуг
                    </h2>
                    <div class="admin__form_line">
                        <label for="" class="admin__line_label">Название услуги:</label>
                        <input type="text" class="admin__line_input" name="nameList">
                    </div>
                    <div class="admin__form_line">
                        <label for="" class="admin__line_label">Цена услуги:</label>
                        <input type="text" class="admin__line_input" name="priceList">
                    </div>
                    <div class="admin__form_line">
                        <label for="" class="admin__line_label">Выбор пакета услуг:</label>
                        <select name="addListId" id="" class="admin__line_select">
                            <?
                            $products = $link ->query("SELECT * FROM `products`");
                            foreach ($products as $key => $value) {?>
                               <option value="<?=$value['id']?>"><?=$value['title']?></option>
                            <?}
                            ?>
                            
                  
                        </select>
                    </div>
                    <div class="admin__form_line">
                        <button class="admin__line_btn" name="addListBtn">Добавить</button>
                    </div>
                   <? if(isset($_SESSION['error']['addListBtn'])){
                    foreach ($_SESSION['error']['addListBtn'] as $key => $value) {
                    ?>
                    <p class='errortext'>
                        <?=$value?>
                    </p>
                    <?
                    }
                    }
                    ?>
                </form>
                <form action="vendor/functions/dellistitems.php" class="admin__forms_form" method="post" enctype="multipart/form-data">
                    <h2 class="admin__form_title">
                        Удаление услуг
                    </h2>
                    <div class="admin__form_line">
                        <label for="" class="admin__line_label">Выбор пакета услуг:</label>
                        <select name="delListItems" id="" class="admin__line_select">
                            <?
                            $listItems = $link ->query("SELECT * FROM `serviceList`");
                            foreach ($listItems as $key => $value) {?>
                               <option value="<?=$value['id']?>"><?=$value['name']?></option>
                            <?}
                            ?>
                            
                  
                        </select>
                    </div>
                    <div class="admin__form_line">
                        <button class="admin__line_btn" name="delListitemsBtn">Удалить</button>
                    </div>
                </form>
                
                    <h2 class="admin__form_title">
                         Модерация отзывов
                    </h2>
                    <div class="admin__form_line">
                            <?
                           $reviews = $link ->query("SELECT * FROM `reviews` WHERE `status` = '0'");
                           if($reviews ->num_rows == 0){?>
                            <p class='errortext'>
                                Отзывов нету
                            </p>
                           <?}else{?>
                            <?foreach ($reviews as $key => $value) {?>
                            <form style="border:1px solid black;padding:1rem;border-radius:0.5rem" action="vendor/functions/delreviews.php" class="admin__forms_form" method="post" enctype="multipart/form-data">
                            <div class="reviews__row_card swiper-slide" style="max-width:58rem;height:unset;padding: 1.8rem 1.8rem;">
                            <h4 class="reviews__card_name" ><?=$value['name']?></h4>
                                <p class="reviews__card_date"><?=$value['date']?></p>
                                <p class="reviews__card_content" style="margin-top:1.2rem;">
                                <?=$value['text']?>
                                </p>
                            </div>
                            <select name="delStatusReviews" id="" class="admin__line_select">
                                <option value="1">Одобрить</option>
                                <option value="2">Удалить</option>
                            </select>
                            <input type="hidden" value="<?=$value['id']?>" name="idReviews">
                                <div class="admin__form_line">
                                    <button class="admin__line_btn" name="delListitemsBtn">Отправить</button>
                                </div>
                            </form>
                            <?}?>
                           <?}?>
                        
                            
                  
                        
                    </div>
                 
            </div>
            <div class="admin__row_calls">
                <h2 class="admin__calls_title">
                    Список заявок:
                </h2>
                <?
                $calls = $link ->query("SELECT * FROM `calls`");
                if($calls->num_rows == 0){?>
                    <p class='errortext'>
                       Заявок нету
                    </p>
                <?}else{?>
                    <?foreach ($calls as $key => $value) {?>
                        <form action="vendor/functions/delcalls.php" method="post" class="admin__calls">
                        <div class="admin__calls_line">
                            <input type="hidden" name="dellCallsId" value="<?=$value['id']?>">
                            <p class="admin__line_title">
                                Имя:<span class="admin__line_acitve"><?=$value['name']?></span>
                            </p>
                            <p class="admin__line_phone">
                                Телефон:<span class="admin__line_acitve"><?=$value['phone']?></span>
                            </p>
                            <p class="admin__line_phone">
                                Тема:<span class="admin__line_acitve"><?=$value['theme']?></span>
                            </p>
                        </div>
                        <input type="hidden" value="" name="callid">
                        <div class="admin__form_line">
                            <button class="admin__line_btn" name="delCalls">Удалить</button>
                        </div>
                    </form>
                    <?}?>
                <?}?>
                
                
            </div>
        </div>
    </div>
</div>
        </main>
        <?include 'vendor/components/footer.php';?>