<?php
function run($query)
{
    include('dbconfiguration.php');
    mysqli_query($conn, $query);
}

run('CREATE TABLE users(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    full_studentName varchar(200),
    matric_no varchar(200),
    email varchar(200),
    password varchar(200)
)');



run('CREATE TABLE scorerecord(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    user_id int,
    result int,
    created_at timestamp DEFAULT CURRENT_TIMESTAMP
)');




run('CREATE TABLE admin(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    username varchar(200),
    password varchar(200)
)');


run("INSERT INTO `admin` (`id`, `username`, `password`) VALUES (NULL, 'admin', MD5('admin'))");

?>