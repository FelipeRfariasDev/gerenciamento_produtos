<?php
session_start();
$_SESSION['usuario_logado']=false;
header("location: index.php");