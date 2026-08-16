<!-- processaCadastro.php -->
<?php
/**
 * Controller: Interceptação e Sanitização de Dados
 * Segurança: O uso de filter_input em conjunto com flags de sanitização nativas do PHP
 * previne ataques de XSS e injeção de código, neutralizando tags HTML e caracteres perigosos.
 */

// Validação simples de método HTTP para evitar acesso direto à URL
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: cadastro.html');
    exit;
}

// 1. Extração segura: Escapamento de caracteres especiais para strings
$nome = filter_input(INPUT_POST, 'nome_colab1', FILTER_SANITIZE_SPECIAL_CHARS);
$profissao = filter_input(INPUT_POST, 'prof_colab3', FILTER_SANITIZE_SPECIAL_CHARS);
$experiencia = filter_input(INPUT_POST, 'exp_colab5', FILTER_SANITIZE_SPECIAL_CHARS);

// 2. Extração segura: Tipagem estrita para números (inteiro e float)
$idade = filter_input(INPUT_POST, 'idade_colab2', FILTER_SANITIZE_NUMBER_INT);
$salario = filter_input(INPUT_POST, 'sal_colab4', FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback de Cadastro</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="style.css">
</head>
<body class="w3-light-grey">
    <main class="w3-container form-wrapper">
        <article class="w3-card-4 w3-white form-card w3-padding-16">
            <header class="w3-container w3-center w3-border-bottom w3-padding-bottom">
                <h2 class="w3-text-teal">Cadastro Concluído!</h2>
            </header>

            <section class="w3-container w3-margin-top">
                <h3 class="w3-text-dark-grey w3-medium w3-margin-bottom"><b>Resumo Técnico dos Dados (Sanitizados)</b></h3>
                
                <ul class="w3-ul w3-border w3-round w3-margin-bottom">
                    <li><span class="w3-text-teal"><b>Nome:</b></span> <?= $nome; ?></li>
                    <li><span class="w3-text-teal"><b>Idade:</b></span> <?= $idade; ?> anos</li>
                    <li><span class="w3-text-teal"><b>Profissão:</b></span> <?= $profissao; ?></li>
                    <li><span class="w3-text-teal"><b>Salário Pretendido:</b></span> R$ <?= number_format((float)$salario, 2, ',', '.'); ?></li>
                    <li><span class="w3-text-teal"><b>Experiência:</b></span> <?= nl2br($experiencia); ?></li>
                </ul>
            </section>

            <!-- Bloco de destaque com concatenação natural -->
            <aside class="w3-panel w3-leftbar w3-border-teal w3-pale-green w3-margin">
                <p><i>
                    Excelente iniciativa, <strong><?= $nome; ?></strong>! Identificamos o seu forte interesse na posição de <strong><?= $profissao; ?></strong>. 
                    Nossa equipe técnica na Lojas Brincos e Companhia avaliará atentamente o seu histórico (<em>"<?= $experiencia; ?>"</em>) e daremos um retorno em breve!
                </i></p>
            </aside>

            <footer class="w3-container w3-center w3-margin-top">
                <a href="index.html" class="w3-btn w3-teal w3-round custom-btn">Registrar Novo Colaborador</a>
            </footer>
        </article>
    </main>
</body>
</html>