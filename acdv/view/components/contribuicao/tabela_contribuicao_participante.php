<?php
        include "../../model/participante/participante_model.php";
        include "../../model/contribuicao/contribuicao_model.php";
        $resultado = visualizar_participante($_GET["id_participante"]);
        foreach ($resultado as $infos) {}
        $contribuicao = visualizar_contribuicao_participante($_GET["id_participante"]);
?>
<form method="post" action='cadastrar_contribuicao.php?id_associado=<?= $infos['id'] ?>'>
        <button type='submit'>cadastrar contribuicao</button>
</form>
<h1><?= $infos["nome"] ?></h1>
<table>
    <thead>
        <tr>
            <th>Data de pagamento</th>
            <th>Valor</th>
            <th>Método de pagamento</th>
        </tr>
    </thead>
    <tbody>
            <?php foreach ($contribuicao as $linha): ?>
                <tr>
                <td><?= $linha["data_pagamento"] ?></td>
                <td>R$ <?= $linha["valor"] ?></td>
                <td><?= $linha["metodo_pagamento"] ?></td>
                <td>
                    <form method='post' action='../../controller/contribuicao/contribuicao_control.php?id_associado=<?= $infos['id'] ?>'>
                        <input type='hidden' name="opcao" value="editar">
                        <button type='submit'>editar</button>
                    </form>
                </td>
            </tr>
            <?php endforeach; ?>
    </tbody>
</table>