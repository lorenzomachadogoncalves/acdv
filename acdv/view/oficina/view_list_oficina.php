<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="../../encerrar_sistema.php" method="post"> 
            <button type="submit">Encerrar sistema</button>
    </form>
    <table>
        <caption>Lista de oficina</caption>
        <thead>
            <tr>
                <th>Título</th>
                <th>Descrição</th>
            </tr>
        </thead>
        <tbody>
            <?php
                include "../../model/oficina/oficina_model.php";
                $resultado = visualizar_todas_oficinas();
                foreach ($resultado as $infos) {
                    echo "
                        <tr>
                            <td>$infos[nome]</td>
                            <td>$infos[descricao]</td>
                        </tr>
                        ";
                }
            ?>
        </tbody>
    </table>
</body>
</html>