<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<?php
    // hollow square pattern
    $size = 10;
    for($i = 0; $i < $size; $i++) {
        // print column
        for($j = 0; $j < $size; $j++) {
            echo "&nbsp;&nbsp;";
            // print only star in first and last row
            if($i === 0 || $i === $size - 1) {
                echo "*";
            }
            else {
                
                // print star only in first and last position row
                if($j === 0 || $j === $size - 1) {
                    echo "*";
                }
                else {
                    // use &nbsp; for space
                    echo "&nbsp;&nbsp;";
                }
            }
        }
        echo "<br>";
    }
?>
<br>
<?php
for($i=1; $i<=5; $i++)
{
 for($j=5; $j>=1; $j--)
 {
  if($i == $j)
   echo "*";
  else
   echo "&nbsp;&nbsp;"; 
 }
 for($k=2; $k<=5; $k++)
 {
  if($i == $k)
   echo "*";
  else
   echo "&nbsp;&nbsp;";
 }
 echo "<br>";
}
?>
<br>
<?php
    // heart star pattern
    $size = 6;
    
    for ($i = $size / 2; $i < $size; $i += 2) {
        // print first spaces
        for ($j = 1; $j < $size - $i; $j += 2) {
            echo "&nbsp;&nbsp;";
        }
        // print first stars
        for ($j = 1; $j < $i + 1; $j++) {
            echo "*";
        }
        // print second spaces
        for ($j = 1; $j < $size - $i + 1; $j++) {
            echo "&nbsp;&nbsp;";
        }
        // print second stars
        for ($j = 1; $j < $i + 1; $j++) {
            echo "*";
        }
        echo "<br>";
    }
    // lower part
    // inverted pyramid
    for ($i = $size; $i > 0; $i--) {
        for ($j = 0; $j < $size - $i; $j++) {
            echo "&nbsp;&nbsp;";
        }
        for ($j = 1; $j < $i * 2; $j++) {
            echo "*";
        }
        echo "<br>";
    }
?>
<br>
<?php
for($i=5; $i>=1; $i--)
{
 for($j=5; $j>=1; $j--)
 {
  if($i == $j)
   echo "*";
  else
   echo "&nbsp;&nbsp;";
 }
 for($k=2; $k<=5; $k++)
 {
  if($i == $k)
   echo "*";
  else
   echo "&nbsp;&nbsp;";
 }
 echo "<br>";
}
?>
<br>
<?php
    $size = 5;
    
    // reversed pyramid star pattern
    for ($i = 0; $i < $size; $i++) {
        // printing spaces
        for ($j = 0; $j < $i; $j++) {
            echo "&nbsp;&nbsp;";
        }
        // printing star
        for ($k = 0; $k < ($size - $i) * 2 - 1; $k++) {
            echo "*";
        }
        echo "<br>";
    }
    // pyramid star pattern
    for ($i = 2; $i <= $size; $i++) {
        // printing spaces
        for ($j = $size; $j > $i; $j--) {
            echo "&nbsp;&nbsp;";
        }
        // printing star
        for ($k = 0; $k < $i * 2 - 1; $k++) {
            echo "*";
        }
        echo "<br>";
    }
?>
</body>
</html>