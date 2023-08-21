<?php

// mysqli -  Mysql Improved  a PHP extension deals with database interaction
// $mysqli = new mysqli(host, username, password, dbname, port, socket);
// if any errors use $stmt->errno and $stmt->error

try {
    $mysqli = new \mysqli('localhost', 'root', 'MySql@123', 'joins');
} catch (\Throwable $th) {
    echo "<h4 style='color:red'>Mysqli Error : {$th->getMessage()}</h4>";
}


// MySqli OOPS style WITHOUT php variables (or) params

// $query = "select * from movies";
// $result = $mysqli->query($query);

// echo $result->num_rows;
echo "<pre>";
// print_r($result->fetch_all());
// print_r($result->fetch_all(MYSQLI_ASSOC));
// if you want all record with object style use type casting.  `note`: MYSQLI_OBJ not present in mysqli only MYSQLI_ASSOC

// while($row = $result->fetch_object()){
//     print_r($row);
// }
// while($row = $result->fetch_assoc()){
//     print_r($row);
// }

// Fetch single row 
// $query = "select * from movies where id = 6";
// $result = $mysqli->query($query);
// print_r($result->fetch_row());
// print_r($result->fetch_assoc());
// print_r($result->fetch_object());

// Number of rows affected by data modification queries
// $db->query("DELETE FROM users");
// echo $db->affected_rows();
// To get result rows count SELECT count(*) must be used instead of num_rows.

// $movie_name = 'RRR';
// $query = "select m.name movie_name, m.language as movie_language, a.name as actor_name, d.name as director_name from movies m 
//             join actors a on m.actor_id = a.id 
//             join directors d on m.director_id = d.id 
//             where m.name = '$movie_name'";
// echo $query;exit;
// $result = $mysqli->query($query);
// print_r($result->fetch_assoc());
// Array
// (
//     [movie_name] => RRR
//     [movie_language] => Telugu
//     [actor_name] => Ram charan
//     [director_name] => Rajmouli
// )




// ------------------------------------------------------------------------------------------------------------------------ //

// MYSQLI OBJECT PREPARED STATEMENTS
// MySqli OOPS style WITH php variables (or) params 
// MYSQLi doesn't support named placeholders(parameters). It only supports positional params (or) placeholders.
// Statements Flow
// 1. Prepare -> Execute -> Get Result -> Fetch  (OR)
// 2. Prepare -> Bind -> Execute -> Get Result -> Fetch


// $budget = 300;
// $query = "select name, budget_in_crores, genre from movies where budget_in_crores >= ?";

// $stmt = $mysqli->prepare($query);
// $stmt->execute([$budget]);
// $result = $stmt->get_result();
// // (OR)
// $stmt = $mysqli->prepare($query);
// $stmt->bind_param('i', $budget);
// $stmt->execute();
// $result = $stmt->get_result();
// print_r($result->fetch_all(MYSQLI_ASSOC));


// $id = 4;
// $query = "select name, genre from movies where id = ?";
// $stmt = $mysqli->prepare($query);
// $stmt->bind_param('i', $id);
// $stmt->execute();
// $result = $stmt->get_result();
// print_r($result->fetch_assoc());


// $id = 4;
// $query = "select name, genre from movies where id = ?";
// $stmt = $mysqli->prepare($query);
// $stmt->execute([$id]);
// $result = $stmt->get_result();
// print_r($result->fetch_assoc());


// $str = "%ction%";
// $query = "select name, genre from movies where genre like ?";
// $stmt = $mysqli->prepare($query);
// // $stmt->execute(["%ction%"]);
// $stmt->execute([$str]);
// $result = $stmt->get_result();
// print_r($result->fetch_all(MYSQLI_ASSOC));

