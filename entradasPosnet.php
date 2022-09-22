<?php session_start(); // Se inicia la sesión para el flash.

#~~~~~# Protección en los datos de visita #~~~~~#

function alert($msg) { return "<span class='badge text-bg-danger'>$msg</span><br>"; }

//date_default_timezone_set("America/Argentina/Buenos_Aires");
//$hoy = date("Y-m-d", strtotime("now"));
//$fecha = date("Y-m-d", strtotime("last day of +2 month"));

#~~~~~# Protección en los datos de visita #~~~~~#

if(!empty($_POST['fecha'])) $fecha = $_POST['fecha']; // Se pregunta si el campo está lleno, y se almacena, o se hacer un warning.
else { $_SESSION['FLASH'] .= alert("La fecha de visita es requerida..."); $rebotar = true; }

if(!empty($_POST['horario'])) { $horario = $_POST['horario']; }
else { $_SESSION['FLASH'] .= alert("El horario de visita es requerido..."); $rebotar = true; }

#~~~~~# Protección en los datos del representante #~~~~~#

if(!empty($_POST['nombre'])) $nombre = $_POST['nombre'];
else { $_SESSION['FLASH'] .= alert("El nombre del responsable es requerido..."); $rebotar = true; }

if(!empty($_POST['apellido'])) $apellido = $_POST['apellido'];
else { $_SESSION['FLASH'] .= alert("El apellido del responsable es requerido..."); $rebotar = true; }

if(!empty($_POST['celular'])) $celular = $_POST['celular'];
else { $_SESSION['FLASH'] .= alert("El celular del responsable es requerido..."); $rebotar = true; }

if(!empty($_POST['mail'])) $mail = $_POST['mail'];
else { $_SESSION['FLASH'] .= alert("El email del responsable es requerido..."); $rebotar = true; }

if(!empty($_POST['remail'])) $remail = $_POST['remail'];
else { $_SESSION['FLASH'] .= alert("La confirmación de email es requerida..."); $rebotar = true; }

#~~~~~# Se rebota el formulario #~~~~~#

if(isset($rebotar)) echo ("<script>window.history.back()</script>"); // Primero intenta volver hacia atras para no perder los cambos completados.

//if(isset($rebotar)) header($_SERVER["HTTP_REFERER"]); // Si no existe historial, redirecciona de una al formulario.