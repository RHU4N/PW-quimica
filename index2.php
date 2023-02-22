<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Navbar</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="styleden.css" />

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
          <li><a href="densidade.php">Desidade</a></li>
          <li><a href="Concentracao.php">Concentração</a></li>
        </ul>
      </nav>
    </header>
    <main> <center>
    <div class="container col-md-9 col-sm-9" >
    <div class=" jumbotron bg-dark">
<h2><font color="white">Calcule o Numero de Mols</font></h2>
</div>

<div class="shadow p-4 mb-3 bg-body">
<img src="imagem/mols.png" alt="mols" width="150" height="50">
<form method="get">
       Massa de mols<input type = "text" name="M"><br><br>
        Massa molar<input type = "text" name="mm"><br><br>
        <input type="submit" value="calcular" name="calcmols" class="btn btn-success">
    </form>
    </div>

    <?php
if($_GET)
{
$v1 = $_GET['M'];
$v2 = $_GET['mm'];
$totalm;

$totalm= ($v1/$v2);
echo "<h4><p align='center'><b> O valor de mols é $totalm </b></p></h4>";
}

?>
  <br><br><br>  
<div class="jumbotron bg-dark">
    <h1 align="center"><font color="white">Equação de Claperyon</font></h1>
</div>
<div class="shadow pg-3 mb-5 bg-body">
<h3>P*V = n*R*t</h3>    
    <form method="post">
        <select name="equacao" class="form-select" aria-label="Default select example">
            <option value="o">Selecione uma opção</option><br>
            <option value="volume">Não possuo o Volume</option><br>
            <option value="pressao">Não possuo a pressão</option><br>
            <option value="temp">Não possuo a temperatura</option><br>
        </select><br>
       <p> Pressão: <input type = "text" name="press"></p>
       <p>Volume: <input type = "text" name="volume"></p>
       <p>Temperatura: <input type = "text" name="temp" placeholder="Temperatura em °C, será convertida para K"></p>
       <p>Número de mols: <input type = "text" name="nmols"></p>
       <p>R = 0.082 </p>
       
        <input type="submit" value="calcular" name="calcger" class = "btn btn-success">
    </form>
    </div>



<?php
if($_POST)
{

$press = $_POST['press'];
$vol = $_POST['volume'];
$temp = $_POST['temp'];
$nmols = $_POST['nmols'];
$op = $_POST['equacao'];
$tempfinal;
switch ($op)
{
    case 'volume';
    $tempk = $temp+273;
    $vol = $tempk *0.082* $nmols/$press;
    echo(" <h4><p align='center'><b>Seu volume é de ". $vol ."litros </b></p></h4>");
    break;
    
    case 'pressao';
    $tempk = $temp+273;
    $press = $tempk*0.082*$nmols/$vol;
    echo("<h4><p align='center'>A pressão é de ". $press. " atm</p> </h4>");
    break;
    case 'temp';
    $temp = 0.082*$nmols;
    $tempfinal = $press*$vol/$temp;
    echo("<h4><p align='center'><b>Sua temperatura é de ". $tempfinal . " Kelvins</b></p></h4>");

}
    
}

?>
</div>
</main>
    <script src="mobile-navbar.js"></script>
    <br><br>
  </body>
</html>