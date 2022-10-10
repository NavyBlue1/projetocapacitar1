<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../frontend/agenda.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="../assets/csn-icon-white-background.png">
    <title>Agenda</title>

</head>


<body>
    <header>
        <img src="../assets/FCSN_Capacitar_BRANCO.png" alt="Não foi possivel carregar a imagem">
        <a id="nome">Giovanna #82</a>
        <input type="image" alt="imagem" id="imagem">
    </header> 
    <form action="../backend/agenda/php/Controller/adicionarAgendamento.php" method="post">
        <div id="cartao">
            <span id="text-span">Agendar vaga:</span>
            <label id="periodo" for="periodo">Período:</label>
            <select id="combox-periodo" name="periodo">
                <option value="Manhã">Manhã</option>
                <option value="Tarde">Tarde</option>
            </select>
            <label id="setor" for="setor">Setores:</label>
            <select id="combox-setor" name="setor">
                <option value="GOVERNANCA">Governança</option>
                <option value="GARCON">Garçom</option>
                <option value="BARMAN">Barman</option>
                <option value="COZINHA">Cozinha</option>
                <option value="RECEPCAO">Recepção</option>
            </select>
            <input type="submit" name="confirmar" id="confirmar" value="Confirmar">

            <div class="calendar">
                <div class="calendar-header">
                    <span class="month-picker" id="month-picker">Fevereiro</span>
                    <div class="year-picker">
                            <span class="year-change" id="prev-year">
                                <span><</span>
                            </span>
                            <span id="year">2021</span>
                            <span class="year-change" id="next-year">
                                <span>></span>
                            </span>
                    </div>
                </div>
                <div class="calendar-body">
                    <div class="calendar-week-day">
                        <div>Dom</div>
                        <div>Seg</div>
                        <div>Ter</div>
                        <div>Qua</div>
                        <div>Qui</div>
                        <div>Sex</div>
                        <div>Sáb</div>
                    </div>
                    <div class="calendar-days">
                    </div>
                </div>
                <div class="calendar-footer">
                    <div class="legend">
                        <div class="circle" id="Disponivel">
                        <span>Disponível</span>
                    </div>
                        <div class="circle" id="Cheio">
                        <span>Cheio</span>
                    </div>
                        <div class="circle" id="Indisponivel">
                        <span>Indisponível</span>
                    </div>
                    </div>
                </div>
                <div class="month-list"></div>
            </div>
            </div>
        </div>
    </form>
    <div id="overlay"></div>
    <script src="../backend/agenda/js/calendario.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
</body>

</html>
