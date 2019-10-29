<?php
/**
 * connect.php
 *
 *
 *
 * @category   connect.php
 * @package    project 1
 * @author     Mary Henry
 * @version    2019.9.24
 * @link       https://cislinux.hfcc.edu/~mehenry/p1/connect.php
 */




$host = '127.0.0.1';
$db  = 'mehenry';
$user = 'mehenry';
$pass = 'samsvyzt';
$charset = 'utf8mb4';

$options = [
    \PDO::ATTR_ERRMODE            => \PDO::ERRMODE_EXCEPTION,
    \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
    \PDO::ATTR_EMULATE_PREPARES   => false,
];
$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
try {
    $pdo = new \PDO($dsn, $user, $pass, $options);
} catch (\PDOException $e) {
    throw new \PDOException($e->getMessage(), (int)$e->getCode());
}



?>