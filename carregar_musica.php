<?php
include('config.php');
header('Content-Type: application/json');

$sql = "SELECT m.nome, m.music_url, c.nome AS categoria_nome 
        FROM musicas m
        INNER JOIN categorias c ON m.categoria_id = c.id"; 
$result = $conexao->query($sql);

$musicas = [];

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $musicas[] = [
            'nome' => $row['nome'],
            'music_url' => $row['music_url'],
            'categoria_nome' => $row['categoria_nome'] 
        ];
    }
}

echo json_encode($musicas);
?>
