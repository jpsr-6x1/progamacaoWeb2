<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "<hr>";
    echo "<h2>Produto Cadastrado</h2>";
    echo "<ul>";
    echo "<li><strong>ID:</strong> {$_POST['Id']}</li>";
    echo "<li><strong>Título:</strong> {$_POST['titulo']}</li>";
    echo "<li><strong>Preço:</strong> R$ {$_POST['preço']}</li>";
    echo "<li><strong>Descrição:</strong> {$_POST['descriçao']}</li>";
    echo "<li><strong>Categoria:</strong> {$_POST['categoria']}</li>";
    echo "<li><strong>Imagem:</strong> <br><img src='{$_POST['image']}' width='150'></li>";
    echo "</ul>";
}
?>
