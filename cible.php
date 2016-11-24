<?php
    session_start();
    $_SESSION[$_SESSION['index']] = $_POST['Pseudo'];
    $_SESSION[$_SESSION['index']] = $_POST['Titre'];
    $_SESSION[$_SESSION['index']] = $_POST['Message'];
    $_SESSION['index'] += 1;
    header('index.php');
?>