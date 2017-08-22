<?php
require 'db_conn.php';
$query = $conn->query('SELECT * FROM task');
if ($query) {
	while ($results = $query->fetch_assoc()){
		echo $results['id'].'<br>';
		echo $results['chore'].'<br>';
		echo $results['personnel'].'<br>';
		echo $results['status'].'<br>';
	}
	echo '<br>';
}