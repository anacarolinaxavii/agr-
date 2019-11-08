<?php
 try 
 {include 'includes/conexao.php';
if(isset($_REQUEST['atualizar']))

{
$sql = "UPDATE curso SET nome = ? where id = ?";
$stmt=$conexao->prepare($sql);
$stmt->bindparam(1, $_request['nome']);
$stmt->bindparam(2,$_request['id_curso']);
$stmt->execute();

$stmt = $conexao->prepare("SELECT * from CURSO WHERE ID =? ");
$stmt->bindparam(1,$_REQUEST['ID_CURSO']);
$STMT->execute();

}

if(isset($_request['excluir']))
{
    $stmt =$CONEXAO->prepare("DELETE FROM curso  where id =?");
    $stmt->bindparam(1, $_REQUEST['id_curso']);
    $stmt->execute();
    header("location: lista_curso.php");
}
$stmt =$CONEXAO->prepare("SELECT* FROM curso  where id =?");
    $stmt->bindparam(1, $_REQUEST['id_curso']);
    $stmt->execute();
    $CURSO =$STMT->fechObject();
} catch(exception $e) {
    echo $e->getmessge();
}
?>
<link href="css/estilo.css" type="text/css" rel="stylesheet"/>
<?php include_once 'includes/cabecalho.php'?>
<div>
<fieldset>
<legend>cadastro de curso</legend>
<form action = "editar_curso.php?atualizar=true">
<label> nome:
<input type="text " name="nome" requiredvalue="<?= $curso->nome ?>"/>
</label>
<a href="editar_curso.php?excluir=true&id=<?= $curso->id ?>">excluir</a>
<button type="submit">salvar</button>
</form>
</fieldset>
</div>