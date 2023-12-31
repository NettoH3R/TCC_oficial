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


$comando = $db->prepare('SELECT * FROM musicas WHERE privacidade = "publico"');
$comando->execute();
$medias = $comando->fetchAll(PDO::FETCH_ASSOC);


// $comando = $db->prepare('SELECT * FROM usuarios');
// $comando->execute();
// $us = $comando->fetchAll(PDO::FETCH_ASSOC);

// var_dump($us);

shuffle($medias);



include("includes/header.php");


$musica = $medias[0];
$musica2 = $medias[1];
$musica3 = $medias[2];
$musica4 = $medias[3];
$musica5 = $medias[4];
$musica6 = $medias[5];
$musica7 = $medias[6];
$musica8 = $medias[7];
$musica9 = $medias[8];
$musica10 = $medias[9];
$musica11 = $medias[10];

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
                                <!-- BOTÕES -->
                                <div id="play-car" class="play-car">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-play-fill" viewBox="0 0 16 16">
                                        <path d="m11.596 8.697-6.363 3.692c-.54.313-1.233-.066-1.233-.697V4.308c0-.63.692-1.01 1.233-.696l6.363 3.692a.802.802 0 0 1 0 1.393z" />
                                    </svg>
                                </div>
                                <div id="pause-car" class="pause-car">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-play-fill" viewBox="0 0 16 16">
                                        <path d="M5.5 3.5A1.5 1.5 0 0 1 7 5v6a1.5 1.5 0 0 1-3 0V5a1.5 1.5 0 0 1 1.5-1.5zm5 0A1.5 1.5 0 0 1 12 5v6a1.5 1.5 0 0 1-3 0V5a1.5 1.5 0 0 1 1.5-1.5z" />
                                    </svg>
                                </div>

                            </label>

                            <label class="card" for="item-2" id="song-2">
                                <!-- BOTÕES -->
                                <div id="play-car2" class="play-car">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-play-fill" viewBox="0 0 16 16">
                                        <path d="m11.596 8.697-6.363 3.692c-.54.313-1.233-.066-1.233-.697V4.308c0-.63.692-1.01 1.233-.696l6.363 3.692a.802.802 0 0 1 0 1.393z" />
                                    </svg>
                                </div>

                                <div id="pause-car2" class="pause-car">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-play-fill" viewBox="0 0 16 16">
                                        <path d="M5.5 3.5A1.5 1.5 0 0 1 7 5v6a1.5 1.5 0 0 1-3 0V5a1.5 1.5 0 0 1 1.5-1.5zm5 0A1.5 1.5 0 0 1 12 5v6a1.5 1.5 0 0 1-3 0V5a1.5 1.5 0 0 1 1.5-1.5z" />
                                    </svg>
                                </div>
                                <img class="imgCarousel" src="<?= $musica2['capa']; ?>" alt="song">
                            </label>


                            <label class="card" for="item-3" id="song-3">
                                <!-- BOTÕES -->
                                <div id="play-car3" class="play-car">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-play-fill" viewBox="0 0 16 16">
                                        <path d="m11.596 8.697-6.363 3.692c-.54.313-1.233-.066-1.233-.697V4.308c0-.63.692-1.01 1.233-.696l6.363 3.692a.802.802 0 0 1 0 1.393z" />
                                    </svg>
                                </div>
                                <div id="pause-car3" class="pause-car">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-play-fill" viewBox="0 0 16 16">
                                        <path d="M5.5 3.5A1.5 1.5 0 0 1 7 5v6a1.5 1.5 0 0 1-3 0V5a1.5 1.5 0 0 1 1.5-1.5zm5 0A1.5 1.5 0 0 1 12 5v6a1.5 1.5 0 0 1-3 0V5a1.5 1.5 0 0 1 1.5-1.5z" />
                                    </svg>
                                </div>
                                <img class="imgCarousel" src="<?= $musica3['capa']; ?>" alt="song">
                            </label>
                        </div>
                        <div class="player">
                            <div class="upper-part">
                                <div class="info-area" id="test">
                                    <label class="song-info" id="song-info-1">
                                        <div class="title"><?= $musica['nome'] ?></div>
                                        <div class="sub-line">
                                            <div class="subtitle"><?php $comando = $db->prepare('SELECT nome FROM usuarios where us_id = :id');
                                                                    $comando->execute([':id' => $musica['fk_usuarios_us_id']]);
                                                                    $artista = $comando->fetchAll(PDO::FETCH_ASSOC);
                                                                    $nome = $artista[0];
                                                                    echo $nome['nome'];  ?></div>
                                        </div>
                                        <span class="invisible" id="nome-s1"><?= $musica['nome'] ?></span>
                                        <span class="invisible" id="nomea-s1"><?= $nome['nome'] ?></span>
                                        <span class="invisible" id="gen-s1"><?= $musica['genero'] ?></span>
                                    </label>


                                    <label class="song-info" id="song-info-2">
                                        <div class="title"><?= $musica2['nome'] ?></div>
                                        <div class="sub-line">
                                            <div class="subtitle"><?php $comando = $db->prepare('SELECT nome FROM usuarios where us_id = :id');
                                                                    $comando->execute([':id' => $musica2['fk_usuarios_us_id']]);
                                                                    $artista = $comando->fetchAll(PDO::FETCH_ASSOC);
                                                                    $nome = $artista[0];
                                                                    echo $nome['nome'];  ?></div>
                                        </div>
                                        <span class="invisible" id="nome-s2"><?= $musica2['nome'] ?></span>
                                        <span class="invisible" id="nomea-s2"><?= $nome['nome'] ?></span>
                                        <span class="invisible" id="gen-s2"><?= $musica2['genero'] ?></span>
                                    </label>


                                    <label class="song-info" id="song-info-3">
                                        <div class="title"><?= $musica3['nome'] ?></div>
                                        <div class="sub-line">
                                            <div class="subtitle"><?php $comando = $db->prepare('SELECT nome FROM usuarios where us_id = :id');
                                                                    $comando->execute([':id' => $musica3['fk_usuarios_us_id']]);
                                                                    $artista = $comando->fetchAll(PDO::FETCH_ASSOC);
                                                                    $nome = $artista[0];
                                                                    echo $nome['nome'];  ?></div>
                                        </div>
                                        <span class="invisible" id="nome-s3"><?= $musica3['nome'] ?></span>
                                        <span class="invisible" id="nomea-s3"><?= $nome['nome'] ?></span>
                                        <span class="invisible" id="gen-s3"><?= $musica3['genero'] ?></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <script>

        </script>

        <!-- MÚSICAS -->


        <div class="scrool">
            <div class="quadradinhos">
                <div id="q1" class="quadradinho">
                    <audio id="music-4" src="<?= $musica4['caminho'] ?>"></audio>
                    <span class="invisible" id="gen-s4"><?= $musica4['genero'] ?></span>
                    <img src="<?php echo $musica4['capa']; ?>" class="album" alt="Possível álbum a ser colocado">
                    <div class="quad-info" style="vertical-align: bottom;">
                        <div style="margin-top: 63%;">
                            <p id="nome-s4" class="quad-text"><?= $musica4['nome'] ?></p>
                            <p id="nomea-s4" class="quad-text2 align-bottom">
                                <?php $comando = $db->prepare('SELECT nome FROM usuarios where us_id = :id');
                                $comando->execute([':id' => $musica4['fk_usuarios_us_id']]);
                                $artista = $comando->fetchAll(PDO::FETCH_ASSOC);
                                $nome = $artista[0];
                                echo $nome['nome'];  ?>
                            </p>
                        </div>
                    </div>
                </div>


                <div id="q2" class="quadradinho">
                    <audio id="music-5" src="<?= $musica5['caminho'] ?>"></audio>
                    <span class="invisible" id="gen-s5"><?= $musica5['genero'] ?></span>
                    <img src="<?php echo $musica5['capa']; ?>" class="album" alt="Possível álbum a ser colocado">
                    <div class="quad-info" style="vertical-align: bottom;">
                        <div style="margin-top: 63%;">
                            <p id="nome-s5" class="quad-text"><?= $musica5['nome'] ?></p>
                            <p id="nomea-s5" class="quad-text2 align-bottom">
                                <?php $comando = $db->prepare('SELECT nome FROM usuarios where us_id = :id');
                                $comando->execute([':id' => $musica5['fk_usuarios_us_id']]);
                                $artista = $comando->fetchAll(PDO::FETCH_ASSOC);
                                $nome = $artista[0];
                                echo $nome['nome'];  ?>
                            </p>
                        </div>
                    </div>
                </div>


                <div id="q3" class="quadradinho">
                    <audio id="music-6" src="<?= $musica6['caminho'] ?>"></audio>
                    <span class="invisible" id="gen-s6"><?= $musica6['genero'] ?></span>
                    <img src="<?php echo $musica6['capa']; ?>" class="album" alt="Possível álbum a ser colocado">
                    <div class="quad-info" style="vertical-align: bottom;">
                        <div style="margin-top: 63%;">
                            <p id="nome-s6" class="quad-text"><?= $musica6['nome'] ?></p>
                            <p id="nomea-s6" class="quad-text2 align-bottom">
                                <?php $comando = $db->prepare('SELECT nome FROM usuarios where us_id = :id');
                                $comando->execute([':id' => $musica6['fk_usuarios_us_id']]);
                                $artista = $comando->fetchAll(PDO::FETCH_ASSOC);
                                $nome = $artista[0];
                                echo $nome['nome'];  ?>
                            </p>
                        </div>
                    </div>
                </div>


                <div id="q4" class="quadradinho">
                    <audio id="music-7" src="<?= $musica7['caminho'] ?>"></audio>
                    <span class="invisible" id="gen-s7"><?= $musica7['genero'] ?></span>
                    <img src="<?php echo $musica7['capa']; ?>" class="album" alt="Possível álbum a ser colocado">
                    <div class="quad-info" style="vertical-align: bottom;">
                        <div style="margin-top: 63%;">
                            <p id="nome-s7" class="quad-text"><?= $musica7['nome'] ?></p>
                            <p id="nomea-s7" class="quad-text2 align-bottom">
                                <?php $comando = $db->prepare('SELECT nome FROM usuarios where us_id = :id');
                                $comando->execute([':id' => $musica7['fk_usuarios_us_id']]);
                                $artista = $comando->fetchAll(PDO::FETCH_ASSOC);
                                $nome = $artista[0];
                                echo $nome['nome'];  ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>






        <div class="scrool">
            <div class="quadradinhos">
                <div id="q5" class="quadradinho">
                    <audio id="music-8" src="<?= $musica8['caminho'] ?>"></audio>
                    <span class="invisible" id="gen-s8"><?= $musica8['genero'] ?></span>
                    <img src="<?php echo $musica8['capa']; ?>" class="album" alt="Possível álbum a ser colocado">
                    <div class="quad-info" style="vertical-align: bottom;">
                        <div style="margin-top: 63%;">
                            <p id="nome-s8" class="quad-text"><?= $musica8['nome'] ?></p>
                            <p id="nomea-s8" class="quad-text2 align-bottom">
                                <?php $comando = $db->prepare('SELECT nome FROM usuarios where us_id = :id');
                                $comando->execute([':id' => $musica8['fk_usuarios_us_id']]);
                                $artista = $comando->fetchAll(PDO::FETCH_ASSOC);
                                $nome = $artista[0];
                                echo $nome['nome'];  ?>
                            </p>
                        </div>
                    </div>
                </div>



                <div id="q6" class="quadradinho">
                    <audio id="music-9" src="<?= $musica9['caminho'] ?>"></audio>
                    <span class="invisible" id="gen-s9"><?= $musica9['genero'] ?></span>
                    <img src="<?php echo $musica9['capa']; ?>" class="album" alt="Possível álbum a ser colocado">
                    <div class="quad-info" style="vertical-align: bottom;">
                        <div style="margin-top: 63%;">
                            <p id="nome-s9" class="quad-text"><?= $musica9['nome'] ?></p>
                            <p id="nomea-s9" class="quad-text2 align-bottom">
                                <?php $comando = $db->prepare('SELECT nome FROM usuarios where us_id = :id');
                                $comando->execute([':id' => $musica9['fk_usuarios_us_id']]);
                                $artista = $comando->fetchAll(PDO::FETCH_ASSOC);
                                $nome = $artista[0];
                                echo $nome['nome'];  ?>
                            </p>
                        </div>
                    </div>
                </div>


                <div id="q7" class="quadradinho">
                    <audio id="music-10" src="<?= $musica10['caminho'] ?>"></audio>
                    <span class="invisible" id="gen-s10"><?= $musica10['genero'] ?></span>
                    <img src="<?php echo $musica10['capa']; ?>" class="album" alt="Possível álbum a ser colocado">
                    <div class="quad-info" style="vertical-align: bottom;">
                        <div style="margin-top: 63%;">
                            <p id="nome-s10" class="quad-text"><?= $musica10['nome'] ?></p>
                            <p id="nomea-s10" class="quad-text2 align-bottom">
                                <?php $comando = $db->prepare('SELECT nome FROM usuarios where us_id = :id');
                                $comando->execute([':id' => $musica10['fk_usuarios_us_id']]);
                                $artista = $comando->fetchAll(PDO::FETCH_ASSOC);
                                $nome = $artista[0];
                                echo $nome['nome'];  ?>
                            </p>
                        </div>
                    </div>
                </div>


                <div id="q8" class="quadradinho">
                    <audio id="music-11" src="<?= $musica11['caminho'] ?>"></audio>
                    <span class="invisible" id="gen-s11"><?= $musica11['genero'] ?></span>
                    <img src="<?php echo $musica11['capa']; ?>" class="album" alt="Possível álbum a ser colocado">
                    <div class="quad-info" style="vertical-align: bottom;">
                        <div style="margin-top: 63%;">
                            <p id="nome-s11" class="quad-text"><?= $musica11['nome'] ?></p>
                            <p id="nomea-s11" class="quad-text2 align-bottom">
                                <?php $comando = $db->prepare('SELECT nome FROM usuarios where us_id = :id');
                                $comando->execute([':id' => $musica11['fk_usuarios_us_id']]);
                                $artista = $comando->fetchAll(PDO::FETCH_ASSOC);
                                $nome = $artista[0];
                                echo $nome['nome'];  ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>
