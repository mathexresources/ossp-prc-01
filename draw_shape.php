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
