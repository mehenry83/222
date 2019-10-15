<?php
/**
 * index.php
 *
 * Homework 4
 *
 * @category   index.php
 * @package    Homework 4
 * @author     Mary Henry
 * @version    2019.10/13
 * @link       https://cislinux.hfcc.edu/~mehenry/CIS222/homework/homework4
 */

include_once 'connect.php';
$sql = "SHOW TABLES";
$statement = $dbConn->prepare($sql);
$statement->execute();
$tables = $statement->fetchAll(PDO::FETCH_NUM);

foreach($tables as $table)
    echo $table[0], '<br>';

