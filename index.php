<?php
require "settings/init.php";

$Movies = $db->sql("SELECT * FROM Movies");

foreach ($Movies as $movie){
    echo $movie->movieName . "<br>";
}