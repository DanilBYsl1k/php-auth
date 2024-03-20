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
            <form class="form-auth" action="/auth/login" method="post" enctype="multipart/form-data">
                <div class="input-wrapper">
                    <label for="email">Login</label>
                    <input type="email" name="email" placeholder="email" id="email">
                </div>
                <div class="input-wrapper">
                    <label for="password">Password</label>
                    <input type="password" name="password" placeholder="password" id="password">
                </div>

                <div class="btn">
                    <button type="submit">submit</button>
                </div>
            </form>
        </div>
    </section>
</main>
<?php Page::part('footer'); ?>
</body>
</html>
