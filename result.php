<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dice Roll Result</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="conteiner">
        <h1>Dice Roll Result</h1>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $num_dice = $_POST["num_dice"];
            $dice_type = $_POST["dice_type"];

            echo "<p>Number of Dice: $num_dice</p>";
            echo "<p>Type of Dice: d$dice_type</p>";

            $total = 0;
            $rolls = array();
            for ($i = 0; $i < $num_dice; $i++) {
                $roll = rand(1, $dice_type);
                $rolls[] = $roll;
                $total += $roll;
            }

            echo "<p>Total Count: $total</p>";
            echo "<p>Individual Rolls:</p>";
            echo "<ul>";
            foreach ($rolls as $roll) {
                echo "<li>$roll</li>";
            }
            echo "</ul>";
        } else {
            echo "<p>No data submitted</p>";
        }
        ?>
    </div>
</body>
</html>