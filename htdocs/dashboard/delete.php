<?php
if (!empty($_GET['id'])) {
    include_once('config.php');

    $id = $_GET['id'];

    // Verificar se o usuário a ser deletado existe
    $sqlSelect = "SELECT * FROM usuarios WHERE id=$id";
    $result = $conn->query($sqlSelect);

    if ($result->num_rows > 0) {
        // Excluir o usuário
        $sqlDelete = "DELETE FROM usuarios WHERE id=$id";
        $resultDelete = $conn->query($sqlDelete);

        // Selecionar o próximo ID na sequência
        $nextId = $id + 1;
        $sqlNextId = "SELECT id FROM usuarios WHERE id >= $nextId ORDER BY id ASC LIMIT 1";
        $resultNextId = $conn->query($sqlNextId);

        if ($resultNextId->num_rows > 0) {
            $nextRow = $resultNextId->fetch_assoc();
            $nextId = $nextRow['id'];
        }

        // Atualizar o próximo ID para ocupar o lugar do usuário excluído
        $sqlUpdateNextId = "UPDATE usuarios SET id = $id WHERE id = $nextId";
        $conn->query($sqlUpdateNextId);

        // Redefinir os IDs para garantir a continuidade da sequência
        $sqlResetIDs = "ALTER TABLE usuarios AUTO_INCREMENT = 1";
        $conn->query($sqlResetIDs);
    }
}

header('Location: sistema.php');
?>
