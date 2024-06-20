<div class='header-left'>
    <img class="logo" src="images/logo.png "style="width: 250px; height: 250px;" />
    <h1 class="down">ДОБРО ПОЖАЛОВАТЬ НА АДМИН ПАНЕЛЬ!</h1>
</div>

<div class='header-right'>
    <?php

    if ($user_id > 0) {


   
        echo "<a href='./index.php'>Выйти</a>";
    } else {

    ?>

        <div class='in-exit'>
            
            <button id="btn-in">Войти</button>
            <a class="reg" href="register.php">Регистрация</a>
        </div>

    <?php

    }

    ?>


</div>