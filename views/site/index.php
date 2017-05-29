<?php require_once(ROOT . '/views/site/header.php'); ?>

<div class="banner">
    <div class="container">
        <div class="banner-inner">
            <div class="callbacks_container">
                <ul class="rslides callbacks callbacks1" id="slider4">
                    <li class="callbacks1_on" style="display: block; float: left; position: relative; opacity: 1; z-index: 2; transition: opacity 500ms ease-in-out;">
                        <div class="banner-info">
                            <h3>WHAT IS LIKE TO WORK AS A SUPERMODEL ON WOMEN’S FASHION</h3>
                            <p>Lorem ipsum dolor sit amet</p>
                        </div>
                    </li>
                    <li class="" style="display: block; float: none; position: absolute; opacity: 0; z-index: 1; transition: opacity 500ms ease-in-out;">
                        <div class="banner-info">
                            <h3>FANTASTIC MAN MAGAZINE AND ITS INFLUENCE ON MEN’S FASHION</h3>
                            <p>Lorem ipsum dolor sit amet</p>
                        </div>
                    </li>
                    <li class="" style="display: block; float: none; position: absolute; opacity: 0; z-index: 1; transition: opacity 500ms ease-in-out;">
                        <div class="banner-info">
                            <h3>WHAT IS LIKE TO WORK AS A SUPERMODEL ON WOMEN’S FASHION</h3>
                            <p>Lorem ipsum dolor sit amet</p>
                        </div>
                    </li>
                </ul>
            </div>
            <!--banner-Slider-->
            <script src="/template/site/js/responsiveslides.min.js"></script>
            <script>
                // You can also use "$(window).load(function() {"
                $(function () {
                    // Slideshow 4
                    $("#slider4").responsiveSlides({
                        auto: true,
                        pager: true,
                        nav:false,
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
        </div>
    </div>
</div>
<!--//end-banner-->
<!--/start-main-->
<div class="main-content">
    <div class="container">
        <div class="mag-inner">
            <div class="col-md-8 mag-innert-left">
                <!--/start-Technology-->
                <div class="business">
                    <h3 class="tittle"><i class="glyphicon glyphicon-briefcase"></i>Новости</h3>
                    <div class="business-inner">
                        <div class="col-md-6 b-img"><a href="single.html"><img class="img-responsive" src="/template/site/images/time.jpg" alt=""/></a></div>
                        <div class="col-md-6 b-text">
                            <h5><a href="single.html">PEBBLE TIME STEEL IS ON TRACK TO SHIP IN OCTOBER</a></h5>
                            <h6><i class="glyphicon glyphicon-time"></i>Jun 25, 2015</h6> <div class="icons"><a href="#"><i class="glyphicon glyphicon-user"></i>Admin</a><a href="#"><i class="glyphicon glyphicon-comment"></i>2</a><a href="#"><i class="glyphicon glyphicon-thumbs-up"></i>152</a><a href="#"><i class="glyphicon glyphicon-thumbs-down"></i> 26</a></div>
                            <div class="clearfix"></div>
                            <p>When work interferes with life,in life can result in employees getting burned out and decreases base morale in the office employees getting burned out and decreases it When work interferes with life can result.</p>
                            <a class="read" href="single.html">Read More</a>
                        </div>
                        <div class="clearfix"></div>
                    </div>

                </div>

                <div class="technology">
                    <h2 class="tittle"><i class="glyphicon glyphicon-certificate"> </i>Technology</h2>
                    <div class="col-md-6 tech-img">
                        <img src="/template/site/images/tech.jpg" class="img-responsive" alt=""/>
                    </div>
                    <div class="col-md-6 tech-text">
                        <div class="editor-pics">
                            <div class="col-md-3 item-pic">
                                <img src="/template/site/images/f1.jpg" class="img-responsive" alt=""/>

                            </div>
                            <div class="col-md-9 item-details">
                                <h5 class="inner two"><a href="single.html">New iPad App to stimulate your Guitar</a></h5>
                                <div class="td-post-date two">Feb 22, 2015</div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="editor-pics">
                            <div class="col-md-3 item-pic">
                                <img src="/template/site/images/f2.jpg" class="img-responsive" alt=""/>

                            </div>
                            <div class="col-md-9 item-details">
                                <h5 class="inner two"><a href="single.html">5 Upcoming Events to Help Move Your Career Forward</a></h5>
                                <div class="td-post-date two">Feb 22, 2015</div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="editor-pics">
                            <div class="col-md-3 item-pic">
                                <img src="/template/site/images/f3.jpg" class="img-responsive" alt=""/>

                            </div>
                            <div class="col-md-9 item-details">
                                <h5 class="inner two"><a href="single.html">Flying to the US is becoming more inconvenient</a></h5>
                                <div class="td-post-date two">Feb 22, 2015</div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="editor-pics">
                            <div class="col-md-3 item-pic">
                                <img src="/template/site/images/f4.jpg" class="img-responsive" alt=""/>

                            </div>
                            <div class="col-md-9 item-details">
                                <h5 class="inner two"><a href="single.html">More Than 120 ER Visits Linked To Synthetic WordPress In NYC...</a></h5>
                                <div class="td-post-date two">Feb 22, 2015</div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <!--//end-Technology-->
                <div class="gallery">
                    <div class="main-title-head">
                        <h3 class="tittle"><i class="glyphicon glyphicon-picture"></i>Gallery</h3>
                    </div>
                    <div class="gallery-images">
                        <div class="course_demo1">
                            <ul id="flexiselDemo1">
                                <li>
                                    <a href="single.html"><img src="/template/site/images/mg1.jpg" alt="" /></a>
                                </li>
                                <li>
                                    <a href="single.html"><img src="/template/site/images/mg2.jpg" alt="" /></a>
                                </li>
                                <li>
                                    <a href="single.html"><img src="/template/site/images/mg3.jpg" alt="" /></a>
                                </li>
                                <li>
                                    <a href="single.html"><img src="/template/site/images/mg4.jpg" alt="" /></a>
                                </li>
                            </ul>
                        </div>
                        <script type="text/javascript">
                            $(window).load(function() {
                                $("#flexiselDemo1").flexisel({
                                    visibleItems: 3,
                                    animationSpeed: 1000,
                                    autoPlay: true,
                                    autoPlaySpeed: 3000,
                                    pauseOnHover: true,
                                    enableResponsiveBreakpoints: true,
                                    responsiveBreakpoints: {
                                        portrait: {
                                            changePoint:480,
                                            visibleItems: 2
                                        },
                                        landscape: {
                                            changePoint:640,
                                            visibleItems: 2
                                        },
                                        tablet: {
                                            changePoint:768,
                                            visibleItems: 3
                                        }
                                    }
                                });

                            });
                        </script>
                        <script type="text/javascript" src="/template/site/js/jquery.flexisel.js"></script>
                    </div>
                    <div class="course_demo1">
                        <ul id="flexiselDemo">
                            <li>
                                <a href="single.html"><img src="/template/site/images/mg7.jpg" alt="" /></a>
                            </li>
                            <li>
                                <a href="single.html"><img src="/template/site/images/mg3.jpg" alt="" /></a>
                            </li>
                            <li>
                                <a href="single.html"><img src="/template/site/images/mg6.jpg" alt="" /></a>
                            </li>
                            <li>
                                <a href="single.html"><img src="/template/site/images/mg2.jpg" alt="" /></a>
                            </li>
                            <li>
                                <a href="single.html"><img src="/template/site/images/mg6.jpg" alt="" /></a>
                            </li>
                        </ul>
                    </div>
                    <a class="more" href="single.html">More  +</a>
                    <script type="text/javascript">
                        $(window).load(function() {
                            $("#flexiselDemo").flexisel({
                                visibleItems: 3,
                                animationSpeed: 1000,
                                autoPlay: true,
                                autoPlaySpeed: 3000,
                                pauseOnHover: true,
                                enableResponsiveBreakpoints: true,
                                responsiveBreakpoints: {
                                    portrait: {
                                        changePoint:480,
                                        visibleItems: 2
                                    },
                                    landscape: {
                                        changePoint:640,
                                        visibleItems: 2
                                    },
                                    tablet: {
                                        changePoint:768,
                                        visibleItems: 3
                                    }
                                }
                            });

                        });
                    </script>
                    <script type="text/javascript" src="/template/site/js/jquery.flexisel.js"></script>

                </div>
                <!--business-->
                <!--//business-->
                <!--//latest-articles-->
                <div class="latest-articles">
                    <h3 class="tittle"><i class="glyphicon glyphicon-file"></i>latest Articles</h3>
                    <div class="world-news-grids">
                        <div class="world-news-grid">
                            <img src="/template/site/images/a1.jpg" alt="" />
                            <a href="single.html" class="wd">Lorem ipsum dolor sit amet, ullamcorper consectetur </a>
                            <p>Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor eu mattis.</p>
                            <a class="read" href="single.html">Read More</a>
                        </div>
                        <div class="world-news-grid">
                            <img src="/template/site/images/a3.jpg" alt="" />
                            <a href="single.html" class="wd">PM Modi to inaugurate Rs 9,700 crore road projects in Bihar</a>
                            <p>Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor eu mattis.</p>
                            <a class="read" href="single.html">Read More</a>
                        </div>
                        <div class="world-news-grid lost">
                            <img src="/template/site/images/a1.jpg" alt="" />
                            <a href="single.html" class="wd">Sports in Lorem ipsum dolor sit amet ullamcorper consectetur </a>
                            <p>Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor eu mattis.</p>
                            <a class="read" href="single.html">Read More</a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <!--//articles-->
            </div>
            <div class="col-md-4 mag-inner-right">
                <div class="top-news">
                    <h4 class="side">Афиша  <i class="glyphicon glyphicon-list-alt"></i></h4>
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
                <!--//end-sign-up-->
                <h4 class="side">Popular Posts</h4>
                <div class="edit-pics">
                    <div class="editor-pics">
                        <div class="col-md-3 item-pic">
                            <img src="/template/site/images/f4.jpg" class="img-responsive" alt=""/>

                        </div>
                        <div class="col-md-9 item-details">
                            <h5 class="inner two"><a href="single.html">New iPad App to stimulate your Guitar</a></h5>
                            <div class="td-post-date two"><i class="glyphicon glyphicon-time"></i>Feb 22, 2015 <a href="#"><i class="glyphicon glyphicon-comment"></i>0 </a></div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="editor-pics">
                        <div class="col-md-3 item-pic">
                            <img src="/template/site/images/f1.jpg" class="img-responsive" alt=""/>

                        </div>
                        <div class="col-md-9 item-details">
                            <h5 class="inner two"><a href="single.html">New iPad App to stimulate your Guitar</a></h5>
                            <div class="td-post-date two"><i class="glyphicon glyphicon-time"></i>Feb 22, 2015 <a href="#"><i class="glyphicon glyphicon-comment"></i>0 </a></div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="editor-pics">
                        <div class="col-md-3 item-pic">
                            <img src="/template/site/images/f1.jpg" class="img-responsive" alt=""/>

                        </div>
                        <div class="col-md-9 item-details">
                            <h5 class="inner two"><a href="single.html">New iPad App to stimulate your Guitar</a></h5>
                            <div class="td-post-date two"><i class="glyphicon glyphicon-time"></i>Feb 22, 2015 <a href="#"><i class="glyphicon glyphicon-comment"></i>0 </a></div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="editor-pics">
                        <div class="col-md-3 item-pic">
                            <img src="/template/site/images/f4.jpg" class="img-responsive" alt=""/>

                        </div>
                        <div class="col-md-9 item-details">
                            <h5 class="inner two"><a href="single.html">New iPad App to stimulate your Guitar</a></h5>
                            <div class="td-post-date two"><i class="glyphicon glyphicon-time"></i>Feb 22, 2015 <a href="#"><i class="glyphicon glyphicon-comment"></i>0 </a></div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <!--//edit-pics-->
                <!--/top-news-->
                <!--//top-news-->
            </div>
            <div class="clearfix"></div>
        </div>
        <!--//end-mag-inner-->
        <!--/mag-bottom-->
        <div class="mag-bottom">
            <h3 class="tittle bottom"><i class="glyphicon glyphicon-globe"></i>From around the World</h3>
            <div class="grid">
                <div class="col-md-4 m-b">
                    <a href="single.html"> <figure class="effect-layla"></a>
                    <img src="/template/site/images/pic.jpg" alt="img25"/>
                    <figcaption>
                        <h4>News <span>Mag</span></h4>
                        <a href="#">View more</a>
                    </figcaption>
                    </figure>
                    <div class="m-b-text">
                        <a href="single.html" class="wd">Lorem ipsum dolor sit amet,interdum ullamcorper consectetur </a>
                        <p>Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor eu mattis.</p>
                        <a class="read" href="single.html">Read More</a>
                    </div>
                </div>
                <div class="col-md-4 m-b">
                    <figure class="effect-layla">
                        <a href="single.html">	<img src="/template/site/images/pic2.jpg" alt="img25"/></a>
                        <figcaption>
                            <h4>News <span>Mag</span></h4>
                        </figcaption>
                    </figure>
                    <div class="m-b-text">
                        <a href="single.html" class="wd">Lorem ipsum dolor sit amet,interdum ullamcorper consectetur </a>
                        <p>Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor eu mattis.</p>
                        <a class="read" href="single.html">Read More</a>
                    </div>
                </div>
                <div class="col-md-4 m-b">
                    <figure class="effect-layla">
                        <a href="single.html"><img src="/template/site/images/pic3.jpg" alt="img25"/></a>
                        <figcaption>
                            <h4>News <span>Mag</span></h4>
                        </figcaption>
                    </figure>
                    <div class="m-b-text">
                        <a href="single.html" class="wd">Lorem ipsum dolor sit amet,interdum ullamcorper consectetur </a>
                        <p>Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor eu mattis.</p>
                        <a class="read" href="single.html">Read More</a>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <!--//mag-bottom-->
    </div>
</div>

<?php require_once(ROOT . '/views/site/footer.php'); ?>