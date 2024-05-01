 <?php
$hostname= "localhost";
$bancodedados= "gerenciador_arquivo";
$usuario = "root";
$senha = "";
$conn = new mysqli($hostname,$usuario,$senha,$bancodedados);
if ($conn ->connect_errno){
    echo " Falha ao conectar: (".$conn->connect_errno . ")".$conn ->connect_error;
}

// Adicionando uma tarefa no banco de dados
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $due_date = $_POST['due_date'];
    $priority = $_POST['priority'];
    $user_id = 1 ;
    $category_id = 1;
    $status = "aberto";
    
    $stmt = $conn->prepare("INSERT INTO tasks (title, description, due_date,status, priority, user_id,category_id) VALUES (?, ?, ?, ?, ?,?,?)");
    $stmt->bind_param( "sssssii", $title, $description, $due_date,$status, $priority, $user_id,$category_id );
    $stmt->execute();
    
    if ($stmt->affected_rows > 0) {
        echo "Tarefa adicionada com sucesso!";
    } else {
        echo "Erro ao adicionar tarefa: " . $stmt->error;
    }
  
    $stmt->close();
}

$conn->close();
?>
