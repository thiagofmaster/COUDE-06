
<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = 'crud';
$conexao = null;

function getConnection(){
    global $servername;
    global $username;
    global $password;
    global $dbname;
    global $conexao;

    try {
        if ($conexao != null) {
            return $conexao;   
        }      
        $conexao = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Execução da função conexão<br>";
        return $conexao;
    } catch (PDOException $th) {
        echo "Falha ao execultar a função Conexão<br>";
        echo $th->getMessage(); 
    }
}

getConnection();

?>