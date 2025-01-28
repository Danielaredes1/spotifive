<?php
include('config.php'); 

session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $urlmusic = $_POST['urlmusic'] ?? '';
    $nomemusic = $_POST['nomemusic'] ?? '';
    $tiposCategorias = $_POST['tiposCategorias'] ?? '';
    
    if (empty($urlmusic) || empty($nomemusic) || empty($tiposCategorias)) {
        echo json_encode([
            'sucesso' => false,
            'mensagem' => 'Por favor, preencha todos os campos!'
        ]);
        exit;
    }

    $sqlcategoria = "SELECT id FROM categorias WHERE nome = ?";
    $stmt = $conexao->prepare($sqlcategoria);
    $stmt->bind_param("s", $tiposCategorias);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $a = $row['id'];
    } else {
        echo json_encode([
            'sucesso' => false,
            'mensagem' => 'Categoria não encontrada.'
        ]);
        exit;
    }

    $stmt->close();
    
    $sql = "INSERT INTO musicas (nome, music_url, categoria_id) VALUES (?, ?, ?)";
    $stmt = $conexao->prepare($sql);
    $stmt->bind_param('ssi', $nomemusic, $urlmusic, $a); 

    if ($stmt->execute()) {
        $novoId = $conexao->insert_id;

        echo json_encode([
            'sucesso' => true,
            'mensagem' => $nomemusic . ' adicionada com sucesso!',
            'urlmusic' => $urlmusic,
            'nomemusic' => $nomemusic,
            'tiposCategorias' => $tiposCategorias,
            'id' => $novoId
        ]);
    } else {
        echo json_encode([
            'sucesso' => false,
            'mensagem' => 'Erro ao salvar no banco de dados: ' . $stmt->error
        ]);
    }

    $stmt->close();
    $conexao->close();
} else {
    echo json_encode([
        'sucesso' => false,
        'mensagem' => 'Método inválido!'
    ]);
}
