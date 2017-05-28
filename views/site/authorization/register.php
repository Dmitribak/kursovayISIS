<?php require_once(ROOT . '/views/site/header.php'); ?>

    <div class="banner two">
        <div class="container">
            <h2 class="inner-tittle">Мой аккаунт</h2>
        </div>
    </div>

<div class="account">
    <div class="container">
        <div class="account-bottom">
            <div class="col-md-6 account-left">
                <form>
                    <div class="account-top heading">
                        <h3>Новый пользователь</h3>
                        <p>Поля, отмеченные *, обязательны к заполнению</p>
                    </div>
                    <div class="address">
                        <span>Логин *:</span>
                        <input type="text">
                    </div>
                    <div class="address">
                        <span>Имя</span>
                        <input type="text">
                    </div>
                    <div class="address">
                        <span>Фамилия</span>
                        <input type="text">
                    </div>
                    <div class="address">
                        <span>Email *:</span>
                        <input type="text">
                    </div>
                    <div class="address">
                        <span>Пароль *:</span>
                        <input type="password">
                    </div>
                    <div class="address">
                        <span>Повторите пароль *:</span>
                        <input type="password">
                    </div>
                    <div class="address new">
                        <input type="submit" value="Зарегистрироваться">
                    </div>
                </form>
            </div>
            <div class="col-md-6 account-left second">
                <form>
                    <div class="account-top heading">
                        <h3>Форма входа</h3><br>
                    </div>
                    <div class="address">
                        <span>Логин или Email:</span>
                        <input type="text">
                    </div>
                    <div class="address">
                        <span>Пароль:</span>
                        <input type="password">
                    </div>
                    <div class="address">
                        <a class="forgot" href="/user/forgot">Забыли пароль?</a>
                        <input type="submit" value="Вход">
                    </div>
                </form>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>

<?php require_once(ROOT . '/views/site/footer.php'); ?>