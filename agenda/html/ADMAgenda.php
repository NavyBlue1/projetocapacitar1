<?php
require('../../database/config.php');

$stmt = $conn->prepare("SELECT * from tb_agendamentos WHERE statusAgendamento = 2");
$stmt->execute();
$results1 = $stmt->fetchAll(PDO::FETCH_OBJ);
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="../css/ADMAgenda.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="./frontend/scrollbar.css">
    <link rel="icon" type="image/x-icon" href="../../assets/csn-icon-white-background.png">
    <title>ADM Agenda</title>
</head>

<body>
    <header>
        <img src="../../assets/FCSN_Capacitar_BRANCO.png" alt="Não foi possivel carregar a imagem">
        <a id="nome">Giovanna</a>
        <input type="image" alt="imagem" id="imagem">
    </header>
    <div id="cartao">
        <span id="text-span">Gestão Agendameto:</span>
        <div id="table">
            <table class="table" id="tabela">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Setor</th>
                        <th scope="col">Data</th>
                        <th scope="col" style="margin-left:50px">Ações</th>
                    </tr>
                </thead>
                <div class="scroll">
                    <tbody>
                        <tr>
                            <?php foreach ($results1 as $res) { ?>
                                <th scope="row"><?= $res->id; ?></th>
                                <td><?= $res->nomeAluno; ?></td>
                                <td><?= $res->setores_id; ?></td>
                                <td><?= $res->dataAgendamento; ?></td>
                                <td>
                                    <a href="#">
                                        <button type="button" class="btn btn-success">Confirmar</button>
                                    </a>
                                    <a href="#">
                                        <button type="button" class="btn btn-danger">Negar</button>
                                    </a>
                                </td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </div>
            </table>
        </div>
    </div>
</body>

</html>
