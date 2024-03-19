<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/assets/styles/main.css">

    <?php $file_path = '/assets/styles/'.($_GET['url'] ?? '') . '.css';
    if(file_exists($_SERVER['DOCUMENT_ROOT'] . $file_path)):?>
        <link rel="stylesheet" href="<?php echo $file_path;?>">
    <?php endif; ?>
    <link rel="icon" href="/assets/img/user.png" type="image/x-icon">
    <title><?php echo $_GET['url'] ?? 'Home'; ?></title>
</head>