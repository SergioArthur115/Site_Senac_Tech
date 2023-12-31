<?php
    session_start();
    ?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
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
    <section class="conteudo_faleConosco">
        <div>
            <div class="conteudo_faleConosco_titulo">
                <h2>Cadastre-se</h2>
            </div>
            <p>O Senac-RS tem a maior satisfação em atendê-lo.
                Importante: preencha corretamente os campos do formulário a seguir, para que possamos lhe dar um
                retorno.</p>
            <form action="../banco/processaCadastro.php" method="post" class="conteudo_faleConosco_formulario">
                <table>
                    <thead>
                        <tr>
                            <td colspan="2">
                                <h3>Todos os campos são obrigatórios</h3>
                            </td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <h3><label>Nome Completo:</label></h3>
                            </td>
                            <td><input type="text" name="nome" required maxlength="100"></td>
                        </tr>
                        <tr>
                            <td>
                                <h3><label>Telefone:</label></h3>
                            </td>
                            <td>
                                <input type="tel" name="telefone" required size="30">
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <h3><label>Estado:</label></h3>
                            </td>
                            <td>
                                <select name="estado" required>
                                    <option selected value="">Selecione o Estado (UF)</option>
                                    <option value="Acre">Acre</option>
                                    <option value="Alagoas">Alagoas</option>
                                    <option value="Amapá">Amapá</option>
                                    <option value="Amazonas">Amazonas</option>
                                    <option value="Bahia">Bahia</option>
                                    <option value="Ceará">Ceará</option>
                                    <option value="Distrito Federal">Distrito Federal</option>
                                    <option value="Espírito Santo">Espírito Santo</option>
                                    <option value="Goiás">Goiás</option>
                                    <option value="Maranhão">Maranhão</option>
                                    <option value="Mato Grosso">Mato Grosso</option>
                                    <option value="Mato Grosso do Sul">Mato Grosso do Sul</option>
                                    <option value="Minas Gerais">Minas Gerais</option>
                                    <option value="Pará">Pará</option>
                                    <option value="Paraíba">Paraíba</option>
                                    <option value="Paraná">Paraná</option>
                                    <option value="Pernambuco">Pernambuco</option>
                                    <option value="Piauí">Piauí</option>
                                    <option value="Rio de Janeiro">Rio de Janeiro</option>
                                    <option value="Rio Grande do Sul">Rio Grande do Sul</option>
                                    <option value="Rio Grande do Norte">Rio Grande do Norte</option>
                                    <option value="Rondônia">Rondônia</option>
                                    <option value="Roraima">Roraima</option>
                                    <option value="Santa Catarina">Santa Catarina</option>
                                    <option value="São Paulo">São Paulo</option>
                                    <option value="Sergipe">Sergipe</option>
                                    <option value="Tocantins">Tocantins</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h3><label>Cidade:</label></h3>
                            </td>
                            <td>
                                <select name="cidade" required>
                                    <option selected value="">Selecione a Cidade</option>
                                    <option value="acegua">Aceguá</option>
                                    <option value="aguasanta">Água Santa</option>
                                    <option value="agudo">Agudo</option>
                                    <option value="aguiar">Aguiar</option>
                                    <option value="ajuricaba">Ajuricaba</option>
                                    <option value="alcantara">Alcântara</option>
                                    <option value="alecrim">Alecrim</option>
                                    <option value="alegrete">Alegrete</option>
                                    <option value="alegria">Alegria</option>
                                    <option value="almeida">Almeida</option>
                                    <option value="almirantetamandaredosul">Almirante Tamandaré do Sul</option>
                                    <option value="alpestre">Alpestre</option>
                                    <option value="altoalegre">Alto Alegre</option>
                                    <option value="altofeliz">Alto Feliz</option>
                                    <option value="alvorada">Alvorada</option>
                                    <option value="alvorezinha">Alvorezinha</option>
                                    <option value="amaralferrador">Amaral Ferrador</option>
                                    <option value="ametistadosul">Ametista do Sul</option>
                                    <option value="andredarocha">André da Rocha</option>
                                    <option value="antagorda">Anta Gorda</option>
                                    <option value="antonioprado">Antônio Prado</option>
                                    <option value="apucarana">Apucarana</option>
                                    <option value="arambare">Arambaré</option>
                                    <option value="araranguara">Araranguara</option>
                                    <option value="ararica">Araricá</option>
                                    <option value="aratiba">Aratiba</option>
                                    <option value="arroidomeio">Arroio do Meio</option>
                                    <option value="arroiodopadre">Arroio do Padre</option>
                                    <option value="arroiodosal">Arroio do Sal</option>
                                    <option value="arroiodotigre">Arroio do Tigre</option>
                                    <option value="arroiodosratos">Arroio dos Ratos</option>
                                    <option value="arroiogrande">Arroio Grande</option>
                                    <option value="arroioteixeira">Arroio Teixeira</option>
                                    <option value="arvorezinha">Arvorezinha</option>
                                    <option value="asdc">ASDC</option>
                                    <option value="assis">Assis</option>
                                    <option value="augustopestana">Augusto Pestana</option>
                                    <option value="aurea">Áurea</option>
                                    <option value="bage">Bagé</option>
                                    <option value="balneariopinhal">Balneário Pinhal</option>
                                    <option value="barao">Barão</option>
                                    <option value="baraodecotegipe">Barão de Cotegipe</option>
                                    <option value="baraodotriunfo">Barão do Triunfo</option>
                                    <option value="barradoguarita">Barra do Guarita</option>
                                    <option value="barradouro">Barra do Ouro</option>
                                    <option value="barradoquarai">Barra do Quaraí</option>
                                    <option value="barradoribeiro">Barra do Ribeiro</option>
                                    <option value="barradorioazul">Barra do Rio Azul</option>
                                    <option value="barrafunda">Barra Funda</option>
                                    <option value="barracao">Barracão</option>
                                    <option value="barroscassal">Barros Cassal</option>
                                    <option value="belohorizonte">Belo Horizonte</option>
                                    <option value="benjaminconstantdosul">Benjamin Constant do Sul</option>
                                    <option value="bentogoncalves">Bento Gonçalves</option>
                                    <option value="boavistadasmissoes">Boa Vista das Missões</option>
                                    <option value="boavistadoburica">Boa Vista do Buricá</option>
                                    <option value="boavistadocadeado">Boa Vista do Cadeado</option>
                                    <option value="boavistadoincra">Boa Vista do Incra</option>
                                    <option value="boavistadosul">Boa Vista do Sul</option>
                                    <option value="bomjesus">Bom Jesus</option>
                                    <option value="bomprincipio">Bom Princípio</option>
                                    <option value="bomprogresso">Bom Progresso</option>
                                    <option value="bomrepouso">Bom Repouso</option>
                                    <option value="bomretirodosul">Bom Retiro do Sul</option>
                                    <option value="bomsucesso">Bom Sucesso</option>
                                    <option value="boqueiraodoleao">Boqueirão do Leão</option>
                                    <option value="bossoroca">Bossoroca</option>
                                    <option value="bozano">Bozano</option>
                                    <option value="braga">Braga</option>
                                    <option value="brasileira">Brasileira</option>
                                    <option value="brochier">Brochier</option>
                                    <option value="burica">Burica</option>
                                    <option value="butia">Butiá</option>
                                    <option value="cacapavadossul">Caçapava do Sul</option>
                                    <option value="cacequi">Cacequi</option>
                                    <option value="cachoeiradosul">Cachoeira do Sul</option>
                                    <option value="cachoeirinha">Cachoeirinha</option>
                                    <option value="caciquedoble">Cacique Doble</option>
                                    <option value="caibate">Caibaté</option>
                                    <option value="caicara">Caiçara</option>
                                    <option value="caichoeradosul">Caiçoeira do Sul</option>
                                    <option value="camaqua">Camaquã</option>
                                    <option value="camargo">Camargo</option>
                                    <option value="cambaradosul">Cambará do Sul</option>
                                    <option value="camobi">Camobi</option>
                                    <option value="campestredaserra">Campestre da Serra</option>
                                    <option value="campinadasmissoes">Campina das Missões</option>
                                    <option value="campinasdosul">Campinas do Sul</option>
                                    <option value="campobom">Campo Bom</option>
                                    <option value="campoevo">Campo Evo</option>
                                    <option value="campogrande">Campo Grande</option>
                                    <option value="camponovo">Campo Novo</option>
                                    <option value="camposborges">Campos Borges</option>
                                    <option value="camposnovos">Campos Novos</option>
                                    <option value="candelaria">Candelária</option>
                                    <option value="candidogodoi">Cândido Godói</option>
                                    <option value="candiota">Candiota</option>
                                    <option value="canela">Canela</option>
                                    <option value="canguçu">Canguçu</option>
                                    <option value="canoas">Canoas</option>
                                    <option value="canoínhas">Canoínhas</option>
                                    <option value="canos">Canos</option>
                                    <option value="canudosdovale">Canudos do Vale</option>
                                    <option value="capanema">Capanema</option>
                                    <option value="capaobonitodosul">Capão Bonito do Sul</option>
                                    <option value="capaodacanoa">Capão da Canoa</option>
                                    <option value="capaodaporteira">Capão da Porteira</option>
                                    <option value="capaodocipo">Capão do Cipó</option>
                                    <option value="capaodoleao">Capão do Leão</option>
                                    <option value="capeladesantana">Capela de Santana</option>
                                    <option value="capitão">Capitão</option>
                                    <option value="capivaridosul">Capivari do Sul</option>
                                    <option value="caraa">Caraá</option>
                                    <option value="caraz">Caraz</option>
                                    <option value="carazinho">Carazinho</option>
                                    <option value="cardoso">Cardoso</option>
                                    <option value="carlosbarbosa">Carlos Barbosa</option>
                                    <option value="carlosgomes">Carlos Gomes</option>
                                    <option value="casca">Casca</option>
                                    <option value="cascavel">Cascavel</option>
                                    <option value="caseiros">Caseiros</option>
                                    <option value="castilhos">Castilhos</option>
                                    <option value="catuípe">Catuípe</option>
                                    <option value="caxiasdosul">Caxias do Sul</option>
                                    <option value="ceberi">Ceberi</option>
                                    <option value="centenário">Centenário</option>
                                    <option value="centro">Centro</option>
                                    <option value="cerrito">Cerrito</option>
                                    <option value="cerrobranco">Cerro Branco</option>
                                    <option value="cerrogrande">Cerro Grande</option>
                                    <option value="cerrograndedosul">Cerro Grande do Sul</option>
                                    <option value="cerrolargo">Cerro Largo</option>
                                    <option value="chapada">Chapada</option>
                                    <option value="chapeco">Chapecó</option>
                                    <option value="charqueadas">Charqueadas</option>
                                    <option value="charrua">Charrua</option>
                                    <option value="chiapeta">Chiapeta</option>
                                    <option value="chui">Chuí</option>
                                    <option value="chuvisca">Chuvisca</option>
                                    <option value="cidreira">Cidreira</option>
                                    <option value="ciríaco">Ciríaco</option>
                                    <option value="colinas">Colinas</option>
                                    <option value="colonianova">Colônia Nova</option>
                                    <option value="colorado">Colorado</option>
                                    <option value="condor">Condor</option>
                                    <option value="constantina">Constantina</option>
                                    <option value="coqueirobaixo">Coqueiro Baixo</option>
                                    <option value="coqueirosdosul">Coqueiros do Sul</option>
                                    <option value="coronelbarros">Coronel Barros</option>
                                    <option value="coronelbicaco">Coronel Bicaco</option>
                                    <option value="coronelpilar">Coronel Pilar</option>
                                    <option value="cotias">Cotias</option>
                                    <option value="cotiporã">Cotiporã</option>
                                    <option value="coxilha">Coxilha</option>
                                    <option value="criciuma">Criciúma</option>
                                    <option value="crissiumal">Crissiumal</option>
                                    <option value="cristal">Cristal</option>
                                    <option value="cristaldosul">Cristal do Sul</option>
                                    <option value="cristalina">Cristalina</option>
                                    <option value="cruzalta">Cruz Alta</option>
                                    <option value="cruzaltense">Cruzaltense</option>
                                    <option value="cruzeirodosul">Cruzeiro do Sul</option>
                                    <option value="curitiba">Curitiba</option>
                                    <option value="davidcanabarro">David Canabarro</option>
                                    <option value="derrubadas">Derrubadas</option>
                                    <option value="dezesseisdenovembro">Dezesseis de Novembro</option>
                                    <option value="dilermandodeaguiar">Dilermando de Aguiar</option>
                                    <option value="doisirmãos">Dois Irmãos</option>
                                    <option value="doisirmãosdasmissoes">Dois Irmãos das Missões</option>
                                    <option value="doislajeados">Dois Lajeados</option>
                                    <option value="doisvizinhos">Dois Vizinhos</option>
                                    <option value="domfeliciano">Dom Feliciano</option>
                                    <option value="dompedrito">Dom Pedrito</option>
                                    <option value="dompedrodealcantara">Dom Pedro de Alcântara</option>
                                    <option value="donafrancisca">Dona Francisca</option>
                                    <option value="doutorbozano">Doutor Bozano</option>
                                    <option value="doutormauríciocardoso">Doutor Maurício Cardoso</option>
                                    <option value="doutorricardo">Doutor Ricardo</option>
                                    <option value="duquedecaxias">Duque de Caxias</option>
                                    <option value="eldoradodosul">Eldorado do Sul</option>
                                    <option value="encantado">Encantado</option>
                                    <option value="encruzilhada">Encruzilhada</option>
                                    <option value="encruzilhadadosul">Encruzilhada do Sul</option>
                                    <option value="engenhovelho">Engenho Velho</option>
                                    <option value="entreijuis">Entre Ijuís</option>
                                    <option value="entreriosdosul">Entre Rios do Sul</option>
                                    <option value="entre-ijuís">Entre-Ijuís</option>
                                    <option value="erebango">Erebango</option>
                                    <option value="erechim">Erechim</option>
                                    <option value="ernestina">Ernestina</option>
                                    <option value="ervalgrande">Erval Grande</option>
                                    <option value="ervalseco">Erval Seco</option>
                                    <option value="esmeralda">Esmeralda</option>
                                    <option value="esperançadosul">Esperança do Sul</option>
                                    <option value="espumoso">Espumoso</option>
                                    <option value="estação">Estação</option>
                                    <option value="estanciagrande">Estância Grande</option>
                                    <option value="estânciavelha">Estância Velha</option>
                                    <option value="esteio">Esteio</option>
                                    <option value="estrela">Estrela</option>
                                    <option value="estrelavelha">Estrela Velha</option>
                                    <option value="eugêniodecastro">Eugênio de Castro</option>
                                    <option value="fagundesvarela">Fagundes Varela</option>
                                    <option value="farroupilha">Farroupilha</option>
                                    <option value="faxinaldosoturno">Faxinal do Soturno</option>
                                    <option value="faxinalzinho">Faxinalzinho</option>
                                    <option value="fazendavilanova">Fazenda Vilanova</option>
                                    <option value="feliz">Feliz</option>
                                    <option value="floresdacunha">Flores da Cunha</option>
                                    <option value="florianopeixoto">Floriano Peixoto</option>
                                    <option value="fontouraxavier">Fontoura Xavier</option>
                                    <option value="formigueiro">Formigueiro</option>
                                    <option value="forquetinha">Forquetinha</option>
                                    <option value="fortaleza">Fortaleza</option>
                                    <option value="fortalezadosvalos">Fortaleza dos Valos</option>
                                    <option value="fozdoiguacu">Foz do Iguaçu</option>
                                    <option value="fredericowestphalen">Frederico Westphalen</option>
                                    <option value="garibaldi">Garibaldi</option>
                                    <option value="garruchos">Garruchos</option>
                                    <option value="gaurama">Gaurama</option>
                                    <option value="generalcâmara">General Câmara</option>
                                    <option value="gentil">Gentil</option>
                                    <option value="getúliovargas">Getúlio Vargas</option>
                                    <option value="giruá">Giruá</option>
                                    <option value="glorinha">Glorinha</option>
                                    <option value="gramado">Gramado</option>
                                    <option value="gramadodosloureiros">Gramado dos Loureiros</option>
                                    <option value="gramadoxavier">Gramado Xavier</option>
                                    <option value="grandeportela">Grande Portela</option>
                                    <option value="gravatai">Gravataí</option>
                                    <option value="guabiju">Guabiju</option>
                                    <option value="guaiba">Guaíba</option>
                                    <option value="guaira">Guaira</option>
                                    <option value="guapore">Guaporé</option>
                                    <option value="guaranidasmissoes">Guarani das Missões</option>
                                    <option value="guaribaldi">Guaribaldi</option>
                                    <option value="harmonia">Harmonia</option>
                                    <option value="herval">Herval</option>
                                    <option value="herveiras">Herveiras</option>
                                    <option value="horizontina">Horizontina</option>
                                    <option value="hulhanegra">Hulha Negra</option>
                                    <option value="humaita">Humaitá</option>
                                    <option value="ibarama">Ibarama</option>
                                    <option value="ibiaca">Ibiaçá</option>
                                    <option value="ibiraiaras">Ibiraiaras</option>
                                    <option value="ibirapuita">Ibirapuitã</option>
                                    <option value="ibiruba">Ibirubá</option>
                                    <option value="ibiuna">Ibiúna</option>
                                    <option value="igrejinha">Igrejinha</option>
                                    <option value="ijui">Ijuí</option>
                                    <option value="ilopolis">Ilópolis</option>
                                    <option value="imbe">Imbé</option>
                                    <option value="imigrante">Imigrante</option>
                                    <option value="independencia">Independência</option>
                                    <option value="inhacora">Inhacorá</option>
                                    <option value="ipe">Ipê</option>
                                    <option value="ipirangadosul">Ipiranga do Sul</option>
                                    <option value="irai">Iraí</option>
                                    <option value="irani">Irani</option>
                                    <option value="itaara">Itaara</option>
                                    <option value="itacurubi">Itacurubi</option>
                                    <option value="itaobim">Itaobim</option>
                                    <option value="itapejaraoste">Itapejara Oeste</option>
                                    <option value="itapiranga">Itapiranga</option>
                                    <option value="itapuca">Itapuca</option>
                                    <option value="itaqui">Itaqui</option>
                                    <option value="itati">Itati</option>
                                    <option value="itatiba">Itatiba</option>
                                    <option value="ivora">Ivorá</option>
                                    <option value="ivoti">Ivoti</option>
                                    <option value="jaboticaba">Jaboticaba</option>
                                    <option value="jacinto">Jacinto</option>
                                    <option value="jacintomachado">Jacinto Machado</option>
                                    <option value="jacuizinho">Jacuizinho</option>
                                    <option value="jacutinga">Jacutinga</option>
                                    <option value="jaguarao">Jaguarão</option>
                                    <option value="jaguari">Jaguari</option>
                                    <option value="jaquari">Jaquari</option>
                                    <option value="jaquirana">Jaquirana</option>
                                    <option value="jari">Jari</option>
                                    <option value="jirua">Jiruá</option>
                                    <option value="joacaba">Joaçaba</option>
                                    <option value="joia">Jóia</option>
                                    <option value="joinville">Joinville</option>
                                    <option value="juliodecastilhos">Júlio de Castilhos</option>
                                    <option value="lages">Lages</option>
                                    <option value="lagoadabonitadosul">Lagoa Bonita do Sul</option>
                                    <option value="lagoadostrêscantos">Lagoa dos Três Cantos</option>
                                    <option value="lagoavermelha">Lagoa Vermelha</option>
                                    <option value="lagoao">Lagoão</option>
                                    <option value="lajeado">Lajeado</option>
                                    <option value="lajeado">Lajeado</option>
                                    <option value="lajeadodobugre">Lajeado do Bugre</option>
                                    <option value="laria">Laria</option>
                                    <option value="lavrasdosul">Lavras do Sul</option>
                                    <option value="liberatosalzano">Liberato Salzano</option>
                                    <option value="lindolfocollor">Lindolfo Collor</option>
                                    <option value="linhanova">Linha Nova</option>
                                    <option value="livramento">Livramento</option>
                                    <option value="londrina">Londrina</option>
                                    <option value="maçambara">Maçambará</option>
                                    <option value="machadinho">Machadinho</option>
                                    <option value="mairipora">Mairiporã</option>
                                    <option value="mampituba">Mampituba</option>
                                    <option value="manoelviana">Manoel Viana</option>
                                    <option value="maquine">Maquiné</option>
                                    <option value="marata">Maratá</option>
                                    <option value="marau">Marau</option>
                                    <option value="marcelinoramos">Marcelino Ramos</option>
                                    <option value="marechalcandidorondon">Marechal Cândido Rondon</option>
                                    <option value="marianapimentel">Mariana Pimentel</option>
                                    <option value="marianomoro">Mariano Moro</option>
                                    <option value="marquesdesouza">Marques de Souza</option>
                                    <option value="mata">Mata</option>
                                    <option value="matocastelhano">Mato Castelhano</option>
                                    <option value="matoleitao">Mato Leitão</option>
                                    <option value="matoqueimado">Mato Queimado</option>
                                    <option value="maximdealmeida">Maxim de Almeida</option>
                                    <option value="maximilianodealmeida">Maximiliano de Almeida</option>
                                    <option value="medianeira">Medianeira</option>
                                    <option value="mesquita">Mesquita</option>
                                    <option value="minasdobutia">Minas do Butiá</option>
                                    <option value="minasdoleao">Minas do Leão</option>
                                    <option value="minasgerais">Minas Gerais</option>
                                    <option value="miraguai">Miraguaí</option>
                                    <option value="mirandopolis">Mirandópolis</option>
                                    <option value="missoes">Missões</option>
                                    <option value="mondai">Mondaí</option>
                                    <option value="montauri">Montauri</option>
                                    <option value="montealegredoscampos">Monte Alegre dos Campos</option>
                                    <option value="montebelodosul">Monte Belo do Sul</option>
                                    <option value="monterongo">Monte Negro</option>
                                    <option value="montenegro">Montenegro</option>
                                    <option value="mormaço">Mormaço</option>
                                    <option value="morrinhosdosul">Morrinhos do Sul</option>
                                    <option value="morroredondo">Morro Redondo</option>
                                    <option value="morroreuter">Morro Reuter</option>
                                    <option value="mostardas">Mostardas</option>
                                    <option value="mucum">Muçum</option>
                                    <option value="muitoscapoes">Muitos Capões</option>
                                    <option value="muliterno">Muliterno</option>
                                    <option value="naometoque">Não-Me-Toque</option>
                                    <option value="navegantes">Navegantes</option>
                                    <option value="nicolaovergueiro">Nicolau Vergueiro</option>
                                    <option value="niteroi">Niterói</option>
                                    <option value="nonoai">Nonoai</option>
                                    <option value="novaalvorada">Nova Alvorada</option>
                                    <option value="novaaraca">Nova Araçá</option>
                                    <option value="novabassano">Nova Bassano</option>
                                    <option value="novaboavista">Nova Boa Vista</option>
                                    <option value="novabrescia">Nova Bréscia</option>
                                    <option value="novacandelaria">Nova Candelária</option>
                                    <option value="novaesperancadosul">Nova Esperança do Sul</option>
                                    <option value="novahartz">Nova Hartz</option>
                                    <option value="novapadua">Nova Pádua</option>
                                    <option value="novapalma">Nova Palma</option>
                                    <option value="novapetropolis">Nova Petrópolis</option>
                                    <option value="novaprata">Nova Prata</option>
                                    <option value="novaramada">Nova Ramada</option>
                                    <option value="novaromadosul">Nova Roma do Sul</option>
                                    <option value="novasantarita">Nova Santa Rita</option>
                                    <option value="novamburgo">Novamburgo</option>
                                    <option value="novobarreiro">Novo Barreiro</option>
                                    <option value="novocabrais">Novo Cabrais</option>
                                    <option value="novohamburgo">Novo Hamburgo</option>
                                    <option value="novohmburgo">Novo Hmburgo</option>
                                    <option value="novomachado">Novo Machado</option>
                                    <option value="novotiradentes">Novo Tiradentes</option>
                                    <option value="novoxingu">Novo Xingu</option>
                                    <option value="olaria">Olaria</option>
                                    <option value="orizontina">Orizontina</option>
                                    <option value="osorio">Osório</option>
                                    <option value="paimfilho">Paim Filho</option>
                                    <option value="palmar">Palmar</option>
                                    <option value="palmarecadosul">Palmares do Sul</option>
                                    <option value="palmeiradasmissoes">Palmeira das Missões</option>
                                    <option value="palmeiradasmissoes">Palmeira das Missões</option>
                                    <option value="palmitinho">Palmitinho</option>
                                    <option value="pampeiro">Pampeiro</option>
                                    <option value="panambi">Panambi</option>
                                    <option value="pantanogrande">Pantano Grande</option>
                                    <option value="parai">Paraí</option>
                                    <option value="paraisodosul">Paraíso do Sul</option>
                                    <option value="parana">Paraná</option>
                                    <option value="paratini">Paratini</option>
                                    <option value="parecinovo">Pareci Novo</option>
                                    <option value="parobe">Parobé</option>
                                    <option value="parqueresnstrabalho">Parque Res NS Trabalho</option>
                                    <option value="passasete">Passa Sete</option>
                                    <option value="passodetorres">Passo de Torres</option>
                                    <option value="passodosobrado">Passo do Sobrado</option>
                                    <option value="passofundo">Passo Fundo</option>
                                    <option value="passoundo">Passo Undo</option>
                                    <option value="patrulha">Patrulha</option>
                                    <option value="paulobento">Paulo Bento</option>
                                    <option value="protasio-alves">Protásio Alves</option>
                                    <option value="putinga">Putinga</option>
                                    <option value="quarai">Quaraí</option>
                                    <option value="quatro-irmaos">Quatro Irmãos</option>
                                    <option value="quatuipi">Quatuípi</option>
                                    <option value="quevedos">Quevedos</option>
                                    <option value="quinze-de-novembro">Quinze de Novembro</option>
                                    <option value="redentora">Redentora</option>
                                    <option value="relvado">Relvado</option>
                                    <option value="restinga-seca">Restinga Seca</option>
                                    <option value="rincao-do-sossego">Rincão do Sossego</option>
                                    <option value="rio-de-janeiro">Rio de Janeiro</option>
                                    <option value="rio-dos-indios">Rio dos Índios</option>
                                    <option value="rio-grande">Rio Grande</option>
                                    <option value="rio-negrinho">Rio Negrinho</option>
                                    <option value="rio-negro">Rio Negro</option>
                                    <option value="rio-pardo">Rio Pardo</option>
                                    <option value="riozinho">Riozinho</option>
                                    <option value="rosario-do-sul">Rosário do Sul</option>
                                    <option value="roca-sales">Roca Sales</option>
                                    <option value="rodeio-bonito">Rodeio Bonito</option>
                                    <option value="rolador">Rolador</option>
                                    <option value="rolante">Rolante</option>
                                    <option value="rolantinho">Rolantinho</option>
                                    <option value="ronda-alta">Ronda Alta</option>
                                    <option value="rondinha">Rondinha</option>
                                    <option value="roque-gonzales">Roque Gonzales</option>
                                    <option value="rosario-do-sul">Rosário do Sul</option>
                                    <option value="sagrada-familia">Sagrada Família</option>
                                    <option value="saldanha-marinho">Saldanha Marinho</option>
                                    <option value="salto-do-jacui">Salto do Jacuí</option>
                                    <option value="salto-do-lontra">Salto do Lontra</option>
                                    <option value="salvador-das-missoes">Salvador das Missões</option>
                                    <option value="salvador-do-sul">Salvador do Sul</option>
                                    <option value="sananduva">Sananduva</option>
                                    <option value="sanga-puita">Sanga Puitã</option>
                                    <option value="santa-barbara-do-sul">Santa Bárbara do Sul</option>
                                    <option value="santa-cecilia-do-sul">Santa Cecília do Sul</option>
                                    <option value="santa-clara-do-sul">Santa Clara do Sul</option>
                                    <option value="santa-cruz-do-sul">Santa Cruz do Sul</option>
                                    <option value="santa-margarida-do-sul">Santa Margarida do Sul</option>
                                    <option value="santa-maria">Santa Maria</option>
                                    <option value="santa-maria-do-herval">Santa Maria do Herval</option>
                                    <option value="santa-rita-do-sul">Santa Rita do Sul</option>
                                    <option value="santa-rosa">Santa Rosa</option>
                                    <option value="santa-teresa">Santa Tereza</option>
                                    <option value="santa-vitoria-do-palmar">Santa Vitória do Palmar</option>
                                    <option value="santana-da-boa-vista">Santana da Boa Vista</option>
                                    <option value="santana-do-livramento">Santana do Livramento</option>
                                    <option value="santiago">Santiago</option>
                                    <option value="santo-angelo">Santo Ângelo</option>
                                    <option value="santo-anjo-da-guarda">Santo Anjo da Guarda</option>
                                    <option value="santo-antonio-da-patrulha">Santo Antônio da Patrulha</option>
                                    <option value="santo-antonio-das-missoes">Santo Antônio das Missões</option>
                                    <option value="santo-antonio-do-palma">Santo Antônio do Palma</option>
                                    <option value="santo-antonio-do-planalto">Santo Antônio do Planalto</option>
                                    <option value="santo-augusto">Santo Augusto</option>
                                    <option value="santo-cristo">Santo Cristo</option>
                                    <option value="santo-expedito-do-sul">Santo Expedito do Sul</option>
                                    <option value="sao-barja">São Barja</option>
                                    <option value="sao-bento">São Bento</option>
                                    <option value="sao-borja">São Borja</option>
                                    <option value="sao-caetano">São Caetano</option>
                                    <option value="paverama">Paverama</option>
                                    <option value="pedras-altas">Pedras Altas</option>
                                    <option value="pedro-osorio">Pedro Osório</option>
                                    <option value="pejucara">Pejuçara</option>
                                    <option value="pelotas">Pelotas</option>
                                    <option value="petropolis">Petrópolis</option>
                                    <option value="picada-cafe">Picada Café</option>
                                    <option value="picada-castro">Picada Castro</option>
                                    <option value="pinhal">Pinhal</option>
                                    <option value="pinhal-da-serra">Pinhal da Serra</option>
                                    <option value="pinhal-grande">Pinhal Grande</option>
                                    <option value="pinheirinho-do-vale">Pinheirinho do Vale</option>
                                    <option value="pinheiro-machado">Pinheiro Machado</option>
                                    <option value="pinto-bandeira">Pinto Bandeira</option>
                                    <option value="piquete">Piquete</option>
                                    <option value="pirapo">Pirapó</option>
                                    <option value="pirassununga">Pirassununga</option>
                                    <option value="piratini">Piratini</option>
                                    <option value="planalto">Planalto</option>
                                    <option value="poa">Poa</option>
                                    <option value="poco-das-antas">Poço das Antas</option>
                                    <option value="pontao">Pontão</option>
                                    <option value="ponte-preta">Ponte Preta</option>
                                    <option value="ponte-serrada">Ponte Serrada</option>
                                    <option value="portao">Portão</option>
                                    <option value="porto-alegre">Porto Alegre</option>
                                    <option value="porto-lucena">Porto Lucena</option>
                                    <option value="porto-maua">Porto Mauá</option>
                                    <option value="porto-velho">Porto Velho</option>
                                    <option value="porto-vera-cruz">Porto Vera Cruz</option>
                                    <option value="porto-xavier">Porto Xavier</option>
                                    <option value="pouso-novo">Pouso Novo</option>
                                    <option value="povo-novo">Povo Novo</option>
                                    <option value="praia-grande">Praia Grande</option>
                                    <option value="presidente-lucena">Presidente Lucena</option>
                                    <option value="progresso">Progresso</option>
                                    <option value="sao-cristovao">São Cristovão</option>
                                    <option value="sao-cruz-do-rio-pardo">São Cruz do Rio Pardo</option>
                                    <option value="sao-domingos-do-sul">São Domingos do Sul</option>
                                    <option value="sao-franc-de-assis">São Franc de Assis</option>
                                    <option value="sao-francisco-de-assis">São Francisco de Assis</option>
                                    <option value="sao-francisco-de-paula">São Francisco de Paula</option>
                                    <option value="sao-gabriel">São Gabriel</option>
                                    <option value="sao-geronimo">São Gerônimo</option>
                                    <option value="sao-goncalo">São Gonçalo</option>
                                    <option value="sao-jeronimo">São Jerônimo</option>
                                    <option value="sao-joao">São João</option>
                                    <option value="sao-joao-da-urtiga">São João da Urtiga</option>
                                    <option value="sao-joao-do-polesine">São João do Polesine</option>
                                    <option value="sao-jorge">São Jorge</option>
                                    <option value="sao-jose-das-missoes">São José das Missões</option>
                                    <option value="sao-jose-do-cedro">São José do Cedro</option>
                                    <option value="sao-jose-do-herval">São José do Herval</option>
                                    <option value="sao-jose-do-hortencio">São José do Hortêncio</option>
                                    <option value="sao-jose-do-inhacora">São José do Inhacorá</option>
                                    <option value="sao-jose-do-norte">São José do Norte</option>
                                    <option value="sao-jose-do-ouro">São José do Ouro</option>
                                    <option value="sao-jose-do-sul">São José do Sul</option>
                                    <option value="sao-jose-dos-ausentes">São José dos Ausentes</option>
                                    <option value="sao-jose-dos-campos">São José dos Campos</option>
                                    <option value="sao-leopoldo">São Leopoldo</option>
                                    <option value="sao-lourenco">São Lourenço</option>
                                    <option value="sao-lourenco-do-oeste">São Lourenço do Oeste</option>
                                    <option value="sao-lourenco-do-sul">São Lourenço do Sul</option>
                                    <option value="sao-luis-gonzaga">São Luís Gonzaga</option>
                                    <option value="sao-marcos">São Marcos</option>
                                    <option value="sao-martinho">São Martinho</option>
                                    <option value="sao-martinho-da-serra">São Martinho da Serra</option>
                                    <option value="sao-miguel-das-missoes">São Miguel das Missões</option>
                                    <option value="sao-miguel-do-oeste">São Miguel do Oeste</option>
                                    <option value="sao-nicolau">São Nicolau</option>
                                    <option value="sao-paulo">São Paulo</option>
                                    <option value="sao-paulo-das-missoes">São Paulo das Missões</option>
                                    <option value="sao-paulo">São Paulo</option>
                                    <option value="sao-pedro-da-serra">São Pedro da Serra</option>
                                    <option value="sao-pedro-das-missoes">São Pedro das Missões</option>
                                    <option value="sao-pedro-do-butia">São Pedro do Butiá</option>
                                    <option value="sao-pedro-do-sul">São Pedro do Sul</option>
                                    <option value="sao-roque">São Roque</option>
                                    <option value="sao-salvador-do-sul">São Salvador do Sul</option>
                                    <option value="sao-sebastiao-do-cai">São Sebastião do Caí</option>
                                    <option value="sao-sepe">São Sepé</option>
                                    <option value="sao-valentim">São Valentim</option>
                                    <option value="sao-valentim-do-sul">São Valentim do Sul</option>
                                    <option value="sao-valerio-do-sul">São Valério do Sul</option>
                                    <option value="sao-vendelino">São Vendelino</option>
                                    <option value="sao-vicente-do-sul">São Vicente do Sul</option>
                                    <option value="sapiranga">Sapiranga</option>
                                    <option value="sapucaia-do-sul">Sapucaia do Sul</option>
                                    <option value="sarandi">Sarandi</option>
                                    <option value="seberi">Seberi</option>
                                    <option value="sede-nova">Sede Nova</option>
                                    <option value="segredo">Segredo</option>
                                    <option value="selbach">Selbach</option>
                                    <option value="senador-salgado-filho">Senador Salgado Filho</option>
                                    <option value="sentinela-do-sul">Sentinela do Sul</option>
                                    <option value="serafina-correa">Serafina Corrêa</option>
                                    <option value="serio">Sério</option>
                                    <option value="serro-largo">Serro Largo</option>
                                    <option value="sertanopolis">Sertanópolis</option>
                                    <option value="sertao">Sertão</option>
                                    <option value="sertao-santana">Sertão Santana</option>
                                    <option value="sete-de-setembro">Sete de Setembro</option>
                                    <option value="severiano-de-almeida">Severiano de Almeida</option>
                                    <option value="severino-de-almeida">Severino de Almeida</option>
                                    <option value="silveira-martins">Silveira Martins</option>
                                    <option value="sinimbu">Sinimbu</option>
                                    <option value="sobradinho">Sobradinho</option>
                                    <option value="sobral">Sobral</option>
                                    <option value="soledade">Soledade</option>
                                    <option value="sombrio">Sombrio</option>
                                    <option value="soturno">Soturno</option>
                                    <option value="sto-antonio-do-sudoeste">Sto. Antonio do Sudoeste</option>
                                    <option value="tabai">Tabaí</option>
                                    <option value="tapejara">Tapejara</option>
                                    <option value="tapera">Tapera</option>
                                    <option value="tapes">Tapes</option>
                                    <option value="taquara">Taquara</option>
                                    <option value="taquari">Taquari</option>
                                    <option value="taquaruçu-do-sul">Taquaruçu do Sul</option>
                                    <option value="taubate">Taubaté</option>
                                    <option value="tavares">Tavares</option>
                                    <option value="tenente-portela">Tenente Portela</option>
                                    <option value="terra-de-areia">Terra de Areia</option>
                                    <option value="teutonia">Teutônia</option>
                                    <option value="tiete">Tietê</option>
                                    <option value="tio-hugo">Tio Hugo</option>
                                    <option value="tiradentes">Tiradentes</option>
                                    <option value="tiradentes-do-sul">Tiradentes do Sul</option>
                                    <option value="toropi">Toropi</option>
                                    <option value="torres">Torres</option>
                                    <option value="tramandai">Tramandaí</option>
                                    <option value="travesseiro">Travesseiro</option>
                                    <option value="tres-arroios">Três Arroios</option>
                                    <option value="tres-cachoeiras">Três Cachoeiras</option>
                                    <option value="tres-coroas">Três Coroas</option>
                                    <option value="tres-de-amio">Três de Amio</option>
                                    <option value="tres-de-maio">Três de Maio</option>
                                    <option value="tres-forquilhas">Três Forquilhas</option>
                                    <option value="tres-palmeiras">Três Palmeiras</option>
                                    <option value="tres-passos">Três Passos</option>
                                    <option value="trindade-do-sul">Trindade do Sul</option>
                                    <option value="triunfo">Triunfo</option>
                                    <option value="trs-passos">Trs Passos</option>
                                    <option value="tucunduva">Tucunduva</option>
                                    <option value="tunas">Tunas</option>
                                    <option value="tupanci-do-sul">Tupanci do Sul</option>
                                    <option value="tupancireta">Tupanciretã</option>
                                    <option value="tupandi">Tupandi</option>
                                    <option value="tuparandi">Tuparandí</option>
                                    <option value="tuparendi">Tuparendi</option>
                                    <option value="turuçu">Turuçu</option>
                                    <option value="turvo">Turvo</option>
                                    <option value="ubiretama">Ubiretama</option>
                                    <option value="ugranopolis">Ugranópolis</option>
                                    <option value="uniao-da-serra">União da Serra</option>
                                    <option value="unistalda">Unistalda</option>
                                    <option value="uruguaiana">Uruguaiana</option>
                                    <option value="vacaria">Vacaria</option>
                                    <option value="vale-do-sol">Vale do Sol</option>
                                    <option value="vale-real">Vale Real</option>
                                    <option value="vale-verde">Vale Verde</option>
                                    <option value="vanini">Vanini</option>
                                    <option value="venancio-aires">Venâncio Aires</option>
                                    <option value="vera-cruz">Vera Cruz</option>
                                    <option value="veranopolis">Veranópolis</option>
                                    <option value="vespasiano-correa">Vespasiano Corrêa</option>
                                    <option value="viadutos">Viadutos</option>
                                    <option value="viamao">Viamão</option>
                                    <option value="vicente-dutra">Vicente Dutra</option>
                                    <option value="victor-graeff">Victor Graeff</option>
                                    <option value="vila-flores">Vila Flores</option>
                                    <option value="vila-langaro">Vila Lângaro</option>
                                    <option value="vila-maria">Vila Maria</option>
                                    <option value="vila-nova-do-sul">Vila Nova do Sul</option>
                                    <option value="vista-alegre">Vista Alegre</option>
                                    <option value="vista-alegre-do-prata">Vista Alegre do Prata</option>
                                    <option value="vista-gaucha">Vista Gaúcha</option>
                                    <option value="vitoria-das-missoes">Vitória das Missões</option>
                                    <option value="westfalia">Westfália</option>
                                    <option value="westphalen">Westphalen</option>
                                    <option value="xangri-la">Xangri-Lá</option>
                                    <option value="xaxim">Xaxim</option>



                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h3><label>E-mail:</label></h3>
                            </td>
                            <td>
                                <input type="email" name="email" required placeholder="nome@dominio.com">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h3><label>Senha:</label></h3>
                            </td>
                            <td>
                                <input type="password" name="senha" required>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h3><label>CPF:</label></h3>
                            </td>
                            <td>
                                <input type="text" name="cpf" required>
                            </td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="2" class="botoes_form"><br>
                                <input type="submit" value="Cadastrar" class="button">
                                <input type="reset" value="Limpar" class="button">
                            </td>
                        </tr>
                    </tfoot>
                </table>
            </form>
        </div>
    </section>
    <footer class="rodape">
        <div class="rodapediv">
            <p class="rodape_texto">© Todos Direitos reservados</p>
        </div>
    </footer>
</body>

</html>