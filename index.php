<?php 
    ini_set('display_errors', '1');
    ini_set('display_startup_errors', '1');
    error_reporting(E_ALL & ~E_NOTICE);
    $nome = $_GET["name"];
    $complimento = $_GET["compliment"];
    $testo = 'sai che sei un vero ';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
</head>
<body>
    <h1>Ciao mi chiamo <?php echo $nome ?></h1>
    <?php 
        if ($complimento == 'bastard') {
            $complimento = '***';
            echo $complimento;
        } else {
            var_dump($complimento);
        }
    ?>
    <p> 
        <?php 
            echo $testo; 
            echo $complimento.': e questa stringa è lunga'.' '.strlen($testo .= $complimento).' '.'caratteri'; 
        ?>  
    </p>
</body>
</html>