<?php

$title = "Inserção de Música";

if ($_SERVER['REQUEST_METHOD'] == 'GET') :
    include('includes/header.php');
?>

    <div class="container">

        <main class="main">

            <div class="insert">


                <form action="insert.php" method="post">
                    <div class="inserirFoto">
                        <label for="file-input" class="custom-file-input">
                            <img class="iconeCamera" src="./arquivos/imagensInsert/iconeCamera.png" alt="Selecione uma imagem">
                        </label>
                        <input type="file" id="file-input" class="real-file-input">
                    </div>
                    <label for=""></label>
                    <input type="text" placeholder="Nome da Faixa"> <br> <br>
                    <select name="" id="">
                        <option value="" disabled selected>Gêneros</option>
                        <option value="">Gênero 1</option>
                        <option value="">Gênero 2</option>
                        <option value="">Gênero 3</option>
                    </select> <br>
                    <label>Coloque o arquivo de música: </label>
                    <input type="file" name="arquivo"> <br> <br>
                    <label for="">Privacidade da Música:</label> <br>
                    <input type="radio" name="rdoPrivac">Privada <br>
                    <input type="radio" name="rdoPrivac">Pública <br>
                    <textarea name="" id="" cols="30" rows="10" placeholder="Descrição"></textarea><br>
                    <button type="submit">Enviar</button>
                </form>
            </div>
        </main>
    </div>


<?php
endif;
include('includes/footer.php');

?>