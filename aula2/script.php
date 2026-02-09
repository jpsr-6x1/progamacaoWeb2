<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $arquivo = 'usuarios.json';

    $novoUsuario = [
        "id" => $_POST['id'],
        "username" => $_POST['username'],
        "email" => $_POST['email'],
        "password" => $_POST['password']
    ];

    if (file_exists($arquivo)) {
        $dadosAtuais = json_decode(file_get_contents($arquivo), true);
    } else {
        $dadosAtuais = [];
    }

    $dadosAtuais[] = $novoUsuario;

    if (file_put_contents($arquivo, json_encode($dadosAtuais, JSON_PRETTY_PRINT))) {
        echo "<h2>Usuário {$_POST['username']} cadastrado com sucesso!</h2>";
        echo "<a href='index.html'>Voltar</a>";
    } else {
        echo "Erro ao salvar os dados.";
    }
}
?>