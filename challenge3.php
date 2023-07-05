<?php
    $book = [
        "L'Île au trésor" => 1881, 
        "L'Étrange Cas du docteur Jekyll et de M. Hyde" => 1886, 
        "Jardin de poèmes enfantins" => 1885
    ];
    foreach($book as $name => $year) {
        echo ("> $year - $name\n");;
      }
?>