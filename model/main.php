<?php
    include('database.php');
    $user = new tableUser;
    $data = $user->getAllData("Select * From user where username=123 and password=123");
    echo '<pre>';
    echo print_r($data);
    echo '</pre>';

?>