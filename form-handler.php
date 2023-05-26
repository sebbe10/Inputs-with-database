<?php

require 'connection.php';

if (isset($_POST['name'], $_POST['grader'])) {

    $name = $_POST['name'];
    $grader = $_POST['grader'];

    $sql = "INSERT INTO grader(name, grader) VALUES(?, ?)";
    $statement = $pdo->prepare($sql);
    $statement->execute([$name, $grader]);
}

header("Location: index.php");
