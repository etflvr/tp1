<?php
$host = 'mysql-db';
$db = 'tp1_db';
$user = 'hanlinh';
$pass = 'crosemont123';

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Échec de la connexion : " . $conn->connect_error);
}

$sql = "SELECT * FROM students";
$result = $conn->query($sql);

echo "<h1>Liste des étudiants</h1><ul>";
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<li>" . htmlspecialchars($row['name']) . "</li>";
    }
} else {
    echo "<li>Aucun étudiant trouvé</li>";
}
echo "</ul>";

$conn->close();
?>
