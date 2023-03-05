<?php
$pdo = require 'db.php';
require_once 'model/User.php';
require_once 'model/UserProvider.php';

$pdo->exec('DROP TABLE IF EXISTS users');
$pdo->exec('DROP TABLE IF EXISTS tasks');

$pdo->exec('CREATE TABLE users (
    id INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
    name VARCHAR(150),
    username VARCHAR(100) NOT NULL,
    password VARCHAR(100) NOT NULL
)');

$pdo->exec('CREATE TABLE tasks (
    id INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
    description VARCHAR(150),
    isDone TINYINT
)');

$user = new User('root');
$user->setName('rootPHP');

$userProvider = new UserProvider($pdo);
$userProvider->registerUser($user, '123');