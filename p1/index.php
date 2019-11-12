
<!DOCTYPE>
<html lang="en">
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
     * @grade       160 / 150
     */


    include 'head.php';
        ?>

    <?php
	 include 'header.php';
	 ?>

    <body>

     <?php
     include 'nav_bar.php';
     ?>
     <main>

    <?php

   if (isset($_GET['page'])) {
       if ($_GET['page'] == 'aboutus') {
        require 'aboutus.php';
        }
        elseif  ($_GET['page'] == 'store') {
            require 'store.php';
        }
       elseif  ($_GET['page'] == 'contactus') {
           require 'contactus.php';
       }
       else require 'home.php';
    }
    else require 'home.php';
   ?>
     </main>
    </body>
    <?php
    require 'footer.php';
    ?>
</html>
