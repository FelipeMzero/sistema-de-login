<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recupere os dados do usuário do formulário
    $username = $_POST["username"];
    $fullName = $_POST["full_name"];
    $phone = $_POST["phone"];
    $cpf = $_POST["cpf"];
    $password = $_POST["password"];

    // Certifique-se de que o arquivo CSV existe e é gravável
    $arquivoCSV = "./data/index.csv";
    if (!file_exists($arquivoCSV)) {
        die("Arquivo CSV não encontrado.");
    }

    // Abra o arquivo CSV para escrita
    $arquivo = fopen($arquivoCSV, "a");

    // Escreva os dados do usuário no arquivo CSV
    fputcsv($arquivo, [$username, $fullName, $phone, $cpf, $password]);

    // Feche o arquivo CSV
    fclose($arquivo);

    // Redirecione de volta para a página de login com uma mensagem de sucesso
    $mensagem = "Conta criada com sucesso!";
    header("Location: ../../index.html?mensagem=" . urlencode($mensagem));
    exit;
} else {
    // Se o formulário não foi enviado via POST, redirecione para a página de login
    header("Location: ../../index.html");
    exit;
}
?>
