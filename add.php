<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Addition Result</title>
</head>
<body>
    <div>
        <h2>Result:</h2>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Retrieve values of X and Y from the form
            $x = $_POST['x'];
            $y = $_POST['y'];

            // Ensure the values are numeric
            if (is_numeric($x) && is_numeric($y)) {
                // Calculate the sum
                $sum = $x + $y;
                echo "<p>The sum of $x and $y is: $sum</p>";
            } else {
                echo "<p>Please enter valid numeric values for X and Y.</p>";
            }
        }
        ?>
        <p><a href="main.html">Go back</a></p>
    </div>
</body>
</html>
