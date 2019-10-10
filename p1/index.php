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



   if (isset($_GET['page'])) {
       if ($_GET['page'] == 'aboutus') {
        require 'aboutus.php'; exit();
        }
        elseif  ($_GET['page'] == 'store') {
            require 'store.php'; exit();
        }
       elseif  ($_GET['page'] == 'contactus') {
           require 'contactus.php'; exit();
       }
    }
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
        <div style="text-align: center; color: darkseagreen;"><img src="images/cup.jpg" alt="flower teacup">
            <h2>With a love of all things tiny and gardening I decided what better to do than incorporate those things into tiny treasures to share.</h2></div>
	</main>


	<?php
	include 'footer.php';
	?>
</<body>
</<html>

