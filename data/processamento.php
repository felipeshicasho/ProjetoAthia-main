<?php
session_start();
require "funcoesBD.php";

if (isset($_GET['acao']) && $_GET['acao'] === 'deletar' && isset($_GET['id'])) {
    $id = $_GET['id'];
    deletarEmpresa($id);
    header('Location: ../client/view/modificarEmpresa.php');
    exit();
}


if (
    !empty($_POST['inputRazaoSocial']) && !empty($_POST['inputNomeFantasia']) &&
    !empty($_POST['inputCnpj'])
) {
    $razao_social = $_POST['inputRazaoSocial'];
    $nome_fantasia = $_POST['inputNomeFantasia'];
    $cnpj = $_POST['inputCnpj'];


    inserirEmpresa($razao_social, $nome_fantasia, $cnpj);
    header('Location:../client/view/adicionarEmpresa.php');
    die();
} else if (!empty($_POST['inputDescricao'])) {
    $descricao = $_POST['inputDescricao'];
    inserirSetor($descricao);
    header('Location:../client/view/adicionarSetor.php');
    die();
}
