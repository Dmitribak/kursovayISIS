<?php include ($_SERVER['DOCUMENT_ROOT'].'/views/site/header.php'); ?>


    <div class="main-content">
        <div class="container">
            <div class="mag-inner">
                <div class="col-md-8 mag-innert-left">
                    <div class="banner-bottom-left-grids">
                    <?php foreach ($eventsAll as $eventsItem):?>
                        <div class="single-left-grid">
                            <h4><?php echo $eventsItem['title'];?></h4>
                            <h5><?php echo $eventsItem['category']; ?></h5>
                            <img src='<?php echo $eventsItem['img_events'] ?>'>
                            <p class="text"><?php echo $eventsItem['full_text']; ?></p>

                            <a href="/afisha/<?php echo $eventsItem['category']; ?>"><?php echo $eventsItem['category']; ?></a>
                               <?php echo $eventsItem['date_events']; ?>
<!--                                    <li><a href="#">5 Comments</a></li>-->

                            <hr><br>
                        </div>

                    <?php endforeach;?>
                    </div>
                </div>
                <div class="col-md-4 mag-inner-right">
                    <div class="top-news">
                        <h4 class="side">Фильтр  <i class="glyphicon glyphicon-random"></i></h4>
                        <div class="top-inner">
                            <?php foreach ($eventsList as $eventsItem):?>
                                <div class="top-text">
                                    <a href="/afisha/<?php echo $eventsItem['id_events'];?>"><img src="<?php echo $eventsItem['img_events'];?>" class="img-responsive" alt=""/></a>
                                    <h5 class="top"><a href="/afisha/<?php echo $eventsItem['id_events'];?>"><?php echo $eventsItem['title'];?></a></h5>
                                    <p><?php echo $eventsItem['short_text'];?></p>
                                    <div class="td-post-date two"><i class="glyphicon glyphicon-time"></i><?php echo $eventsItem['date_events'];?>    <a class="span_link"><span class="glyphicon glyphicon-eye-open"></span>     <?php echo $eventsItem['count_views_events'];?></a></div>
                                    <a class="span_link" href='/afisha/<?php echo $eventsItem['id_events'];?>'><span class="glyphicon glyphicon-circle-arrow-right"></span></a>
                                    <hr>
                                </div>
                            <?php endforeach;?>
                        </div>
                    </div>
                    <div class="sign_main">
                        <h4 class="side">Авторизация</h4>
                        <div class="sign_up">
                            <p class="sign">Авторизуйтесь на сайте, для дополнительных возможностей</p>
                            <form>
                                <input type="text" class="text" value="Логин или Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Логин или Email';}">
                                <input type="password" class="text" value="Пароль" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Пароль';}">
                                <input type="submit" value="Вход">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php include ($_SERVER['DOCUMENT_ROOT'].'/views/site/footer.php'); ?>