</div>

<!-- PLAYER GERAL -->

<div id="player-geral" class="invisible">
    <div class="container">
        <div class="row">
            <div class="col-md-5" style="padding-top: 1vh; padding-bottom: 1vh;">
                <p id="nm-musica" style="margin: 0; margin-bottom: 2px;"> </p>
                <p id="nm-autor" style="margin: 0; color: #ff8f2d;"> </p>
            </div>


            <div class="col-md-2">
                <div id="play-gr" class="center"> <!-- PLAY BUTTON -->
                    <div class="bolinha-play-btn">
                        <svg class="play-play-gr" xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-play-fill" viewBox="0 0 16 16">
                            <path d="m11.596 8.697-6.363 3.692c-.54.313-1.233-.066-1.233-.697V4.308c0-.63.692-1.01 1.233-.696l6.363 3.692a.802.802 0 0 1 0 1.393z" />
                        </svg>
                    </div>
                </div>
            </div>

            <div class="col-md-2">
                <div id="pause-gr" class="invisible center"> <!-- PAUSE BUTTON -->
                    <div class="bolinha-pause-btn">
                        <svg class="pause-pause-gr" xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-play-fill" viewBox="0 0 16 16">
                            <path d="M5.5 3.5A1.5 1.5 0 0 1 7 5v6a1.5 1.5 0 0 1-3 0V5a1.5 1.5 0 0 1 1.5-1.5zm5 0A1.5 1.5 0 0 1 12 5v6a1.5 1.5 0 0 1-3 0V5a1.5 1.5 0 0 1 1.5-1.5z" />
                        </svg>
                    </div>
                </div>
            </div>

            <div class="col-md-2" style="text-align: center; padding-top: 1vh; padding-bottom: 1vh;">
                <p style="margin: 0; margin-bottom: 2px;"> Gênero:</p>
                <p id="nm-genero" style="margin: 0; color: #ff8f2d;"> </p>
            </div>
        </div>
    </div>
