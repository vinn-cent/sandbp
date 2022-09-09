<?php
    /**
     * This is the database connection file
     * @param $servername= "localhost"
     * @param $username= "riversid_riversid"
     * @param $password= "%pazzw0rld%"
     * @param $dbname= "riversid_riversideagropro"
     */

    //declare the needed variables
    $servername= "localhost";
    $username= "riversid_riversid";
    $password= "%pazzw0rld%";
    $dbname= "riversid_riversideagropro";

    $conn=mysqli_connect($servername, $username, $password, $dbname);

    if(!$conn)
    {
        die("Database not connected!");
    }
?>