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

require_once 'dbconfig.php';



try {
    $conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Thank you";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
