<?php

$title = "Inserção de Música";

if ($_SERVER['REQUEST_METHOD'] == 'GET') :
    include('includes/header.php');
?>

    <div class="container">
        <main class="main">
            <form action="insert.php" method="post">
                <label for="">Nome da musica: </label>
                <input type="text"> <br> <br>
                <label>Coloque o arquivo de música: </label>
                <input type="file" name="arquivo"> <br> <br>
                <label for="">Adicione uma Imagem: </label>
                <input type="file" id="imgcapa"> <br> <br>
                <label for="">Gênero</label>
                <select name="" id="">
                    <option value="">Gênero 1</option>
                    <option value="">Gênero 2</option>
                    <option value="">Gênero 3</option>
                </select> <br>
                <label for="">Privacidade da Música:</label> <br>
                <input type="radio" name="rdoPrivac">Privada <br>
                <input type="radio" name="rdoPrivac">Pública <br>
                <button type="submit">Enviar</button>
            </form>
        </main>
    </div>


<?php
endif;
include('includes/footer.php');

?>