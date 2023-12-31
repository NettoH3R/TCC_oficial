<?php
$comando = $db->prepare('SELECT * FROM generos');
$comando->execute();
$generos = $comando->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="pt-br">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script src="includes/js/functions.js"></script>

    <link rel="icon" type="image/jpg" href="arquivos/imagensDoSite/logo_1finalizada.png" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="includes/css/style.css">

    <style>
        .nav-link {
            color: white;
            font-weight: bolder;
        }

        .carousel-caption {
            color: black;
        }

        .nav-link:hover {
            color: #888888;
        }

        .backImage {
            background-image: url('arquivos/imagensDoSite/texturaofc.jpg');
            background-repeat: repeat;
            background-blend-mode: multiply;
        }

        .logoEntrar {
            width: 100%;
            height: 100%;
        }
    </style>

</head>

<body>
    <div class="container">
        <main>
            <!-- Menu -->
            <nav class="navbar navbar-expand-lg" style="background-color: #244bbf; margin-top: 10px;">
                <div class="container-fluid">
                    <a class="navbar-brand" style="font-weight: bolder; color: white; cursor:default" href="index.php"><img src="arquivos/imagensDoSite/logo_minimalista.png" width="90px" height="50px" alt="Logo do nosso site de uma maneira mais simples"></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="index.php">Início</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Gêneros
                                </a>
                                <ul class="dropdown-menu">
                                    <?php
                                    foreach ($generos as $g) {
                                        echo '<li><a class="dropdown-item" href="genero.php?genero=\"' . $g['gn_nome'] . '\" ">' . $g['gn_nome'] . '</a></li>';
                                    }
                                    ?>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="sobre.php">Sobre</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="https://undersoundsofc.blogspot.com/">Blog</a>
                            </li>
                        </ul>
                        <form action="list.php" method="post" class="d-flex" role="search">
                            <input class="form-control me-2" name="search" type="search" placeholder="Procure a música" aria-label="Search">
                            <button class="btn btn-outline-light" type="submit">Pesquisar</button>
                        </form>
                    </div>
                </div>
            </nav>
    </div>