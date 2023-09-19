<?php
require './vendor/autoload.php';

use Application\DBConnection\MySQLConnection;

$db = new MySQLConnection();

$title = "Início";

$comando = $db->prepare('SELECT * FROM usuarios');
$comando->execute();
$users = $comando->fetchAll(PDO::FETCH_ASSOC);

session_start();



$comando = $db->prepare('SELECT * FROM musicas');
$comando->execute();
$medias = $comando->fetchAll(PDO::FETCH_ASSOC);

$num = count($medias);

include("includes/header.php");

?>

<div class="container">
    <main class="main">
        <div class="tamanhoCarrosel">
            <div class="corpo">
                <div class="alinhamento-carousel">
                    <div class="carouseu-container">
                        <input type="radio" name="slider" id="item-1" style="display: none;" checked display>
                        <input type="radio" name="slider" id="item-2" style="display: none;">
                        <input type="radio" name="slider" id="item-3" style="display: none;">
                        <div class="cards">
                            <label class="card" for="item-1" id="song-1">
                                <img class="imgCarousel" src="<?php $aleatorio = rand(0,$num - 1); $musica = $medias[$aleatorio];  echo $musica['capa']; ?>" alt="song">
                            </label>
                            <label class="card" for="item-2" id="song-2">
                                <img class="imgCarousel" src="<?php $aleatorio = rand(0,$num - 1); $musica2 = $medias[$aleatorio];  echo $musica2['capa']; ?>" alt="song">
                            </label>
                            <label class="card" for="item-3" id="song-3">
                                <img class="imgCarousel" src="<?php $aleatorio = rand(0,$num - 1); $musica3 = $medias[$aleatorio];  echo $musica3['capa']; ?>" alt="song">
                            </label>
                        </div>
                        <div class="player">
                            <div class="upper-part">
                                <div class="play-icon">
                                    <svg width="20" height="20" fill="#2992dc" stroke="#2992dc" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="feather feather-play" viewBox="0 0 24 24">
                                        <defs />
                                        <path d="M5 3l14 9-14 9V3z"/>
                                    </svg>
                                </div>
                                <div class="info-area" id="test">
                                    <label class="song-info" id="song-info-1">
                                        <div class="title"><?= $musica['nome'] ?></div>
                                        <div class="sub-line">
                                            <div class="subtitle">Balthazar</div>
                                            <div class="time">4.05</div>
                                        </div>
                                    </label>
                                    <label class="song-info" id="song-info-2">
                                        <div class="title"><?= $musica2['nome'] ?></div>
                                        <div class="sub-line">
                                            <div class="subtitle">Moderator</div>
                                            <div class="time">4.05</div>
                                        </div>
                                    </label>
                                    <label class="song-info" id="song-info-3">
                                        <div class="title"><?= $musica3['nome'] ?></div>
                                        <div class="sub-line">
                                            <div class="subtitle">Otzeki</div>
                                            <div class="time">4.05</div>
                                        </div>
                                    </label>
                                </div>
                            </div>
                            <div class="progress-bar">
                                <span class="progress"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- MÚSICAS -->


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

        <div class="scrool">
            <div class="quadradinhos">
                <div class="quadradinho">
                    <img src="./arquivos/imagensAlbuns/teste5.png" class="album" alt="Possível álbum a ser colocado">
                </div>
                <div class="quadradinho">
                    <img src="./arquivos/imagensAlbuns/teste6.png" class="album" alt="Possível álbum a ser colocado">
                </div>
                <div class="quadradinho">
                    <img src="./arquivos/imagensAlbuns/teste1.png" class="album" alt="Possível álbum a ser colocado">
                </div>
                <div class="quadradinho">
                    <img src="./arquivos/imagensAlbuns/teste4.png" class="album" alt="Possível álbum a ser colocado">
                </div>
            </div>
        </div>

    </main>
</div>

<?php

include('includes/footer.php');
?>