<?php

function conectarBD(){

    $conexao = mysqli_connect("localhost","root","","empresa");

    return($conexao);
}

function inserirEmpresa($razao_social, $nome_fantasia, $cnpj){
    $conexao = conectarBD();
    $consulta = "INSERT INTO empresa (razao_social, nome_fantasia, cnpj)
                 VALUES ('$razao_social', '$nome_fantasia', '$cnpj')";
    mysqli_query($conexao, $consulta);
    mysqli_close($conexao);
}

function retornarEmpresa(){
    $conexao = conectarBD();
    $consulta = "SELECT * FROM empresa";
    $listaEmpresa = mysqli_query($conexao, $consulta);
    mysqli_close($conexao);
    return $listaEmpresa;
}


// Função para deletar uma empresa pelo ID
function deletarEmpresa($id){
    $conexao = conectarBD();
    $consulta = "DELETE FROM empresa WHERE id = '$id'";
    mysqli_query($conexao, $consulta);
    mysqli_close($conexao);
}

// Função para modificar os Dados
function modificarEmpresa($id, $razao_social, $nome_fantasia, $cnpj) {
    $conexao = conectarBD();
    $consulta = "UPDATE empresa SET razao_social = '$razao_social', 
                nome_fantasia = '$nome_fantasia', 
                cnpj = '$cnpj' WHERE id = '$id'";
    mysqli_query($conexao, $consulta);
    mysqli_close($conexao);

}

function retornarEmpresaPorId($id) {
    $conexao = conectarBD();
    $query = "SELECT * FROM empresa WHERE id = '$id'";
    $resultado = mysqli_query($conexao, $query);

    // Retorna o resultado da consulta
    return $resultado;
}


// SETOR


function inserirSetor($descricao){
    $conexao = conectarBD();
    $consulta = "INSERT INTO setor (descricao)
                 VALUES ('$descricao')";
    mysqli_query($conexao, $consulta);
    mysqli_close($conexao);
}

function retornarSetor(){
    $conexao = conectarBD();
    $consulta = "SELECT * FROM setor";
    $listaSetor = mysqli_query($conexao, $consulta);
    mysqli_close($conexao);
    return $listaSetor;
}

function deletarSetor($id){
    $conexao = conectarBD();
    $consulta = "DELETE FROM setor WHERE id = '$id'";
    mysqli_query($conexao, $consulta);
    mysqli_close($conexao);
}

function modificarSetor($id, $descricao) {
    $conexao = conectarBD();
    $consulta = "UPDATE setor SET descricao = '$descricao' WHERE id = '$id'";
    mysqli_query($conexao, $consulta);
    mysqli_close($conexao);

}

function retornarSetorPorId($id) {
    $conexao = conectarBD();
    $query = "SELECT * FROM setor WHERE id = '$id'";
    $resultado = mysqli_query($conexao, $query);

    // Retorna o resultado da consulta
    return $resultado;
}


// EMPRESA-SETOR

function inserirEmpresaSetor($empresa_id, $setor_id){
    $conexao = conectarBD();

    // Garantir que é um número inteiro
    $empresa_id = (int) $empresa_id; 
    $setor_id = (int) $setor_id; 

    $consulta = "INSERT INTO empresa_setor (empresa_id, setor_id)
                 VALUES ('$empresa_id', '$setor_id')";
    mysqli_query($conexao, $consulta);
    mysqli_close($conexao);
}

function retornarEmpresaSetor(){
    $conexao = conectarBD();
    $consulta = "SELECT * FROM empresa_setor";
    $listaEmpresaSetor = mysqli_query($conexao, $consulta);
    mysqli_close($conexao);
    return $listaEmpresaSetor;
}

?>