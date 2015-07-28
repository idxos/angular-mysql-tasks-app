<?php 
require_once '../includes/db.php'; // The mysql database connection script
if(isset($_GET['taskID'])){
$taskID = $_GET['taskID'];

$query="delete from tasks where id='$taskID'";
$result = $mysql->query($query) or die($mysql->error.__LINE__);

$result = $mysql->affected_rows;

echo $json_response = json_encode($result);
}
?>