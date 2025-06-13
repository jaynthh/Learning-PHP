<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Types -PHP</title>
</head>

<body>
    <!-- Welcome to data Types Portal -->

    <h4>You can get the data type of any object by using the
        <code>var_dump()</code> function.
    </h4>

    <?php
    $a = 5;
    $b = "Hello";
    $c = 'Hello';
    $d = true;
    $e = 9.17;

    var_dump($a);
    echo "<br>";

    var_dump($b);
    echo "<br>";

    var_dump($c);
    echo "<br>";

    var_dump($d);
    echo "<br>";

    var_dump($e);
    echo "<br>";
    ?>
    <hr>

    <!-- Array Data type -->
    <?php
    $cars = array("Volvo", "BMW", "Toyota");
    var_dump($cars);
    ?>
    <hr>
    <!-- Null data type -->
    <?php
    $empty = null;

    var_dump($empty);
    ?>
    <hr>
    <!-- Changed Data type -->
    <?php
    $x = 452; //* Bug here [ when we enter the 0 before the digits they showing wrong]
    $x = (string) $x;
    var_dump($x);
    ?>

    <br><br><br><br><br><br>
    <hr>
    Lesson:3 <a href="./03conditionals&Booleans.php">Conditions and Booleans</a> <br>
    <!-- Lesson:4 <a href="<?php echo __FILE__ ?>"> Data Types</a> -->
    <!-- Its working fine -->

</body>

</html>