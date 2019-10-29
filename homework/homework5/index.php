<?php

/**
 * homework5.php
 *
 *
 *
 * @category   homework5.php
 * @package    homework 5
 * @author     Mary Henry
 * @version    2019.10.23
 * @link       https://cislinux.hfcc.edu/~mehenry/homework/homework5/index.php
 */


 include "MyBaseObject.php";
 ?>

<html>
<head></head>
    <body>
<?php
    $fbi = new MyBaseObject();
    $cia = new MyBaseObject();
    $fbi->set_content("JFK");
    $fbi->set_client("White House");
    $fbi->set_clearnace("Top Secret");
    $cia->set_content("MLK");
    $cia->set_client("Pentagon");
    $cia->set_clearnace("Classified");


        echo "Fbi files on: " . $fbi->get_content() . "<br>Department Requested:". $fbi->get_client() . "<br>Clearance:".$fbi->get_clearance();
        echo '<br><br>';
        echo "Cia files on:"  . $cia->get_content()."<br>Department Requested:". $cia->get_client() . "<br>Clearance:".$cia->get_clearance();

 ?>
<?php include "MyFileObject.php";


$jfk = new MyFileObject();
$jfk->set_filename("John Fitzgerald Kennedy");
$mlk = new MyFileObject();
$mlk->set_filename("Martin Luther King Jr");

echo "<br>".$mlk->get_filename();
echo "<br>".$jfk->get_filename();


