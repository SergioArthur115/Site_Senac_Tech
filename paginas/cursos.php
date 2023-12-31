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
    <section class="conteudo_curso">
        <div class="conteudo_curso_cursos">
            <div class="conteudo_curso_cursos_menu">
                <div class="conteudo_curso_cursos_titulo">
                    <h1>Conheça Nossos Cursos</h1>
                </div>
                <nav class="conteudo_curso_cursos_menu_nav">
                    <a href="../paginas/cursos/tech_info.html"><button type="button" class="button">Técnico em
                            Informática</button></a>
                    <a href="../paginas/cursos/tech_adm.html"><button type="button" class="button">Técnico em
                            Administração</button></a>
                    <a href="../paginas/cursos/tech_dev.html"><button type="button" class="button">Técnico em
                            Desenvolvimento de Sistemas</button></a>
                </nav>
            </div>
            <div class="conteudo_curso_cursos_tds">
                <div class="conteudo_curso_cursos_titulo">
                    <h2>Técnico em Desenvolvimento de Sistemas</h2>
                </div>
                <div class="conteudo_curso_cursos_texto">
                    <p>O desenvolvimento de novas soluções lhe desafia? Você gostaria de trabalhar em uma multinacional?
                        O
                        curso
                        Técnico em Desenvolvimento de Sistemas - Bilíngue pode ser o primeiro passo para você realizar
                        esses
                        sonhos. Com ele, você terá a qualificação necessária para atuar na área de desenvolvimento, com
                        um
                        grande diferencial: a habilidade comunicacional em língua inglesa, para falar com um mercado
                        cada
                        dia
                        mais globalizado.Para saber mais clique<a href="../paginas/cursos/tech_dev.html"> aqui</a></p>
                </div>
            </div>
            <div class="conteudo_curso_cursos_ti">
                <div class="conteudo_curso_cursos_titulo">
                    <h2>Técnico em Infomática</h2>
                </div>
                <div class="conteudo_curso_cursos_texto">
                    <p>Você busca uma oportunidade de inserção no mercado de trabalho? A área de Informática fascina
                        você?
                        Gostaria de agregar conhecimentos fundamentais para os mais diversos segmentos profissionais? Se
                        as
                        respostas forem sim, o curso Técnico em Informática do Senac-RS foi feito para você! Para saber
                        mais
                        clique<a href="../paginas/cursos/tech_info.html"> aqui</a> </p>
                </div>
            </div>
            <div class="conteudo_curso_cursos_adm">
                <div class="conteudo_curso_cursos_titulo">
                    <h2>Técnico em Administração</h2>
                </div>
                <div class="conteudo_curso_cursos_texto">
                    <p>Você busca uma oportunidade de inserção no mercado de trabalho? A área Administrativa fascina
                        você?
                        Gostaria de agregar conhecimentos fundamentais para os mais diversos segmentos empresariais? Se
                        as
                        respostas forem sim, o curso Técnico em Administração do Senac-RS foi feito para você! Para
                        saber
                        mais
                        clique<a href="../paginas/cursos/tech_adm.html"> aqui</a> </p>
                </div>
            </div>
            <div>
                <div class="conteudo_curso_cursos_titulo">
                    <h2>Outros Cursos</h2>
                </div>
                <div class="conteudo_curso_cursos_texto">
                    <h3 class="conteudo_curso_cursos_texto_titulo">Excel</h3><br><br>
                    <p>Com um total de 84 horas, o Curso de Formação Excel é ideal para quem quer aprender a criar e
                        editar gráficos de planilhas em Microsoft Excel, dominando as fórmulas e funções do programa.
                        Muito além do básico, o curso também ensina você a desenvolver os dashboards - painéis de
                        controles estratégicos que nos permitem resumir um grande volume de informações, possibilitando
                        comparações de dados e servindo como uma importante ferramenta para uma tomada de decisão mais
                        rápida e efetiva.</p><br><br>
                    <h3 class="conteudo_curso_cursos_texto_titulo">Pilotagem de Drones</h3><br><br>
                    <p>Os drones têm sido um recurso cada vez mais utilizado para o acompanhamento de vários processos
                        em grandes e pequenas empresas, através deles é possível fazer filmagens e fotografias aéreas
                        com precisão e agilidade. Com o curso de Pilotagem de Drones com Filmagens e Fotografias Aéreas
                        você vai aprender as principais técnicas de operação deste instrumento extremamente inovador.
                    </p><br><br>
                    <h3 class="conteudo_curso_cursos_texto_titulo">Segurança do Trabalho</h3><br><br>
                    <p>Você busca uma oportunidade de inserção no mercado de trabalho? A área da Segurança do Trabalho
                        desafia você? Gostaria de agregar conhecimentos fundamentais para evitar os acidentes de
                        trabalho e incidência de doenças ocupacionais? Se as respostas forem sim, o curso Técnico em
                        Segurança do Trabalho do Senac-RS foi feito para você!</p><br><br>
                    <h3 class="conteudo_curso_cursos_texto_titulo">Corel Draw</h3><br><br>
                    <p>Com o crescimento das mídias sociais, aumentou a demanda por criações de peças gráficas e que
                        atenda às necessidades das empresas, sejam elas de pequeno ou grande porte. Neste cenário, o
                        mercado requer profissionais altamente capacitados para essa área. Você se identifica com essa
                        demanda? Então, o curso Corel DRAW é uma excelente oportunidade de qualificação. </p><br><br>
                    <h3 class="conteudo_curso_cursos_texto_titulo">PHOTOSHOP</h3><br><br>
                    <p>O Photoshop, que é uma das principais soluções da Adobe, está em grande ascensão, com ele é
                        possível a criação e adequação de projetos. Para atender a demanda de trabalho, surge o curso de
                        Photoshop, que oferece a formação completa para montar, editar, manipular, e tratar imagens,
                        desenvolvendo habilidades para trabalhar correção de cores, restauração de fotos, exportação dos
                        arquivos em outros formatos, com preparação para impressão ou internet.</p>
                    <br><br>
                    <p>Ficou enteressado em algum?
                        então
                        não perca mais tempo e conheça esses e muitos mais clicando <a
                            href="https://www.senacrs.com.br">aqui</a></p>
                </div>
            </div>
            <div class="conteudo_curso_cursos_imagem">
                <img src="../images/cursos.jpg" alt="Cursos" title="Cursos">
            </div>
        </div>
        <div class="conteudo_curso_jati">
            <div class="conteudo_curso_cursos_titulo">
                <h1>Programa Jovem Aprendiz e RS TI</h1>
            </div>
            <nav class="conteudo_curso_cursos_menu_nav">
                <a href="../paginas/cursos/rs_ti.html"><button type="button" class="button">RS TI</button></a>
                <a href="../paginas/cursos/aprendizagem.html"><button type="button" class="button">Jovem
                        Aprendiz</button></a>
            </nav>
        </div>
    </section>
    <footer class="rodape">
        <div class="rodapediv">
            <p class="rodape_texto">© Todos Direitos reservados</p>
        </div>
    </footer>
</body>

</html>