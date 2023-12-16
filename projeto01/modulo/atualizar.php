<?php

include('./conexao.php');



function updateTable(){
    $conexao = getConnection();

    $dados = array(
        'id' => 5,
        'senha' => "MUDOUUUUU"
    );


    try {
        $stmt = $conexao->prepare("UPDATE usuario SET senha=:senha WHERE id=:id");
        //$stmt->bindValue(':nome', $dados['nome']);
        //$stmt->bindValue(':nickname', $dados['nickname']);
        $stmt->bindValue(':senha', $dados['senha']);
        $stmt->bindValue(':id', $dados['id']);
        $status = $stmt->execute();
        echo "Atualizado";
        return $status;
    } catch (PDOException $th) {
        echo $th->getMessage() . '<br>';
        return false;
    } finally {
        $conexao = null;
    }
}
updateTable();
?>