<?php include ($_SERVER['DOCUMENT_ROOT'].'/views/site/header.php'); ?>


    <div class="col-md-12 main">
    <!--banner-section-->
    <div class="banner-section">
        <h3 class="tittle"><?php echo $eventsItem['title_events']; ?></h3>
            <div class="b-bottom">
                <h5 class="top"><?php echo $eventsItem['category']; ?></h5>
                <img src='<?php echo $eventsItem['img_events'] ?>'>
                <p><?php echo $eventsItem['full_text_events']; ?></p>
                <p><?php $eventsItem['date_events']; ?><a class="span_link"><span class="glyphicon glyphicon-eye-open"></span></a><?php $eventsItem['count_views_events']; ?></p>
            </div>
    </div>

<?php include ($_SERVER['DOCUMENT_ROOT'].'/views/site/footer.php'); ?>