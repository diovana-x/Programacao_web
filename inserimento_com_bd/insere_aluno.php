<?

//obter os valores do formulário
$n = $_POST["nome"];
$d = $_POST["data"];
$c = $_POST["cidade"];

//conectar para o banco de dados
include_once("conexao.php");

//criar a string com o comando SQL
$sql = "INSERT INTO alunos VALUES 
(null, '$n', '$d', '$c')";

//executar o SQL no bd
$result =$cont->query($sql);

//verificar se ao menos uma linha foi modificada no BD
if($cont->effect_rows){
    echo "<p>Registro inserido com sucesso!</p>";
}else{
    echo "<p>Nenhum registro. Tente novamente</p>";
}


//effect rows É para saber quantas linhas foram formadas
?>