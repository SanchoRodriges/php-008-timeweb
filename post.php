<?php

if (isset($_POST['user']) && $_POST['user'] !== '') {
    session_start();
    $_SESSION['user'] = $_POST['user'];
}

header('Location: /');