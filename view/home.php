<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ToDo</title>
</head>
<body>
<h1><?=$pageHeader?></h1>

<?php if (isset($username)): ?>
    <p>Hello, <?= $username ?></p>
    <a href="?controller=task">Tasks</a>
    <br>
    <a href="?controller=security&action=logout">Log out</a>

<?php else: ?>
    <a href="?controller=security&action=signin">Sign in</a>
<?php endif; ?>
</body>
</html>