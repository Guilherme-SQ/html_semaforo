<?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $cor = $_POST['cor'];

            switch ($cor) {
                case 'Vermelho':
                    echo "Pare Imediatamente!";
                    break;
                case 'Verde':
                    echo "Siga em Frente!";
                    break;
                case 'Laranja':
                    echo "Atenção Reduza!";
                    break;
                default:
                    echo "Cor inexistente no semafaro!";
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
    <?php echo $cor;?>
</body>
</html>