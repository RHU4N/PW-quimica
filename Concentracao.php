<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="styleden.css">

    <title>Document</title>
</head>
<body>
<header>
      <nav>
        <a class="logo" href="/">Quimica DS</a>
        <div class="mobile-menu">
          <div class="line1"></div>
          <div class="line2"></div>
          <div class="line3"></div>
        </div>
        <ul class="nav-list">
          <li><a href="index.php">Início</a></li>
          <li><a href="index2.php">PV=NRT</a></li>
          <li><a href="densidade.php">Desnsidade</a></li>
          <li><a href="Concentracao.php">Concentração</a></li>
        </ul>
      </nav>
    </header>
    <div class = "container col-md-9 col-sm-9">
      <div class="jumbotron bg-dark">
    <h1 align="center"><font color="white">Calculo Concentracao da solucao</font></h1>
    </div>
    <center>
      <div class = "shadow p-3 mb-5 bg-body">
    <form method="get">
                <h4>Digite a massa do soluto:</h4> <input type="number" name="valor1">
                <h4> Digite o Volume da solução :</h4> <input type="number" name="valor2">
                <br><br>
                <input type= "submit" value="Calcular" class="btn btn-success">
    </form> 
    </div>
    <?php

if($_GET){

 $mSoluto=$_GET['valor1'];

 $vSolucao=$_GET['valor2'];

 $c=$mSoluto/$vSolucao;



 echo ("<h4><b><center>O valor da concentração é $c</center></h4></b>");



}

?>

    </center>
    <main></main>
    <script src="mobile-navbar.js"></script>
  

    </div>
</body>
</html>