</div>







<script>
    var player_geral = $('#player-geral');

    var q1 = $('#q1');
    var q2 = $('#q2');
    var q3 = $('#q3');
    var q4 = $('#q4');
    var q5 = $('#q5');
    var q6 = $('#q6');
    var q7 = $('#q7');
    var q8 = $('#q8');




    var play_car = $('#play-car');
    var pause_car = $('#pause-car');

    var play_car2 = $('#play-car2');
    var pause_car2 = $('#pause-car2');

    var play_car3 = $('#play-car3');
    var pause_car3 = $('#pause-car3');

    var play_gr = $('#play-gr')
    var pause_gr = $('#pause-gr')

    //PLAYER GERAL

    var nomeMusica;
    var nomeAutor;
    var genero;


    $(document).ready(function() {
        // Obtenha uma referência ao elemento de áudio usando o ID
        var audioElement = $('#music-1')[0];
        var audioElement2 = $('#music-2')[0];
        var audioElement3 = $('#music-3')[0];
        var audioElement4 = $('#music-4')[0];
        var audioElement5 = $('#music-5')[0];
        var audioElement6 = $('#music-6')[0];
        var audioElement7 = $('#music-7')[0];
        var audioElement8 = $('#music-8')[0];
        var audioElement9 = $('#music-9')[0];
        var audioElement10 = $('#music-10')[0];
        var audioElement11 = $('#music-11')[0];




        // Para reproduzir o áudio msc1
        play_car.on('click', playAudio);
        pause_car.on('click', pauseAudio);



        // Para reproduzir o áudio msc2
        play_car2.on('click', playAudio2);
        pause_car2.on('click', pauseAudio2);



        // Para reproduzir o áudio msc3
        play_car3.on('click', playAudio3);
        pause_car3.on('click', pauseAudio3);

        q1.on('click', playAudio4);
        q2.on('click', playAudio5);
        q3.on('click', playAudio6);
        q4.on('click', playAudio7);
        q5.on('click', playAudio8);
        q6.on('click', playAudio9);
        q7.on('click', playAudio10);
        q8.on('click', playAudio11);
        // Para reproduzir no player geral


        // PRIMERA MUSICA CAR
        function playAudio() {
            player_geral.removeAttr('class', 'invisible');

            audioElement.play();
            audioElement2.pause();
            audioElement3.pause();
            audioElement4.pause();
            audioElement5.pause();
            audioElement6.pause();
            audioElement7.pause();
            audioElement8.pause();
            audioElement9.pause();
            audioElement10.pause();
            audioElement11.pause();


            nomeMusica = $('#nome-s1').text();
            nomeAutor = $('#nomea-s1').text();
            genero = $('#gen-s1').text();

            play_car.attr('class', 'pause-car');
            pause_car.attr('class', 'play-car');
            play_gr.attr('class', 'invisible');
            pause_gr.removeAttr('class', 'invisible');

            $('#nm-musica').text(nomeMusica);
            $('#nm-autor').text(nomeAutor);
            $('#nm-genero').text(genero);

            // pause geral
            pause_gr.on('click', pauseAudio);
        }


        // SEGUNDA MUSICA CAR
        function playAudio2() {
            player_geral.removeAttr('class', 'invisible');

            audioElement.pause();
            audioElement2.play();
            audioElement3.pause();
            audioElement4.pause();
            audioElement5.pause();
            audioElement6.pause();
            audioElement7.pause();
            audioElement8.pause();
            audioElement9.pause();
            audioElement10.pause();
            audioElement11.pause();



            nomeMusica = $('#nome-s2').text();
            nomeAutor = $('#nomea-s2').text();
            genero = $('#gen-s2').text();

            play_car2.attr('class', 'pause-car');
            pause_car2.attr('class', 'play-car');
            play_gr.attr('class', 'invisible');
            pause_gr.removeAttr('class', 'invisible');

            $('#nm-musica').text(nomeMusica);
            $('#nm-autor').text(nomeAutor);
            $('#nm-genero').text(genero);

            // pause geral

            pause_gr.on('click', pauseAudio2);

        }

        // TERCEIRA MUSICA CAR
        function playAudio3() {
            player_geral.removeAttr('class', 'invisible');

            audioElement.pause();
            audioElement2.pause();
            audioElement3.play();
            audioElement4.pause();
            audioElement5.pause();
            audioElement6.pause();
            audioElement7.pause();
            audioElement8.pause();
            audioElement9.pause();
            audioElement10.pause();
            audioElement11.pause();


            nomeMusica = $('#nome-s3').text();
            nomeAutor = $('#nomea-s3').text();
            genero = $('#gen-s3').text();

            play_car3.attr('class', 'pause-car');
            pause_car3.attr('class', 'play-car');
            play_gr.attr('class', 'invisible');
            pause_gr.removeAttr('class', 'invisible');

            $('#nm-musica').text(nomeMusica);
            $('#nm-autor').text(nomeAutor);
            $('#nm-genero').text(genero);

            pause_gr.on('click', pauseAudio3);


            // pause geral

            pause_gr.on('click', function() {
                audioElement.pause();
                play_car3.attr('class', 'play-car');
                pause_car3.attr('class', 'pause-car');
                play_gr.removeAttr('class', 'invisible');
                pause_gr.attr('class', 'invisible');
            });
        }


        



        // PAUSES

        function pauseAudio() {
            audioElement.pause();
            audioElement2.pause();
            audioElement3.pause();
            audioElement4.pause();
            audioElement5.pause();
            audioElement6.pause();
            audioElement7.pause();
            audioElement8.pause();
            audioElement9.pause();
            audioElement10.pause();
            audioElement11.pause();


            play_car.attr('class', 'play-car');
            pause_car.attr('class', 'pause-car');
            play_gr.removeAttr('class', 'invisible');
            pause_gr.attr('class', 'invisible');

            if ($('#nome-s1').text() === $('#nm-musica').text()) {
                play_gr.on('click', playAudio);
            }
        }


        function pauseAudio2() {
            audioElement.pause();
            audioElement2.pause();
            audioElement3.pause();
            audioElement4.pause();
            audioElement5.pause();
            audioElement6.pause();
            audioElement7.pause();
            audioElement8.pause();
            audioElement9.pause();
            audioElement10.pause();
            audioElement11.pause();

            play_car2.attr('class', 'play-car');
            pause_car2.attr('class', 'pause-car');
            play_gr.removeAttr('class', 'invisible');
            pause_gr.attr('class', 'invisible');

            if ($('#nome-s2').text() === $('#nm-musica').text()) {
                play_gr.on('click', playAudio2);
            }


        }


        function pauseAudio3() {
            audioElement.pause();
            audioElement2.pause();
            audioElement3.pause();
            audioElement4.pause();
            audioElement5.pause();
            audioElement6.pause();
            audioElement7.pause();
            audioElement8.pause();
            audioElement9.pause();
            audioElement10.pause();
            audioElement11.pause();

            play_car3.attr('class', 'play-car');
            pause_car3.attr('class', 'pause-car');
            play_gr.removeAttr('class', 'invisible');
            pause_gr.attr('class', 'invisible');

            if ($('#nome-s3').text() === $('#nm-musica').text()) {
                play_gr.on('click', playAudio3);
            }
        }

        // AUDIO 4

        function playAudio4() {
            player_geral.removeAttr('class', 'invisible');

            audioElement.pause();
            audioElement2.pause();
            audioElement3.pause();
            audioElement4.play();
            audioElement5.pause();
            audioElement6.pause();
            audioElement7.pause();
            audioElement8.pause();
            audioElement9.pause();
            audioElement10.pause();
            audioElement11.pause();


            nomeMusica = $('#nome-s4').text();
            nomeAutor = $('#nomea-s4').text();
            genero = $('#gen-s4').text();

            play_gr.attr('class', 'invisible');
            pause_gr.removeAttr('class', 'invisible');

            $('#nm-musica').text(nomeMusica);
            $('#nm-autor').text(nomeAutor);
            $('#nm-genero').text(genero);

            // pause geral

            pause_gr.on('click', pauseAudio4);
        }

        function pauseAudio4() {
            audioElement.pause();
            audioElement2.pause();
            audioElement3.pause();
            audioElement4.pause();
            audioElement5.pause();
            audioElement6.pause();
            audioElement7.pause();
            audioElement8.pause();
            audioElement9.pause();
            audioElement10.pause();
            audioElement11.pause();

            play_gr.removeAttr('class', 'invisible');
            pause_gr.attr('class', 'invisible');

            if ($('#nome-s4').text() === $('#nm-musica').text()) {
                play_gr.on('click', playAudio4);
            }
        }

        // AUDIO 5

        function playAudio5() {
            player_geral.removeAttr('class', 'invisible');

            audioElement.pause();
            audioElement2.pause();
            audioElement3.pause();
            audioElement4.pause();
            audioElement5.play();
            audioElement6.pause();
            audioElement7.pause();
            audioElement8.pause();
            audioElement9.pause();
            audioElement10.pause();
            audioElement11.pause();


            nomeMusica = $('#nome-s5').text();
            nomeAutor = $('#nomea-s5').text();
            genero = $('#gen-s5').text();

            play_gr.attr('class', 'invisible');
            pause_gr.removeAttr('class', 'invisible');

            $('#nm-musica').text(nomeMusica);
            $('#nm-autor').text(nomeAutor);
            $('#nm-genero').text(genero);

            // pause geral

            pause_gr.on('click', pauseAudio5);
        }

        function pauseAudio5() {
            audioElement.pause();
            audioElement2.pause();
            audioElement3.pause();
            audioElement4.pause();
            audioElement5.pause();
            audioElement6.pause();
            audioElement7.pause();
            audioElement8.pause();
            audioElement9.pause();
            audioElement10.pause();
            audioElement11.pause();

            play_gr.removeAttr('class', 'invisible');
            pause_gr.attr('class', 'invisible');


            if ($('#nome-s5').text() === $('#nm-musica').text()) {
                play_gr.on('click', playAudio5);
            }
        }

        // AUDIO 6

        function playAudio6() {
            player_geral.removeAttr('class', 'invisible');

            audioElement.pause();
            audioElement2.pause();
            audioElement3.pause();
            audioElement4.pause();
            audioElement5.pause();
            audioElement6.play();
            audioElement7.pause();
            audioElement8.pause();
            audioElement9.pause();
            audioElement10.pause();
            audioElement11.pause();


            nomeMusica = $('#nome-s6').text();
            nomeAutor = $('#nomea-s6').text();
            genero = $('#gen-s6').text();

            play_gr.attr('class', 'invisible');
            pause_gr.removeAttr('class', 'invisible');

            $('#nm-musica').text(nomeMusica);
            $('#nm-autor').text(nomeAutor);
            $('#nm-genero').text(genero);

            // pause geral

            pause_gr.on('click', pauseAudio6);
        }

        function pauseAudio6() {
            audioElement.pause();
            audioElement2.pause();
            audioElement3.pause();
            audioElement4.pause();
            audioElement5.pause();
            audioElement6.pause();
            audioElement7.pause();
            audioElement8.pause();
            audioElement9.pause();
            audioElement10.pause();
            audioElement11.pause();

            play_gr.removeAttr('class', 'invisible');
            pause_gr.attr('class', 'invisible');


            if ($('#nome-s6').text() === $('#nm-musica').text()) {
                play_gr.on('click', playAudio6);
            }
        }


        // AUDIO 7

        function playAudio7() {
            player_geral.removeAttr('class', 'invisible');

            audioElement.pause();
            audioElement2.pause();
            audioElement3.pause();
            audioElement4.pause();
            audioElement5.pause();
            audioElement6.pause();
            audioElement7.play();
            audioElement8.pause();
            audioElement9.pause();
            audioElement10.pause();
            audioElement11.pause();


            nomeMusica = $('#nome-s7').text();
            nomeAutor = $('#nomea-s7').text();
            genero = $('#gen-s7').text();

            play_gr.attr('class', 'invisible');
            pause_gr.removeAttr('class', 'invisible');

            $('#nm-musica').text(nomeMusica);
            $('#nm-autor').text(nomeAutor);
            $('#nm-genero').text(genero);

            // pause geral

            pause_gr.on('click', pauseAudio7);
        }

        function pauseAudio7() {
            audioElement.pause();
            audioElement2.pause();
            audioElement3.pause();
            audioElement4.pause();
            audioElement5.pause();
            audioElement6.pause();
            audioElement7.pause();
            audioElement8.pause();
            audioElement9.pause();
            audioElement10.pause();
            audioElement11.pause();

            play_gr.removeAttr('class', 'invisible');
            pause_gr.attr('class', 'invisible');


            if ($('#nome-s7').text() === $('#nm-musica').text()) {
                play_gr.on('click', playAudio7);
            }
        }

        // AUDIO 7

        function playAudio8() {
            player_geral.removeAttr('class', 'invisible');

            audioElement.pause();
            audioElement2.pause();
            audioElement3.pause();
            audioElement4.pause();
            audioElement5.pause();
            audioElement6.pause();
            audioElement7.pause();
            audioElement8.play();
            audioElement9.pause();
            audioElement10.pause();
            audioElement11.pause();


            nomeMusica = $('#nome-s8').text();
            nomeAutor = $('#nomea-s8').text();
            genero = $('#gen-s8').text();

            play_gr.attr('class', 'invisible');
            pause_gr.removeAttr('class', 'invisible');

            $('#nm-musica').text(nomeMusica);
            $('#nm-autor').text(nomeAutor);
            $('#nm-genero').text(genero);

            // pause geral

            pause_gr.on('click', pauseAudio8);
        }

        function pauseAudio8() {
            audioElement.pause();
            audioElement2.pause();
            audioElement3.pause();
            audioElement4.pause();
            audioElement5.pause();
            audioElement6.pause();
            audioElement7.pause();
            audioElement8.pause();
            audioElement9.pause();
            audioElement10.pause();
            audioElement11.pause();

            play_gr.removeAttr('class', 'invisible');
            pause_gr.attr('class', 'invisible');


            if ($('#nome-s8').text() === $('#nm-musica').text()) {
                play_gr.on('click', playAudio8);
            }
        }

        // AUDIO 9

        function playAudio9() {
            player_geral.removeAttr('class', 'invisible');

            audioElement.pause();
            audioElement2.pause();
            audioElement3.pause();
            audioElement4.pause();
            audioElement5.pause();
            audioElement6.pause();
            audioElement7.pause();
            audioElement8.pause();
            audioElement9.play();
            audioElement10.pause();
            audioElement11.pause();


            nomeMusica = $('#nome-s9').text();
            nomeAutor = $('#nomea-s9').text();
            genero = $('#gen-s9').text();

            play_gr.attr('class', 'invisible');
            pause_gr.removeAttr('class', 'invisible');

            $('#nm-musica').text(nomeMusica);
            $('#nm-autor').text(nomeAutor);
            $('#nm-genero').text(genero);

            // pause geral

            pause_gr.on('click', pauseAudio9);
        }

        function pauseAudio9() {
            audioElement.pause();
            audioElement2.pause();
            audioElement3.pause();
            audioElement4.pause();
            audioElement5.pause();
            audioElement6.pause();
            audioElement7.pause();
            audioElement8.pause();
            audioElement9.pause();
            audioElement10.pause();
            audioElement11.pause();

            play_gr.removeAttr('class', 'invisible');
            pause_gr.attr('class', 'invisible');


            if ($('#nome-s9').text() === $('#nm-musica').text()) {
                play_gr.on('click', playAudio9);
            }
        }

        // AUDIO 10

        function playAudio10() {
            player_geral.removeAttr('class', 'invisible');

            audioElement.pause();
            audioElement2.pause();
            audioElement3.pause();
            audioElement4.pause();
            audioElement5.pause();
            audioElement6.pause();
            audioElement7.pause();
            audioElement8.pause();
            audioElement9.pause();
            audioElement10.play();
            audioElement11.pause();

            nomeMusica = $('#nome-s10').text();
            nomeAutor = $('#nomea-s10').text();
            genero = $('#gen-s10').text();

            play_gr.attr('class', 'invisible');
            pause_gr.removeAttr('class', 'invisible');

            $('#nm-musica').text(nomeMusica);
            $('#nm-autor').text(nomeAutor);
            $('#nm-genero').text(genero);

            // pause geral

            pause_gr.on('click', pauseAudio10);
        }

        function pauseAudio10() {
            audioElement.pause();
            audioElement2.pause();
            audioElement3.pause();
            audioElement4.pause();
            audioElement5.pause();
            audioElement6.pause();
            audioElement7.pause();
            audioElement8.pause();
            audioElement9.pause();
            audioElement10.pause();
            audioElement11.pause();

            play_gr.removeAttr('class', 'invisible');
            pause_gr.attr('class', 'invisible');


            if ($('#nome-s10').text() === $('#nm-musica').text()) {
                play_gr.on('click', playAudio10);
            }
        }

                // AUDIO 11

                function playAudio11() {
            player_geral.removeAttr('class', 'invisible');

            audioElement.pause();
            audioElement2.pause();
            audioElement3.pause();
            audioElement4.pause();
            audioElement5.pause();
            audioElement6.pause();
            audioElement7.pause();
            audioElement8.pause();
            audioElement9.pause();
            audioElement10.pause();
            audioElement11.play();


            nomeMusica = $('#nome-s11').text();
            nomeAutor = $('#nomea-s11').text();
            genero = $('#gen-s11').text();

            play_gr.attr('class', 'invisible');
            pause_gr.removeAttr('class', 'invisible');

            $('#nm-musica').text(nomeMusica);
            $('#nm-autor').text(nomeAutor);
            $('#nm-genero').text(genero);

            // pause geral

            pause_gr.on('click', pauseAudio11);
        }

        function pauseAudio11() {
            audioElement.pause();
            audioElement2.pause();
            audioElement3.pause();
            audioElement4.pause();
            audioElement5.pause();
            audioElement6.pause();
            audioElement7.pause();
            audioElement8.pause();
            audioElement9.pause();
            audioElement10.pause();
            audioElement11.pause();

            play_gr.removeAttr('class', 'invisible');
            pause_gr.attr('class', 'invisible');


            if ($('#nome-s11').text() === $('#nm-musica').text()) {
                play_gr.on('click', playAudio11);
            }
        }
    });
</script>



<?php
include('includes/footer.php');
?>