<?php
include('config.php');
header('Content-Type: application/json');

$sql = "SELECT nome, music_url, categoria_id FROM musicas";
$result = $conexao->query($sql);

$musicas = [];

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $musicas[] = [
            'nome' => $row['nome'],
            'music_url' => $row['music_url']
        ];
    }
}

echo json_encode($musicas);

?>
