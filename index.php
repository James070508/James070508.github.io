<html lang="cs-cz">
  <head>  
    <link rel="stylesheet" type="text/css" href="james070508.github.io/style.css"> 
    <meta charset="utf-8"/>  
    <title>Los Webos</title>
      <link href="style.css"rel="stylesheet"type="text/css"/>
  </head> 
  <body>
      <?php
$line = date('Y-m-d H:i:s') . " - $_SERVER[REMOTE_ADDR]";
file_put_contents('visitors.log', $line . PHP_EOL, FILE_APPEND);
?>
<div class="obalka">
<header>
<img src="Hlavicka.jpg">
</header>
<nav>
<ul>
<li><a href="index.html">Úvod</a></li>
<li><a href="programko.html">Programování</a></li>
<li><a href="ucetnictvi.html">Učetnictví</a></li>
<li><a href="site.html">Sítě</a></li>
<li><a href="kontakt.html">Kontakt</a></li>
</ul>
</nav>
<section>
  <h1>Seznam zapsaných dat</h1>
  <table>
    <tr> <p>29.11</p>
      <td> </td>
    </tr>
  </table>
  <h2>Programování</h2>
  <tr> <p>29.11</p>
      <td> </td>
    </tr>
 
  <h2>Učetnictví</h2>
  <tr> <p>29.11</p>
      <td> </td>
  </tr>
  <h2>Sítě</h2>
  <tr> <p>29.11</p>
      <td> </td>
    </tr>
</section>
<footer>
Upravil V. V. dne 29.11.2021
</footer>
</div>
  </body>
</html>