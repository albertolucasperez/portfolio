<?php
session_start();
$error = "";

// Ejemplo de validación de contraseña
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $expectedPassword = "alberto2026"; // Cambia este valor por la contraseña deseada
    if ($_POST['password'] === $expectedPassword) {
        $_SESSION['auth'] = true;
        header("Location: work.php");
        exit;
    } else {
        $error = "Wrong password.";
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Password</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
        href="https://fonts.googleapis.com/css2?family=Averia+Serif+Libre:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&family=Cormorant+Garamond:ital,wght@0,300..700;1,300..700&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap"
        rel="stylesheet">
  <!-- Vinculamos el CSS del login -->
  <link rel="stylesheet" href="css/login.css">
</head>
<body>
  <div class="container">
    <!-- Puedes descomentar esta sección si tienes un ícono de candado -->
    <!-- <div class="lock-icon"></div> -->
    
    <h1>Password</h1>

    <!-- Formulario de login -->
    <form action="login" method="POST">
      <input type="password" name="password" placeholder="Password" required>
      <button type="submit">Submit</button>
    </form>

    <!-- Mensaje de error (si lo hay) -->
    <?php if (!empty($error)): ?>
      <p class="error"><?php echo $error; ?></p>
    <?php endif; ?>
  </div>
</body>
</html>
