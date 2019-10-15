<?php
/**
 * describetable.php
 *
 * Homework 4
 *
 * @category   describetable
 * @package    Homework 4
 * @author     Mary Henry
 * @version    2019.10.13
 * @link       https://cislinux.hfcc.edu/~mehenry/CIS222/homework/homework4
 */

include_once 'connect.php';

$tableToDescribe = 'midterm_animals';

$statement = $dbConn->query('DESCRIBE ' . $tableToDescribe);
$result = $statement->fetchAll(PDO::FETCH_ASSOC);

foreach($result as $column){
    echo $column['Field'] . ' - ' . $column['Type'], '<br>';
}
?>