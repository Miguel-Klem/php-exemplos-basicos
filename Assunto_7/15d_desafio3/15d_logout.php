<?php

// Fecha a seção
session_start();
session_destroy();

// Fala aonde ela tá, e sai dela
header("Location: 15d_login.php");
exit();

?>