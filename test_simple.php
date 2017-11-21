<?php
//Get general settings
require "config.php";

//Get the class file for simple
require "simple.php";

//Create an object of the class
$obj = new simple();

//Use the class
echo "<p>";
$obj->displayVar();
echo "</p>";

//Change the state of the object and use it again
$obj->var = "Hello World (should now be 2) = ";
echo "<p>";
$obj->displayVar();
echo "</p>";

?>