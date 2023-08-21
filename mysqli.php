<?php 

echo "<pre>";
$host = 'localhost';
$username = 'root';
$password = '';
$dbname = 'pdo';

$query = "select id, p.title pt,concat_ws('---',p.title,p.author,p.created_at) as post_detail, author pauthor from posts as p";
//Procedural style:
// $mysqli = mysqli_connect(host, username, password, dbname, port, socket);
$mysqli = mysqli_connect($host,$username,$password,$dbname);
$execute_query = mysqli_query($mysqli,$query);
// $result = mysqli_fetch_all($execute_query);
// $result = mysqli_fetch_assoc($execute_query);
// $result = mysqli_fetch_($execute_query);
// print_r($result);

if(!$mysqli)
{
	die('unable to connect to database'.mysqli_error());
}


//Object oriented style:
// without variables
// $mysqli = new mysqli($host, $username, $password, $dbname);
// $query = "select * from posts";
// $result = $mysqli->query($query);
// print_r($result->fetch_all(MYSQLI_ASSOC));

// $query = "select * from posts where is_published = 1";
// $result = $mysqli->query($query);
// print_r($result->fetch_assoc());
// print_r($result->fetch_object());


//with variables
// $mysqli = new mysqli(host, username, password, dbname, port, socket);
$published = 1;
$mysqli = new mysqli($host, $username, $password, $dbname);
$query = "select * from posts where is_published = ?";
$stmt = $mysqli->prepare($query);
// $stmt->bind_param("ss", $email, $password_hash); example
// $stmt->bind_param("sssi", $name, $email, $password, $id); example
$stmt->bind_param('i',$published);
$stmt->execute();
$result = $stmt->get_result();
// $all_data = $result->fetch_all(MYSQLI_ASSOC);
// print_r($all_data);

// while($row = $result->fetch_assoc()){
// 	print_r($row);
// }
// echo $result->num_rows; // return result rows

// get array of objects
// $result_object_array = [];

// while($row = $result->fetch_object()){
// 	$result_object_array[] = $row;
// }
// print_r($result_object_array);

// To fetch a single row
// $author = 'tester';
// $query = "select * from posts where author = ?";
// $stmt = $mysqli->prepare($query);
// $stmt->bind_param('s',$author);
// $stmt->execute();
// $result = $stmt->get_result();
// $rows = $result->num_rows;
// print_r($result->fetch_object());
// print_r($result->fetch_assoc());



?>
