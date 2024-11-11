<?php

function conectarBD(){

    $conexao = mysqli_connect("localhost","root","","ProjetoAthia-main");
    return($conexao);
}

function inserirEmpresa($id, $razao_social, $nome_fantasia, $cnpj){

    $conexao = conectarBD();
    $consulta = "INSERT INTO empresa (id, razao_social, nome_fantasia, cnpj)
                 VALUES ('$id', '$razao_social', '$nome_fantasia', '$cnpj')";
    mysqli_query($conexao, $consulta);
}

function inserirSetor($id, $descricao){

    $conexao = conectarBD();
    $consulta = "INSERT INTO setor (descricao)
                 VALUES ('$id', '$descricao')";
    mysqli_query($conexao, $consulta);
}

function inserirEmpresaSetor($empresa_id, $setor_id){

    $conexao = conectarBD();

    // Garantir que é um número inteiro
    $empresa_id = (int) $empresa_id; 
    $setor_id = (int) $setor_id; 

    $consulta = "INSERT INTO empresa_setor (empresa_id, setor_id)
                 VALUES ('$empresa_id', '$setor_id')";
    mysqli_query($conexao, $consulta);
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
?>