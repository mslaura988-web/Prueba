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
  <meta charset="utf-8">
  <title>Formulario Estudiantil</title>
  <style>
    /* === RESETEO BÁSICO === */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: "Poppins", sans-serif;
    }

        /* --- MENÚ SUPERIOR --- */
    nav {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      background-color: rgba(240, 240, 240, 0.8);
      z-index: 3; /* Encima del fondo y overlay */
    }

     .menu-principal {
       list-style:none; 
       display:flex; 
       justify-content:center; 
       padding:14px 0; 
       margin:0;
    
    }

    .menu-principal li {
       margin:0 20px; 
    }

    .menu-principal a { 
      text-decoration:none; 
      color:#333; 
      font-weight:600; 
      padding:6px 12px; 
      border-radius:6px; 
      transition:0.2s; 
    }

    .menu-principal a:hover { 
       background:#f7dcd6; 
       color:#b34700; 
    }

   .menu-principal a.activo {
      background: #f7dcd6;
      color: #b34700;
    }

    body {
      background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.6)),
    url('img fondo.jpg') no-repeat center  scroll;      background-size: cover;
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      color: #222;
    }

    .container {
      background: #ffffffcc;
      padding: 40px;
      border-radius: 16px;
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.4);
      width: 95%;
      max-width: 600px;
      backdrop-filter: blur(6px);
      text-align: center;
      margin-top: 120px;
    }

    h2 {
      color: #004aad;
      margin-bottom: 20px;
      font-size: 28px;
      font-weight: 700;
      text-transform: uppercase;
      letter-spacing: 1px;
    }

    form {
      display: flex;
      flex-direction: column;
      gap: 12px;
    }

    input[type="text"],
    input[type="email"] {
      width: 100%;
      padding: 10px 12px;
      border: 1.5px solid #ccc;
      border-radius: 8px;
      font-size: 15px;
      transition: 0.3s;
    }

    input[type="text"]:focus,
    input[type="email"]:focus {
      border-color: #004aad;
      outline: none;
      box-shadow: 0 0 6px rgba(0, 74, 173, 0.4);
    }

    input[type="submit"],
    input[type="reset"] {
      background: #004aad;
      color: white;
      border: none;
      border-radius: 8px;
      padding: 12px;
      cursor: pointer;
      font-weight: bold;
      transition: 0.3s;
    }

    input[type="reset"] {
      background: #999;
    }

    input[type="submit"]:hover {
      background: #0061d5;
    }

    input[type="reset"]:hover {
      background: #777;
    }

    .btns {
      display: flex;
      justify-content: space-between;
      gap: 10px;
      margin-top: 15px;
    }

    footer {
      margin-top: 20px;
      font-size: 13px;
      color: #555;
    }

  </style>
</head>

<body>

  <nav>
    <ul class="menu-principal">
      <li><a href="index.html">Inicio</a></li>
      <li><a href="formulario_estudiante.php"  class="activo">Formulario Estudiantil</a></li>
      <li><a href="acercad.html">Acerca del Instituto</a></li>
      <li><a href="contactos.php">Contacto</a></li>
    </ul>
  </nav>

  <div class="container">
    <h2>Registro de Estudiantes</h2>
    <form action="#" method="post" name="informática">
      <input type="text" name="id_estudiante" placeholder="ID Estudiante">
      <input type="text" name="nombre" placeholder="Nombre Completo">  
      <input type="email" name="correo" placeholder="Correo Electrónico">
      <input type="text" name="cedula" placeholder="Cédula de identidad">
      <input type="text" name="telefono" placeholder="Teléfono de contacto">
      <input type="text" name="direccion" placeholder="Dirección">
      <input type="text" name="edad" placeholder="Edad">
      <input type="text" name="tarjeta_solidaridad" placeholder="¿Tarjeta Solidaridad?: Sí o No">
      <input type="text" name="centro_anterior" placeholder="Centro educativo anterior">

      <div class="btns">
        <input type="submit" name="registro" value="Enviar">
        <input type="reset" value="Restablecer">
      </div>
    </form>
    <p>&copy; 2025 Instituto Politécnico de Azua | Grupo #2 de Informática</p>
  </div>
</body>

<?php
if (isset($_POST['registro'])) {
    $id_estudiante = $_POST['id_estudiante'];
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $cedula = $_POST['cedula'];
    $telefono = $_POST['telefono'];
    $direccion = $_POST['direccion'];
    $edad = $_POST['edad'];
    $tarjeta_solidaridad = $_POST['tarjeta_solidaridad'];
    $centro_anterior = $_POST['centro_anterior'];

    $insertDatos = "INSERT INTO `datos estudiante` 
    (`id_estudiante`, `nombre`, `correo`, `cedula`, `telefono`, `direccion`, `edad`, `tarjeta_solidaridad`, `centro_anterior`) 
    VALUES ('$id_estudiante', '$nombre', '$correo', '$cedula', '$telefono', '$direccion', '$edad', '$tarjeta_solidaridad', '$centro_anterior')";

    $ejecutarInsertar = mysqli_query($enlace, $insertDatos);

    if ($ejecutarInsertar) {
        echo "<script>alert('Registro exitoso');</script>";
    } else {
        echo "<script>alert('Error al registrar');</script>";
    }
}
?>
</html>
