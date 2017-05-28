<!DOCTYPE HTML>
<html>
<head>
    <title>Театр</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="/template/site/css/bootstrap-3.1.1.min.css" rel="stylesheet" type="text/css">
    <!-- Custom Theme files -->
    <link href="/template/site/css/owl.carousel.css" rel="stylesheet" type="text/css" media="all" />
    <link href="/template/site/css/style.css" rel='stylesheet' type='text/css' />
    <script src="/template/site/js/jquery.min.js"> </script>
    <script type="text/javascript" src="/template/site/js/move-top.js"></script>
    <script type="text/javascript" src="/template/site/js/easing.js"></script>
    <link rel="stylesheet" href="/template/site/css/flexslider.css" type="text/css" media="screen" />
    <!--/script-->
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
<div class="header" id="home">
    <div class="content white">
        <nav class="navbar navbar-default" role="navigation">
            <div class="container">
                <div class="navbar-header">

                    <a class="navbar-brand" href="/"><h1>Теа<span>тр</span></h1> </a>
                </div>

                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li><a href="/">Главная</a></li>
                        <li><a href="/">Новости</a></li>
                        <li><a href="/">Актёры</a></li>
                        <li><a href="/">Главная</a></li>
                        <li><a href="/user/login">Вход</a></li>
                        <li><a href="/user/register">Регистрация</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</div>