<?php
try {
     $db = new PDO("mysql:host=localhost;dbname=covidmiy_covid", "covidmiy_covid", "acumk6001**",array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8") );
} catch ( PDOException $e ){
     print $e->getMessage();
}
?>