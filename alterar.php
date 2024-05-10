<?php
include "conbd.php";
$sql="UPDATE `cadastro` SET `nome`='".$_POST['nome']."',`email`='".$_POST['email']."',`sexo`='".$_POST['sexo']."',`endereco`='".$_POST['endereco']."',`numero`=".$_POST['numero'].
",`complemento`='".$_POST['complemento']."',`bairro`='".$_POST['bairro']."',`cidade`='".$_POST['cidade']."',`uf`='".$_POST['uf']."',`modalidade`='".$_POST['modalidade']."' WHERE id = ".$_POST['id'];

$stmt = $pdo->prepare($sql);
$stmt->execute();

header('location: index.php');