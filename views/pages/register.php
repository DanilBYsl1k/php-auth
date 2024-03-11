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
            <form class="form-auth" action="" method="post" enctype="multipart/form-data">
                <div class="input-wrapper">
                    <label for="email">Email</label>
                    <input type="email" placeholder="Email" id="email">
                </div>
                <div class="input-wrapper">
                    <label for="username">Username</label>
                    <input type="text" placeholder="username" id="username">
                </div>
                <div class="input-wrapper">
                    <label for="full-name">full name</label>
                    <input type="text" placeholder="full-name" id="full-name">
                </div>
                <div class="input-wrapper">
                    <label for="avatar">Avatar</label>
                    <input type="file" placeholder="avatar" id="avatar">
                </div>
                <div class="input-wrapper">
                    <label for="password">Password</label>
                    <input type="password" placeholder="password" id="password">
                </div>

                <div class="input-wrapper">
                    <label for="password-confirm">Password confirm</label>
                    <input type="password" placeholder="password" id="password-confirm">
                </div>

                <label for="remember">
                    <span>Remember me</span>
                    <input id="remember" type="checkbox">
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
