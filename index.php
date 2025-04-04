<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de produto</title>
</head>

<body>

    <form action="cadastrado.php" method="post">
        <p>
            <input type="text" name="nomeApa" placeholder="Nome do Aparelho">
        </p>

        <p>
            <input type="number" step="0.01" name="consumoWatts" placeholder="Consumo máximo em watts">
        </p>

        <p>
            <input type="number" step="0.01" name="horasLigado" placeholder="Número de horas ligado por dia">
        </p>

        <p>
            <input type="number" step="0.01" name="diasLigado" placeholder="Número de dias ligado ao mês">
        </p>

        <p>
            <input type="number" step="0.01" name="valorKWatt" placeholder="Valor do kW/h">
        </p>

        <button type="submit">Cadastrar</button>
    </form>


</body>

</html>