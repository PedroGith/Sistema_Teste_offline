<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>Cadastro</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

  <form method="POST" action="/produto/inserir">
    @csrf

    <fieldset>
        <legend>Cadastro de Produto Farmacêutico</legend>

        Nome do Produto:<br>
        <input type="text" name="nome" placeholder="Ex: Paracetamol" required><br><br>

        Categoria:<br>
        <select name="categoria" required>
            <option hidden>Selecione</option>
            <option value="analgesico">Analgésico</option>
            <option value="antibiotico">Antibiótico</option>
            <option value="antiinflamatorio">Anti-inflamatório</option>
            <option value="outro">Outro</option> 
        </select><br><br>

        Dosagem:<br>
        <input type="text" name="dosagem" placeholder="Ex: 500mg" required><br><br>

        Forma Farmacêutica:<br>
        <select name="forma" required>
            <option hidden>Selecione</option>
            <option value="comprimido">Comprimido</option>
            <option value="capsula">Cápsula</option>
            <option value="xarope">Xarope</option>
            <option value="injeção">Injeção</option>
        </select><br><br>

        Data de Validade:<br>
        <input type="date" name="validade" required><br><br>

        Quantidade em Estoque:<br>
        <input type="number" name="quantidade" min="0" required><br><br>

        Fabricante:<br>
        <input type="text" name="fabricante" required><br><br>

        Preço:<br>
        <input type="number" step="0.01" name="preco" placeholder="Ex: 1500.00" min="0" required><br><br>

        Descrição:<br>
        <textarea name="descricao" rows="3" required></textarea><br><br>

    <div class="botoes">
       <button type="submit">Cadastrar</button>
       <button type="button" onclick="history.back()" >Voltar</button>
    </div>
    </fieldset>
</form>
</body>
</html>
