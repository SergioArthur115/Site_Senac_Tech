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
            echo "<a href='./index.php?logout'>Logout</a>";
        } else {
            echo "<a href='../../paginas/login.php'>Acessar Sistema</a>;";
        }

        if (isset($_GET['logout'])) {
            session_destroy();
            header("Location: ./index.php");
        }
        ?>
    <section class="conteudo_techadm">
        <div>
            <div class="conteudo_techadm_titulo">
                <h1>Técnico em Administração</h1>
            </div>
            <div class="conteudo_techadm_texto">
                <p>Você busca uma oportunidade de inserção no mercado de trabalho? A área Administrativa
                    fascina você? Gostaria de agregar conhecimentos fundamentais para os mais diversos segmentos
                    empresariais? Se as respostas forem sim, o curso Técnico em Administração do Senac-RS foi feito para
                    você!<br><br>

                    A formação vai te preparar para desempenhar funções voltadas para a gestão de pessoas, operações
                    logísticas, gestão de materiais e patrimônio, marketing, vendas, finanças, entre outros.<br><br>

                    Por meio de uma proposta pedagógica adequada às exigências do mundo profissional, o curso oferece
                    nos
                    momentos presenciais* uma aprendizagem pautada por metodologias que propiciam atuação por projetos,
                    aulas práticas, teóricas, vivenciais e flexíveis com foco no mercado de trabalho. Mas também,
                    momentos
                    mediados por tecnologia**, em uma plataforma educacional própria, com conteúdo produzido por tutores
                    altamente qualificados. Ambos os modos estimulam você a experimentar habilidades necessárias para os
                    profissionais do futuro.<br><br>

                    Acompanhe a distribuição da carga-horária do currículo:<br><br>

                    Total de horas do curso: 1.000h<br><br>

                    - Momentos presenciais*: 844h<br><br>

                    - Momentos mediados por tecnologias com tutoria ativa**: 156h (no formato EAD - Educação a
                    Distância)<br><br>

                    Ao final da formação você estará apto a atuar em empresas de diversos segmentos, além de poder
                    participar de concursos em organizações públicas.<br><br>

                    Gostou da ideia de ser um profissional completo da área Administrativa? Venha para o curso Técnico
                    em
                    Administração do Senac-RS e mude de vida.<br><br>
                </p>
            </div>
            <div class="conteudo_techadm_imagem">
                <img src="../../images/tech_adm.jpg" alt="Técnico em Administração" hspace="8"
                    title="Técnico em Administração" class="conteudo_techadm_imagem_imagem">
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