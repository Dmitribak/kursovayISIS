<!DOCTYPE HTML>
<html>
<head>
    <title>Театр</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="/template/site/css/bootstrap.css" rel='stylesheet' type='text/css' />
    <link href='//fonts.googleapis.com/css?family=Open+Sans:700,700italic,800,300,300italic,400italic,400,600,600italic' rel='stylesheet' type='text/css'>
    <!--Custom-Theme-files-->
    <link href="/template/site/css/style.css" rel='stylesheet' type='text/css' />
    <script src="/template/site/js/jquery.min.js"> </script>
    <!--/script-->
    <script type="text/javascript" src="/template/site/js/move-top.js"></script>
    <script type="text/javascript" src="/template/site/js/easing.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event){
                event.preventDefault();
                $('html,body').animate({scrollTop:$(this.hash).offset().top},900);
            });
        });
    </script>

</head>
<body>
<!-- header-section-starts -->
<div class="h-top" id="home">
    <div class="top-header">
        <ul class="cl-effect-16 top-nag">
            <li><a href="/" data-hover="Главная">Главная</a></li>
            <li><a href="../../index.php" data-hover="Актёры">Актёры</a></li>
            <li><a href="../../index.php" data-hover="Контакты">Контакты</a></li>
            <li><a href="../../index.php" data-hover="Сотрудники театра">Сотрудники театра</a></li>
            <li><a href="../../index.php" data-hover="Билеты">Билеты</a></li>
            <li><a href="/user/register" data-hover="Вход">Вход</a></li>
        </ul>
        <div class="search-box">
            <div class="b-search">
                <form>
                    <input type="text" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}">
                    <input type="submit" value="">
                </form>
            </div>
        </div>

        <div class="clearfix"></div>
    </div>
</div>
<div class="full">
    <div class="col-md-3 top-nav register">
        <div class="logo">
            <a href="index.html"><h1>Blogger</h1></a>
        </div>
        <div class="top-menu">
            <span class="menu"> </span>

            <ul class="cl-effect-16">
                <li><a href="index.html" data-hover="HOME">Home</a></li>
                <li><a href="about.html" data-hover="About">About</a></li>
                <li><a href="grid.html" data-hover="Grids">Grids</a></li>
                <li><a href="services.html" data-hover="Services">Services</a></li>
                <li><a href="gallery.html" data-hover="Gallery">Gallery</a></li>
                <li><a href="contact.html" data-hover="CONTACT">Contact</a></li>
            </ul>
            <!-- script-for-nav -->
            <script>
                $( "span.menu" ).click(function() {
                    $( ".top-menu ul" ).slideToggle(300, function() {
                        // Animation complete.
                    });
                });
            </script>
            <!-- script-for-nav -->
            <ul class="side-icons">
                <li><a class="fb" href="#"></a></li>
                <li><a class="twitt" href="#"></a></li>
                <li><a class="goog" href="#"></a></li>
                <li><a class="drib" href="#"></a></li>
            </ul>
        </div>
    </div>