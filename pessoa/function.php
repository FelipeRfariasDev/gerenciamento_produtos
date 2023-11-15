<?php
function conexaoDatabase() {
    return new PDO('mysql:host=localhost;dbname=aula_php_vitor', 'root', '');
}
function getAll(){
    return conexaoDatabase()->query("select id,nome,email from pessoa");
}
function add($nome,$email,$data_nascimento){
    try {

        $sql="insert into pessoa (nome,email)  values ('$nome','$email')";

        $stmt = conexaoDatabase()->prepare($sql);
        $stmt->execute();
    } catch (Exception $e) {
        echo "Erro ao inserir pessoa: ";
        echo ($e->getMessage());
        exit;
    }
}
function update($nome,$email,$id){
    $sql="update pessoa set nome='$nome',email='$email' where id=".$id;
    $stmt = conexaoDatabase()->prepare($sql);
    $stmt->execute();
}
function find($id){
    $sql = "SELECT * FROM pessoa where id=".$id;
    $result = conexaoDatabase()->query($sql);
    return $result->fetch(PDO::FETCH_ASSOC);;
}
function delete($id){
    $sql="DELETE FROM pessoa WHERE id=".$id;
    $stmt = conexaoDatabase()->prepare($sql);
    $stmt->execute();
}