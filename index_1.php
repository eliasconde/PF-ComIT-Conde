<?php
  require_once('app/init.php');
?>

</!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
  <?php if ($fbauth->isLogin()): ?>
  <a href="logout.php">Cerrar Sesión</a>
<?php else: ?>
  <a href="<?php echo $fbauth->getAuthUrl(); ?>">Iniciar Sesión </a>
<?php endif; ?>
</body>
</html>