<?php include_once 'header.php' ?>

    <div class="col-md-9 main">
        <!--banner-section-->
        <div class="banner-section">
            <h3 class="tittle">General <i class="glyphicon glyphicon-picture"></i></h3>
            <div class="banner">
                <div  class="callbacks_container">
                    <ul class="rslides" id="slider4">

                        <?php foreach ($sliders_main as $id):?>
                        <li>
<?php
// TODO: Проблемма с циклом.
?>
                            <img src='<?php echo $sliders_main['url_picture'];?>' class="img-responsive" alt="">
                        </li>
                        <?php endforeach;?>
                    </ul>
                </div>



                <script src="template/site/js/responsiveslides.min.js"></script>
                <script>
                    $(function () {
                        $("#slider4").responsiveSlides({
                            auto: true,
                            pager:true,
                            nav:true,
                            speed: 500,
                            namespace: "callbacks",
                            before: function () {
                                $('.events').append("<li>before event fired.</li>");
                            },
                            after: function () {
                                $('.events').append("<li>after event fired.</li>");
                            }
                        });

                    });
                </script>
                <div class="b-bottom"><?php
                // TODO: Реализовать отдельную страницу для вкладки контакты
                    ?>
                    <h5 class="top"><a href="single.html">Наш театр</a></h5>
                </div>
            </div>
            <div class="top-news"><br>
                <h3 class="tittle">Главные новости  <i class="glyphicon glyphicon-time"></i></h3>
                <div class="top-inner">
                    <div class="col-md-12 top-text">
                        <a href="single.html"><img src="template/site/images/pic1.jpg" class="img-responsive" alt=""></a>
                        <h5 class="top"><a href="single.html">Consetetur sadipscing elit</a></h5>
                        <p>Consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt labore dolore magna aliquyam eratsed diam justo duo dolores rebum.</p>
                        <p>On Jun 25 <a class="span_link" href="#"><span class="glyphicon glyphicon-comment"></span>0 </a><a class="span_link" href="#"><span class="glyphicon glyphicon-eye-open"></span>56 </a><a class="span_link" href="single.html"><span class="glyphicon glyphicon-circle-arrow-right"></span></a></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="banner-right-text">
            <h3 class="tittle">Афиша  <i class="glyphicon glyphicon-list-alt"></i></h3>

            <?php foreach ($eventsList as $eventsItem):?>
            <div class="general-news">
                <div class="general-inner">
                    <div class="general-text">
                        <b><h5 class="top"><a href='/afisha/<?php echo $eventsItem['id_events'];?>'><?php echo $eventsItem['title'];?></a></h5></b>
                        <p><b><?php echo $eventsItem['category'];?></b></p>
                        <a href='/afisha/<?php echo $eventsItem['id_events'];?>'><img src='<?php echo $eventsItem['img_events'];?>' class="img-responsive" alt=""></a>
                        <p><?php echo $eventsItem['short_text'];?></p>
                        <p><?php echo $eventsItem['date_events'];?><a class="span_link"><span class="glyphicon glyphicon-eye-open"></span><?php echo $eventsItem['count_views_events'];?></a><a class="span_link" href='/afisha/<?php echo $eventsItem['id_events'];?>''><span class="glyphicon glyphicon-circle-arrow-right"></span></a></p>
                    </div>
                    <?php endforeach;?>
                </div>
            </div>
        </div>

<?php include_once 'footer.php' ?>