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
                include "../components/participante/tabela_participantes.php";
            ?>
        </tbody>
    </table>
</body>
</html>