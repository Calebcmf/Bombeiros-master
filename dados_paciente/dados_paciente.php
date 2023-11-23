<?php
session_start();
$_SESSION["id_paciente"] = 0;
include("../conecta.php");

$nome = isset($_POST['nome']) ? $_POST['nome'] : 'NomePadrao';
$cpf = isset($_POST['cpf']) ? $_POST['cpf'] : 'CPFPadrao';
$idade = isset($_POST['idade']) ? $_POST['idade'] : 0;
$telefone = isset($_POST['telefone']) ? $_POST['telefone'] : 'TelefonePadrao';
$local = isset($_POST['local']) ? $_POST['local'] : 'LocalPadrao';
$nomeAcompanhante = isset($_POST['nomeAcompanhante']) ? $_POST['nomeAcompanhante'] : 'NomeAcompanhantePadrao';
$idadeAcompanhante = isset($_POST['idadeAcompanhante']) ? $_POST['idadeAcompanhante'] : 0;
$cep = isset($_POST['cep']) ? $_POST['cep'] : 'CEPPadrao';
$sexo = 0;

if (isset($_POST['sexo_m'])) {
    $sexo = "Masculino";
}
if (isset($_POST['sexo_f'])) {
    $sexo = "Feminino";
}

try {
    echo "Valores das variáveis: nome=$nome, cpf=$cpf, idade=$idade, telefone=$telefone, local=$local, cep=$cep, sexo=$sexo\n";

    $stmt = $pdo->prepare("SELECT id_paciente FROM dados_paciente WHERE cpf_paciente = ?");
    $stmt->execute([$cpf]);
    $pacienteexisteId = $stmt->fetchColumn();

    if ($pacienteexisteId) {
        echo "Atualizando paciente existente...\n";
        $comandoPaciente = $pdo->prepare("UPDATE dados_paciente SET nome_paciente = ?, idade_paciente = ?, fone_paciente = ?, local_ocorrencia = ?, cep = ?, sexo = ? WHERE id_paciente = ?");
        $resultadoPaciente = $comandoPaciente->execute([$nome, $idade, $telefone, $local, $cep, $sexo, $pacienteexisteId]);
        
    } else {
        echo "Inserindo novo paciente...\n";
        $comandoPaciente = $pdo->prepare("INSERT INTO dados_paciente (nome_paciente, cpf_paciente, idade_paciente, fone_paciente, local_ocorrencia, cep, sexo) VALUES (?, ?, ?, ?, ?, ?, ?)");
        $resultadoPaciente = $comandoPaciente->execute([$nome, $cpf, $idade, $telefone, $local, $cep, $sexo]);
        $pacienteexisteId = $pdo->lastInsertId(); 
        $_SESSION["id_paciente"] = $pacienteexisteId;
       
    }

    if ($resultadoPaciente) {
        echo "Inserindo dados do acompanhante...\n";
        $comandoAcompanhante = $pdo->prepare("INSERT INTO dados_acompanhante (nome_acompanhante, idade_acompanhante, id_paciente) VALUES (?, ?, ?)");
        $resultadoAcompanhante = $comandoAcompanhante->execute([$nomeAcompanhante, $idadeAcompanhante, $pacienteexisteId]);

        if ($resultadoAcompanhante) {
            echo "success";
        } else {
            echo "Erro ao inserir dados do acompanhante.";
        }
    } else {
        echo "Erro ao inserir/atualizar dados do paciente.";
    }
} catch (PDOException $e) {
    echo "Erro na execução da consulta: " . $e->getMessage();
}