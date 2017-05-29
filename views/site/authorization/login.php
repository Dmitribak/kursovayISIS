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

<div class="banner two">
    <div class="container">
        <h2 class="inner-tittle">Вход</h2>
    </div>
</div>
<div class="account">
    <div class="container">
        <div class="account-bottom">
<div class="col-md-6 account-left second">
    <?php if (isset($errors) && is_array($errors)): ?>
        <ul>
            <?php foreach ($errors as $error): ?>
                <li> - <?php echo $error; ?></li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>
    <form action="/user/login" method="post">
        <div class="account-top heading">
            <h3>Форма входа</h3><br>
        </div>
        <div class="address">
            <span>Email:</span>
            <input type="text" name="email" value="<?php echo $email; ?>">
        </div>
        <div class="address">
            <span>Пароль:</span>
            <input type="password" name="password" value="<?php echo $password; ?>">
        </div>
        <div class="address">
            <a class="forgot" href="/user/forgot">Забыли пароль?</a>
            <input type="submit" name="submit" value="Вход">
        </div>
    </form>
</div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>