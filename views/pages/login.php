<?php

use App\services\Page;

?>
<!doctype html>
<html lang="en">
<?php Page::part('head'); ?>

<body>

<?php Page::part('nav'); ?>

<main>
    <section class="form">
        <div class="container form__container">
            <form class="form-auth" action="">
                <div class="input-wrapper">
                    <label for="login">Login</label>
                    <input type="text" name="login" placeholder="text" id="login">
                </div>
                <div class="input-wrapper">
                    <label for="password">Password</label>
                    <input type="password" name="password" placeholder="password" id="password">
                </div>
                <label for="remember">
                    <span>Remember me</span>
                    <input id="remember" name="remember" type="checkbox">
                </label>

                <div class="btn">
                    <button type="submit">submit</button>
                </div>
            </form>
        </div>
    </section>
</main>
<footer>

</footer>
</body>
</html>
