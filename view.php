<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">

        <title>GelaRapido</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>

    <body style="text-align: center;">

        <img src="img_logo.png" width="200">
        <br><br>

        
        <form action="logica.php" method="POST">

            <label for="nome">Nome:</label><br>
            <input type="text" id="nome" name="nome" placeholder="Digite seu nome..." required>
            <br><br>

          
            <label for="email">Endereço de Email: </label><br>
            <input type="email" id="email" name="email" placeholder="Emai@Email.com..." required>
            <br><br>

            <label for="senha">Senha: </label><br>
           
            <input type="password" id="senha" name="senha" placeholder="Senha..." required>
            <br><br>

            <label for="numero_lote">Número do Lote:</label><br>
            <input type="text" id="numero_lote" name="numero_lote" placeholder="LOTE001..." required>
            <br><br>

            <label for="tipo_produto">Produto do Lote: </label><br>
            <select name="tipo_produto" id="tipo_produto" required>
                <option value="">Selecione...</option>
                <option value="leite">Leite</option>
                <option value="queijo">Queijo</option>
                <option value="iogurte">Iogurte</option>
                <option value="manteiga">Manteiga</option>
                <option value="creme_leite">Creme de leite</option>
            </select>
            <br><br>

            <label for="data_validade">Data de Validade:</label><br>
            <input type="date" id="data_validade" name="data_validade" required>
            <br><br>

            <label for="temperatura">Temperatura (°C):</label><br>
            <input type="number" id="temperatura" name="temperatura" value="4" min="-30" max="5" step="0.5" required>
            <br><br>

            <input type="submit" value="Cadastrar Lote">

        </form>

    </body>

</html>