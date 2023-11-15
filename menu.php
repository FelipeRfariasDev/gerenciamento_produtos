<?php
session_start();
if($_SESSION['usuario_logado']==false){
    header("location: http://gerencimento_produtos.local/index.php");
}
?>
<div class="container">
<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Sistema</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav me-auto mb-2 mb-md-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/pessoa/index.php">Pessoas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Produtos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/usuarios/index.php">Usuários</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/sair.php">Sair</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
</div>