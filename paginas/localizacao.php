<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../estilos/style.css">
    <title>Senac Tech</title>
</head>

<body>
    <section class="cabecalho">
        <div class="cabecalho_menu">
            <div class="cabecalho_menu_logo">
                <a href="www.senacrs.com.br"><img src="../images/senac_logo.png" alt="Senac logo"
                        title="Senac Tech Logo" class="cabecalho_menu_logo_imagem"></a>
            </div>
            <nav class="cabecalho_menu_nav">
                <a href="../index.php"><button type="button" class="button">Home</button></a>
                <div class="cabecalho_menu_nav_cursos">
                    <a href="../paginas/cursos.php"><button type="button" class="button">Cursos</button></a>
                    <div class="cabecalho_menu_nav_subMenu">
                        <a href="../paginas/cursos/tech_info.php"><button type="button" class="button">Técnico em
                                Informática</button></a>
                        <a href="../paginas/cursos/tech_dev.php"><button type="button" class="button">Técnico em
                                Desenvolvimento de Sistemas</button></a>
                        <a href="../paginas/cursos/tech_adm.php"><button type="button" class="button">Técnico em
                                Administração</button></a>
                        <a href="../paginas/cursos/aprendizagem.php"><button type="button" class="button">Jovem
                                Aprendiz</button></a>
                        <a href="../paginas/cursos/rs_ti.php"><button type="button" class="button">RS TI</button></a>
                    </div>
                </div>
                <a href="../paginas/localizacao.php"><button type="button" class="button">Localização</button></a>
                <a href="../paginas/fale_conosco.php"><button type="button" class="button">Fale Conosco</button></a>
                <a href="../paginas/cadastro.php"><button type="button" class="button">Cadastrar</button></a>
                <a href="../paginas/login.php"><button type="button" class="button">Login</button></a>
            </nav>
            <div class="cabecalho_menu_imagens_icones">
                <a href="www.facebook.com.br/senacrs"><img src="../images/icon_facebook.png" alt="Facebook icon"
                        title="Página do Facebook do Senac"></a>
                <a href="www.instagram.com.br/senacrs"><img src="../images/icon_instagram.png" alt="Instagram icon"
                        title="Página do Instagram do Senac"></a>
                <a href="www.linkedin.com.br/senacrs"><img src="../images/icon_linkedin.png" alt="Linkedin icon"
                        title="Página do Linkedin do Senac"></a>
                <a href="www.spotify.com.br/senacrs"><img src="../images/icon_spotify.png" alt="Spotify icon"
                        title="Página do Spotify do Senac"></a>
                <a href="www.twitter.com.br/senacrs"><img src="../images/icon_twitter.png" alt="Twitter icon"
                        title="Página do Twitter do Senac"></a>
                <a href="www.youtube.com.br/senacrs"><img src="../images/icon_youtube.png" alt="Youtube icon"
                        title="Página do Youtube do Senac"></a>
            </div>
        </div>
        <div class="cabecalho_banner">
            <img src="../images/senac_banner4.jfif" alt="Senac banner" title="Senac Tech Banner"
                class="cabecalho_banner_imagem">
        </div>
        <hr>
    </section>
    <?php

        if (isset($_SESSION['session_id'])) {
            echo 'Bem vindo ' . $_SESSION['session_id'] . ' ao site do Senac Tech <br>';
            echo "<a href='../index.php?logout'>Logout</a>";
        } else {
            echo "<a href='./login.php'>Acessar Sistema</a>;";
        }

        if (isset($_GET['logout'])) {
            session_destroy();
            header("Location: ./index.php");
        }
        ?>
    <section class="conteudo_localizacao">
        <div class="conteudo_localizacao_informacoes">
            <h1>Venha Conheçer o Local</h1>
            <p>VENÂNCIO AIRES 93 CIDADE BAIXA - PORTO ALEGRE - RS CEP 90040-191</p>
            <p>Horário de funcionamento
                Dias úteis: 08:30 - 20:00</p>
            <div>
                <iframe class="conteudo_localizacao_informacoes_mapa"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3453.791777186294!2d-51.22146782421952!3d-30.04283103120202!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x951978567f17f28d%3A0x2c2c5272bacf4d3a!2sSenac%20Tech!5e0!3m2!1spt-BR!2sbr!4v1687876447793!5m2!1spt-BR!2sbr"
                    style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
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