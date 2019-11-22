<?php
/**
 * arquibo para regustrar os dados de CURSO banco de dados 
 */
 if(isset($_request['cadastrar']))
 {
     try
     {
         include 'includes/conexao.php';
         $sql = "INSERT INTO curso (nome) VALUES (?)";
         $stmt = $conexao->prepare($sql);
         $stmt >bindparam(1, $_request['nome']);
         $stmt ->execute();
     } catch (exception $e) {
         echo $e->getmessage();

     }
 }
 ?>
 <link href="css/estilo.css" type="text/css" real ="stylesheet"/>
 <?php include_once 'includes/cabecalho.php'?>
<div>
<fieldset>
<legend>cadastro de curso</legend>
<form action="cadastro curso.php?cadastrar=true">
<label> nome: <input type="text" name="nome" required /> </label>
<button type="submit">salvar</button>
</form>
</legend>
</div>