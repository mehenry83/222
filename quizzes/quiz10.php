<?php
/**
 * qx.txt
 *
 * Have a great winter break!
 *
 * @category    Cumulative
 * @package     Quiz 10
 * @author      Mary Henry <mehenry83@hawkmail.hfcc.edu>
 * @version     2019.12.05
 * @grade
 */

// 1. (4pts) Create a class below called DatabaseManager.
//              On construct this class should create a database connection.
//              It should also store this connection in a private property named connection.
class DatabaseManager

    private $hostname = '';
    private $username = '';
    private $password = '';
    private $database = '';
    private function connect() {
        $host = mysqli_connect($this->hostname, $this->username, $this->password);

            private return  $connection;
        }
    }
}


// 2. (3pts) Add a method to the DatabaseManager called query.
//              This method should accept a query string as a parameter.
//              This method should then use its connection to execute the query.
    function fetch_from_db($query)
        {
    $connection = new DatabaseManager();
    $query = mysqli_query($connection->$connection, 'QUERY');
}

// 4. (3pts) Add a try/catch to the query method.
//              If caught, echo a simple error message and terminate the program.
try ($hostname) {
    $connection = mysqli_select_db($hostname, $this->database);
    if (!$connection) {
        die();
        echo 'this didn't work';
    }

// B. (3pts) Add a method to the DatabaseManager called results.
//              If the last query was a SELECT, this should return all returned rows.
//              If the last query was an UPDATE or DELETE, it should return the number of affected rows.
//              If the last query was an INSERT, it should return last inserted row id.