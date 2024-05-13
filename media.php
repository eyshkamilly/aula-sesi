<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Média</title>
</head>
<body>

    <h1> Cálculo da média dos alunos do 3°A do Sesi Moreno. </h1>

    <?php

        $n1 = $_GET['nota1'] ;

        $n2 = $_GET['nota2'];
        
        $n3 = $_GET['nota3'];

        $media = ($n1+$n2+$n3) / 3 ; 

        echo "A nota do aluno foi: $media";

    
    
    ?>
    
</body>
</html>