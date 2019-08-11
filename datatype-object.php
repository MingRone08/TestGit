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
        class car
        {
            function car($x,$y)
            {
                $this->model = $x;
                $this->price = $y;
            }
        }

        class house
        {
            function house()
            {
                $this->owner = "Ming";
                $this->price = 250;
            }
        }

        $mynewcar = new car("BMW",150);

        echo $mynewcar->model . "<br>";
        echo $mynewcar->price;
        echo "<br>";
        var_dump($mynewcar->model);
    ?>    

</body>
</html>