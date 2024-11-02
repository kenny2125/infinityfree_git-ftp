<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hello, World!</h1>
    <p>My name is <?php echo "John Doe"; ?></p>
    <p>Today is <?php echo date("Y-m-d"); ?></p>
    <?php
    function factorial($n) {
        if ($n === 0) {
            return 1;
        } else {
            return $n * factorial($n - 1);
        }
    }

    $number = 5;
    $factorial = factorial($number);

    echo "The factorial of $number is $factorial";
    ?>

    <p>Bye!</p>

</body>
</html>