<?php
$title = 'Cadastre-se';
include('includes/noHeader.php');
?>
<div class="container">
<main class="main" style="width: 100%;">
        <div class="row">
            <div class="col-md-1 col-sm-1">

            </div>

            <!-- IMAGEM DE FUNDO -->

            <div class="col-md-10 backImage col-sm-10">
                <div class="row">


                    <!-- PRIMEIRA METADE -->
                    <div class="col-md-6 quadradoEntrar col-sm-12">
                        <img src="/arquivos/imagensDoSite/logoEntrar.png" alt="" class="logoEntrar">
                    </div>

                    <!-- SEGUNDA METADE -->
                    <div class="col-md-6 quadrado2Entrar col-sm-12">

                        <h2 style="padding-top: 5%; font-size: 24pt; text-align: center; color: white; font-weight: bold;">Bem-Vindo!</h2>

                        <form action="" method="post">
                        <input name="nome" type="text" placeholder="Nome de Usuário" class="nomeDaFaixa" style=" width:80% ;  margin-top: 5%; margin-left: 10%; margin-right: 10%;" required> 
                        <input name="nome" type="" placeholder="E-mail" class="nomeDaFaixa" style=" width:80% ;  margin-top: 5%; margin-left: 10%; margin-right: 10%;" required> 
                        <input name="nome" type="password" placeholder="Senha" class="nomeDaFaixa" style=" width:80% ;  margin-top: 5%; margin-left: 10%; margin-right: 10%;" required>
                        <input name="nome" type="password" placeholder="Confirme a Senha" class="nomeDaFaixa" style=" width:80% ;  margin-top: 5%; margin-left: 10%; margin-right: 10%;" required>
                        <button type="submit" class="bnt-entrar-entrar">Cadastre-se</button>
                        </form>

                        <p style="text-align: center; color: white; font-size: 14pt; margin-top: 2%;">Já tem uma conta UnderSounds?</p>
                        <p style="text-align: center; color: white; font-size: 14pt; margin-top: -4%;"><a class="sublinhado" href="entrar.php">ENTRE COM SUA CONTA</a></p>
                    </div>

                </div>
            </div>

            <div class="col-md-1 col-sm-1">

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