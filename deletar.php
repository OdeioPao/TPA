<?php
include "conbd.php";
$sql="DELETE FROM `cadastro` WHERE id = ".$_GET['id'];
echo $sql;
$stmt = $pdo->prepare($sql);
$stmt->execute();

header('location: index.php');