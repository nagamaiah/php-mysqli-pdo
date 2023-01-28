<?php 

echo "<pre>";
$host = 'localhost';
$database = 'pdo';
$username = 'root';
$password = '';

// set DSN data source name
$dsn = 'mysql:host='. $host .';dbname='. $database;

try {
    //create a PDO instance
	$pdo = new PDO($dsn,$username,$password);
	$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);
	
	// PDO query
	// $stmt = $pdo->query('select * from posts');
	// PDO::FETCH_OBJ
	// PDO::FETCH_ASSOC
	// while($row = $stmt->fetch(PDO::FETCH_ASSOC))
	// {
	// 	print_r($row);
	// }

	// PREPARED STATEMENTS (prepare & execute)
	//A. POSITIONAL params
		// $stmt = $pdo->prepare('select * from posts where id = ?');
		// $stmt->execute([5]);
		// print_r($stmt->fetch());

		// $stmt = $pdo->prepare('select * from posts where id = ? && title = ?');
		// $stmt->execute([3,'testtt']);
		// print_r($stmt->fetch());

	//B. NAMED params
	// 1. add record
	// $title = 'test4567';
	// $body = 'test4567 body goes here.....';
	// $author = 'author4567';
	// $stmt = $pdo->prepare('insert into posts (title,body,author) values (:titlevar, :bodyvar, :authorvar)');
	// $stmt->execute(['titlevar'=>$title,'bodyvar'=>$body,'authorvar'=>$author]);

	//2. read record
		// $stmt = $pdo->prepare('select * from posts where id = :id && title = :title');
		// $stmt->execute(['id'=>3,'title'=>'testtt']);
		// print_r($stmt->fetch());

		// $stmt = $pdo->prepare('select * from posts');
		// $stmt->execute([]);
		// print_r($stmt->fetchAll(PDO::FETCH_ASSOC));

		// $stmt = $pdo->prepare('select * from posts order by id desc');
		// $stmt->execute([]);
		// print_r($stmt->fetchAll());

	//3. update recored
		
		// var_dump($stmt);

	// // GET ROW COUNT
	// 	$sql = 'select * from posts where is_published = ?';
	// 	$stmt = $pdo->prepare($sql);
	// 	$stmt->execute([1]);
	// 	echo 'Rows count '.$stmt->rowCount();
	
	//search data
	// $search = '%test%';
	// $stmt = $pdo->prepare('select * from posts where title like ?');
	// $stmt->execute([$search]);
	// print_r($stmt->fetchAll());

	// $title = 'title_update';
	// $body = 'updated body goes here.....';
	// $author = 'updated author4567';
	// $id = 3;
	// $stmt = $pdo->prepare('update posts set title=:post_title, body=:post_body, author=:post_author where id = :post_id ');
	// $stmt->execute(['post_title'=>$title,'post_body'=>$body,'post_author'=>$author,'post_id'=>$id]);


	// 3. DELETE recored
	// $id = 5;
	// $stmt = $pdo->prepare('delete from posts where id = :post_id');
	// $stmt->execute(['post_id'=>$id]);
	// echo "post deleted";

	// $stmt = $pdo->prepare("select concat(title, ',', created_at) as post_detail from posts where id = :id");
	// $stmt = $pdo->prepare("select concat(title, '<--->', created_at) as post_detail from posts where id = :id");
	// $stmt = $pdo->prepare("select concat(id,title, author, created_at) as post_detail from posts where id = :id");
	// $stmt = $pdo->prepare("select concat(id,title, nuLL, created_at) as post_detail from posts where id = :id");  //returns null

	// $stmt = $pdo->prepare("select p.title pt,concat_ws('---',p.title,p.author,p.created_at) as post_detail, author pauthor from posts as p where id = :id"); 
	// $stmt->bindValue('id',3,PDO::PARAM_INT);
	// $stmt->execute();

	// $stmt = $pdo->prepare("select * from posts where mod(id,2) = 0");  // even rows
	// $stmt = $pdo->prepare("select * from posts where mod(id,2) <> 0");  // odd rows
	// $stmt = $pdo->prepare("select * from posts where title like ? and author like ?");
	$stmt = $pdo->prepare("select * from posts where title like ? or author like ?");
	
	$stmt->execute(['%test%','%test%']);
	print_r($stmt->fetchAll(PDO::FETCH_ASSOC));


} catch (PDOException $e) {
    // throw new pdoDbException($e);
    echo $e->getMessage();
    // print_r($e);
}





?>
