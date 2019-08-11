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
        $x=150;

        switch($x){
            case 150:
                echo "Equals " . $x;
                break;
            case 250:
                echo "Bigger than " . $x;
                break;
            case 100:
                echo "Less than " . $x;
                break;
            default:
                echo "i don't see anything.";
                break;
        }
    ?> 

    <?php
        $txt = "cat";

        switch ($txt) {
            case "cat":
                echo "i love cat";
                break;
            case "dog":
                echo "i love dog";
                break;
            default:
                echo "i love animals";
        }
    ?>

</body>
</html>