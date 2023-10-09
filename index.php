<?php

function draw($patern, $size) {
    switch ($patern) {
        case 'rect':
            for ($i=0; $i < $size; $i++) {
                for ($j=0; $j < $size; $j++) {
                    echo '#';
                }
                echo "<br>";
            }
            break;

        case 't':
            $width = floor($size/4);
            $length = $size - $width;
            $spaces = ($length/2) - $width;
            for ($i=0; $i < $width; $i++) {
                for ($j=0; $j < $length + $width; $j++) {
                    echo '#';
                }
                echo '<br>';
            }
            for ($i=0; $i < $length; $i++) {
                for ($k=0; $k < $spaces; $k++) {
                    echo "<span style=\"color: #fff\">##</span>";
                }
                for ($j=0; $j < $width; $j++) {
                    echo '#';
                }
                echo '<br>';
            }
            break;

        case 'e':
            $spacing = $size/5;
            $shortLine = $size - ($size * 0.2);
            $width = floor($size/4);
            for ($i=0; $i < $spacing; $i++) {
                for ($j=0; $j < $size; $j++) {
                    echo '#';
                }
                echo '<br>';
            }
            for ($i=0; $i < $spacing; $i++) {
                for ($j=0; $j < $width; $j++) {
                    echo '#';
                }
                echo '<br>';
            }
            for ($i=0; $i < $spacing; $i++) {
                for ($j=0; $j < $shortLine; $j++) {
                    echo '#';
                }
                echo '<br>';
            }
            for ($i=0; $i < $spacing; $i++) {
                for ($j=0; $j < $width; $j++) {
                    echo '#';
                }
                echo '<br>';
            }
            for ($i=0; $i < $spacing; $i++) {
                for ($j=0; $j < $size; $j++) {
                    echo '#';
                }
                echo '<br>';
            }
            break;

        case '5':
            $spacing = $size/5;
            $width = floor($size/4);
            for ($i=0; $i < $spacing; $i++) {
                for ($j=0; $j < $size; $j++) {
                    echo '#';
                }
                echo '<br>';
            }
            for ($i=0; $i < $spacing; $i++) {
                for ($j=0; $j < $width; $j++) {
                    echo '#';
                }
                echo '<br>';
            }
            for ($i=0; $i < $spacing; $i++) {
                for ($j=0; $j < $size; $j++) {
                    echo '#';
                }
                echo '<br>';
            }
            for ($i=0; $i < $spacing; $i++) {
                for ($k=0; $k < $size - $width; $k++) {
                    echo "<span style=\"color: #fff\">#</span>";
                }
                for ($j=0; $j < $width; $j++) {
                    echo '#';
                }
                echo '<br>';
            }
            for ($i=0; $i < $spacing; $i++) {
                for ($j=0; $j < $size; $j++) {
                    echo '#';
                }
                echo '<br>';
            }
            break;

        case 'f':
            $spacing = $size/5;
            $shortLine = $size - ($size * 0.2);
            $width = floor($size/4);
            for ($i=0; $i < $spacing; $i++) {
                for ($j=0; $j < $size; $j++) {
                    echo '#';
                }
                echo '<br>';
            }
            for ($i=0; $i < $spacing; $i++) {
                for ($j=0; $j < $width; $j++) {
                    echo '#';
                }
                echo '<br>';
            }
            for ($i=0; $i < $spacing; $i++) {
                for ($j=0; $j < $shortLine; $j++) {
                    echo '#';
                }
                echo '<br>';
            }
            for ($i=0; $i < $spacing*2; $i++) {
                for ($j=0; $j < $width; $j++) {
                    echo '#';
                }
                echo '<br>';
            }
            break;

        default:
            echo 'invalid input';
            break;
    }
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $shape = $_POST["shape"];
    $scale = $_POST["scale"];

    // Call the draw function with the selected shape and scale
    draw($shape, $scale);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="" method="post">
        <label for="shape">Select a Shape:</label>
        <select id="shape" name="shape">
            <option value="rect">Rectangle</option>
            <option value="t">T</option>
            <option value="e">E</option>
            <option value="f">F</option>
            <option value="5">5</option>
        </select>

        <label for="scale">Scale:</label>
        <input type="number" id="scale" name="scale" min="5" step="1" value="5">

        <input type="submit" value="Draw">
    </form>
    <a href="index.php">back</a>
</body>
</html>
