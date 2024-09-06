<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chamada</title>
    <link rel="stylesheet" href="../Semantic-UI-CSS-master/semantic.min.css">
</head>
<body>

<?php
    include './php/turmas.php';
?>

<div class="ui secondary pointing menu">
  <a class="active item" href="./index.php">
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
            <li>Você pode marcar sua presença através deste site</li>
            <li>Para marca chamada será necessário um código passado pelo professor</li>
            <li>Por favor utilizar com consciência a lista de chamada, caso seja utilizado para marcar presença de outra pessoa, isso poderá ser identificado</li>
        </ul>
    </div>
    <table class="ui very basic table" style="margin-top: 40px;">
    <thead>
        <tr>
            <th>Turma</th>
            <th>Periodo</th>
            <th>Dias</th>
            <th>Chamada</th>
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
                <td> <?php echo $value["dias"] ?></td>
                <td> <span class="marcarPresencaBtn" style="cursor:pointer" onclick="lsitarChamada(<?php echo $value['id_turma'] ?>)"></a>Marcar presença <i style="margin-left: 5px;" class="list ol icon large"></i> </span></td>
            </tr>
        <?php
            }
        ?>

        </tbody>
    </table>
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

<script>
    function lsitarChamada(id){
        console.log(id)
    }
</script>

<script src="../Semantic-UI-CSS-master/semantic.min.js"></script>

