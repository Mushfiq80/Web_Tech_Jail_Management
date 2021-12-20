<?php

require_once 'Model/db_config.php';

function getPrisoner(){
    $query="select * from criminal";
    $rs=get($query);
    return $rs;
}




?>