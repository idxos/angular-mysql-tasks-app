<?php 
require_once '../includes/db.php'; // The mysql database connection script
if(isset($_GET['task'])){
$task = $_GET['task'];
$status = "0";
$created = time();

$query="INSERT INTO tasks(task,status,created_at)  VALUES ('$task', '$status', '$created')";
$result = $mysql->query($query) or die($mysql->error.__LINE__);

$result = $mysql->affected_rows;

echo $json_response = json_encode($result);
}
?>