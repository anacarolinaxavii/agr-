<?php
if (isset($_request['sair'])){
unset($_session['gescolar_dados_usuario'])
header("location login.com");
}

if(!isset($_session['gescola_dados_usuario'])){
    header("location login.php");
}

?>
}
        <link href="css/estilos.css" type="text/css" rel="stylesheet" />
    <head>
    <body>
        <div id="global">
            <h1>GESCOLAR<small>, Bem-vindo <?=$usuario['nome']?></small></h1>
          
          <?php include_once 'includes/cabecalho.php'?>

 </div>
 </body>
 </html>
                    
<link href="css/estilos.css" type="text/css" rel="stylesheet" />