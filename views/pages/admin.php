<?php

use App\services\Page;

?>
<!doctype html>
<html lang="en">
<?php Page::part('head'); ?>

<body>

<?php Page::part('nav'); ?>

<main>
    <section class="panel">
        <div class="container">
            <h1>admin panel</h1>

        </div>
    </section>
</main>
<?php Page::part('footer'); ?>
</body>
</html>
