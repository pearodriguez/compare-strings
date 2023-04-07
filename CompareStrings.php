<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compare Strings</title>
</head>

<body>
    <h1>Compare Strings</h1>
    <hr />
    
    <?php
    $firstString = "Geek2Geek";
    $secondString = "Geezer2Geek";

    function sameVar ($va1, $var2) {
        echo "<p>" . $va1 . " does match " . $var2 . ".</p>";
    }

    function diffVar ($var1, $var2) {
        echo "<p>" . $var1 . " does not match " . $var2 . ".</p>";
    }

    if (!empty($firstString) && !empty($secondString)) {
        if ($firstString == $secondString){
            sameVar($firstString, $secondString);
        } else {
            diffVar($firstString, $secondString);
        }
    } else {
        echo "<p>Either the \$firstString variable or the \$secondString variable does not contain a value so the two strings cannot be compared. </p>";
    }
    
    ?>

</body>

</html>