<?php 
    
    require_once "config.inc.php";

    // if (!$cfg['debug']) {
    //     error_reporting(0);
    //     // ob_start('ob_gzhandler');
    // } else {
    //     error_reporting(E_ALL ^ E_NOTICE);
    // }

    require_once "rb.php";
    
    // need a try catch
    R::setup("mysql:host={$cfg['db']['host']};dbname={$cfg['db']['dbname']}",$cfg['db']['username'],$cfg['db']['password']);
    $query = R::getRedBean();

    


?>