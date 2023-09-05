<?php
$title = 'Entrar';
include('includes/noHeader.php');
?>
<div class="container">
    <main class="main" style="width: 100%; height: 85vh;">
        <div class="row">
            <div class="col-md-2">

            </div>

            <!-- IMAGEM DE FUNDO -->

            <div class="col-md-8 backImage">
                <div class="row">


                    <!-- PRIMEIRA METADE -->
                    <div class="col-md-6 quadradoEntrar">
                        <img src="/arquivos/imagensDoSite/logoEntrar.png" alt="" class="logoEntrar">
                    </div>

                    <!-- SEGUNDA METADE -->
                    <div class="col-md-6 quadrado2Entrar">
                        <form action="" method="post">
                        <input name="nome" type="text" placeholder="Nome ou E-mail" class="nomeDaFaixa" style="margin-bottom: 0px;" required> 
                        <input name="nome" type="text" placeholder="Senha" class="nomeDaFaixa" required>
                        </form>
                    </div>

                </div>
            </div>

            <div class="col-md-2">

            </div>
        </div>
    </main>
</div>

<div class="container">
    <footer class="footer">
        <h4 class="footerConfig">&copy2023 | UnderSounds | Todos os direitos reservados.</h4>
    </footer>
</div>

</body>

</html>