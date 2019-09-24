<?php

/**
 * User: Mary Henry
 * Date: September 5th, 2019
 * Desc: Quiz 1
 */

// 2 pts
// 1. Suppose I have the following two variables setup inside an HTML template.
// Write any additional code needed to connect the strings and output their contents.
$first = "Keanu ";
$last = "Reeves";
$name = $first. ''. $last;
echo $name;

kmkjh

// 3 pts
// 2. Assume the $name variable is already set to the string "Keanu Reeves"
// Write an echo statement usingon operator to send output to the browser.
// Once complete, the data sent to the browser should look exactly like this....
// <p>The Keanu Reeves</p>
$name = "Keanu Reeves";
echo '<p>The '. $name'</p>';


// 2 pts
// 3. Define a constant called TITLE and set it to the following string.
// "The Matrix"
define('TITLE', 'The Matrix');
echo TITLE;

// 3 pts
// 4. Make any changes needed to this snippet so that the final price is correct and dynamically using the variables above it.
$price = 18;
$taxrate = 0.07;
$final = 0000;

$final= $price * $taxrate;
echo "The final price is $" . $final;


// 2 ex pts
// 5. List 2 more escape characters, not used in the example below, and what they output.
// Example: "\$" will output a $.