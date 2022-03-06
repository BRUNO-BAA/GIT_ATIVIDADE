<?php
    $host="localhost";
    $user="root";
    $pass="";
    $database="loja_senac";

    $con = new PDO("mysql:host={$host};dbname={$database}", "{$user}", "{$pass}");

    $stmt = $con->prepare("INSERT INTO cidade(nome_cidade, sigla_uf) VALUES (?, ?)");
    $stmt->bindParam(1, 'DUque de Caxias');
    $stmt->bindParam(2, 'RJ');
    $stmt->EXECUTE();

    $RS = $conn->query("SELECT nome_cidade,sigla_uf FROM cidade");

    while($row = $rs->fetch(PDO::FETCH_OBJ)){
        echo $row->nome_cidade . "<br>";
        echo $row->sigla_uf . "<br>";
    }