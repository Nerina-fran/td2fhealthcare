<?php

namespace td2fhealthcenter\Connect;

class DataSource {

private $db;

function __construct($conn)

{
$this->db = $conn->connect();

}

public function getAllPaitents()
{

    $sql = "SELECT * FROM paitent";

$stmt = $this->db->prepare($sql);

if ($stmt->execute()){

    $paitents = $stmt->fetchAll(\PDO:: FETCH_ASSOC);
    return $paitents;
} else {

        return false;
    }


    }
}

