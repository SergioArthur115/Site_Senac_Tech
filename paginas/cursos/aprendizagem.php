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
    <section class="conteudo_JA">
        <div class="conteudo_JA_infos">
            <div>
                <img src="../../images/jovem_aprendiz.jpg" alt="Jovem Aprendiz" title="Jovem Aprendiz"
                    class="conteudo_JA_imagem">
            </div>
            <div>
                <h1>Programa Jovem Aprendiz</h1>
                <h2>Quais são os requisitos?</h2>
            </div>
            <div class="conteudo_JA_requisitos">
                <div>
                    <h3>Idade</h3>
                    <img src="../../images/idade_icon.png" alt="Idade Icon" title="Idade Icon">

                    <p>Ter entre 14 e 24 anos</p>
                </div>
                <div>
                    <h3>Escolaridade</h3>
                    <img src="../../images/escolaridade_icon.png" alt="Escolaridade Icon" title="Escolaridade Icon">
                    <p>Estar cursando escola regular Ou Ter concluído o Ensino Médio</p>
                </div>
                <div>
                    <h3>Contrato</h3>
                    <img src="../../images/contrato_icon.png" alt="Contrato Icon" title="Contrato Icon">
                    <p>Ser contratado como Jovem Aprendiz</p>
                </div>
            </div>
        </div>
        <div class="conteudo_JA_opor">
            <h2>Busque Oportunidades</h2>
            <p>Procure na Internet e veículos de comunicação, empresas do comércio e de serviços que estejam contratando
                aprendizes.<br>
                Após a contratação, a empresa encaminhará sua matrícula em um curso de aprendizagem profissional
                comercial
                do Senac-RS.</p>
        </div>
        <div class="conteudo_JA_imagem">
            <img src="../../images/aprendizagem.jpg" alt="Aprendizagem" title="Aprendizagem" class="imagem">
        </div>
        <div class="conteudo_JA_sobre">
            <h2>Sobre o Programa</h2>
            <p>Desde sua criação, o Senac tem o compromisso de oferecer Programas de Aprendizagem Profissional Comercial
                destinados a jovens na faixa dos 14 aos 24 anos de idade*, encaminhados pelas empresas do Setor do
                Comércio
                de Bens, Serviços e Turismo.<br><br>

                Compete ao Departamento Nacional do Senac apoiar os Departamentos Regionais no cumprimento desse
                compromisso
                histórico, fomentando investimentos em infraestrutura e equipamentos nos estados, e desenvolvendo, em
                colaboração com os Regionais, as diretrizes do Programa.<br><br>

                O Programa de Aprendizagem do Senac contempla um conjunto de ocupações, propiciando aos aprendizes
                competências voltadas à profissionalização e à cidadania, a partir da compreensão das características do
                mundo do trabalho e de seus fundamentos técnico-científicos.<br><br>

                A jornada de trabalho do jovem aprendiz compreende tanto as horas destinadas à formação educacional –
                cumpridas nas unidades educacionais do Senac – como a prática profissional – desenvolvida diretamente na
                empresa contratante.<br><br>

                Ao fazerem parte desse programa, os empregadores, além de cumprirem a legislação como contratantes de
                aprendizes, assumem papel de parceiros da ação educativa, atuando no processo de inserção dos jovens
                brasileiros.</p><br><br>
        </div>
        <div class="conteudo_JA_sobre_imagem">
            <img src="../../images/aprendizSobre.jpg" alt="Sobre Aprendizagem" title="Sobre Aprendizagem"
                class="imagem">
        </div>
    </section>
    <footer class="rodape">
        <div class="rodapediv">
            <p class="rodape_texto">© Todos Direitos reservados</p>
        </div>
    </footer>
</body>

</html>