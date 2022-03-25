<?php
    include "../include/config.php";
    session_destroy();
    $vogue->redirect('login');
?>