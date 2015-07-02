<?php 
    
    require_once "config.inc.php";

    if (!$cfg['debug']) {
        error_reporting(0);
        // ob_start('ob_gzhandler');
    } else {
        error_reporting(E_ALL ^ E_NOTICE);
    }

    require_once "rb.php";
    
    // need a try catch
    // connect to db
    R::setup("mysql:host={$cfg['db']['host']};dbname={$cfg['db']['dbname']}",$cfg['db']['username'],$cfg['db']['password']);
    // $query = R::getRedBean();



    function __autoload($name) 
    {
        global $cfg;
        if (!file_exists($cfg['path']['apps'] . $name . '.class.php')) 
        {
            
            
            return false;
            
        }
        require_once($cfg['path']['apps'] . $name . '.class.php');
        return true;
    }


    function P($s) 
    {
        echo "<pre>";
        print_r($s);
        echo "</pre>";
    }

    function S($s)
    {   
        echo "<script type='text/javascript'>window.console.log('";
        echo $s;
        echo "')</script>";
    }



?>