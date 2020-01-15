<?php
session_start();
if(!(isset($_SESSION['fname'])) && $_SESSION['fname']=='')
    header('Location: /volunteer/index.php');
?>