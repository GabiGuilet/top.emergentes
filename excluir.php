<?php
include('conexao.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "DELETE FROM contatos WHERE id = $id";

    if (mysqli_query($conexao, $sql)) {
        echo "Contato excluído com sucesso!";
        echo "<br><a href='index.php'>Voltar</a>";
    } else {
        echo "Erro ao excluir: " . mysqli_error($conexao);
    }
} else {
    echo "ID do contato não informado.";
}
?>










