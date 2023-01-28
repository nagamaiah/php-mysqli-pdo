<?php 

echo "<pre>";
$host = 'localhost';
$username = 'root';
$password = '';
$dbname = 'testing';



// CREATE TABLE `employee` (
//    `emp_id` int(11) NOT NULL AUTO_INCREMENT,
//    `emp_name` varchar(255) NOT NULL,
//    `dept` varchar(255) NOT NULL,
//    `salary` int(25) NOT NULL,
//    PRIMARY KEY (`emp_id`)
//  ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4


// CREATE TABLE `cartt` (
//    `item_id` int(11) NOT NULL AUTO_INCREMENT,
//    `name` varchar(255) NOT NULL,
//    `quantity` int(11) NOT NULL,
//    `price` decimal(5,2) NOT NULL,
//    `sales_tax` decimal(5,2) NOT NULL DEFAULT 0.10,
//    `created_at` datetime DEFAULT current_timestamp(),
//    `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
//    PRIMARY KEY (`item_id`),
//    CONSTRAINT `CONSTRAINT_1` CHECK (`quantity` > 0),
//    CONSTRAINT `CONSTRAINT_2` CHECK (`sales_tax` >= 0)
//  ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4




//Object oriented style:
// $mysqli = new mysqli(host, username, password, dbname, port, socket);
$mysqli = new mysqli($host, $username, $password, $dbname);	

// $query = "select * from employee";
// $query = "update employee set salary = replace(salary,'8000','9000')";
// $query = "update employee set salary = replace(salary,'3000','8000') where salary=3000";
// $query = "update employee set dept = replace(dept,'mec','mechanical') where dept like '%mec%'";


$result = $mysqli->query($query);

// foreach ($result as $key => $value) {
// 	print_r($value);
// }




// select max(salary) from employee;
// select emp_name from employee where salary = (select max(salary) from employee);
// select max(salary) from employee where salary <> (select max(salary) from employee);
// select emp_name from employee where salary = (select max(salary) from employee where salary <> (select max(salary) from employee));
// select dept,count(*) from employee group by dept;




?>
