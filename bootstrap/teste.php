<?php

$senha = trim($_POST['senha']);
$senha = md5($senha);


echo "<script>console.log($senha)</script>";
