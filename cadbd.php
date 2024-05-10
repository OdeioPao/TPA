<?php
include "conbd.php";

$sql="INSERT INTO `cadastro`( `nome`, `email`, `sexo`, `endereco`, `numero`, `complemento`, `bairro`, `cidade`, `uf`, `modalidade`) VALUES 
('".$_POST['nome']."','".$_POST['email']."','".$_POST['sexo']."','".$_POST['endereco']."',".$_POST['numero'].",'".$_POST['complemento']."','".$_POST['bairro']."','".$_POST['cidade']."','".$_POST['uf']."','".$_POST['modalidade']."')";

$stmt = $pdo->prepare($sql);
$stmt->execute();

header('location: index.php');