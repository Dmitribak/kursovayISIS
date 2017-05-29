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
        function checkpas() {
            document.addEventListener('DOMContentLoaded', function () {
                var pass1 = document.querySelector('#password'),
                    pass2 = document.querySelector('#passwordcheck')
                pass1.addEventListener('input', function () {
                    this.value != pass2.value ? pass2.setCustomValidity('Пароли разные') : pass2.setCustomValidity('')
                })
                pass2.addEventListener('input', function (e) {
                    this.value != pass1.value ? this.setCustomValidity('Пароли разные') : this.setCustomValidity('')
                })
            })
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
                    <?php if (isset($errors) && is_array($errors)): ?>
                        <ul>
                            <?php foreach ($errors as $error): ?>
                                <li> - <?php echo $error; ?></li>
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
                        <input type="password" name="password"  value="<?php echo $password; ?>">
                    </div>
                    <span id="statuspas"></span>
                    <div class="address">
                        <span>Повторите пароль *:</span>
                        <input type="password" name="passwordconfim" value="<?php echo $passwordconfim; ?>">
                    </div>
                    <div class="address new">
                        <input type="submit" name="submit" value="Зарегистрироваться"">
                        <?php
                        //TODO: Доделать JQuery
                        ?>

                    </div>
                </form>
                <?php endif; ?>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>

<?php require_once(ROOT . '/views/site/footer.php'); ?>