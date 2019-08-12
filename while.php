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
        $x=0;
        while ($x<5){
            echo " $x is smaller than 5 . <br>";
            $x++;
        }

        $y=5;
        do{
            echo "$y is smaller than 10. <br>";
            $y++;
        } while ($y<10);

    ?>

</body>
</html>