<?php
include('config.php');

$id = isset($_POST['id']) ? $_POST['id'] : null;
$nome = isset($_POST['nome']) ? $_POST['nome'] : null;

if ($id) {
    $sql = "DELETE FROM categorias WHERE id = ?";
    $stmt = $conexao->prepare($sql);
    $stmt->bind_param('i', $id);
} elseif ($nome) {
    $sql = "DELETE FROM categorias WHERE nome = ?";
    $stmt = $conexao->prepare($sql);
    $stmt->bind_param('s', $nome);
} else {
    echo json_encode(['sucesso' => false, 'mensagem' => 'Nenhum parâmetro válido enviado']);
    exit();
}

try {
    $stmt->execute();
    if ($stmt->affected_rows > 0) {
        echo json_encode(['sucesso' => true, 'mensagem' => 'Categoria excluída com sucesso']);
    } else {
        echo json_encode(['sucesso' => false, 'mensagem' => 'Categoria não encontrada']);
    }
} catch (Exception $e) {
    echo json_encode(['sucesso' => false, 'mensagem' => 'Erro ao excluir categoria: ' . $e->getMessage()]);
}
?>
