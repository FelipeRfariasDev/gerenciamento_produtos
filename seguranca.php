<?php
session_start();
if($_SESSION['usuario_logado']==false){
    echo "favor realizar o login";
}
?>