<?php
session_start();
require "funcoesBD.php";

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
}
