<?php
session_start();
unset($_SESSION['hash']);
header('Location: /');
?>