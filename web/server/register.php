<?php

    $conn = pg_connect("host=localhost port=5432 user=postgres password=228456 dbname=postgres");
    if ( !$conn){
        die("PostgreSQL connection failed");
    }
    echo "PostgreSQL connection sucessfully";
    
    var_dump ($_POST);

    if(isset($_POST['submit'])){
        
        $name = $_POST['completeName'];
        $cpf = $_POST['cpf'];


        $query = "INSERT INTO client(cpf_cli, name_cli) VALUES ('$cpf','$name')";
        echo $query;
        $result = pg_query($conn, $query);
    };

?>



