<?php
    /**
     * Created by PhpStorm.
     * User: Andreas
     * Date: 06.05.17
     * Time: 10:39
     */
    
//    define('ROOTPATH', $_SERVER["DOCUMENT_ROOT"]."/portfolio/");//dev path
      define('ROOTPATH', $_SERVER["DOCUMENT_ROOT"]);//live path
    
    $ipaddress = $_SERVER['REMOTE_ADDR'];
    $page = "http://{$_SERVER['HTTP_HOST']}{$_SERVER['PHP_SELF']}";
    $page .= (!empty($_SERVER['QUERY_STRING'])) ? $_SERVER['QUERY_STRING'] : "";
    $referrer = (!empty($_SERVER['HTTP_REFERER'])) ? $_SERVER['HTTP_REFERER'] : "";
    $datetime = time();
    $useragent = $_SERVER['HTTP_USER_AGENT'];
    $remotehost = @getHostByAddr($ipaddress);
    
// Create log line
    $logline = $ipaddress . '|' . $referrer . '|' . $datetime . '|' . $useragent . '|' . $remotehost . '|' . $page . "\n";

// Write to log file:
    $logfile = ROOTPATH.'/log/logfile.txt';

// Open the log file in "Append" mode
    if (!$handle = fopen($logfile, 'a+'))
    {
        die("Failed to open log file:" .ROOTPATH);
    }

// Write $logline to our logfile.
    if (fwrite($handle, $logline) === FALSE)
    {
        die("Failed to write to log file");
    }
    
    fclose($handle);