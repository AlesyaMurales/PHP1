<html>
<head>
    <meta charset="UTF-8">
    <title>Главная</title>
</head>
<body>
<h1><?= $pageHeader ?></h1>

<?php if (isset($username)): ?>
    <p>Добро пожаловать, <?= $username ?></p>
    Выйти
<?php else: ?>
    Войти
<?php endif; ?>
</body>
</html>
