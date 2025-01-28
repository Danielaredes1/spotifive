<?php
include('config.php');

session_start();

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $usuarioId = $_SESSION['ID'] ?? null;

    if (!$usuarioId) {
        echo json_encode([
            'sucesso' => false,
            'mensagem' => 'Usuário não autenticado!'
        ]);
        exit;
    }

    $sql = "SELECT id, nome, imagem_url FROM categorias WHERE usuario_id = ?";
    $stmt = $conexao->prepare($sql);
    $stmt->bind_param('i', $usuarioId);
    $stmt->execute();
    $result = $stmt->get_result();
    $categorias = [];

    while ($row = $result->fetch_assoc()) {
        $categorias[] = [
            'id' => $row['id'],
            'nome' => $row['nome'],
            'imagem_url' => $row['imagem_url']
        ];
    }

    echo json_encode($categorias);

    $stmt->close();
    $conexao->close();
} else {
    echo json_encode([
        'sucesso' => false,
        'mensagem' => 'Método inválido!'
    ]);
}
    