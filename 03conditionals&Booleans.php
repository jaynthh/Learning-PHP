<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conditions and Booleans</title>
    <style>
        h1 {
            display: grid;
            place-items: center;
            height: 100vh;
            margin: 0;
            font-family: sans-serif;
        }
    </style>

</head>

<body>
    <?php
    $bookName = "29 Roses";
    $read = true;

    if ($read) {
        $message =  "you have Read $bookName book";
    } else {
        $message = "you have NOT read $bookName book";
    }
    ?>

    <h1>
        <?php echo $message ?>
        <!-- <?= $message ?> -->
    </h1>


    <!-- Footer Links -->
    Lesson:2 <a href="./02variables.php">Variables</a> <br>

    Lesson:4 <a href="./04dataTypes.php">Data types</a> <br>

</body>

</html>