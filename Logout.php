<?php
    session_start();
    session_unset();
    session_destroy();
    header("location: Log-on_index.php")
?>