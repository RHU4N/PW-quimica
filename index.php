<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <title>Navbar</title>
    <link rel="stylesheet" href="style.css" />
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
    </header><br>
    <div class="container  col-md-9 col-sm-9">
    <div class=" jumbotron bg-dark">
      <h1 align ="center"><font color = "white">Seja Bem-Vindo(a)!</font></h1>
    </div><br><br>
    <h3>Formula de Clapeyron</h3>
    <div class="shadow p-3 mb-3 bg-body">
    <p>A equação de Clapeyron é uma expressão matemática proposta pelo físico-químico e engenheiro civil frânces Benoit-Pierre-Émile 
      Clapeyron e foi formulada para descrever o comportamento de um gás perfeito. Teste a equação:
         <a href = "index2.php"><font color = "blue">Clique aqui<a></font></p>
    </div><br>
    <h3>Densidade</h3>
  <div class = "shadow p-3 mb-3 bg-body">
    <p>A densidade é a relação entre a massa de um material e o seu volume (d = m/V). 
      Isso significa que a densidade é uma propriedade 
      específica de cada material e pode ser calculada para líquidos, 
      sólidos ou gases por meio da seguinte fórmula:  <a href = "densidade.php"><font color = "blue">Clique aqui<a></font></p>
  </div><br>
  <h3>Concentracao</h3>
  <div class = "shadow p-3 mb-3 bg-body">

        <p>A concentração comum das soluções indica a quantidade em massa de soluto que se encontra 
          dissolvida em um volume-padrão de solução e normalmente é expressa em g/L.
          <a href = "Concentracao.php"><font color = "blue">Clique aqui<a></font></p>
      </div>
    </div>
    <main></main>
    <script src="mobile-navbar.js"></script>
  </body>
</html>