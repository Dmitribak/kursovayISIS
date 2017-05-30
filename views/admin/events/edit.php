<?php require_once(ROOT . '/views/admin/admHeader.php'); ?>

    <div id="page-wrapper">
        <div class="main-page">
            <div class="tables">
                <h3 class="title1">События</h3>
                <div class="panel-body widget-shadow">
                    <h4>Редактирование категории</h4>

                    <form action="#" method="post">
                        <input type="text" name="text" value="<?php echo $event['category']; ?>"/>
                        <input type="submit" name="submit" class="btn btn-default" value="Добавить" />
                    </form>

                </div>
                <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
            </div>
        </div>
    </div>

<?php require_once(ROOT . '/views/admin/admFooter.php'); ?>