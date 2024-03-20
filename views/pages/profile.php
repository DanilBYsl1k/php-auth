<?php
session_start();

if (!$_SESSION['user']) {
    \App\services\Router::redirect('/login');
}

use App\services\Page;

?>
<!doctype html>
<html lang="en">
<?php Page::part('head'); ?>

<body>

<?php Page::part('nav'); ?>

<main>
    <section>
        <div class="container">
            <h2><?php echo $_SESSION['user']['full_name']; ?></h2>
            <img src="<?php echo  $_SESSION['user']['avatar']?>" width="300" height="250" alt="img">
        </div>
    </section>
</main>
<?php Page::part('footer'); ?>
</body>
</html>
