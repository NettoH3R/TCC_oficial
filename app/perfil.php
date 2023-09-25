<?php

require './vendor/autoload.php';

use Application\DBConnection\MySQLConnection;

$db = new MySQLConnection();

if (!isset($_SESSION['user'])) {
    //pega as info de uma session já iniciada em entrar
    session_start();
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        session_destroy();
        header('location:index.php');
    }

    $descompactar = $_SESSION['user'];
    $user = $descompactar[0];
}

include('includes/noHeader.php');
?>

<div class="container">
    <main class="main" style="padding-top: 0;">

        <!-- BANNER E IMAGEM DE PERFIL -->
        <div class="banner-artista">
            <img src="arquivos/imagensDoSite/textPura.jpg" alt="Banner" class="img-banner">

            <div class="row" style="padding: 0; margin: 0;">

                <div class="col-md-2 col-sm-2" style="overflow: hidden;">
                    <div class="foto-artista">
                        <img class="ft-artista" src="<?= $user['user_capa'] ?>" alt="">
                    </div>
                </div>

                <!-- dados do banner -->

                <div class="col-md-10 col-sm-10">
                    <div class="row" style="margin-top: -60px">
                        <div class="col-md-8">
                            <div class="nomeDoArtista">
                                <p><?= $user['nome'] ?></p>
                            </div>
                        </div>


                        <?php

                        if ($user['nivel_acess'] == 2 || $user['nivel_acess'] == 3) {
                            echo
                            '<div class="col-md-2">
                            <div class="infosArtista">
                                <p>29 Faixas</p>
                            </div>
                        </div>

                        <div class="col-md-2">
                            <div class="infosArtista">
                                <p>4 Albúns</p>
                            </div>
                        </div>';
                        } ?>
                    </div>
                </div>

            </div>
        </div>
        <!-- Parte de baixo rodapé -->
        <div style="height: 100px;">

        </div>

        <?php

        if ($user['nivel_acess'] == 2 || $user['nivel_acess'] == 3) {
            echo
            '<div class="faixas">

            <p style="font-size: 24pt; font-weight: bold; color: black;">Faixas</p>
            <div class="scrool">
                <div class="quadradinhos">
                    <div class="quadradinho">
                        <img src="./arquivos/imagensAlbuns/teste1.png" class="album" alt="Possível álbum a ser colocado">
                    </div>
                    <div class="quadradinho">
                        <img src="./arquivos/imagensAlbuns/teste2.png" class="album" alt="Possível álbum a ser colocado">
                    </div>
                    <div class="quadradinho">
                        <img src="./arquivos/imagensAlbuns/teste3.png" class="album" alt="Possível álbum a ser colocado">
                    </div>
                    <div class="quadradinho">
                        <img src="./arquivos/imagensAlbuns/teste4.png" class="album" alt="Possível álbum a ser colocado">
                    </div>
                </div>
            </div>
        </div>

        <!-- ALBUNS -->

        <div class="faixas">

            <p style="font-size: 24pt; font-weight: bold; color: black;">Albúns</p>
            <div class="scrool">
                <div class="quadradinhos">
                    <div class="quadradinho">
                        <img src="./arquivos/imagensAlbuns/teste1.png" class="album" alt="Possível álbum a ser colocado">
                    </div>
                    <div class="quadradinho">
                        <img src="./arquivos/imagensAlbuns/teste2.png" class="album" alt="Possível álbum a ser colocado">
                    </div>
                    <div class="quadradinho">
                        <img src="./arquivos/imagensAlbuns/teste3.png" class="album" alt="Possível álbum a ser colocado">
                    </div>
                    <div class="quadradinho">
                        <img src="./arquivos/imagensAlbuns/teste4.png" class="album" alt="Possível álbum a ser colocado">
                    </div>
                </div>
            </div>
        </div>';
        } ?>


        <div class="row">
            <div class="col-md-12" style="text-align: center;">
                <form action="perfil.php" method="post">
                    <button class="btn-seguir" type="submit" class="botaoSeguir">
                        Sair da conta
                    </button>
                </form>
            </div>
        </div>
</div>
</div>




<?php
include('includes/footer.php');
?>