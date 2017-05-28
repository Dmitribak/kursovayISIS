<?php require_once(ROOT . '/views/site/header.php'); ?>

    <script>
        function isEmail() {
            var str = document.getElementById("email").value;
            var status = document.getElementById("status");
            var re = /^[^\s()<>@,;:\/]+@\w[\w\.-]+\.[a-z]{2,}$/i;
            if (re.test(str)) status.innerHTML = "Email верный";
            else status.innerHTML = "Адрес неверный";
            if(isEmpty(str)) status.innerHTML = "Поле пустое";
        }
        function isEmpty(str){
            return (str == null) || (str.length == 0);
        }
    </script>

    <script>
        function pass() {
            var pas1 = document.getElementById("pas1").value;
            var pas2 = document.getElementById("pas2").value;
            var status = document.getElementById("statuspas");
            if (pas1===pas2) status.innerHTML = "";
            else status.innerHTML = "Пароли не совпадают";
            if (isEmpty(pas1)) status.innerHTML = "Поле пустое";
        }


    </script>

    <div class="banner two">
        <div class="container">
            <h2 class="inner-tittle">Регистрация</h2>
        </div>
    </div>

<div class="account">
    <div class="container">
        <div class="account-bottom">
            <div class="col-md-6 account-left">
                <?php if ($result): ?>
                    <p>Вы зарегистрированы!</p>
                <?php else: ?>
                    <?php if (isset($errorss) && is_array($errorss)): ?>
                        <ul>
                            <?php foreach ($errorss as $errorw): ?>
                                <li> - <?php echo $errorw; ?></li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>
                <form action="/user/register" method="post">
                    <div class="account-top heading">
                        <h3>Новый пользователь</h3>
                        <p>Поля, отмеченные *, обязательны к заполнению</p>
                    </div>
                    <div class="address">
                        <span>Логин *:</span>
                        <input type="text" name="login" value="<?php echo $login; ?>">
                    </div>
                    <div class="address">
                        <span>Имя</span>
                        <input type="text" name="name" value="<?php echo $name; ?>">
                    </div>
                    <div class="address">
                        <span>Фамилия</span>
                        <input type="text" name="surname" value="<?php echo $surname; ?>">
                    </div>
                    <div class="address">
                        <span>Email *:</span>
                        <input type="text" name="email" value="<?php echo $email; ?>">
                    </div>
                    <div class="address">
                        <span>Пароль *:</span>
                        <input type="password" name="password" id="pas1" value="<?php echo $password; ?>">
                    </div>
                    <span id="statuspas"></span>
                    <div class="address">
                        <span>Повторите пароль *:</span>
                        <input type="password" id="pas2" value="<?php echo $password; ?>">
                    </div>
                    <div class="address new">
                        <input type="submit" name="submit" value="Зарегистрироваться">
                    </div>
                </form>
                <?php endif; ?>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>

<?php require_once(ROOT . '/views/site/footer.php'); ?>