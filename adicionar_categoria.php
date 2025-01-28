<?php
include('config.php'); 

session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $imgperfil = $_POST['imgperfil'] ?? '';
    $categoria = $_POST['categoria'] ?? '';
    
    if (empty($imgperfil) || empty($categoria)) {
        echo json_encode([
            'sucesso' => false,
            'mensagem' => 'Por favor, preencha todos os campos!'
        ]);
        exit;
    }

    $a = $_SESSION['ID'] ?? null;
    
    if (!$a) {
        echo json_encode([
            'sucesso' => false,
            'mensagem' => 'Usuário não autenticado!'
        ]);
        exit;
    }

    $sql = "INSERT INTO categorias (nome, imagem_url, usuario_id) VALUES (?, ?, ?)";
    $stmt = $conexao->prepare($sql);
    $stmt->bind_param('ssi', $categoria, $imgperfil, $a); 

    if ($stmt->execute()) {
        // Obter o ID recém-inserido
        $novoId = $conexao->insert_id;

        echo json_encode([
            'sucesso' => true,
            'mensagem' => 'Categoria adicionada com sucesso!',
            'imgperfil' => $imgperfil,
            'categoria' => $categoria,
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
