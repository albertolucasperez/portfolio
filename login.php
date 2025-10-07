<?php
session_start();
$error = "";

// Ejemplo de validación de contraseña
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $expectedPassword = "alberto2025"; // Cambia este valor por la contraseña deseada
    if ($_POST['password'] === $expectedPassword) {
        $_SESSION['auth'] = true;
        header("Location: work");
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