<?php
include('./conexao.php');


function insertTable(){
    $conexao = getConnection();

    $dados = array(
        'nome' => "Daniel",
        'nickname' => "NICK_Daniel",
        'senha' => "ASDFG12345"
    );
    
    try {
        $stmt = $conexao->prepare("INSERT INTO crud.usuario (nome, nickname, senha) VALUES (:nome, :nickname, :senha)");
        $stmt->bindValue(':nome', $dados['nome']);
        $stmt->bindValue(':nickname', $dados['nickname']);
        $stmt->bindValue(':senha', $dados['senha']);
        $status = $stmt->execute();
        echo "dados inseridos";
        return $status;
    } catch (PDOException $th) {
        echo $th->getMessage() . '<br>';
        return false;
    } finally {
        echo "fim do insert";
        $conexao = null;
    }
}

insertTable();

?>