<?php
/**quiz7.txt
*
* Send an email!
*
* @category    Chapter 11
* @package     Quiz 7
* @author      Mary Henry <mehenry83@hawkmail.hfcc.edu>
* @version     2019.11.07
* @grade
*/

// 1. (7pts) Write the PHP needed below to send an email.
//          The subject should read "Test Email"
//          The body should use the variable $content
//          The email should be sent to crbanks1@hfcc.edu\
//          Use your email address as the from and reply to addresses.
//          The email should also have valid headers.

$to = 'crbank1@hfcc.edu';
$subject = 'test email';
$message = '$content';
$headers = 'From: maryisnotgrumpy@gmail.com' . "\r\n" .
    'Reply-To: maryisnotgrumpy@gmail.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);




// 2. (1pts) When uploading a file via an HTML form into PHP,
// what global array are the files temporarily stored in?
$_FILES



// 3. (2pt) Use the PHP header functionality to send the user to the following url
//              https://facebook.com

header('Location: https://facebook.com');


// B. (1pt) Demonstrate how you would send an SMS text message using PHP.