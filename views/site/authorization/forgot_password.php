<?php require_once(ROOT . '/views/site/header.php'); ?>

    <script>
        function isEmail() {
            var str = document.getElementById("email").value;
            var status = document.getElementById("status");
            var re = /^[^\s()<>@,;:\/]+@\w[\w\.-]+\.[a-z]{2,}$/i;
            if (re.test(str)) status.innerHTML = "На ваш email отправлен код для восстановления пароля";
            else status.innerHTML = "Адрес неверный";
            if(isEmpty(str)) status.innerHTML = "Поле пустое";
        }
        function isEmpty(str){
            return (str == null) || (str.length == 0);
        }
    </script>

    <div class="banner two">
        <div class="container">
            <h2 class="inner-tittle">Восстановление пароля</h2>
        </div>
    </div>

    <div class="account">
        <div class="container">
            <div class="account-bottom">
                <div class="col-md-6 account-left">
                    <form>
                        <div class="account-top heading">
                            <h3>Воостановление пароля : </h3>
                        </div>
                        <div class="address">
                            <span>Email :</span>
                            <input type="text" id="email">
                            <span id="status"></span>
                        </div>
                        <div class="address new">
                            <input type="submit" value="Восстановить пароль" onclick="isEmail()">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

<?php require_once(ROOT . '/views/site/footer.php'); ?>