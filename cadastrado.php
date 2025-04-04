<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrado</title>
</head>

<body>

    <?php
    if (empty($_POST['nomeApa'])) {
        $erros[] = 'Campo nome do aparelho vazio<br>';
    }
    if (empty($_POST['consumoWatts'])) {
        $erros[] = 'Campo consumo máximo em watts vazio<br>';
    }
    if (empty($_POST['horasLigado'])) {
        $erros[] = 'Campo número de horas ligado por dia vazio<br>';
    }
    if (empty($_POST['diasLigado'])) {
        $erros[] = 'Campo número de dias ligado ao mês vazio<br>';
    }
    if (empty($_POST['valorKWatt'])) {
        $erros[] = 'Campo valor do kW/h vazio<br>';
    }


    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (!isset($erros)) {
            $nomeApa = $_POST['nomeApa'];
            $consumoWatts = $_POST['consumoWatts'];
            $horasLigado = $_POST['horasLigado'];
            $diasLigado = $_POST['diasLigado'];
            $valorKWatt = $_POST['valorKWatt'];

            $consumoDiario = ($consumoWatts / 1000) * $horasLigado;
            $consumoMensal = $consumoDiario * $diasLigado;
            $consumoR = $consumoMensal * $valorKWatt;

            echo "<h4>Nome do aparelho: " . $nomeApa . "</h4>";
            echo "<h4>Consumo em Watts: " . $consumoWatts . "</h4>";
            echo "<h4>Horas ligado: " . $horasLigado . "</h4>";
            echo "<h4>Dias ligadoo: " . $diasLigado . "</h4>";
            echo "<h4>Valor do kW/h: " . $valorKWatt . "</h4>";

            echo "<br>";

            echo "<h3>Consumo diário: " . $consumoDiario . "</h3>";
            echo "<h3>Consumo mensal: " . $consumoMensal . "</h3>";
            echo "<h3>Consumo do aparelho: R$" . $consumoR . "</h3>";

            if ($consumoR <= 5) {
                echo "<h3>O consumo do aparelho é baixo</h3>";
            } elseif ($consumoR > 5 && $consumoR <= 10) {
                echo "<h3>O consumo do aparelho é médio</h3>";
            } else {
                echo "<h3>O consumo do aparelho é alto</h3>";
            }
        } else {
            echo "<h2>Erro ao cadastrar</h2><br>";
            foreach ($erros as $erroatual) {
                echo $erroatual;
            }
            require_once('index.php');
        }
    } else {
        echo "<h2>ATENÇÃO: O FORMULÁRIO NÃO FOI ENVIADO CORRETAMENTE</h2>";
    }

    ?>

    <a href="index.php">Voltar para a Home</a>


</body>

</html>