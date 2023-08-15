<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto site figurino</title>
    <link rel="stylesheet" href="estilos/stylegeral.css">
</head>
<body>
    <?php
    include('database/db.php'); 
     // Incluir as telas //
     if (isset($_GET['pagina'])) {
        $pagina = $_GET['pagina'];
    } else {
        $pagina = 'Home';
    }

    switch ($pagina) {
        case 'Home':
            include_once('Home.php');
            break;
        case 'Login':
            include_once('Login.php');
            break;
        case 'Cadastro':
            include_once('Cadastro.php'); 
            break;
        case 'Sobre':
            include_once('Sobre.php'); 
            break;
            case 'Jogos':
                include_once('Jogos.php'); 
                break;
    }
    ?>
    
</body>
</html>