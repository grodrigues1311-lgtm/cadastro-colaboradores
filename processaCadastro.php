<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Confirmação de Cadastro</title>
                <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
                </head>
                <body class="w3-light-grey">

                    <div class="w3-container w3-content" style="max-width:600px; margin-top:40px;">
                            <div class="w3-card-4 w3-white w3-padding-large">
                                        <h2 class="w3-center w3-text-green">Dados Recebidos com Sucesso</h2>
                                                    <hr>

                                                                <?php
                                                                            // Recebendo os dados via método POST
                                                                                        $nome = $_POST['nome'];
                                                                                                    $idade = $_POST['idade'];
                                                                                                                $profissao = $_POST['profissao'];
                                                                                                                            $salario = $_POST['salario'];
                                                                                                                                        $experiencia = $_POST['experiencia'];

                                                                                                                                                    // Exibindo as informações uma por linha
                                                                                                                                                                echo "<p><b>Nome Completo:</b> " . htmlspecialchars($nome) . "</p>";
                                                                                                                                                                            echo "<p><b>Idade:</b> " . htmlspecialchars($idade) . " anos</p>";
                                                                                                                                                                                        echo "<p><b>Profissão:</b> " . htmlspecialchars($profissao) . "</p>";
                                                                                                                                                                                                    echo "<p><b>Salário Pretendido:</b> R$ " . number_format($salario, 2, ',', '.') . "</p>";
                                                                                                                                                                                                                echo "<p><b>Experiência Anterior:</b> " . nl2br(htmlspecialchars($experiencia)) . "</p>";

                                                                                                                                                                                                                            echo "<hr>";

                                                                                                                                                                                                                                        // Mensagem personalizada obrigatória
                                                                                                                                                                                                                                                    echo "<div class='w3-panel w3-pale-green w3-leftbar w3-border-green'>";
                                                                                                                                                                                                                                                                echo "<h3>Mensagem Personalizada</h3>";
                                                                                                                                                                                                                                                                            echo "<p>Olá, <b>$nome</b>! Ficamos muito felizes em analisar o seu perfil como <b>$profissao</b>. Vendo sua trajetória descrita como <em>\"$experiencia\"</em>, acreditamos que você tem muito a somar em nossa equipe nas Lojas Brincos e Companhia.</p>";
                                                                                                                                                                                                                                                                                        echo "</div>";
                                                                                                                                                                                                                                                                                                    ?>

                                                                                                                                                                                                                                                                                                                <!-- Botão para retornar ao formulário -->
                                                                                                                                                                                                                                                                                                                            <div class="w3-center w3-margin-top">
                                                                                                                                                                                                                                                                                                                                            <a href="cadastro.html" class="w3-button w3-blue w3-round">Cadastrar Novo Colaborador</a>
                                                                                                                                                                                                                                                                                                                                                        </div>

                                                                                                                                                                                                                                                                                                                                                                </div>
                                                                                                                                                                                                                                                                                                                                                                    </div>

                                                                                                                                                                                                                                                                                                                                                                    </body>
                                                                                                                                                                                                                                                                                                                                                                    </html>
                                                                                                                                                                                                                                                                                                                                                                    