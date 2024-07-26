<?php



function dbconn() {                                                //Data Base Connection//
    $server = "localhost";
    $user = "root";
    $password = "";
    $dbname = "db_kdh";

    $conn = new mysqli($server, $user, $password, $dbname);

    if ($conn->connect_error) {
        die("Database connection error" . $conn->connect_error);
    } else {
        return $conn;
    }
}







function dataclean($input=null){
    return htmlspecialchars(stripslashes(trim($input)));
}

?>