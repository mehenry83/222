<?php
/**
* q5.txt
*
* Quiz 5 for your enjoyment
*
* @category    Quiz
* @package     Quiz 5
* @author      Mary Henry <maryisnotgrumpy@gmail.com>
* @version     2019.10.03
* @grade
*/

// 1. (4pts) Define a simple class called Order.
// Your class should have a standard construct function, but it doesn't need to do anything yet.
// It should also have at least 3 private properties, one being order_id
class Order {
    private
        $order_id;
    function __construct(){
    }

    private
        $total;


    private
        $items;

    }




// 2. (4pts) Add a get and set function for one of your classes properties above (any one is fine, order_id recommended).
// Hint: A get function returns a property, a set function saves data into it.
function set_order_id($new_order_id) {
    $this->order_id = $new_order_id;
}
function get_order_id() {
    return $this->order_id;
}




// 3. (2pt) In a $myTransaction variable, create an instance of the class you created above.
$myTransaction = new Order();
    $myTransaction->set_order_id($new_order_id="42");



// B. (2pt) Explain how someone would update and use an object like this.
// Can you use it in your project?
You could use it to update prices and taxes and streamline your forms. I could use it in my project if I could properly
execute my code with out errors.