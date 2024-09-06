<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chamada</title>
    <link rel="stylesheet" href="../../Semantic-UI-CSS-master/semantic.min.css">
</head>
<body>

<?php
    include '../php/turmas_lista.php';
    $id_turma = $_GET['id_turma'];

?>

<div class="ui secondary pointing menu">
  <a class="active item" href="../index.php">
    Turmas
  </a>
  <div class="right menu">
    <a class="ui item" href="../index.php">
      ...
    </a>
  </div>
</div>
<div style="padding: 45px;">

    <div class="ui message">
        <div class="header">
            Sistema para executar chamada
        </div>
        <ul class="list">
            <li>Os alunos presentes apareceram nesta tabela, para marcar presença clique no botão "marcar presença", selecione seu nome e marque presença</li>
        </ul>
    </div>



    <h1>Alunos presentes</h1> 
    <button class="ui primary button" onclick="listarAlunos()">
        Marcar presença
    </button>
    <table class="ui very basic table" style="margin-top: 40px;">
    <thead>
        <tr>
            <th>Nome</th>
            <th>Dia</th>
            <th>Presença</th>
        </tr>
    </thead>
    <tbody>
        <?php
            $dados = $dados["turmas"];
            foreach ($dados as $key => $value) {
        ?>
            <tr>
                <td> <?php echo $value["turma"] ?></td>
                <td> <?php echo $value["periodo"] ?></td>
                <td> <i style="color: green;" class="check square outline icon large"></i> </td>
            </tr>
        <?php
            }
        ?>

        </tbody>
    </table>

    <div class="ui fullscreen modal" id="modalAlunos">
        <div class="header">Header</div>
            <div class="content">
                <p></p>
            </div>
            <div class="actions">
                <div class="ui cancel button" onclick="fecharModal()">Fechar</div>
            </div>
    </div>
</div>
</body>
</html>




<style>
    .marcarPresencaBtn{
        transition: 200ms;
    }
    .marcarPresencaBtn:hover{
        color: blue;
    }
</style>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="../../Semantic-UI-CSS-master/semantic.min.js"></script>
<script src="../../Semantic-UI-CSS-master/semantic.js"></script>

<script>
    function listarAlunos(){
        console.log("teste")
        $('#modalAlunos').modal('show');
    }
    function fecharModal(){
        $('.ui.modal').modal('close');
    }
</script>



