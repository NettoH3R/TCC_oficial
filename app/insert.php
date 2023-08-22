<?php

$title = "Inserção de Música";

if ($_SERVER['REQUEST_METHOD'] == 'GET') :
    include('includes/header.php');
?>

    <div class="container">

        <main class="main">

            <div class="insert">


                <form id="myForm" action="insert.php" method="POST" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="imagem-container">
                                <div class="inserirFoto">
                                    <label for="upfile1" class="custom-file-input">
                                        <img class="iconeCamera" id="file_upload" src="./arquivos/imagensInsert/cameraIcon.png" alt="Selecione uma foto para o álbum">
                                        <div class="addFoto">
                                            <p>Adicione Uma Foto</p>
                                        </div>
                                        <input name="img" type="file" id="upfile1" class="real-file-input" accept="image/jpeg, image/png" onchange="readURL(this);" required>
                                    </label>
                                </div>

                            </div>
                        </div>

                        <div class="col-md-4 ">
                            <input type="text" placeholder="Nome da Faixa" class="nomeDaFaixa"> <br> <br>

                            <select name="genero" id="mySelect" onchange="changeColor()" class="selectGeneros" required>
                                <option value="" disabled selected hidden>Gêneros</option>
                                <option value="Rock">Rock</option>
                                <option value="Rap">Rap</option>
                                <option value="Sertanejo">Sertanejo</option>
                            </select> <br>
                        </div>

                        <div class="col-md-4">
                            <div class="imagem-container">
                                <div class="inserirArquivo">
                                    <div class="custom-file-input2">


                                        <div id="btn-play" class="btn-pause-insert">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-play-fill" viewBox="0 0 16 16">
                                                <path d="m11.596 8.697-6.363 3.692c-.54.313-1.233-.066-1.233-.697V4.308c0-.63.692-1.01 1.233-.696l6.363 3.692a.802.802 0 0 1 0 1.393z" />
                                            </svg>
                                        </div>

                                        <div id="btn-pause" class="btn-pause-insert">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-pause-fill" viewBox="0 0 16 16">
                                                <path d="M5.5 3.5A1.5 1.5 0 0 1 7 5v6a1.5 1.5 0 0 1-3 0V5a1.5 1.5 0 0 1 1.5-1.5zm5 0A1.5 1.5 0 0 1 12 5v6a1.5 1.5 0 0 1-3 0V5a1.5 1.5 0 0 1 1.5-1.5z" />
                                            </svg>
                                        </div>


                                        <audio id="msc_upload">
                                            <!-- O atributo 'src' será atualizado pela função readMSC -->
                                        </audio>

                                        <label for="audioInput">
                                            <img id="upMusic" class="iconeUparArqui" src="./arquivos/imagensInsert/iconeUparArqui.png" alt="Selecione o arquivo da música/projeto musical.">

                                            <div class="addMusica">
                                                <p>Adicione o arquivo de música</p>
                                            </div>
                                        </label>

                                    </div>
                                    <input type="file" id="audioInput" class="real-file-input2" name="music" accept="audio/mpeg, audio/wav, audio/mp3" onchange="readMSC(this);" required>
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
                                <input type="radio" name="rdoPrivac" value="public" required>Privada
                                <input type="radio" name="rdoPrivac" value="private">Pública
                            </div>
                        </div>
                        <div class="col-md-8">
                            <textarea name="descricao" id="" class="descricao" placeholder="Descrição" style="resize: none;"></textarea><br>
                        </div>
                    </div>
                    <div class="row ">
                        <div class="col-md-12 text-center">
                            <button id="submitButton" class="configButton " type="submit">Enviar</button>
                        </div>
                    </div>
                </form>

                <!-- MENSAGEM DE FALTA DE PREENCHIMENTO -->

                <div id="warningMessage">Preencha todos os campos obrigatórios: Foto, Nome, Gênero, Arquivo e Privacidade.</div>

                <div id="successMessage">Formulário enviado com sucesso!</div>

                <script>
                    document.addEventListener("DOMContentLoaded", function() {
                        const form = document.getElementById("myForm");
                        const submitButton = document.getElementById("submitButton");
                        const warningMessage = document.getElementById("warningMessage");

                        submitButton.addEventListener("click", function(event) {
                            const requiredInputs = form.querySelectorAll("[required]");
                            let missingFields = [];

                            for (const input of requiredInputs) {
                                if (!input.value.trim()) {
                                    missingFields.push(input); // Adiciona o campo à lista
                                }
                            }

                            if (missingFields.length > 0) {
                                event.preventDefault(); // Impede o envio do formulário
                                warningMessage.style.display = "block"; // Exibe a mensagem de aviso
                                setTimeout(function() {
                                    warningMessage.style.display = "none"; // Oculta a mensagem após alguns segundos
                                }, 3000); // Oculta após 3 segundos (ajuste conforme necessário)
                            }
                        });
                    });
                </script>
        </main>
    </div>


<?php
endif;
include('includes/footer.php');


var_dump($_FILES['music']);
echo "<br>" . "<br>";
var_dump($_FILES['img']);
echo "<br>" . "<br>";
var_dump($_POST);



?>