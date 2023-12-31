<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./estilos/style.css">
    <title>Senac Tech</title>
</head>

<body>
    <header>
        <section class="cabecalho">
            <div class="cabecalho_menu">
                <div class="cabecalho_menu_logo">
                    <a href="www.senacrs.com.br"><img src="images/senac_logo.png" alt="Senac logo"
                            title="Senac Tech Logo" class="cabecalho_menu_logo_imagem"></a>
                </div>

                <nav class="cabecalho_menu_nav">
                    <a href="index.php"><button type="button" class="button">Home</button></a>
                    <div class="cabecalho_menu_nav_cursos">
                        <a href="paginas/cursos.php"><button type="button" class="button">Cursos</button></a>
                        <div class="cabecalho_menu_nav_subMenu">
                            <a href="paginas/cursos/tech_info.php"><button type="button" class="button">Técnico em
                                    Informática</button></a>
                            <a href="paginas/cursos/tech_dev.php"><button type="button" class="button">Técnico em
                                    Desenvolvimento de Sistemas</button></a>
                            <a href="paginas/cursos/tech_adm.php"><button type="button" class="button">Técnico em
                                    Administração</button></a>
                            <a href="paginas/cursos/aprendizagem.php"><button type="button" class="button">Jovem
                                    Aprendiz</button></a>
                            <a href="paginas/cursos/rs_ti.php"><button type="button" class="button">RS TI</button></a>
                        </div>
                    </div>
                    <a href="paginas/localizacao.php"><button type="button" class="button">Localização</button></a>
                    <a href="paginas/fale_conosco.php"><button type="button" class="button">Fale Conosco</button></a>
                    <a href="paginas/cadastro.php"><button type="button" class="button">Cadastrar</button></a>
                    <a href="paginas/login.php"><button type="button" class="button">Login</button></a>
                </nav>

                <div class="cabecalho_menu_imagens_icones">
                    <a href="www.facebook.com.br/senacrs"><img src="images/icon_facebook.png" alt="Facebook icon"
                            title="Página do Facebook do Senac"></a>
                    <a href="www.instagram.com.br/senacrs"><img src="images/icon_instagram.png" alt="Instagram icon"
                            title="Página do Instagram do Senac"></a>
                    <a href="www.linkedin.com.br/senacrs"><img src="images/icon_linkedin.png" alt="Linkedin icon"
                            title="Página do Linkedin do Senac"></a>
                    <a href="www.spotify.com.br/senacrs"><img src="images/icon_spotify.png" alt="Spotify icon"
                            title="Página do Spotify do Senac"></a>
                    <a href="www.twitter.com.br/senacrs"><img src="images/icon_twitter.png" alt="Twitter icon"
                            title="Página do Twitter do Senac"></a>
                    <a href="www.youtube.com.br/senacrs"><img src="images/icon_youtube.png" alt="Youtube icon"
                            title="Página do Youtube do Senac"></a>
                </div>
            </div>
            <div class="cabecalho_banner">
                <img src="images/senac_banner4.jfif" alt="Senac banner" title="Senac Tech Banner"
                    class="cabecalho_banner_imagem">
            </div>
            <hr>
        </section>
    </header>
    <main>
        <?php

        if (isset($_SESSION['session_id'])) {
            echo 'Bem vindo ' . $_SESSION['session_id'] . ' ao site do Senac Tech <br>';
            echo "<a href='./index.php?logout'>Logout</a>";
        } else {
            echo "<a href='./paginas/login.php'>Acessar Sistema</a>;";
        }

        if (isset($_GET['logout'])) {
            session_destroy();
            header("Location: ./index.php");
        }
        ?>

        <section class="conteudo">
            <div class="conteudo_historia">
                <h1 class="conteudo_historia_titulo">Conheça nossa História</h1>
                <p class="conteudo_historia_texto">Fundado em 19 de outubro de 1989, o Senac Tech é um centro de
                    tecnologia
                    voltado para o
                    conhecimento. Com um ambiente e um portfólio de cursos moderno, atende 3.700 mil alunos por ano por
                    meio
                    de cursos EAD e presenciais em diversos níveis, além de ações extensivas. O principal foco da escola
                    é a
                    educação profissional nas áreas da Informática e Gestão.

                    Ganhou diversos prêmios, entre eles o Troféu Bronze no Prêmio Qualidade RS - PQRS em 2008, 2009 e
                    2012,
                    o Troféu Prata em 2015 e 2017, o Prêmio SUCESU, que destacou a fundação do Senac Informática como um
                    dos
                    seis acontecimentos mais importantes da década, e o reconhecimento pelo Comitê de Comércio e
                    Serviços
                    pela contribuição ao Sistema da Qualidade em 2008 e 2009.

                    Em 2016 comemorou, juntamente com todas as unidades do Estado, a conquista do Prêmio Nacional da
                    Qualidade (PNQ). No ano seguinte, celebrou o Prêmio Ibero-Americano da Qualidade. O Senac-RS foi a
                    primeira instituição de ensino do Brasil a receber as distinções, reconhecimentos máximo à
                    excelência.
                    Em março 2018, foi agraciada com o Melhores em Gestão e eleita Destaque na distinção promovida pela
                    Fundação Nacional da Qualidade (FNQ).

                    A escola conta com mais de 50 docentes com certificações Microsoft, LPI e Adobe Instructor e Núcleo
                    de
                    Desenvolvimento e Inovação (para gerir as questões relacionadas à pesquisa e desenvolvimento de
                    produtos). Também é Centro de Treinamento autorizado da AUTODESK. O horário de funcionamento é de
                    segunda a sexta-feira, das 8h30 às 20h.</p>
                <img src="images/senac_historia.jfif" alt="Senac História" title="Senac Tech História"
                    class="conteudo_historia_imagem">
            </div>
            <div class="conteudo_depoimentos">
                <h2 class="conteudo_depoimentos_titulo">Depoimentos de Ex-alunos</h2>
                <div class="conteudo_depoimentos_depoimentos">
                    <div class="conteudo_depoimentos_depoimentos_1">
                        <div class="conteudo_depoimentos_depoimentos_imagem_1"><img
                                src="images/depoimento_marcelly.jfif" alt="depoimento Marcelly"
                                title="Depoimento de Marcelly" class="conteudo_depoimentos_depoimentos_imagem_imagem">
                        </div>
                        <div class="conteudo_depoimentos_depoimentos_texto_1">
                            <p>Marcelly Marin<br>
                                INFORMÁTICA.INTENSIVO<br>
                                Minha experiência no Senac foi boa! Aprendi muitos processos e o curso me ajudou a estar
                                no
                                emprego
                                atual, conheci professores incríveis e que me ajudaram a crescer mental e
                                profissionalmente.
                            </p>
                        </div>
                    </div>
                    <div class="conteudo_depoimentos_depoimentos_2">
                        <div class="conteudo_depoimentos_depoimentos_texto_2">
                            <p>Marcelly Marin<br>
                                INFORMÁTICA.INTENSIVO<br>
                                Minha experiência no Senac foi boa! Aprendi muitos processos e o curso me ajudou a estar
                                no
                                emprego
                                atual, conheci professores incríveis e que me ajudaram a crescer mental e
                                profissionalmente.
                            </p>
                        </div>
                        <div class="conteudo_depoimentos_depoimentos_imagem_2"><img
                                src="images/depoimento_marcelly.jfif" alt="depoimento Marcelly"
                                title="Depoimento de Marcelly" class="conteudo_depoimentos_depoimentos_imagem_imagem">
                        </div>
                    </div>
                </div>
            </div>
            <div class="conteudo_noticias">
                <div class="conteudo_noticias_titulo">
                    <img src="images/Icones_noticias_e_anuncios.svg" alt="Noticias icon" title="Icone das Noticias">
                    <h2>Noticias</h2>
                </div>
                <nav class="conteudo_noticias_noticias">
                    <nav class="conteudo_noticias_noticias_1">
                        <div class="conteudo_noticias_noticias_1_1">
                            <div class="conteudo_noticias_noticias_1_1_imagem">
                                <img src="images/noticia_vagas.jfif" alt="Noticias 40 Vagas"
                                    title="Noticias de 40 Vagas" class="conteudo_noticias_noticias_1_1_imagem_imagem">
                            </div>
                            <div class="conteudo_noticias_noticias_1_1_texto">
                                <p class="conteudo_noticias_noticias_texto"><br>16/06/23 -
                                    Tecnologia da Informação<br>
                                    Senac Tech oferece 40 vagas gratuitas para novas turmas do Programa RS TI</p>
                            </div>
                        </div>

                        <div class="conteudo_noticias_noticias_1_2">
                            <div class="conteudo_noticias_noticias_1_2_imagem">
                                <img src="images/noticia_vagas2.jfif" alt="Noticias 80 Vagas"
                                    title="Noticias de 80 Vagas" class="conteudo_noticias_noticias_1_1_imagem_imagem">
                            </div>
                            <div class="conteudo_noticias_noticias_1_2_texto">
                                <p class="conteudo_noticias_noticias_texto"><br>
                                    14/04/23 -
                                    Informática<br>
                                    Senac Tech oferece 80 vagas gratuitas para novas turmas do Programa RS TI
                                </p>
                            </div>
                        </div>
                    </nav>
                    <nav class="conteudo_noticias_noticias_2">
                        <div class="conteudo_noticias_noticias_2_1">
                            <div class="conteudo_noticias_noticias_2_1_imagem">
                                <img src="images/noticia_insti_cald.jfif" alt="Noticias Instituto Caldeira"
                                    title="Noticias Instituto Caldeira"
                                    class="conteudo_noticias_noticias_1_1_imagem_imagem">
                            </div>
                            <div class="conteudo_noticias_noticias_2_1_texto">
                                <p class="conteudo_noticias_noticias_texto"><br>
                                    10/04/23 -
                                    Educação<br>
                                    Senac Tech é parceiro do Instituto Caldeira no próximo CaldeiraTalks, evento sobre
                                    gestão de
                                    equipes
                                    e a diversidade em times de Tecnologia
                                </p>
                            </div>
                        </div>
                        <div class="conteudo_noticias_noticias_2_2">
                            <div class="conteudo_noticias_noticias_2_2_imagem">
                                <img src="images/noticia_dest_PI.jfif" alt="Noticias Destaque PI"
                                    title="Noticias Destaque PI" class="conteudo_noticias_noticias_1_1_imagem_imagem">
                            </div>
                            <div class="conteudo_noticias_noticias_2_2_texto">
                                <p class="conteudo_noticias_noticias_texto"><br>
                                    10/04/23 -
                                    Informática<br>
                                    Projeto de docente do Senac obtém destaque em prêmio nacional de educação
                                </p>
                            </div>
                        </div>
                    </nav>
                </nav>
            </div>
        </section>
    </main>
    <footer class="rodape">
        <div class="rodapediv">
            <p class="rodape_texto">© Todos Direitos reservados</p>
        </div>
    </footer>
</body>

</html>