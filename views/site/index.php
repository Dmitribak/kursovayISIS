<?php include_once 'header.php' ?>

    <div class="col-md-9 main">
        <!--banner-section-->
        <div class="banner-section">
            <h3 class="tittle">General <i class="glyphicon glyphicon-picture"></i></h3>
            <div class="banner">
                <div  class="callbacks_container">
                    <ul class="rslides" id="slider4">
                        <li>
                            <img src="template/site/images/1.jpg" class="img-responsive" alt="" />

                        </li>
                        <li>
                            <img src="template/site/images/2.jpg" class="img-responsive" alt="" />


                        </li>
                        <li>
                            <img src="template/site/images/3.jpg" class="img-responsive" alt="" />


                        </li>
                        <li>
                            <img src="template/site/images/3.jpg" class="img-responsive" alt="" />


                        </li>
                    </ul>
                </div>
                <!--banner-->
                <script src="template/site/js/responsiveslides.min.js"></script>
                <script>
                    // You can also use "$(window).load(function() {"
                    $(function () {
                        // Slideshow 4
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
                <div class="clearfix"> </div>
                <div class="b-bottom">
                    <h5 class="top"><a href="single.html">What turn out consetetur sadipscing elit</a></h5>
                    <p>On Aug 25 <a class="span_link" href="#"><span class="glyphicon glyphicon-comment"></span>0 </a><a class="span_link" href="#"><span class="glyphicon glyphicon-eye-open"></span>56 </a><a class="span_link" href="single.html"><span class="glyphicon glyphicon-circle-arrow-right"></span></a></p>
                </div>
            </div>
            <!--//banner-->
            <!--/top-news-->
            <div class="top-news">
                <div class="top-inner">
                    <div class="col-md-6 top-text">
                        <a href="single.html"><img src="template/site/images/pic1.jpg" class="img-responsive" alt=""></a>
                        <h5 class="top"><a href="single.html">Consetetur sadipscing elit</a></h5>
                        <p>Consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt labore dolore magna aliquyam eratsed diam justo duo dolores rebum.</p>
                        <p>On Jun 25 <a class="span_link" href="#"><span class="glyphicon glyphicon-comment"></span>0 </a><a class="span_link" href="#"><span class="glyphicon glyphicon-eye-open"></span>56 </a><a class="span_link" href="single.html"><span class="glyphicon glyphicon-circle-arrow-right"></span></a></p>
                    </div>
                    <div class="col-md-6 top-text two">
                        <a href="single.html"><img src="template/site/images/pic2.jpg" class="img-responsive" alt=""></a>
                        <h5 class="top"><a href="single.html">Consetetur sadipscing elit</a></h5>
                        <p>Consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt labore dolore magna aliquyam eratsed diam justo duo dolores rebum.</p>
                        <p>On Jun 27 <a class="span_link" href="#"><span class="glyphicon glyphicon-comment"></span>0 </a><a class="span_link" href="#"><span class="glyphicon glyphicon-eye-open"></span>56 </a><a class="span_link" href="single.html"><span class="glyphicon glyphicon-circle-arrow-right"></span></a></p>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="top-inner second">
                    <div class="col-md-6 top-text">
                        <a href="single.html"><img src="template/site/images/pic3.jpg" class="img-responsive" alt=""></a>
                        <h5 class="top"><a href="single.html">Consetetur sadipscing elit</a></h5>
                        <p>Consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt labore dolore magna aliquyam eratsed diam justo duo dolores rebum.</p>
                        <p>On Jun 25 <a class="span_link" href="#"><span class="glyphicon glyphicon-comment"></span>0 </a><a class="span_link" href="#"><span class="glyphicon glyphicon-eye-open"></span>56 </a><a class="span_link" href="single.html"><span class="glyphicon glyphicon-circle-arrow-right"></span></a></p>
                    </div>
                    <div class="col-md-6 top-text two">
                        <a href="single.html"><img src="template/site/images/pic4.jpg" class="img-responsive" alt=""></a>
                        <h5 class="top"><a href="single.html">Consetetur sadipscing elit</a></h5>
                        <p>Consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt labore dolore magna aliquyam eratsed diam justo duo dolores rebum.</p>
                        <p>On Jun 27 <a class="span_link" href="#"><span class="glyphicon glyphicon-comment"></span>0 </a><a class="span_link" href="#"><span class="glyphicon glyphicon-eye-open"></span>56 </a><a class="span_link" href="single.html"><span class="glyphicon glyphicon-circle-arrow-right"></span></a></p>
                    </div>
                    <div class="clearfix"> </div>
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
                        <a href="single.html"><img src='<?php echo $eventsItem['img_events'];?>' class="img-responsive" alt=""></a>
                        <p><?php echo $eventsItem['short_text'];?></p>
                        <p><?php echo $eventsItem['date_events'];?><a class="span_link"><span class="glyphicon glyphicon-eye-open"></span><?php echo $eventsItem['count_views_events'];?></a><a class="span_link" href='/afisha/<?php echo $eventsItem['id_events'];?>''><span class="glyphicon glyphicon-circle-arrow-right"></span></a></p>
                    </div>
                    <?php endforeach;?>
                </div>
            </div>
        </div>

<?php include_once 'footer.php' ?>