<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $num= 40;
        $cont= 0;
        $n = 1 ;

        while ($n <= $num){
            if ($n % 5 == 0){
                $cont++;
            }
            $n++;
        }
        echo "<p>" . "$cont" . " $num" . "</p>";
    ?>
</body>
</html>