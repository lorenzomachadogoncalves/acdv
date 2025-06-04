<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include "../../model/participante/participante_model.php";
        $resultado = visualizar_participante($_GET["id_participante"]);
        foreach ($resultado as $infos);
    ?>
    <form method="post" action="../../controller/participante/participante_control.php">
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome" value="<?=$infos["nome"]?>">

        <label for="ocupacao">Ocupação</label>
        <input type="text" name="ocupacao" id="ocupacao" value="<?=$infos["ocupacao"]?>">
        <span>&plus;</span>

        <label for="telefone">Telefone</label>
        <input type="tel" name="telefone" id="telefone" value="<?=$infos["telefone"]?>">

        <label for="ativo">Está ativo?</label>
        <select name="ativo" id="ativo">
            <option value="1" <?=$infos['is_ativo'] == 1 ? 'selected' : ''?> >Sim</option>
            <option value="0" <?=$infos['is_ativo'] == 0 ? 'selected' : ''?> >Não</option>
        </select>

        <label for="associado">É associado?</label>
        <select name="associado" id="associado">
            <option value="1" <?=$infos['is_associado'] == 1 ? 'selected' : ''?> >Sim</option>
            <option value="0" <?=$infos['is_associado'] == 0 ? 'selected' : ''?> >Não</option>
        </select>

        <input type="hidden" name="id_participante" id="id_participante" value="<?=$infos["id"]?>">

        <button type="submit" name="opcao" value="editar">Editar</button>
    </form>
</body>
</html>