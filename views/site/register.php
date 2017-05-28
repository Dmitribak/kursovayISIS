<?php include_once 'header.php'?>

<div class="col-md-9 main">
    <!-- register -->
    <div class="sign-up-form">
        <h3 class="tittle"> Регистрация <i class="glyphicon glyphicon-file"></i></h3>
        <?php if ($result): ?>
            <p>Вы зарегистрированы!</p>
        <?php else: ?>
        <?php if (isset($errors) && is_array($errors)): ?>
            <ul>
                <?php foreach ($errors as $error): ?>
                    <li> - <?php echo $error; ?></li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>
        <div class="sign-up">
            <h3 class="tittle reg">Персональная информация  <i class="glyphicon glyphicon-user"></i></h3>
            <div class="sign-u">
                <div class="sign-up1">
                    <h4 class="a">Имя :</h4>
                </div>
                <div class="sign-up2">
                    <form>
                        <input type="text" class="text" value="<?php echo $name; ?>">
                    </form>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="sign-u">
                <div class="sign-up1">
                    <h4 class="b">Фамилия :</h4>
                </div>
                <div class="sign-up2">
                    <form>
                        <input type="text" class="text" value="<?php echo $sur_name; ?>">

                    </form>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="sign-u">
                <div class="sign-up1">
                    <h4 class="c">Email* :</h4>
                </div>
                <div class="sign-up2">
                    <form>
                        <input type="text" class="text" value="<?php echo $email; ?>" required>

                    </form>
                </div>
                <div class="clearfix"> </div>
            </div>
            <h3 class="tittle reg">Информация по входу <i class="glyphicon glyphicon-off"></i></h3>
            <div class="sign-u">
                <div class="sign-up1">
                    <h4 class="c">Логин* :</h4>
                </div>
                <div class="sign-up2">
                    <form>
                        <input type="text" class="text" value="<?php echo $login; ?>" required>

                    </form>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="sign-u">
                <div class="sign-up1">
                    <h4 class="d">Пароль* :</h4>
                </div>
                <div class="sign-up2">
                    <form>
                        <input type="password" class="Password" value="<?php echo $password; ?>" required>
                    </form>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="sign-u">
                <div class="sign-up1">
                    <h4>Подтвердите пароль* :</h4>
                </div>
                <div class="sign-up2">
                    <form>
                        <input type="password" class="Password" value="<?php echo $confirm_password; ?>" required>
                    </form>
                </div>
                <div class="clearfix"> </div>
            </div>
            <form>
                <input type="submit" value="Регистрация">
            </form>
        </div>
        <?php endif; ?>
    </div>

    <div class="clearfix"> </div>
    <div class="copy">
        <p>&copy; 2017 dmitribak<a href="http://vk.com/ribak/">  VK</a> </p>
    </div>
</div>
</div>
<script type="text/javascript">
    $(document).ready(function() {
        /*
         var defaults = {
         containerID: 'toTop', // fading element id
         containerHoverID: 'toTopHover', // fading element hover id
         scrollSpeed: 1200,
         easingType: 'linear'
         };
         */

        $().UItoTop({ easingType: 'easeOutQuart' });

    });
</script>
<a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>


</body>
</html>
