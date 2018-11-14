<?php 
// VALIDATE CONNECIONS DATABASES
require_once "application/config/config.php"; 
$params=isset($_GET['web'])? $_GET['web'] : null; 

   if(!empty ($params))
    {
    //STANDARD QUERY CHECK PARAMETER
    $pdo_statement = $conn->prepare("SELECT * FROM fakultas_unit where prefix ='".$params."'  ");
    $pdo_statement->execute();
    $result = $pdo_statement->fetchAll();
    
    if($result)
    {
        // FIND PREFIX 
        foreach ($result as $web) 
        {
           // DEFAULT PARAMETER
           $params_subdomain=isset($_GET['halaman'])? $_GET['halaman'] : null;
           // TEMPLATTING CONFIG
           if(!empty ($params_subdomain)){
                include find_dir('themes').$web['template']."/".$params_subdomain.".php";
           }
           else {
                include find_dir('themes').$web['template']."/index.php";
           }
        }
    }
        // cross check validate subdomain already registered to AIO SYSTEM
        else 
        {
            echo "subdomain dir belum terdaftar";
        }
    }
    
    // DEFAULT HOMEPAGE
    else 
        {
            echo "halaman utama";
        }   