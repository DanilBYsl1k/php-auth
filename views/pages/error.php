<?php

use App\services\Page;

?>
<!doctype html>
<html lang="en">
<?php Page::part('head'); ?>
<body>
<?php Page::part('nav'); ?>

    <main>
        <div class="container">
            <h1>Page not found: 404</h1>
        </div>
    </main>

<?php Page::part('footer'); ?>
</body>
</html>