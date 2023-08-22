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
                                    <label for="upfile1" class="custom-file-input">
                                        <img class="iconeCamera" id="file_upload" src="./arquivos/imagensInsert/cameraIcon.png" alt="Selecione uma foto para o álbum">
                                        <div class="addFoto">
                                            <p>Adicione Uma Foto</p>
                                        </div>
                                    </label>
                                    <input type="file" id="upfile1" class="real-file-input" accept="image/jpeg, image/png" onchange="readURL(this);">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 ">
                            <input type="text" placeholder="Nome da Faixa" class="nomeDaFaixa"> <br> <br>

                            <select name="" id="mySelect" onchange="changeColor()" class="selectGeneros">
                                <option value="" disabled selected hidden>Gêneros</option>
                                <option value="">Gênero 1</option>
                                <option value="">Gênero 2</option>
                                <option value="">Gênero 3</option>
                            </select> <br>
                        </div>

                        <div class="col-md-4">
                            <div class="imagem-container">
                                <div class="inserirArquivo">
                                    <label for="audioInput" class="custom-file-input2">

                                        <i class="bi bi-play"></i>
                                        
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi btn-play-insert bi-play-fill" viewBox="0 0 16 16">
                                            <path d="m11.596 8.697-6.363 3.692c-.54.313-1.233-.066-1.233-.697V4.308c0-.63.692-1.01 1.233-.696l6.363 3.692a.802.802 0 0 1 0 1.393z" />
                                        </svg>

                                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi btn-pause-insert bi-pause" viewBox="0 0 16 16">
                                            <path d="M6 3.5a.5.5 0 0 1 .5.5v8a.5.5 0 0 1-1 0V4a.5.5 0 0 1 .5-.5zm4 0a.5.5 0 0 1 .5.5v8a.5.5 0 0 1-1 0V4a.5.5 0 0 1 .5-.5z" />
                                        </svg>


                                        <audio id="msc_upload">
                                            <!-- O atributo 'src' será atualizado pela função readMSC -->
                                        </audio>

                                        <img id="upMusic" class="iconeUparArqui" src="./arquivos/imagensInsert/iconeUparArqui.png" alt="Selecione o arquivo da música/projeto musical.">
                                        <div class="addMusica">
                                            <p>Adicione o arquivo de música</p>
                                        </div>
                                    </label>

                                    <input type="file" id="audioInput" class="real-file-input2" name="music" accept="audio/mpeg, audio/wav, audio/mp3" onchange="readMSC(this);">
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
                    <div class="row ">
                        <div class="col-md-12 text-center">
                            <button class="configButton " type="submit">Enviar</button>
                        </div>
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