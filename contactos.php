<?php 
$servidor = "localhost"; 
$usuario = "root"; 
$clave = ""; 
$baseDeDatos = "informática"; 

$enlace = mysqli_connect($servidor, $usuario, $clave, $baseDeDatos);
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Contáctanos | Instituto Politécnico de Azua</title>
  <style>
    /* --- RESETEO BÁSICO --- */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    /* --- ESTILO GENERAL --- */
    body {
      font-family: 'Segoe UI', Arial, sans-serif;
      min-height: 100vh;
      background: linear-gradient(135deg, #0052a5 0%, #0078d7 100%);
      display: flex;
      flex-direction: column;
      align-items: center;
      color: #333;
    }

    /* --- MENÚ --- */
    nav {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      background-color: #ffffff;
      box-shadow: 0 2px 8px rgba(0,0,0,0.15);
      z-index: 3;
    }

    .menu-principal {
      list-style: none;
      display: flex;
      justify-content: center;
      padding: 14px 0;
    }

    .menu-principal li {
      margin: 0 20px;
    }

    .menu-principal a {
      text-decoration: none;
      color: #004c97;
      font-weight: 600;
      padding: 6px 12px;
      border-radius: 5px;
      transition: 0.3s;
    }

    .menu-principal a:hover,
    .menu-principal a.activo {
      background-color: #e6f0ff;
      color: #002f63;
    }

    /* --- CONTENIDO PRINCIPAL --- */
    main {
      background-color: #ffffff;
      border-radius: 15px;
      box-shadow: 0 4px 20px rgba(0,0,0,0.15);
      max-width: 850px;
      margin-top: 120px;
      padding: 50px;
      z-index: 2;
      text-align: justify;
      animation: fadeIn 1s ease forwards;
    }

    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(30px); }
      to { opacity: 1; transform: translateY(0); }
    }

    h1 {
      color: #004c97;
      text-align: center;
      margin-bottom: 25px;
      font-size: 2em;
    }

    .form-group {
      margin-bottom: 18px;
    }

    label {
      display: block;
      font-weight: bold;
      margin-bottom: 6px;
      color: #002f63;
    }

    input, textarea {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccd9ff;
      border-radius: 6px;
      font-size: 16px;
      transition: border-color 0.3s;
    }

    input:focus, textarea:focus {
      outline: none;
      border-color: #0078d7;
      box-shadow: 0 0 4px rgba(0,120,215,0.3);
    }

    button {
      display: block;
      width: 100%;
      background-color: #004c97;
      color: white;
      border: none;
      padding: 12px;
      border-radius: 6px;
      font-size: 16px;
      cursor: pointer;
      transition: background-color 0.3s;
    }

    button:hover {
      background-color: #003873;
    }

    /* --- REDES --- */
    .redes {
      text-align: center;
      margin-top: 30px;
    }

    .redes h3 {
      color: #004c97;
      margin-bottom: 10px;
    }

    .redes a {
      margin: 0 12px;
      color: #004c97;
      font-size: 28px;
      transition: 0.3s;
    }

    .redes a:hover {
      color: #0078d7;
      transform: scale(1.2);
    }

/* --- LOGO --- */
.logo {
  display: block;
  margin: 20px auto; /* lo centra horizontalmente */
  border-radius: 10px;
  box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
  transition: transform 0.3s ease;
  cursor: pointer;
}

.logo:hover {
  transform: scale(1.08); /* efecto al pasar el mouse */
}

    /* --- FOOTER --- */
    footer {
      text-align: center;
      color: white;
      margin: 30px 0 15px;
      font-size: 14px;
      text-shadow: 1px 1px 2px #002f63;
    }

  </style>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">

</head>
<body>

  <nav>
    <ul class="menu-principal">
      <li><a href="index.html">Inicio</a></li>
      <li><a href="formulario_estudiante.php">Formulario Estudiantil</a></li>
      <li><a href="acercad.html">Acerca del Instituto</a></li>
      <li><a href="contactos.php" class="activo">Contacto</a></li>
    </ul>
  </nav>

  <main>

   <a href="index.html">
  <img src="https://www.politecnicodeazua.com/img/logo512.png" alt="Logo del instituto" style="height:180px;" class="logo">
</a>

    <h1>Contáctanos</h1>
    <p style="text-align:center; margin-bottom:25px;">
      Si deseas comunicarte con el <strong>Instituto Politécnico de Azua</strong> para realizar consultas, 
      solicitudes o enviar comentarios, completa el siguiente formulario y te responderemos a la brevedad posible.
    </p>

    <form action="contactos.php" method="post">
      <div class="form-group">
        <label for="nombre">Nombre completo:</label>
        <input type="text" id="nombre" name="nombre" required placeholder="Ejemplo: Maidy Arias">
      </div>

      <div class="form-group">
        <label for="email">Correo electrónico:</label>
        <input type="email" id="email" name="email" required placeholder="Ejemplo: tuemail@correo.com">
      </div>

      <div class="form-group">
        <label for="asunto">Asunto:</label>
        <input type="text" id="asunto" name="asunto" required placeholder="Motivo del mensaje">
      </div>

      <div class="form-group">
        <label for="mensaje">Mensaje:</label>
        <textarea id="mensaje" name="mensaje" rows="5" required placeholder="Escribe tu mensaje aquí..."></textarea>
      </div>

      <button type="submit">Enviar mensaje</button>
    </form>

    <div class="redes">
      <h3>Síguenos en nuestras redes institucionales</h3>
      <a href="https://facebook.com" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a>
      <a href="https://instagram.com" target="_blank" title="Instagram"><i class="fab fa-instagram"></i></a>
      <a href="https://wa.me/18095551234" target="_blank" title="WhatsApp"><i class="fab fa-whatsapp"></i></a>
      <a href="mailto:institutoazua@edu.do" title="Correo institucional"><i class="fas fa-envelope"></i></a>
    </div>
  </main>

  <footer>
    <p>&copy; 2025 Instituto Politécnico de Azua | Grupo #2 de Informática</p>
  </footer>

</body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $asunto = $_POST['asunto'];
    $mensaje = $_POST['mensaje'];

    $insertar = "INSERT INTO contacto (nombre, email, asunto, mensaje)
                 VALUES ('$nombre', '$email', '$asunto', '$mensaje')";

    $resultado = mysqli_query($enlace, $insertar);

    if ($resultado) {
        echo "<script>alert('¡Mensaje enviado con éxito!');</script>";
    } else {
        echo "<script>alert('Error al enviar el mensaje');</script>";
    }
}
?>


</html>
