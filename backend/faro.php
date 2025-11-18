<?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $cor = $_POST['cor'];

                $mensagem = "";

            switch ($cor) {
                case "Vermelho":
                    $mensagem = "Pare Imediatamente!";
                    break;
                case "Verde":
                    $mensagem = "Siga em Frente!";
                    break;
                case "Laranja":
                    $mensagem = "Atenção Reduza!";
                    break;
                default:
                    $mensagem = "Cor inexistente no semafaro!";
            }
        }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php echo $mensagem;?>
</body>
</html>