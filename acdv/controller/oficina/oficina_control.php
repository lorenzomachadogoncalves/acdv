<?php
    include "../../model/oficina/oficina_model.php";

    $opcao = $_POST["opcao"];
    switch ($opcao) {
        case "cadastrar":
            cadastrar_oficina($_POST["nome"], $_POST["descricao"]);
            header("Location: ../../view/oficina/view_list_oficina.html");
            break;

        case "editar":
            editar_oficina($_POST["nome"], $_POST["descricao"], $_POST["id_oficina"]);
            header("Location: ../view/");
            break;

        case "excluir":
            excluir_oficina($_POST["id_oficina"]);
            header("Location: ../view/");
            break;
    }
?>