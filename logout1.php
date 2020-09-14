<?php
    session_start();
    session_destroy();
    header('location:Costumerpage.php');
?>