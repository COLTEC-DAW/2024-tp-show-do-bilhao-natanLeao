<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show do Bilhão</title>
</head>
<body>
    <h1>Show do Bilhão</h1>

    <?php
    $perguntas = [
        "Qual é a capital do Brasil?",
        "Qual é o maior planeta do sistema solar?",
        "Quem pintou a Mona Lisa?",
        "Em que ano o homem pisou na Lua pela primeira vez?",
        "Qual é o elemento químico mais abundante no universo?"
    ];

    $alternativas = [
        ["São Paulo", "Brasília", "Rio de Janeiro", "Salvador"],
        ["Terra", "Júpiter", "Marte", "Saturno"],
        ["Vincent van Gogh", "Pablo Picasso", "Leonardo da Vinci", "Michelangelo"],
        ["1965", "1969", "1971", "1959"],
        ["Oxigênio", "Hidrogênio", "Carbono", "Hélio"]
    ];

    $respostas_certas = [1, 1, 2, 1, 1];

    for ($i = 0; $i < count($perguntas); $i++){
        echo "<h3>Pergunta " . ($i + 1) . ": " . $perguntas[$i] . "</h3>";
        echo "<ul>";
        for ($j = 0; $j < count($alternativas[$i]); $j++){
            echo "<li>" . $alternativas[$i][$j] . "</li>";
        }
        echo "</ul>";
    }
    ?>
</body>
</html>
