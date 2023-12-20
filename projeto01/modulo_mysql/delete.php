<?php

include('./conexao.php');

$usuario_id;
function delete(int $usuario_id)
{
    $conexao = getConnection();
    try {
        $stmt = $conexao->prepare("DELETE FROM telefone WHERE id=:id");
        $stmt->bindValue(':id', $usuario_id);
        echo "Usuario deletado: ".$usuario_id;
        return $stmt->execute();
    } catch (PDOException $th) {
        echo $th->getMessage() . '<br>';
        return false;
    } finally {
        $conexao = null;
    }
}

var_dump(delete(5));

?>