<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Nadpis</h1>
    <?php
        echo "Zdravo";
        $meno = 'Peter';
        echo "$meno <br>";
        echo "$meno <br>";
        var_dump($meno);
        $farby = array("cervena", "modra", "zelena");
        echo $farby[1];// 0 - cervena, 1 - modra, 2 - zelena
        echo ("<br>");

        foreach($farby as $farba){
            echo "Farba ". $farba. "<br>";
        }

        $data = array("Peter" => 25, "Jana" => 30, "Marek" => 20);
        foreach($data as $name => $age){
            echo "$name ma $age rokov <br>";
        }
        // komentAr
    ?>
</body>
</html>