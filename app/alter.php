<?php
require './vendor/autoload.php';

use Application\DBConnection\MySQLConnection;

$db = new MySQLConnection();

$title = "Exluir Faixa";

if ($_SERVER['REQUEST_METHOD'] == "POST"):

    $comando = $db->prepare('DELETE FROM musicas WHERE id = :id');
    $comando->execute([':id' => $_POST["id"]]);
    include('includes/noHeader.php');

?>
    <h1 style="text-align: center;">Música exluida com Sucesso</h1>
    <div class="row">
        <div class="col-md-2" style="text-align: center;">
            <a href="perfil.php">
                <button class="btn-seguir" style="background-color:#244bbf">Voltar</button>
            </a>
        </div>
    </div>


<?php endif;



if ($_GET['id'] != NULL) :

    include('includes/noHeader.php');

    $comando = $db->prepare('SELECT * FROM musicas WHERE id = :id');
    $comando->execute([':id' => $_GET["id"]]);
    $medias = $comando->fetchAll(PDO::FETCH_ASSOC);
    $musica5 = $medias[0];

?>
    <div class="container">
        <main class="main">


            <h1 style="text-align: center;">Tem certeza que deseja excluir:</h1>
            <div class="row">
                <div class="col-md-5"></div>
                <div class="col-md-2">
                    <div id="msc" class="quadradinho" style="margin-left:0px;">
                        <audio id="music-5" src="<?= $musica5['caminho'] ?>"></audio>
                        <span class="invisible" id="gen-s5"><?= $musica5['genero'] ?></span>
                        <img src="<?php echo $musica5['capa']; ?>" class="album" alt="Possível álbum a ser colocado">
                        <div class="quad-info" style=" vertical-align: bottom;">
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
                </div>
                <div class="col-md-5"></div>
            </div>

            <form action="alter.php" method="post">
                <input type="hidden" name="id" value="<?= $_GET['id'] ?>">

                <div class="row">
                    <div class="col-md-5"></div>
                    <div class="col-md-2" style="text-align: center;">
                        <button type="submit" class="btn-seguir">SIM</button>
                    </div>
                </div>
            </form>

            <div class="row">
                <div class="col-md-5"></div>
                <div class="col-md-2" style="text-align: center;">
                    <a href="perfil.php">
                        <button class="btn-seguir" style="background-color:#244bbf">NÃO</button>
                    </a>
                </div>
            </div>


        </main>
    </div>
<?php

endif; 
include('includes/footer.php');?>