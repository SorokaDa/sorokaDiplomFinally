<div class='header-left'>
    <img class="logo" src="images/logo.png "style="width: 250px; height: 250px;" />
    <h1 class="down">РЫБЬЯ ГОЛОВА</h1>
</div>

<div class='header-right'>
    <?php

    if ($user_id > 0) {


    
        echo "<a href='./_logout.php'>Выйти</a>";
    } else {

    ?>

        <div class='in-exit'>
            
            <a class="reg" href="login.php">Вход</a>
            <a class="reg" href="register.php">Регистрация</a>
        </div>

    <?php

    }

    ?>


</div>