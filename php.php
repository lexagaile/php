<?php

$x = 0;
if(isset($x)) {
    echo "Variable 'x' is not null";
}

$y = null;
if(isset($y)) {
    echo "Variable 'y' is not null";
}

echo "<br>";

define('PI', 3.14);
echo PI;

// PHP only support single inheritance which means 
// a class can only be extended from one class using 'extended'

echo "<br>";

define("GREETING", "Hello there!", false);
echo GREETING;

echo "<br>";

// const is used to also create a constant
const Car = "Volvo";
echo Car;

echo "<br>";

echo "<h1>While Loop</h1>";
$i = 0;

while($i < 10) {
    echo $i;
    $i++;
}
echo "<br>";

echo "<h1>For Loop</h1>";
for($j = 0; $j < 10; $j++) {
    echo $j;
}
echo "<br>";

echo "<h1>Do While Loop</h1>";
$k = 1;
do {
    echo $k;
    $k++;
} while($k < 5);

echo "<br>";
echo "<h1>Foreach Loop</h1>";

$cars = array("Ferrari", "Toyota", "Volks", "BMW");
foreach($cars as $car) {
    echo $car . "<br>";
}

echo "<br>";

// used to return the number of arguments

function sample() {
    $args = func_num_args();
    echo "Total number of arguments: " . $args;
}
sample(8, 10, "ako");


echo "<br>";
echo "<h1>GLOBAL VARIABLE</h1>";

// GLOBALS

$m = 10;
$n = 5;

function sum() {
    $GLOBALS['z'] = $GLOBALS['m'] + $GLOBALS['n'];
}
sum();
echo $z;


echo "<br>";
echo "<h1>DIFFERENCE BETWEEN $ AND $$</h1>";

$HELLO = "Welcome to my code";
$var = "HELLO";
echo $var . " " . $$var;


echo "<br>";
echo "<h1>Final Class and Final Method</h1>";

// Having a 'final' keyword will diplay an error
class BaseClass {
    function printData($val1, $val2) {
        $add = $val1 + $val2;
        echo "Sum: " . $add;
    }
}
class Child extends BaseClass {
    function printData($val1, $val2) {
        $product = $val1 * $val2;
        echo "Multiplication of given number is: " . $product;
    }
}
$obj = new Child();
$obj->printData(10, 20);


echo "<br>";
echo "<h1>Function overloading and Function overriding</h1>";

class Base {
    function display() {
        echo "<br>Base class function declared as final.";
    }
    function demo() {
        echo "<br>Base class function!";
    }
}
class Derived extends Base {
    function demo() {
        echo "<br>Derived class function!";
    }
}
$obj = new Base();
$obj->demo();
$obj->display();
$obj1 = new Derived();
$obj1->demo();
$obj1->display();


echo "<br>";
echo "<h1>Call a function by reference</h1>";

function ref(&$str2) {
    $str2 .= "Call by reference";
}
$str = "This is ";
ref($str);
echo $str;


echo "<br>";
echo "<h1>Singleton Class</h1>";

class DbConnector {
    private static $obj;
    private final function __construct() {
        echo __CLASS__ . " initialize only once";
    }
    public static function getConnect() {
        if(isset(self::$obj)) {
            self::$obj = new DbConnector();
        }
        return self::$obj;
    }
}
$obj1 = DbConnector::getConnect();
$obj2 = DbConnector::getConnect();
var_dump($obj1 == $obj2);

echo "<br>";
echo "<h1>Sort</h1>";

$service = array("Volvo", "BMW", "Ferrari", "Volks", "Toyota");
// sort($service) - ascending order sorting
// rsort($service) - descending order sorting
$age = array("Mac" => "22", "Rob" => "27", "Duke" => "37");
// asort($age) - ascending order in terms of value
// ksort($age) - ascending order according to key
// arsort($age) - descending value
// krsort($age) - descending key

echo "<br>";

$a = '1';
$b = &$a;
$b = "2$b";
echo $a. ", " .$b;