<?php

$conn = pg_connect("host=localhost port=5432 user=postgres password=228456 dbname=postgres");
if ( !$conn){
    die("PostgreSQL connection failed");
}
echo "PostgreSQL connection sucessfully";

class location {
    public $address;
    public $city;
    public $state;
    public $cep;
    public $recipients_name;

    public function setAddress($address) {
        $this->address = $address;
    } 

    function getAddress() {
        return $this->address;
    }
}

// $apple = new Fruit("Apple");
// echo $apple->get_name();
?> 