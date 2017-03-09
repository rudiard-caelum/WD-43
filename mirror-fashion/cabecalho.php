<!DOCTYPE html>
<html lang="PT-BR">
  <head>
    <meta charset="UTF-8">
    <title>
      <?php echo @$cabecalho_title; ?>
    </title>
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="css/reset.css">
    <?php print @$cabecalho_css; ?>
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/mobile.css" media="(max-width: 939px)">
    <!--[if lt IE 9]>
    <script src="bower_components/html5shiv/dist/html5shiv.js"></script>
    <![endif]-->
  </head>
  <body>
  <header class="container">
    <a href="index.php">
       <h1 class="principal"><img src="img/logo.png" alt="Mirror Fashion"></h1>
    </a>
    <p class="sacola">
      Nenhum item na sacola de compras
    </p>
    <nav class="menu-opcoes">
      <ul>
        <li><a href="#">Sua Conta</a></li>
        <li><a href="#">Lista de Desejos</a></li>
        <li><a href="#">Cartão Fidelidade</a></li>
        <li><a href="sobre.php">Sobre</a></li>
        <li><a href="#">Ajuda</a></li>
      </ul>
    </nav>
  </header>
