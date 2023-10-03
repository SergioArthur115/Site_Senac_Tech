<?php
    session_start();
    ?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../estilos/style.css">
    <title>Senac Tech</title>
</head>

<body>
    <section class="cabecalho">
        <div class="cabecalho_menu">
            <div class="cabecalho_menu_logo">
                <a href="www.senacrs.com.br"><img src="../../images/senac_logo.png" alt="Senac logo"
                        title="Senac Tech Logo" class="cabecalho_menu_logo_imagem"></a>
            </div>
            <nav class="cabecalho_menu_nav">
                <a href="../../index.php"><button type="button" class="button">Home</button></a>
                <div class="cabecalho_menu_nav_cursos">
                    <a href="../../paginas/cursos.php"><button type="button" class="button">Cursos</button></a>
                    <div class="cabecalho_menu_nav_subMenu">
                        <a href="../../paginas/cursos/tech_info.php"><button type="button" class="button">Técnico em
                                Informática</button></a>
                        <a href="../../paginas/cursos/tech_dev.php"><button type="button" class="button">Técnico em
                                Desenvolvimento de Sistemas</button></a>
                        <a href="../../paginas/cursos/tech_adm.php"><button type="button" class="button">Técnico em
                                Administração</button></a>
                        <a href="../../paginas/cursos/aprendizagem.php"><button type="button" class="button">Jovem
                                Aprendiz</button></a>
                        <a href="../../paginas/cursos/rs_ti.php"><button type="button" class="button">RS
                                TI</button></a>
                    </div>
                </div>
                <a href="../../paginas/localizacao.php"><button type="button" class="button">Localização</button></a>
                <a href="../../paginas/fale_conosco.php"><button type="button" class="button">Fale Conosco</button></a>
                <a href="../../paginas/cadastro.php"><button type="button" class="button">Cadastrar</button></a>
                <a href="../../paginas/login.php"><button type="button" class="button">Login</button></a>
            </nav>
            <div class="cabecalho_menu_imagens_icones">
                <a href="www.facebook.com.br/senacrs"><img src="../../images/icon_facebook.png" alt="Facebook icon"
                        title="Página do Facebook do Senac"></a>
                <a href="www.instagram.com.br/senacrs"><img src="../../images/icon_instagram.png" alt="Instagram icon"
                        title="Página do Instagram do Senac"></a>
                <a href="www.linkedin.com.br/senacrs"><img src="../../images/icon_linkedin.png" alt="Linkedin icon"
                        title="Página do Linkedin do Senac"></a>
                <a href="www.spotify.com.br/senacrs"><img src="../../images/icon_spotify.png" alt="Spotify icon"
                        title="Página do Spotify do Senac"></a>
                <a href="www.twitter.com.br/senacrs"><img src="../../images/icon_twitter.png" alt="Twitter icon"
                        title="Página do Twitter do Senac"></a>
                <a href="www.youtube.com.br/senacrs"><img src="../../images/icon_youtube.png" alt="Youtube icon"
                        title="Página do Youtube do Senac"></a>
            </div>
        </div>
        <div class="cabecalho_banner">
            <img src="../../images/senac_banner4.jfif" alt="Senac banner" title="Senac Tech Banner"
                class="cabecalho_banner_imagem">
        </div>
        <hr>
    </section>
    <?php

        if (isset($_SESSION['session_id'])) {
            echo 'Bem vindo ' . $_SESSION['session_id'] . ' ao site do Senac Tech <br>';
            echo "<a href='../../index.php?logout'>Logout</a>";
        } else {
            echo "<a href='../../paginas/login.php'>Acessar Sistema</a>;";
        }

        if (isset($_GET['logout'])) {
            session_destroy();
            header("Location: ./index.php");
        }
        ?>
    <section class="conteudo_rsti">
        <div>
            <h1 class="conteudo_rsti_titulo">Seu Futuro Digital</h1><br>
            <h2 class="conteudo_rsti_subtitulo">Capacitamos profissionais para a área de TECNOLOGIA DA INFORMAÇÃO e os
                conectamos às
                oportunidades de trabalho das empresas parceiras</h2>
            <div class="conteudo_rsti_video">
                <iframe src="https://youtu.be/d08Tno8w5wI" title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen class="video"></iframe>
            </div>
            <h3 class="conteudo_rsti_subtitulo">Objetivo</h3>
            <p class="conteudo_rsti_texto">Capacitar pessoas para atuarem no mercado de Tecnologia da Informação do Rio
                Grande do Sul, a fim de
                desenvolver habilidades técnicas necessárias para atuação como Desenvolvedores de Software.</p>
            <h3 class="conteudo_rsti_subtitulo">Nossa Atuação</h3>
            <p class="conteudo_rsti_texto">O Senac-RS atua há 75 anos na capacitação de profissionais para atuação no
                mercado de trabalho.
                Acompanhou a evolução das tecnologias ao longo do tempo, ofertando cursos atualizados e adequados às
                demandas das empresas do setor de comércio de bens, serviços e turismo. Ao longo dos últimos 5 anos,
                mais de 26 mil alunos foram capacitadas pelo Senac-RS, na área de Tecnologia da Informação,
                proporcionando a qualificação do setor.</p>
            <div class="conteudo_rsti_imagem"><img src="../../images/RS_TI.jfif" alt="Senac banner"
                    title="Senac Tech Banner" class="cabecalho_banner_imagem">
            </div>
        </div>
    </section>
    <footer class="rodape">
        <div class="rodapediv">
            <p class="rodape_texto">© Todos Direitos reservados</p>
        </div>
    </footer>
</body>

</html>