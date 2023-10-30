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

$comando = $db->prepare('SELECT * FROM musicas WHERE fk_usuarios_us_id = :id');
$comando->execute([":id" => $user['us_id']]);
$medias = $comando->fetchAll(PDO::FETCH_ASSOC);

$num = count($medias);

shuffle($medias);

$musica4 = $medias[0];
$musica5 = $medias[1];
$musica6 = $medias[2];
$musica7 = $medias[3];

$comando = $db->prepare('SELECT nome FROM usuarios where us_id = :id');
$comando->execute([':id' => $musica4['fk_usuarios_us_id']]);
$artista = $comando->fetchAll(PDO::FETCH_ASSOC);
$nome = $artista[0];


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
                        <img class="ft-artista" style="max-height: 100%;
                                                        min-height: 100%;
                                                        max-width: 100%;
                                                        min-height: 100%;" src="<?= $user['user_perfil'] ?>" alt="">
                    </div>
                </div>

                <!-- dados do banner -->

                <div class="col-md-10 col-sm-10">
                    <div class="row" style="margin-top: -60px">
                        <div class="col-md-5">
                            <div class="nomeDoArtista">
                                <p><?= $user['nome'] ?></p>
                            </div>
                        </div>


                        <?php

                        if ($user['nivel_acess'] == 2 || $user['nivel_acess'] == 3) {
                            echo
                            '<div class="col-md-2">

                        </div>

                        <div class="col-md-2">
                            <div class="infosArtista">
                                <p>' . $num . ' Faixas</p>
                            </div>
                        </div>';
                        } ?>
                        <div class="col-md-3">
                            <a href="editPerf.php" style="text-decoration:none">
                                <button class="btn-seguir" class="botaoSeguir" style="margin-bottom: 30px;">
                                    Editar Perfil
                                </button>
                            </a>
                        </div>'
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
            '<a href="list.php?id=' . $user['us_id'] . '"style="text-decoration:none">
            <p style="margin-left:25px; font-size: 24pt; font-weight: bold; color: black;">Faixas</p>
            </a>
            <div class="scrool">
            <div class="quadradinhos">
                <div id="q1" class="quadradinho">
                    <audio id="music-4" src="' . $musica4['caminho'] . '"></audio>
                    <span class="invisible" id="gen-s4">' . $musica4['genero'] . '</span>
                    <img src="' . $musica4['capa'] . '" class="album" alt="Possível álbum a ser colocado">
                    <div class="quad-info" style="vertical-align: bottom;">
                        <div style="margin-top: 63%;">
                            <p id="nome-s4" class="quad-text">' . $musica4['nome'] . '</p>
                            <p id="nomea-s4" class="quad-text2 align-bottom">' . $nome['nome'] . '
                            </p>
                        </div>
                    </div>
                </div>


                <div id="q2" class="quadradinho">
                    <audio id="music-5" src="' . $musica5['caminho'] . '"></audio>
                    <span class="invisible" id="gen-s5">' . $musica5['genero'] . '</span>
                    <img src="' . $musica5['capa'] . '" class="album" alt="Possível álbum a ser colocado">
                    <div class="quad-info" style="vertical-align: bottom;">
                        <div style="margin-top: 63%;">
                            <p id="nome-s5" class="quad-text">' . $musica5['nome'] . '</p>
                            <p id="nomea-s5" class="quad-text2 align-bottom">' . $nome['nome'] . '</p>
                        </div>
                    </div>
                </div>


                <div id="q3" class="quadradinho">
                    <audio id="music-6" src="' . $musica6['caminho'] . '"></audio>
                    <span class="invisible" id="gen-s6">' . $musica6['genero'] . '</span>
                    <img src="' . $musica6['capa'] . '" class="album" alt="Possível álbum a ser colocado">
                    <div class="quad-info" style="vertical-align: bottom;">
                        <div style="margin-top: 63%;">
                            <p id="nome-s6" class="quad-text">' . $musica6['nome'] . '</p>
                            <p id="nomea-s6" class="quad-text2 align-bottom">' . $nome['nome'] . '</p>
                        </div>
                    </div>
                </div>


                <div id="q4" class="quadradinho">
                    <audio id="music-7" src="' . $musica7['caminho'] . '"></audio>
                    <span class="invisible" id="gen-s7">' . $musica7['genero'] . '</span>
                    <img src="' . $musica7['capa'] . '" class="album" alt="Possível álbum a ser colocado">
                    <div class="quad-info" style="vertical-align: bottom;">
                        <div style="margin-top: 63%;">
                            <p id="nome-s7" class="quad-text">' . $musica7['nome'] . '</p>
                            <p id="nomea-s7" class="quad-text2 align-bottom">' . $nome['nome'] . '
                            </p>
                        </div>
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

    var play_gr = $('#play-gr')
    var pause_gr = $('#pause-gr')

    //PLAYER GERAL

    var nomeMusica;
    var nomeAutor;
    var genero;

    $(document).ready(function() {
        var audioElement4 = $('#music-4')[0];
        var audioElement5 = $('#music-5')[0];
        var audioElement6 = $('#music-6')[0];
        var audioElement7 = $('#music-7')[0];

        q1.on('click', playAudio4);
        q2.on('click', playAudio5);
        q3.on('click', playAudio6);
        q4.on('click', playAudio7);

        // AUDIO 4

        function playAudio4() {
            player_geral.removeAttr('class', 'invisible');

            audioElement4.play();
            audioElement5.pause();
            audioElement6.pause();
            audioElement7.pause();


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

            audioElement4.pause();
            audioElement5.pause();
            audioElement6.pause();
            audioElement7.pause();

            play_gr.removeAttr('class', 'invisible');
            pause_gr.attr('class', 'invisible');

            if ($('#nome-s4').text() === $('#nm-musica').text()) {
                play_gr.on('click', playAudio4);
            }
        }

        // AUDIO 5

        function playAudio5() {
            player_geral.removeAttr('class', 'invisible');

            audioElement4.pause();
            audioElement5.play();
            audioElement6.pause();
            audioElement7.pause();


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

            audioElement4.pause();
            audioElement5.pause();
            audioElement6.pause();
            audioElement7.pause();

            play_gr.removeAttr('class', 'invisible');
            pause_gr.attr('class', 'invisible');


            if ($('#nome-s5').text() === $('#nm-musica').text()) {
                play_gr.on('click', playAudio5);
            }
        }

        // AUDIO 6

        function playAudio6() {
            player_geral.removeAttr('class', 'invisible');

            audioElement4.pause();
            audioElement5.pause();
            audioElement6.play();
            audioElement7.pause();


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
            audioElement4.pause();
            audioElement5.pause();
            audioElement6.pause();
            audioElement7.pause();

            play_gr.removeAttr('class', 'invisible');
            pause_gr.attr('class', 'invisible');


            if ($('#nome-s6').text() === $('#nm-musica').text()) {
                play_gr.on('click', playAudio6);
            }
        }


        // AUDIO 7

        function playAudio7() {
            player_geral.removeAttr('class', 'invisible');

            audioElement4.pause();
            audioElement5.pause();
            audioElement6.pause();
            audioElement7.play();


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
            audioElement4.pause();
            audioElement5.pause();
            audioElement6.pause();
            audioElement7.pause();

            play_gr.removeAttr('class', 'invisible');
            pause_gr.attr('class', 'invisible');


            if ($('#nome-s7').text() === $('#nm-musica').text()) {
                play_gr.on('click', playAudio7);
            }
        }
    });
</script>

<?php
include('includes/footer.php');
?>