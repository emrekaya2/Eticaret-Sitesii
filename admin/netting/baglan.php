<?php

try {
$db=new PDO("mysql:host=localhost;dbname=eticaret;charset=utf8",'root','');
//echo"başaılı";
}
catch(PDOException $e) {
    echo $e->getMessage();
}

?>