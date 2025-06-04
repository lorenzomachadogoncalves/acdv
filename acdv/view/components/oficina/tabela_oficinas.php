<?php
    include "../../model/oficina/oficina_model.php";
    $resultado = visualizar_todas_oficinas();
    foreach ($resultado as $infos):
?>
<tr>
    <td><?= $infos['nome'] ?></td>
    <td><?= $infos['descricao'] ?></td>
    <td>
        <form method="post" action="editar_oficina.php?id_oficina=<?= $infos['id'] ?>" >
            <button type="submit">editar</button>
        </form>
    </td>
</tr>
<?php endforeach; ?>