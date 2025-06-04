<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="">
    <title>Agenda ACDV</title>
</head>
<body>
    <form action="cadastrar_agenda.php">
      <button type="submit">Cadastrar programação</button>
    </form>
    <table>
      <caption>Agenda Semanal</caption>
      <thead>
        <tr>
          <th>Segunda</th>
          <th>Terça</th>
          <th>Quarta</th>
          <th>Quinta</th>
          <th>Sexta</th>
          <th>Sábado</th>
          <th>Domingo</th>
        </tr>
      </thead>
      <tbody>
        <?php
            include "../../model/agenda/agenda_model.php";
            $resultado = visualizar_programacao();
            foreach ($resultado as $infos) {
              foreach ($infos as $celula){
                echo "<h2>$celula</h2>";
              }
            }
        ?>
      </tbody>
    </table>
    
</body>
</html>