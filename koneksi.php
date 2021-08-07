<?php
    $host ="localhost";
    $username ="root";
    $password ="";
    $database ="dbperpus";
    
    $koneksi = mysqli_connect("localhost", "root", "", "dbperpus");

    if(!$koneksi){
        echo 'Not Connected Database' .mysqli_connect_error();
    }

        
?>