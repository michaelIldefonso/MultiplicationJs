<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div>
        <h1>12x12 Multiplication Table</h1>
    </div>

    <div class="body">
        <?php include "multiplication.php";
            buildMultiplicationTable(12);
        ?>
    </div>
</body>
</html>