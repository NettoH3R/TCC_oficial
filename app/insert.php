<?php

$title = "Inserção de Música";

if ($_SERVER['REQUEST_METHOD'] == 'GET') :
    include('includes/header.php');
?>

    <div class="container">

        <main class="main">

            <div class="insert">


                <form action="insert.php" method="post">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="inserirFoto">
                                <label for="file-input" class="custom-file-input">
                                    <img class="iconeCamera" src="./arquivos/imagensInsert/iconeCamera.png" alt="Selecione uma foto para o álbum">
                                </label>
                                <input type="file" id="file-input" class="real-file-input" accept="image/jpeg, image/png">
                            </div>
                        </div>

                        <div class="col-md-4">
                            <input type="text" placeholder="Nome da Faixa"> <br> <br>

                            <select name="" id="">
                                <option value="" disabled selected>Gêneros</option>
                                <option value="">Gênero 1</option>
                                <option value="">Gênero 2</option>
                                <option value="">Gênero 3</option>
                            </select> <br>
                        </div>

                        <div class="col-md-4">
                            <div class="inserirArquivo">
                                <label for="file-input2" class="custom-file-input2">
                                    <img class="iconeUparArqui" src="./arquivos/imagensInsert/iconeUparArqui.png" alt="Selecione o arquivo da música/projeto musical.">
                                </label>
                                <input type="file" id="file-input2" class="real-file-input2" accept="audio/mpeg, audio/wav, audio/mp3">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <label for="">Privacidade da Música:</label> <br>
                                <input type="radio" name="rdoPrivac">Privada <br>
                                <input type="radio" name="rdoPrivac">Pública <br>
                            </div>
                            <div class="col-md-6">
                                <textarea name="" id="" cols="60" rows="9"  placeholder="Descrição" style="resize: none;"></textarea><br>
                            </div>
                        </div>

                        <button type="submit">Enviar</button>
                </form>
            </div>
        </main>
    </div>


<?php
endif;
include('includes/footer.php');

?>