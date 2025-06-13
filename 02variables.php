<?php
$x = 5;
$y = 'Jaynth';
?>

<h3>Rules for PHP Variables</h3>
<pre>
    - A variable starts with the $ sign, followed by the name of the variable
    - A variable name must start with a letter or the underscore character
    - A variable name cannot start with a number
    - A variable name can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ )
    - Variable names are case-sensitive ($age and $AGE are two different variables)
</pre>
<mark>Remainder that Variables are case-sensitive</mark>

<!--================= Variables ================-->

<pre>
        $x = 5;
        $y = 'Jaynth';
</pre>

<pre>
echo 'Wecolme '.$y ;
</pre>
<?php
echo 'Wecolme ' . $y;
?>
<hr>
<br>
<!-- Practice -->
<h2>Practice</h2>
<pre>
    $name = 'Jayy';
    $Greet = 'How are You';
    echo "Hello $name , $Greet"
</pre>

<?php
$name = 'Jayy';
$Greet = 'How are You';
echo "Hello $name , $Greet"
?>
<hr>


<!-- Variable Scope -->
<!-- 
- Local variable
- Global variable
- Static Variable
-->
<?php
$z = 9; //* Global Function
function jayy()
{
    //! echo "<p>variable x inside Function is : $z </p>";
    // using x inside this function will generate the error
}

jayy();
echo "<p>Variable x outside function is : $z</p>";
?>
<hr>


<?php
$globalVar = 28; //*Global Variable
function LocFunct()
{
    $localVar = 30; //*Local variable
    echo "<p>This is local variable : $localVar</p>";
    //! echo "<p>This is Global variable : $globalVar</p>";
    // In function only local variable only works, Global varibales are not allowed inside the function block
}
LocFunct();
echo "<p>This is a Global Variable : $globalVar</p>";
?>

<!-- We can use global Variables in functions,Lets see -->

<?php
$x = 5;
$y = 10;

function myTest()
{
    global $x, $y;
    $y = $x + $y;
}

myTest();
echo $y; // outputs 15
?>
<br>
<hr>
<!-- Static Variable: -->
<!-- Normally, when a function is completed/executed, all of its variables are deleted. However, sometimes we want a local variable NOT to be deleted. We need it for a further job.

To do this, use the static keyword when you first declare the variable: -->

<?php
function myTest2()
{
    static $x1 = 0;
    echo $x1;
    $x1++;
};

myTest2();
echo "<br>";
myTest2();
echo "<br>";
myTest2();
echo "<br>";
?>




<br><br><br><br><br><br><br><br><br><br>
<hr>
<hr>
Lesson:1 <a href="./01synatx.php">Syntax</a> <br>

Lesson:3 <a href="./03conditionals&Booleans.php">Conditions and Booleans</a> <br>