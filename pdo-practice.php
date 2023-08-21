<?php

// $options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ];  //this is optional
// $pdo = new PDO($dsn,$dbuser,$dbpass,$options);
// $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ); // PDO::FETCH_OBJ , PDO::FETCH_ASSOC
// dsn -> Domain Source Name

//  # Main PDO Classes 
// -- PDO : Represents a connection between PHP and Database
// -- PDOStatement : Represents a prepared statement and after executed an associated result.
// -- PDOException : Represents errors raised by PDO.

try {
    $dsn = "mysql:host=localhost;dbname=joins";
    $pdo = new \PDO($dsn, 'root', 'MySql@123');
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);
    echo "<pre>";
    
    // PDO query
    // $query = "select * from movies order by id desc limit 3";
    // $stmt = $pdo->query($query);
    // print_r($stmt->fetchAll(PDO::FETCH_ASSOC));

    // $query = "select * from movies where id = 3";
    // $stmt = $pdo->query($query);
    // print_r($stmt->fetch());
    // print_r($stmt->fetch(PDO::FETCH_ASSOC));



    // PREPARED STATEMENTS (prepare & execute & fetch)

    // $movie_id = 4;

    // positional params
    // $query = "select name, genre from movies where id = ?";
    // $stmt = $pdo->prepare($query);
    // $stmt->execute([$movie_id]);
    // // $result = $stmt->fetch();
    // $result = $stmt->fetch(PDO::FETCH_ASSOC);
    // print_r($result);

    // named params
    // $query = "select name, genre from movies where id = :m_id";
    // $stmt = $pdo->prepare($query);
    // $stmt->execute(['m_id'=>$movie_id]);
    // // $result = $stmt->fetch();
    // $result = $stmt->fetch(PDO::FETCH_ASSOC);
    // print_r($result);

    // $str = "%ction%";
    // $query = "select name, genre from movies where genre like ?";
    // $stmt = $pdo->prepare($query);
    // $stmt->execute(["%ction%"]);
    // // $stmt->execute([$str]);
    // $result = $stmt->fetchAll();
    // print_r($result);

    // $str = "%ction%";
    // $query = "select name, genre from movies where genre like :search";
    // $stmt = $pdo->prepare($query);
    // $stmt->execute(['search' => $str]);
    // $result = $stmt->fetchAll();
    // echo $stmt->rowCount();
    // print_r($result);


    // $name = "sukumar";
    // $rem = 60;
    // $query = "insert into directors (name, remuniration) values (:dir_name, :dir_remun)";
    // $stmt = $pdo->prepare($query);
    // $stmt->execute(['dir_name' => $name, 'dir_remun' => $rem]);
    // echo "insert success";


    // $req_name = "sukumar";
    // $query = "update directors set name = :dir_name, remuniration = :dir_rem where name = :req_name";
    // $stmt = $pdo->prepare($query);
    // $stmt->execute(['dir_name' => 'tarun baskar', 'dir_rem' => 30, 'req_name' => $req_name]);
    // echo "update success";

    // $id = 14;
    // $query = "delete from directors where id = :dir_id";
    // $stmt = $pdo->prepare($query);
    // $stmt->bindValue('dir_id', $id, PDO::PARAM_INT);
    // $stmt->execute();
    // echo "delete success";



// $movie_name = 'RRR';
// $query = "select m.name movie_name, m.language as movie_language, a.name as actor_name, d.name as director_name from movies m 
//             join actors a on m.actor_id = a.id 
//             join directors d on m.director_id = d.id 
//             where m.name = :movie_name ";

// $stmt = $pdo->prepare($query);
// $stmt->bindValue('movie_name', $movie_name, PDO::PARAM_STR);
// $stmt->execute();
// $result  = $stmt->fetchAll();
// echo $stmt->rowCount();
// print_r($result);
// stdClass Object
// (
//     [movie_name] => RRR
//     [movie_language] => Telugu
//     [actor_name] => Ram charan
//     [director_name] => Rajmouli
// )





} catch (\Throwable $th) {
    echo "<h4 style='color:red'>PDO Error : {$th->getMessage()}</h4>";
}