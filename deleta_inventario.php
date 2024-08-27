<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/Style.css" />
    <link rel="stylesheet" href="../CSS/Deletar.css" />
    <title>Deletar inventário</title>
</head>

<body>

    <section>
        <div class="principal">
            <h1>Deletar inventário</h1>
            <?php
            include('include/conexao.php');
            $id = $_GET['id'];
            $sql = "DELETE FROM inventario_computadores WHERE id = $id";
            $result = mysqli_query($con, $sql);
            if ($result)
                echo "<h2>Dados deletados!</h2>";
            else {
                echo "<h2>Erro ao deletar!</h2>";
                echo "<h2>" . mysqli_error($con) . "</h2>";
            }
            ?>
        </div>
    </section>
</body>

</html>