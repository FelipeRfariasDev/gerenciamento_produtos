<?php
    include 'function.php';

    if($_POST){
        $nome=$_POST['nome'];
        $email=$_POST['email'];
        $senha=$_POST['senha'];
        add($nome,$email,$senha);
        header("location: index.php");
    }
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Adicionar Pessoa</title>
    <link rel="icon" href="https://www.w3schools.com/favicon.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
<?php include '../menu.php';?>
<div class="container">
    <h1>Adicionar Pessoa</h1>

    <form method="post">
        <div class="mb-3">
            <label class="form-label">Qual é o seu nome?</label>
            <input type='text' name='nome' class="form-control" placeholder='Qual é o seu nome?'>
        </div>
        <div class="mb-3">
            <label class="form-label">Qual é o seu e-mail?</label>
            <input type='email' name='email' class="form-control" placeholder='Qual é o seu e-mail?'>
        </div>
        <div class="mb-3">
            <label class="form-label">Digite sua senha</label>
            <input type='password' name='senha' class="form-control" placeholder='Qual é sua senha?'>
        </div>
        <input type='submit' class="btn btn-primary" value='salvar'>
    </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
