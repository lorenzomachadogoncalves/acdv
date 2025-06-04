<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="../../controller/participante/participante_control.php">
        <input type="checkbox" name="ativos" id="ativos">
        <label for="ativos">Mostrar ativos</label>
        
        <input type="checkbox" name="contribuidores" id="contribuidores">
        <label for="contribuidores">Mostrar contribuidores</label>

        <a href="cadastrar_participante.html">Cadastrar</a>
    </form>
    <table>
        <caption>Participantes</caption>
        <thead>
            <tr>
                <th>Status</th>
                <th>Nome</th>
                <th>Ocupação</th>
                <th>Telefone</th>
                <th>Associado</th>
                <th>Opções</th>
            </tr>
        </thead>
        <tbody>
            <?php
                include "../../model/participante/participante_model.php";
                $resultado = visualizar_participantes();
                foreach ($resultado as $infos) {
                    echo "
                        <tr>
                            <td>" . ($infos['is_ativo'] ? 'Ativo' : 'Inativo') . "</td>
                            <td>$infos[nome]</td>
                            <td>$infos[ocupacao]</td>
                            <td>$infos[telefone]</td>
                            <td>" . ($infos['is_associado'] ? 'Associado' : 'Não associado') . "</td>
                            <td>
                                <form method='post' action='editar_participante.php?id_participante=$infos[id]'>
                                    <button type='submit'>editar</button>
                                </form>
                                <form method='post' action='../../controller/participante/participante_control.php'>
                                    <input type='hidden' value='desativar'>
                                    <button type='submit'>desativar</button>
                                </form>
                                <form method='post' action='contribuicao/view_contribuicao_participante.php?id_participante=$infos[id]'>
                                    <button type='submit' value='$infos[id]'>contribuicoes</button>
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