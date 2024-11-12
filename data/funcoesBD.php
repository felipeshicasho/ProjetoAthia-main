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

function inserirSetor($id, $descricao){
    $conexao = conectarBD();
    $consulta = "INSERT INTO setor (id, descricao)
                 VALUES ('$id', '$descricao')";
    mysqli_query($conexao, $consulta);
    mysqli_close($conexao);
}

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


function retornarEmpresa(){
    $conexao = conectarBD();
    $consulta = "SELECT * FROM empresa";
    $listaEmpresa = mysqli_query($conexao, $consulta);
    mysqli_close($conexao);
    return $listaEmpresa;
}

function retornarSetor(){
    $conexao = conectarBD();
    $consulta = "SELECT * FROM setor";
    $listaSetor = mysqli_query($conexao, $consulta);
    mysqli_close($conexao);
    return $listaSetor;
}

function retornarEmpresaSetor(){
    $conexao = conectarBD();
    $consulta = "SELECT * FROM empresa_setor";
    $listaEmpresaSetor = mysqli_query($conexao, $consulta);
    mysqli_close($conexao);
    return $listaEmpresaSetor;
}

// Função para deletar uma empresa pelo ID
function deletarEmpresa($id){
    $conexao = conectarBD();
    $consulta = "DELETE FROM empresa WHERE id = '$id'";
    mysqli_query($conexao, $consulta);
    mysqli_close($conexao);
}

// Função para deletar um setor pelo ID
function deletarSetor($id){
    $conexao = conectarBD();
    $consulta = "DELETE FROM setor WHERE id = '$id'";
    mysqli_query($conexao, $consulta);
    mysqli_close($conexao);
}

// function atualizarEmpresaRazaoSocial($id, $novo_razao_social){
//     $conexao = conectarBD();
//     $consulta = "UPDATE empresa SET razao_social = '$novo_razao_social' 
//                 WHERE id = '$id'";
//     mysqli_query($conexao, $consulta);
//     mysqli_close($conexao);
// }

?>