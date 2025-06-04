<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include "../../model/oficina/oficina_model.php";
        $resultado = visualizar_oficina($_GET["id_oficina"]);
        foreach ($resultado as $infos);
    ?>
    <form method="post" action="../../controller/oficina/oficina_control.php">
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome" value="<?= $infos["nome"] ?>" >

        <label for="descricao">Descricao</label>
        <input type="text" name="descricao" id="descricao" value="<?= $infos["descricao"] ?>" >

        <input type="hidden" name="id_oficina" id="id_oficina" value="<?= $infos["id"] ?>" >

        <button type="submit" name="opcao" value="editar">Editar</button>
    </form>
</body>
</html>