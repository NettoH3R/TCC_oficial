<?php
require './vendor/autoload.php';

use Application\DBConnection\MySQLConnection;

$db = new MySQLConnection();

$title = "Início";


if (!isset($_SESSION['user'])) {
    //pega as info de uma session já iniciada em entrar
    session_start();

    $descompactar = $_SESSION['user'];
    $user = $descompactar[0];
}


$comando = $db->prepare('SELECT * FROM musicas');
$comando->execute();
$medias = $comando->fetchAll(PDO::FETCH_ASSOC);




$num = count($medias);

include("includes/header.php");

$aleatorio = rand(0, $num - 1);
$musica = $medias[$aleatorio];

$aleatorio = rand(0, $num - 1);
$musica2 = $medias[$aleatorio];

$aleatorio = rand(0, $num - 1);
$musica3 = $medias[$aleatorio];

?>
<div class="container">
    <main class="main">
        <div class="tamanhoCarrosel">
            <div class="corpo">
                <div class="alinhamento-carousel">
                    <div class="carouseu-container">
                        <input type="radio" name="slider" id="item-1" style="display: none;" checked>
                        <input type="radio" name="slider" id="item-2" style="display: none;">
                        <input type="radio" name="slider" id="item-3" style="display: none;">
                        <audio id="music-1" src="<?= $musica['caminho'] ?>"></audio>
                        <audio id="music-2" src="<?= $musica2['caminho'] ?>"></audio>
                        <audio id="music-3" src="<?= $musica3['caminho'] ?>"></audio>
                        <div class="cards">
                            <label class="card" for="item-1" id="song-1">
                                <img class="imgCarousel" src="<?= $musica['capa']; ?>" alt="song">
                            </label>
                            <label class="card" for="item-2" id="song-2">
                                <img class="imgCarousel" src="<?= $musica2['capa']; ?>" alt="song">
                            </label>
                            <label class="card" for="item-3" id="song-3">
                                <img class="imgCarousel" src="<?= $musica3['capa']; ?>" alt="song">
                            </label>
                        </div>
                        <div class="player">
                            <div class="upper-part">
                                <div class="play-icon" onclick="togglePlay()">
                                    <svg width="20" height="20" fill="#2992dc" stroke="#2992dc" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="feather feather-play" viewBox="0 0 24 24">
                                        <defs />
                                        <path d="M5 3l14 9-14 9V3z" />
                                    </svg>
                                </div>
                                <div class="info-area" id="test">
                                    <label class="song-info" id="song-info-1">
                                        <div class="title"><?= $musica['nome'] ?></div>
                                        <div class="sub-line">
                                            <div class="subtitle"><?php $comando = $db->prepare('SELECT nome FROM usuarios where us_id = :id');
                                                                    $comando->execute([':id' => $musica['fk_usuarios_us_id']]);
                                                                    $artista = $comando->fetchAll(PDO::FETCH_ASSOC);
                                                                    $nome = $artista[0];
                                                                    echo $nome['nome'];  ?></div>
                                            <div class="time">4.05</div>
                                        </div>

                                    </label>
                                    <label class="song-info" id="song-info-2">
                                        <div class="title"><?= $musica2['nome'] ?></div>
                                        <div class="sub-line">
                                            <div class="subtitle"><?php $comando = $db->prepare('SELECT nome FROM usuarios where us_id = :id');
                                                                    $comando->execute([':id' => $musica2['fk_usuarios_us_id']]);
                                                                    $artista = $comando->fetchAll(PDO::FETCH_ASSOC);
                                                                    $nome = $artista[0];
                                                                    echo $nome['nome'];  ?></div>
                                            <div class="time">4.05</div>
                                        </div>
                                    </label>

                                    <label class="song-info" id="song-info-3">
                                        <div class="title"><?= $musica3['nome'] ?></div>
                                        <div class="sub-line">
                                            <div class="subtitle"><?php $comando = $db->prepare('SELECT nome FROM usuarios where us_id = :id');
                                                                    $comando->execute([':id' => $musica3['fk_usuarios_us_id']]);
                                                                    $artista = $comando->fetchAll(PDO::FETCH_ASSOC);
                                                                    $nome = $artista[0];
                                                                    echo $nome['nome'];  ?></div>
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
                    <img src="<?php $aleatorio = rand(0, $num - 1);
                                $musica4 = $medias[$aleatorio];
                                echo $musica4['capa']; ?>" class="album" alt="Possível álbum a ser colocado">
                </div>
                <div class="quadradinho">
                    <img src="<?php $aleatorio = rand(0, $num - 1);
                                $musica5 = $medias[$aleatorio];
                                echo $musica5['capa']; ?>" class="album" alt="Possível álbum a ser colocado">
                </div>
                <div class="quadradinho">
                    <img src="<?php $aleatorio = rand(0, $num - 1);
                                $musica6 = $medias[$aleatorio];
                                echo $musica6['capa']; ?>" class="album" alt="Possível álbum a ser colocado">
                </div>
                <div class="quadradinho">
                    <img src="<?php $aleatorio = rand(0, $num - 1);
                                $musica7 = $medias[$aleatorio];
                                echo $musica7['capa']; ?>" class="album" alt="Possível álbum a ser colocado">
                </div>
            </div>
        </div>

        <div class="scrool">
            <div class="quadradinhos">
                <div class="quadradinho">
                    <img src="<?php $aleatorio = rand(0, $num - 1);
                                $musica8 = $medias[$aleatorio];
                                echo $musica8['capa']; ?>" class="album" alt="Possível álbum a ser colocado">
                </div>
                <div class="quadradinho">
                    <img src="<?php $aleatorio = rand(0, $num - 1);
                                $musica9 = $medias[$aleatorio];
                                echo $musica9['capa']; ?>" class="album" alt="Possível álbum a ser colocado">
                </div>
                <div class="quadradinho">
                    <img src="<?php $aleatorio = rand(0, $num - 1);
                                $musica10 = $medias[$aleatorio];
                                echo $musica10['capa']; ?>" class="album" alt="Possível álbum a ser colocado">
                </div>
                <div class="quadradinho">
                    <img src="<?php $aleatorio = rand(0, $num - 1);
                                $musica11 = $medias[$aleatorio];
                                echo $musica11['capa']; ?>" class="album" alt="Possível álbum a ser colocado">
                </div>
            </div>
        </div>

    </main>
</div>

<?php

include('includes/footer.php');
?>