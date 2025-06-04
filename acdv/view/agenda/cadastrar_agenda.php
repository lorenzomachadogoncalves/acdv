<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="../../controller/agenda/agenda_control.php">
        <label for="dia_semana">Dia da semana</label>
        <select name="dia_semana" id="dia_semana">
            <option value="segunda">Segunda</option>
            <option value="segunda">Terça</option>
            <option value="segunda">Quarta</option>
            <option value="segunda">Quinta</option>
            <option value="segunda">Sexta</option>
        </select>

        <label for="professor">Professor</label>
        <select name="id_participante" id="professor">
            <?php
                include "../../model/participante/participante_model.php";
                $resultado = visualizar_professores();
                foreach ($resultado as $infos) {
                    echo "
                        <option value='{$infos['id']}'>{$infos['nome']}</option>
                    ";
                }
            ?>
        </select>

        <label for="oficina">Oficina</label>
        <select name="id_oficina" id="oficina">
            <?php
                include "../../model/oficina/oficina_model.php";
                $resultado = visualizar_todas_oficinas();
                foreach ($resultado as $infos) {
                    echo "
                        <option value='{$infos['id']}'>{$infos['nome']}</option>
                    ";
                }
            ?>
        </select>

        <label for="inicio">Horário de início</label>
        <input type="time" name="inicio" id="inicio">

        <label for="fim">Horário de fim</label>
        <input type="time" name="fim" id="fim">

        <button type="submit" name="opcao" value="cadastrar">Cadastrar</button>
    </form>
</body>
</html>