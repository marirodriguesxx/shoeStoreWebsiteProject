<?php
$hostname = "localhost";
$dbname = "postgres";
$username = "postgres";
$pass = "228456";

// Create connection
$db_conn = pg_connect(" host = $hostname dbname = $dbname user = $username password = $pass ");
if ( !$db_conn){
    die("PostgreSQL connection failed");
}
echo "PostgreSQL connection sucessfully";

if (isset($_POST['submit'])) {
    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];

    $query = pg_query($db_conn, "INSERT  INTO users(first_name, last_name) VALUES ('$fname','$lname');");
    if ( $query ) {
        echo  "Record Successfully Added!";
    }
}
?>