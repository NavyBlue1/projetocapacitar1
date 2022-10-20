<?php
require('../database/config.php');

$stmt = $conn->prepare("SELECT * from users WHERE id = 3");
$stmt->execute();
$results1 = $stmt->fetchAll(PDO::FETCH_OBJ);
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Relatório</title>
    <link rel="icon" type="image/x-icon" href="../assets/csn-icon-black.png">
    <link href="../frontend/Main.css" rel="stylesheet">
    <link href="../frontend/style.css" rel="stylesheet">
    
</head>

<body>
    <header>
        <img src="../assets/FCSN_Capacitar_BRANCO.png" alt="Não foi possivel carregar a imagem">
        <a id="nome" href="resumoProfissional.html">Giovanna</a>

    </header>
    <main>
    <?php foreach ($results1 as $res) { ?>
        <div id="informacoes_basicas">

            <div class="image-conteiner">
                <a><img id="imgPhoto"><?=$res->avatar?></a>
            </div>
            <a href="menu.html"><img type="image" name="Name of image button" src="../assets/edit_FILL0_wght400_GRAD0_opsz48.svg" id="img-edit" ></a>
            <div id="direita">
            
                <h1 id="negrito_nome"><?=$res->name;?></h1>
                <p>Experiência Profissional</p>
                <h3 id="negrito">Idiomas</h3>
                <p>Português, Espanhol e Inglês</p>
                <h3 id="negrito">E-mail de Contato</h3>
                <p><?=$res->email?></p>
            </div>
            <div id="esquerda">
                <h3 id="negrito"><?=$res->dtnascimento?></h3>
                <h3 id="negrito">Instituição Fulano da Silva</h3>
                <h3 id="negrito">Gênero</h3>
                <p><?=$res->genero?></p>
                <h3 id="negrito">Telefone</h3>
                <p><?=$res->telefone?></p>
                <?php } ?>
            </div>
        </div>



        <input type="file" id="flImage" name="fImage" accept="image/*">
        <script src="../backend/adicionarFoto.js"></script>
        <span id="relatorioEscrita">Relatório</span>
        <a id="adicionar-relatorio" href="editar-relatorio.html">adicionar relatorio</a>

        <div id="relatorio">
            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
            galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but
            also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s
            with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop
            publishing software like Aldus PageMaker including versions of Lorem Ipsum.
        </div>
        
        <span id="escrita-competencias">Competências</span>
        
        <div id="card-competencias">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc massa massa, tempor ac lobortis ut, dictum
            eget orci. Cras at interdum ex. Nunc nunc ipsum, iaculis id blandit vel, ultricies non elit. Vivamus arcu
            ipsum, hendrerit nec ligula vel, dignissim consequat massa. Donec pulvinar, diam eu imperdiet viverra, enim
            massa facilisis nisl, id venenatis turpis odio malesuada metus. Praesent ac odio rhoncus, mollis nisi a,
            consequat metus. Nullam rutrum tristique porta. Quisque tortor est, vehicula et ultricies a, porttitor a
            nunc. Interdum et malesuada fames ac ante ipsum primis in faucibus. Integer dapibus urna sed viverra
            ultrices. Nam et felis a turpis auctor feugiat ac id sapien.

        </div>
        <footer>
            
            <div id="esq-footer">
                <img src="../assets/logo-educac-amarelo.png" alt="Imagem Fundação CSN" id="imgPhoto-footer">
            </div>
            <div id="meio-footer">
                <ul id="t-footer">Contato</ul>
                <ul>99 9999-9999</ul>
                <ul>exemplo@gmail.com</ul>
            </div>
            <div id="dir-footer">
                <ul id="t-footer">Redes Sociais</ul>
                <ul><a id="r-Social" href="#">Instagram</a></ul>
                <ul><a id="r-Social" href="#">Facebook</a></ul>
            </div>
        
        </footer>


    </main>
</body>

</html>