<?php 
session_start();
$_SESSION = [];
session_destroy();
header('Location: ../../connexion-inscription.php');