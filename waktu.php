<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
    if(date("H") < 12){
        echo "Good Morning<br>";
        echo "Welcome to Our Site";
    }
    elseif (date("H")<18){
        echo "Good Afternoon<br>";
        echo "Welcome to Our Site";
    }
    else {
        echo "Good Night<br>";
        echo "Welcome to Our Site";
    }
    ?>
</body>
</html>