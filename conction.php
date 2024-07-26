<?php
//conction
$server = "localhost";
$root = "root";
$password = "";
$databasename = "taske_manager";
$connect = new mysqli($server, $root, $password, $databasename);

if ($connect-> connect_errno ){
    echo "no connect".$connect-> connect_errno;
    exit();
}
else{
    echo "connect";
};


//html forms


















?>