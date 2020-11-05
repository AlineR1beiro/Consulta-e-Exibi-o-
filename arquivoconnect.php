<Doctype html>
<head>
<title> Consulta e Exibição dos produtos</title>
</head>

<body>
    <h2> Consula ao Banco de Dados</h2>

    <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "modafeminina";

        $conn = mysqli_connect($servername,$username,$password,$database);

        if(!$conn){
            die ("A conexão falhou".mysqli_connect_error());
        }

        $sql = "select nome,descricao,preçofinal from produto;";
        $result = $conn->query($sql);

      while ($row = $result->fetch_assoc()){
      echo "<p> A roupa:" . $row ['nome'] . " de descrição" . $row['descricao'] .",
       o preço final é ". $row['preçofinal'] ."</p><hr>";
        }
    ?>

</body>
</html>