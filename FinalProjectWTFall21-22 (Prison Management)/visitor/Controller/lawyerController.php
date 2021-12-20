<?php

require_once 'Model/db_config.php';

function getLawyer(){
    $query="select * from lawyer";
    $rs=get($query);
    return $rs;
}




?>