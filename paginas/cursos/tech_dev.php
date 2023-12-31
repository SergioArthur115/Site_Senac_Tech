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
    <section class="conteudo_techdev">
        <div>
            <div class="conteudo_techdev_titulo">
                <h1>Técnico em Desenvolvimentos de Sistemas</h1>
            </div>
            <div class="conteudo_techdev_texto">
                <p>O desenvolvimento de novas soluções lhe desafia? Você gostaria de trabalhar em uma multinacional? O
                    curso Técnico em Desenvolvimento de Sistemas - Bilíngue pode ser o primeiro passo para você realizar
                    esses sonhos.<br><br>
                    Com ele, você terá a qualificação necessária para atuar na área de desenvolvimento,
                    com um grande diferencial: a habilidade comunicacional em língua inglesa, para falar com um mercado
                    cada dia mais globalizado. A área de desenvolvimento de sistemas emprega milhares de pessoas todos
                    os dias e muitas das vagas não são supridas por falta de talentos.<br><br>
                    Segundo a Brasscom, Associação
                    das Empresas de Tecnologia da Informação e Comunicação (TIC) e de Tecnologias Digitais, o segmento
                    deverá precisar de 70 mil profissionais por ano, até 2024.<br><br>
                    Chegou a sua vez! Com 1.216 horas, o
                    curso prepara o profissional para desenvolver sistemas computacionais utilizando o ambiente de
                    desenvolvimento, seguindo as normas e especificações da lógica e das linguagens de programação bem
                    como a modelagem, implementação e manutenção do banco de dados. Além disso, a formação prepara para
                    o desenvolvimento, a manutenção e testes de programas de computador, adotando normas técnicas e de
                    qualidade.<br><br>
                    Apesar de o curso ser bilíngue, o aluno não precisa saber inglês para ingressar. As aulas
                    de inglês são ministradas de acordo com o andamento do conteúdo tecnológico e, dessa forma, são
                    trabalhadas a fala, escrita e leitura relacionadas à profissão. Assim, você estará preparado para
                    atuar em diversas frentes de trabalho, podendo empreender na área ou buscar seu primeiro estágio já
                    nos primeiros meses de curso.<br><br>
                    A qualificação é uma excelente oportunidade para ingressar no mercado
                    de trabalho, com muitas possibilidades de atuação. Venha para o Técnico em Desenvolvimento de
                    Sistemas - Bilíngue do Senac-RS.
                </p>
            </div>
            <div class="conteudo_techdev_imagem">
                <img src="../../images/tech_dev.jpg" alt="Técnico em Desenvolvimentos de Sistemas" hspace="8"
                    title="Técnico em Desenvolvimentos de Sistemas" class="conteudo_techdev_imagem_imagem">
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