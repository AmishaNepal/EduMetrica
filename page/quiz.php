<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../css/theme.css" />
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "<title>MCQ - EduMetrica</title>";
}
else {
    echo "<title>Revise - EduMetrica</title>";
}
?>
  </head>
  <body>
    <header>
      <a href="../index.html" class="header_links" target="_blank"
        ><img src="../img/home.png" id="header_logo" alt="logo"
      /></a>
      <nav>
        <a href="../page/about.html" class="header_links" target="_blank"
          ><h4>About</h4></a
        >
        <h4>Revise</h4>
        <a href="#" class="header_links"><h4>Login</h4></a>
      </nav>
    </header>
    <article>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "<h1>Processing your submitted request...</h1>";
}
else {
    echo "<h1>Give me my hash...</h1>";
}
?>
    </article>
    <footer>
      &copy; 2024 - EduMetrica <br />
      Amisha Nepal and Manish Majhi
    </footer>
  </body>
</html>