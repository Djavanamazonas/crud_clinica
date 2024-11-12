<?php
require 'conexao.php';

$sql = "SELECT nome_paciente, data_consulta, hora_consulta FROM agendamentos";

$result = mysqli_query($pdo, $sql);

if ($result) {
    $agendamentos = mysqli_fetch_all($result, MYSQLI_ASSOC);
} else {
    $agendamentos = [];
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultas Marcadas</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css"> 
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Consultas Marcadas</h1>
        <div class="table-responsive">
            <table class="table table-bordered table-hover">
                <thead class="thead-light">
                    <tr>
                        <th>Nome do Paciente</th>
                        <th>Data da Consulta</th>
                        <th>Hora da Consulta</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($agendamentos as $agendamento): ?> 
                        <tr>
                            <td><?php echo $agendamento['nome_paciente']; ?></td>
                            <td><?php echo date('d/m/Y', strtotime($agendamento['data_consulta'])); ?></td>
                            <td><?php echo $agendamento['hora_consulta']; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <div class="text-right mt-3">
            <a href="cadastrar_paciente.php" class="btn btn-primary">Voltar ao Cadastro</a>
        </div>
    </div>
</body>
</html>
