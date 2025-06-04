<?php
    include "../../model/agenda/agenda_model.php";

    $opcao = $_POST["opcao"];
    switch ($opcao) {
        case "cadastrar":
            $resultado = cadastrar_programacao($_POST["id_participante"], $_POST["id_oficina"], $_POST["dia_semana"], $_POST["inicio"], $_POST["fim"]);
            if ($resultado === true) {
                header("Location: ../view/");
            } else {
                echo $resultado;
            }
            break;

        case "editar":
            editar_programacao($_POST["id_participante"], $_POST["id_oficina"], $_POST["dia_semana"], $_POST["inicio"], $_POST["fim"], $_POST["id_programacao"]);
            header("Location: ../view/");
            break;

        case "excluir":
            excluir_programacao($_POST["id_programacao"]);
            header("Location: ../view/");
            break;
    }
?>