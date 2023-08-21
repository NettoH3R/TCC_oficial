<?php

$title = "Inserção de Música";

if ($_SERVER['REQUEST_METHOD'] == 'GET') :
    include('includes/header.php');
?>

    <div class="container">

        <main class="main">

            <div class="insert">


                <form action="insert.php" method="POST" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="imagem-container">
                                <div class="inserirFoto">
                                    <label for="upfile" class="custom-file-input">
                                        <img class="iconeCamera" id="file_upload" src="./arquivos/imagensInsert/cameraIcon.png" alt="Selecione uma foto para o álbum">
                                        <div class="addFoto">
                                            <p>Adicione Uma Foto</p>
                                        </div>
                                    </label>
                                    <input type="file" id="upfile" class="real-file-input" accept="image/jpeg, image/png" onchange="readURL(this);">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 ">
                            <input type="text" placeholder="Nome da Faixa" class="nomeDaFaixa"> <br> <br>

                            <select name="" id="" class="selectGeneros">
                                <option value="" disabled selected>Gêneros</option>
                                <option value="">Gênero 1</option>
                                <option value="">Gênero 2</option>
                                <option value="">Gênero 3</option>
                            </select> <br>
                        </div>

                        <div class="col-md-4">
                            <div class="imagem-container">
                                <div class="inserirArquivo">
                                    <label for="file-input2" class="custom-file-input2">
                                        <img class="iconeUparArqui" src="./arquivos/imagensInsert/iconeUparArqui.png" alt="Selecione o arquivo da música/projeto musical.">
                                    </label>
                                    <div class="addMusica">
                                            <p>Adicione o arquivo de música</p>
                                        </div>
                                    <input type="file" id="file-input2" class="real-file-input2" name="music" accept="audio/mpeg, audio/wav, audio/mp3">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row rowEspacinho">
                        <div class="col-md-4">
                            <div class="tituloSelecione">
                                <label for="">Privacidade da Música:</label>
                            </div>
                            <div class="inputRadio">
                                <input type="radio" name="rdoPrivac">Privada
                                <input type="radio" name="rdoPrivac">Pública
                            </div>
                        </div>
                        <div class="col-md-8">
                            <textarea name="" id="" class="descricao" placeholder="Descrição" style="resize: none;"></textarea><br>
                        </div>
                    </div>
                    <div>
                        <button class="configButton" type="submit">Enviar</button>
                    </div>
                </form>
            </div>
        </main>
    </div>


<?php
endif;
include('includes/footer.php');


var_dump($_FILES['music']);


?>