<?php
function conexaoDatabase() {
    return new PDO('mysql:host=localhost;dbname=aula_php_vitor', 'root', '');
}
function getAll(){
    return conexaoDatabase()->query("select * from usuarios");
}
function add($nome,$email,$senha){
    try {
        $senha = md5($senha);
        $sql="insert into usuarios (nome,email,senha)  values ('$nome','$email','$senha')";

        $stmt = conexaoDatabase()->prepare($sql);
        $stmt->execute();
    } catch (Exception $e) {
        echo "Erro ao inserir usuário: ";
        echo ($e->getMessage());
        exit;
    }
}
function update($nome,$email,$id){
    $sql="update usuarios set nome='$nome',email='$email' where id=".$id;
    $stmt = conexaoDatabase()->prepare($sql);
    $stmt->execute();
}
function find($id){
    $sql = "SELECT * FROM usuarios where id=".$id;
    $result = conexaoDatabase()->query($sql);
    return $result->fetch(PDO::FETCH_ASSOC);;
}
function delete($id){
    $sql="DELETE FROM usuarios WHERE id=".$id;
    $stmt = conexaoDatabase()->prepare($sql);
    $stmt->execute();
}