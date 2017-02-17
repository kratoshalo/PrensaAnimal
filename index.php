<?php

  error_reporting(E_ALL ^ E_NOTICE);
  switch ($_GET['op']) {
    case 'quienes':
      $contenido = "php/quienes.php";
      $titulo = "Quienes Somos";
      break;
      case 'contacto':
        $contenido = "php/contacto.php";
        $titulo = "Contactanos";
        break;
    default:
      $contenido = "php/inicio.php";
      $titulo = "Prensa Animal";
      break;
  }

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title><?php echo $titulo; ?></title>
    <link rel="stylesheet" href="css/general.css">
    <link rel="stylesheet" href="css/inicio.css">
  </head>
  <body>
    <section id="contenido">
      <header>
        <img src="images/sistema/prensalogo.jpg" alt="">
      </header>
      <nav>
        <ul>
          <li><a href="index.php" class="cambio">Inicio</a></li>
          <li><a href="?op=quienes" class="cambio">Quienes Somos</a></li>
          <li><a href="#" class="cambio">Secciones</a></li>
          <li><a href="?op=contacto" class="cambio">Contacto</a></li>
        </ul>
      </nav>

      <section id ="principal">
        <?php include_once($contenido); ?>
      </section>

      <footer>&copy;Prensa Animal</footer>
    </section>
  </body>
</html>
