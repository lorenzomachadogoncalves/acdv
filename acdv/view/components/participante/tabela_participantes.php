<?php
include "../../model/participante/participante_model.php";
$resultado = visualizar_participantes();
foreach ($resultado as $infos):
    $is_associado = $infos["is_associado"];
    $is_ativo = $infos['is_ativo'];
    $opcao = $is_ativo ? 'desativar' : 'ativar';
    $button_label = $is_ativo ? 'Desativar' : 'Ativar';
?>
<tr>
    <td><?= $is_ativo ? 'Ativo' : 'Inativo' ?></td>
    <td><?= $infos['nome'] ?></td>
    <td><?= $infos['ocupacao'] ?></td>
    <td><?= $infos['telefone'] ?></td>
    <td><?= $infos['is_associado'] ? 'Associado' : 'Não associado' ?></td>
    <td>
        <form method="post" action="editar_participante.php?id_participante=<?= $infos['id'] ?>">
            <button type="submit">editar</button>
        </form>

        <form method="post" action="../../controller/participante/participante_control.php">
            <input type="hidden" name="id_participante" value="<?= $infos['id'] ?>">
            <input type="hidden" name="opcao" value="<?= $opcao ?>">
            <button type="submit"><?= $button_label ?></button>
        </form>

        <?php if ($is_associado): ?>
            <form method="post" action="../contribuicao/view_contribuicao_participante.php?id_participante=<?= $infos["id"] ?>">
                <button type="submit" value="<?= $infos["id"] ?>">contribuições</button>
            </form>
        <?php endif; ?>

    </td>
</tr>
<?php endforeach; ?>