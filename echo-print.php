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
        $txt = "This is about Echo";
        $txt2 = "Something";
        $x = 5;
        $y = 4;
        
        echo "<h1>" . $txt . "</h1>";
        echo $txt2 . " equals <br>";
        echo $x + $y;
        echo "<br>";
        echo "This"," would"," be", " very"," annoying"," to"," type";
    ?>

    <?php
        $txt = "This is about Print";
        $txt2 = "Someone";
        $x = 5;
        $y = 4;

        print "<h2>" . $txt . "</h1>";
        print $txt2 . " is very important.<br>";
        print $x + $y;
        //print "This","also","annoying","as","well";
    ?>
</body>
</html>