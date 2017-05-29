<?php include ($_SERVER['DOCUMENT_ROOT'].'/views/site/header.php'); ?>


    <div class="main-content">
        <div class="container">
            <div class="mag-inner">
                <div class="col-md-8 mag-innert-left">
                    <div class="banner-bottom-left-grids">
                        <div class="single-left-grid">
                            <h4><?php echo $eventsItem['title_events']; ?></h4>
                            <h5><?php echo $eventsItem['category']; ?></h5>
                            <img src='<?php echo $eventsItem['img_events'] ?>'>
                            <p class="text"><?php echo $eventsItem['full_text_events']; ?></p>
                            <div class="single-bottom">
                                <ul>
                                    <li><a href="/afisha/<?php echo $eventsItem['id_category_events']; ?>"><?php echo $eventsItem['category']; ?></a></li>
                                    <li><?php echo $eventsItem['date_events']; ?></li>
<!--                                    <li><a href="#">5 Comments</a></li>-->
                                </ul>
                            </div>
                        </div>
                    </div>

                        <!--leave-->
<!--                        <div class="leave">-->
<!--                            <h4>Leave a comment</h4>-->
<!--                            <form id="commentform">-->
<!--                                <p class="comment-form-author-name"><label for="author">Name</label>-->
<!--                                    <input id="author" type="text" value="" size="30" aria-required="true">-->
<!--                                </p>-->
<!--                                <p class="comment-form-email">-->
<!--                                    <label class="email">Email</label>-->
<!--                                    <input id="email" type="text" value="" size="30" aria-required="true">-->
<!--                                </p>-->
<!--                                <p class="comment-form-comment">-->
<!--                                    <label class="comment">Comment</label>-->
<!--                                    <textarea></textarea>-->
<!--                                </p>-->
<!--                                <div class="clearfix"></div>-->
<!--                                <p class="form-submit">-->
<!--                                    <input type="submit" id="submit" value="Send">-->
<!--                                </p>-->
<!--                                <div class="clearfix"></div>-->
<!--                            </form>-->
<!---->
<!--                        </div>-->

                    <!--//leave-->
                </div>
                <div class="col-md-4 mag-inner-right">
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