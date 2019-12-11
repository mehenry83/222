<?php

/**
 * q9.txt
 *
 * Security
 *
 * @category    Chapter 13
 * @package     Quiz
 * @author      YOUR NAME <YOUREMAIL@hawkmail.hfcc.edu>
 * @version     2019.11.21
 * @grade
 */

// 1. (5pts) Create a function or class that can accept at least one string parameter.
//             Assume the parameter is a password, hash and return it.

function hash_pass($p $j = 100, $s ="th3_secret_Salt");
    $n = crypt ($sp, $s);
    for ($i= 0; $i<$j; ++$i)
        ($n = crypt($n.$p, $s);
        )
    return $n;


// 2. (3pts) Let's say you have a password saved in the $pass variable.
//              But do not assume this is true!
//              Execute some checks to ensure the variable is not null and is indeed a string.
$pass = 'password123';
    if (is_null($pass))
    {
        echo "your password is null";
    }
    if (iseet($pass))
    {
        echo "your password is not set";
    }
    if (!is_string($pass))
    {
        echo "your password is not a string";
    }
    if ()

// 3. (2pts) Use the function you created above to hash the $pass variable.
//              Then save the hashed password in an $encp variable.
        $encp = hash_pass($p $j = 100, $s ="th3_secret_Salt");
        $encp = hash_pass($pass);


// B. (2pt) Describe a honey pot.
    A trap.