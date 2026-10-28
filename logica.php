
<?php

    if ($_SERVER["REQUEST_METHOD"] != "POST") {
        exit("Acesse o formulário primeiro.");
    }

    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $numero_lote = $_POST["numero_lote"];
    $tipo_produto = $_POST["tipo_produto"];
    $data_validade = $_POST["data_validade"];
    $temperatura = (float) $_POST["temperatura"];

    $leituras = [
        "Temperatura registrada" => $temperatura
    ];

    if ($tipo_produto == "leite") {
        $temperatura_minima = 0;
        $temperatura_maxima = 4;
    }
    elseif ($tipo_produto == "iogurte") {
        $temperatura_minima = 0;
        $temperatura_maxima = 4;
    }
    elseif ($tipo_produto == "requeijao") {
        $temperatura_minima = 0;
        $temperatura_maxima = 4;
    }
    elseif ($tipo_produto == "creme_leite") {
        $temperatura_minima = 0;
        $temperatura_maxima = 4;
    }
    elseif ($tipo_produto == "queijo") {
        $temperatura_minima = 0;
        $temperatura_maxima = 5;
    }
    elseif ($tipo_produto == "manteiga") {
        $temperatura_minima = 0;
        $temperatura_maxima = 5;
    }
    else {
        exit("Tipo de produto inválido.");
    }

    function calcular_media($leituras) {

        $soma = 0;

        foreach ($leituras as $temperatura) {
            $soma += $temperatura;
        }

        return $soma / count($leituras);
    }

    function verificar_leitura($temperatura, $temperatura_minima, $temperatura_maxima) {

        if ($temperatura >= $temperatura_minima && $temperatura <= $temperatura_maxima) {
            return "Dentro da faixa";
        }
        else {
            return "Fora da faixa";
        }
    }

    $media_temperatura = calcular_media($leituras);

    $resultados = [];

    foreach ($leituras as $horario => $temperatura) {

        $resultados[$horario] = verificar_leitura(
            $temperatura,
            $temperatura_minima,
            $temperatura_maxima
        );
    }

    if ($resultados["Temperatura registrada"] == "Dentro da faixa") {
        $situacao_lote = "Aprovado";
    }
    else {
        $situacao_lote = "Reprovado";
    }

    require_once "view_relatorio.php";

?>
