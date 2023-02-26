<?php

if (!isset($_SESSION['user'])) {
    echo 'Страница недоступна';
    die();
}

if (isset($_GET['action'])) {

    if ($_GET['action'] === 'add' && isset($_POST['description']) && !empty($_POST['description'])) {
        (new TaskProvider)->addTask(new Task($_POST['description']));
    }
    if ($_GET['action'] === 'setDone' && isset($_GET['id']) && array_key_exists($_GET['id'], $_SESSION['tasks'])) {
        $_SESSION['tasks'][$_GET['id']]->setIsDone(true);
    }
}

$tasks = (new TaskProvider)->getUndoneList();
require_once 'view/task.php';

