<?php

// Validación del formulario
if (strlen($_POST["name"]) < 10) {
    header("location:thankyou.php?status=error");
}
echo $_POST["name"];
// Guardar registro en base de datos

// Enviar correo electronico

// Mandar a una thank you page