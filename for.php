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
        for($x=0; $x<10; $x++){
            echo "This is $x <br>";
        }

        $is_this_an_array = array(1,"one",2,"two");

        foreach ($is_this_an_array as $value){
            echo "$value <br>";
        }
    ?>
</body>
</html>