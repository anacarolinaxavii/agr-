<?php
/**
 * Arquivo para registrar os dados de um aluno no banco de dados.
 */
try
{
     include 'includes/conexao.php';

     $sql = "SELECT id, nome, cpf,
                    DATE_FORMAT('%d/Dm/%Y', data_nascimento) AS data_nasc
            FROM aluno
            ORDER BY nome ASC ";

    $stmt = $conexao->prepare($sql);
    $stmt->execute();

} catch(Exception $e) {
        echo $e->getMessage();
}
 ?>

<link href="css/estilos.css" type="text/css" rel="stylesheet" />

<?php include_once 'includes/cabecalho.php' ?>

 <table>
    <thead>
        <tr>
            <th>ID</th> <th>Nome</th> <th>CPF</th> <th>Data Nascimento</th> 
        </tr>
    </thead>
    <tbody>
    <?php while($alunos = $stmt->fetchObject()): ?>
    <tr>
        <td><?= $alunos->id ?></td> <td><?= $alunos->nome ?></td>
        <td><?= $alunos->cpf ?></td> <td><?= $alunos->data_nasc ?></td>  
    </tr>
    <?php endwhile ?>
    </tbody>
</table>



