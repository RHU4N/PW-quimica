<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="styleden.css" />
    <title>Densidade</title>
   
  </head>

  <body>
      
    <header>
      <nav>
        <a class="logo" href="#">Quimica DS</a>
        <div class="mobile-menu">
          <div class="line1"></div>
          <div class="line2"></div>
          <div class="line3"></div>
        </div>
        <ul class="nav-list">
          <li><a href="index.php">Início</a></li>
          <li><a href="index2.php">PV=NRT</a></li>
          <li><a href="densidade.php">Densidade</a></li>
          <li><a href="Concentracao.php">Concentração</a></li>
        </ul>
      </nav>
    </header>
    <main> <center>
    <div class="container col-md-9 col-sm-9" >
<div class=" jumbotron bg-dark">
<h1><font color="White">Calcule a<b> Densidade</b> de sua solução </font> </h1>
</div>
<div class = "shadow-lg pg-3 mb-5 bg-body">
<img src="imagem/densidadeFormula.jpg" alt="densidade" width="300" height="150">
<br><br>

<form method="get">
<h4>Digite a <i>Massa</i> da solução</h4></font><input type = "text" name="M"><br><br>
<h4>Digite o <i>Volume</i> da solução</h4></font><input type = "text" name="V"><br><br>
<br><br>
<input type="submit" value = "Calcular" class="btn btn-success" style="background-color blue">
        <br><br>
    </form></div>
    </div>
    <?php
        if($_GET)
        {
        $v1 = $_GET['M'];
        $v2 = $_GET['V'];
        $totalm;
        
        $total= ($v1/$v2);
        echo "<p align='center'><b> <h4>O valor da densidade dessa solução é <i> $total </i></font><h4></b></p>";
        }

    ?>
</div>
</center></main>
    <script src="mobile-navbar.js"></script>
  </body>
</html>