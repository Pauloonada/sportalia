<?php
    require('connection.php');
    
    function getMembros(){
        $sql = 'select * from feedback';
        $result = mysqli_query($mysqli, $sql);
        $feedback = mysqli_fetch_all($result, MYSQLI_ASSOC);
    }
?>