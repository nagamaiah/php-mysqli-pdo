<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

echo "<h3>Mysqli and PDO Practice</h3>";


// include('mysqli-oops-style-practice.php');
include('pdo-practice.php');


// Mysqli Statements Flow
// 1. Query() -> fetch_all(MYSQLI_ASSOC)/fetch_assoc()/fetch_object()
// 2. Prepare -> Execute -> Get Result -> Fetch  (OR)
// 3. Prepare -> Bind -> Execute -> Get Result -> Fetch

// PDO Statements Flow
// new PDO() -> query() -> fetch(PDO::FETCH_OBJ|PDO::FETCH_ASSOC)/fetchAll(PDO::FETCH_OBJ|PDO::FETCH_ASSOC)
// new PDO() -> prepare($query) -> bindValue/bindParam -> execute($placeholders) -> fetch()/fetchAll()

