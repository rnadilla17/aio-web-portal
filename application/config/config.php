<?php
$servername = "localhost";
$username = "netumm_db";
$password = "masuk123@321";

try {
    $conn = new PDO("mysql:host=$servername;dbname=netumm_db", $username, $password); 
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
     
function find_dir($template)
{   
    $a =  $template."/";
    return  $a;
}
?>
    