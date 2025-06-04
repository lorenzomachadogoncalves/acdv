<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include "../../../model/participante/participante_model.php";
        include "../../../model/contribuicao/contribuicao_model.php";
        $resultado = visualizar_participante($_GET["id_participante"]);
        $contribuicao = visualizar_contribuicao_participante($_GET["id_participante"]);
        foreach ($resultado as $infos) {}
            echo "
                <h2>$infos[nome]</h2>
            ";
    ?>
    <table>
        <thead>
            <tr>
                <th>Data de pagamento</th>
                <th>Valor</th>
                <th>Método de pagamento</th>
            </tr>
        </thead>
        <tbody>
                <?php
                    foreach ($contribuicao as $campo) {
                        echo "
                            <tr>
                                <td>$infos[data_pagamento]</td>
                                <td>$infos[valor]</td>
                                <td>$infos[metodo_pagamento]</td>
                                <td>
                                <form action='../home_page.html'>
                                    <button type='submit'>editar</button>
                                </form>
                                <form method='post' action='../../controller/participante/participante_control.php'>
                                    <input type='hidden' value='desativar'>
                                    <button type='submit'>desativar</button>
                                </form>
                                </td>
                            </tr>
                        ";
                    }
                ?>
        </tbody>
    </table>
</body>
</html>