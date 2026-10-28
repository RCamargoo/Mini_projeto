
<!DOCTYPE html>
<html lang="pt-br">

    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Relatório da Câmara Fria</title>

        <link rel="stylesheet" href="style.css">

    </head>

    <body>


        <h1>Relatório da Câmara Fria</h1>

        <br>

        <h2>Dados do registro:</h2>

        <br>

        <p><strong>Operador:</strong> <?php echo ($nome); ?></p>
        <p><strong>Lote:</strong> <?php echo ($numero_lote); ?></p>
        <p><strong>Produto:</strong> <?php echo ($tipo_produto); ?></p>
        <p><strong>Câmara:</strong> Câmara Fria 1</p>
        <p><strong>Data de validade:</strong> <?php echo ($data_validade); ?></p>
        <br>

        <hr>

        <br>
        <h2>Leituras de temperatura</h2>

        <table border="1" cellpadding="10">
            <tr>
                <th>Horário</th>
                <th>Temperatura (°C)</th>
                <th>Situação</th>
            </tr>

            <br>

            <?php foreach ($leituras as $horario => $temperatura) { ?>

                <tr>
                    <td><?php echo ($horario); ?></td>
                    <td><?php echo number_format($temperatura, 1, ',', '.'); ?> °C</td>
                    <td>
                        <?php echo verificar_leitura(
                            $temperatura,
                            $temperatura_minima,
                            $temperatura_maxima
                        ); ?>
                    </td>
                </tr>

            <?php } ?>

        </table>

        <br>

        <h2>Resumo do relatório</h2>
        <br>

        <p>
            <strong>Faixa segura:</strong>
            <?php echo $temperatura_minima; ?> °C a
            <?php echo $temperatura_maxima; ?> °C
        </p>

        <p>
            <strong>Temperatura média:</strong>
            <?php echo number_format($media_temperatura, 1, ',', '.'); ?> °C
        </p>

        <p>
            <strong>Temperatura mínima registrada:</strong>
            <?php echo number_format(min($leituras), 1, ',', '.'); ?> °C
        </p>

        <p>
            <strong>Temperatura máxima registrada:</strong>
            <?php echo number_format(max($leituras), 1, ',', '.'); ?> °C
        </p>

        <?php
            $quantidade_fora = 0;

            foreach ($leituras as $temperatura) {
                if (
                    $temperatura < $temperatura_minima ||
                    $temperatura > $temperatura_maxima
                ) {
                    $quantidade_fora++;
                }
            }
        ?>

        <p>
            <strong>Leituras fora da faixa:</strong>
            <?php echo $quantidade_fora; ?>
        </p>
        <br>

        <h2>Situação do lote:</h2>

        <p style=" color: #1565a8;"><strong><?php echo $situacao_lote; ?></strong></p>

        <br>


    </body>
</html>
