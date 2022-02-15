<?php
include("./barco.php");

session_start();
?>
<html lang="pt-br">
  <head>
    
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" type="text/css" href="../css/estilo.css">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
      <title>ovelira contabilize</title>
  </head>
  <body>
        
          
        

          <form action="consulta.php" method="POST"> 
            <h2>Entrar</h2>
              <input type="email" name="email" placeholder="Email">
              <input type="password" name="senha" placeholder="Senha">
              <button type="submit" value="btn">Enviar</button>
         </form>
        

     

       
  </body>
  </html>