<?php
require_once 'model/TaskProvider.php';
$pdo = require 'db.php';

if (!isset($_SESSION['user'])) {
    echo 'Страница вам не доступна';
    die();
}

if (isset($_GET['action'])) {
    $taskProvider = new TaskProvider();

    if ($_GET['action'] === 'add' && isset($_POST['description']) && !empty($_POST['description'])) {
        $taskProvider->addTask(new Task($_POST['description']));
    }
    if ($_GET['action'] === 'setDone' && isset($_GET['id']) && array_key_exists($_GET['id'], $_SESSION['tasks'])) {
        $_SESSION['tasks'][$_GET['id']]->setIsDone(true);
    }
}

$tasks = $taskProvider->getUndoneList();
require_once 'view/task.php';

