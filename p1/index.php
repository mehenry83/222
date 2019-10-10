<!DOCTYPE html>
    <?php
    /**
     * index.php
     *
     *
     *
     * @category   index.php
     * @package    project 1
     * @author     Mary Henry
     * @version    2019.9.24
     * @link       https://cislinux.hfcc.edu/~mehenry/CIS222/p1
     */


    /**
     * non-working index.
     *
     * if (!isset($_GET['page'])) {
        require('index.php');
    } else if ($_GET['page'] == 'aboutus') {
        if (!isset($_GET['action'])) {
            require('aboutus.php');
        } else if ($_GET['action'] == 'store') {
            require('store.php');
        } else if ($_GET['action'] == 'contactus') {
            require('contactus.php');
        } else {
            require('index.php');
        }
    } else {
        require('index_.php');
    }
     */


    ?>



    <?php
        include 'head.php';
        ?>


<body>
	 <?php
	 include 'header.php';
	 ?>


     <?php
     include 'nav_bar.php';
     ?>

	<main>
        <div style="text-align: center;"><img src="images/cup.jpg" alt="flower teacup">
            <h2>With a love of all things tiny and gardening I decided what better to do than incorporate those things into tiny treasures to share.</h2></div>
	</main>


	<?php
	include 'footer.php';
	?>
</<body>
</<html>

