<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu site PHP</title>
</head>
<body>
    <h1>Isso é html!<h1>

    <?php

        $dia = "terça";

        $temperatura = 12;

        if($temperatura > 25){
            $clima = "quente";
        }else if($temperatura <= 25 && $temperatura >= 18){
            $clima = "chuvoso";
        }else if($temperatura < 18){
            $clima = "nevando";
        }

        echo "O clima hoje está $clima a temperatura está $temperatura º e o dia hoje é $dia feira. <br>";
        
        $nomes = array("Eyshila", "Elizabeth", "Ágata");

        for($i=0; $i < 3; $i++){
            echo "<br>";
            echo $nomes[$i];
        };

        
    ?>
    
</body>
</html>