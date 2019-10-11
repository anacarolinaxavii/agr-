<?php 
try 
{ 
    include 'includes/conexao.php';

    $sql = "SELECT a.id, a.nome, a.cpf, cs.nome AS curso, t.descricao AS turma, 
                   DATE_FORMAT (a.data_nascimento, '%d/%m/%y') AS data_nasc,
                   DATE_FORMAT (c.data_,atricula, '%d/%m/%y')  AS data_mat,
                   cs.nome AS curso, t.descricao AS turma 
                   FROM aluno a 
                   JOIN matricula c ON (c.id_aluno = a.id)
                   JOIN turma t ON (t.id = c.id_turma)
                   JOIN curso cs ON (cs.id = t.id_curso)
                   ORDER BY nome ASC";
                   $stmt = $conexao->prepare($sql);
                   $stmt->execute();
}catch(Exception $e) {
    echo $e->getmessage ();
}
?>
<link href="css/estilo.css" type="text/css" rel="stylesheet"/>
<?php include_once 'includes/cabecalho' ?>
<table>
<thead>
<tr>
<th>ID</th>
<th>NOME</th>
<th>CPF</th>
<th>DATA NASCIMENTO</th>
<th>CURSO</th>
<th>TURMA</th>
<th>DATA MATRICULA</th>
</tr>
</thead>
<tbody>
<?php while($matricula = $stmt->fetchobject()): ?>
<tr>
<td><?= $matricula->ID ?></td>
<td><?= $matricula->NOME ?></td>
<td><?= $matricula->CPF ?></td>
<td><?= $matricula->DATA_NASC ?></td>
<td><?= $matricula->CURSO ?></td>
<td><?= $matricula->TURMA ?></td>
<td><?= $matricula->DATA_MAT ?></td>
</tr>
<?php endwhile ?>
}