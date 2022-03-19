<?php
/**
 * Autoload file will contain the directories to all the file in the project
 * PHP version * ^7
 * 
 * @category Autoload
 *  
 * @package MyPackage<
 * 
 * @author " Display Name <Cyborg1999.github.com>"
 *  
 * @license * Null
 *   
 * @link * Null
 */
session_start();

require_once dirname(__FILE__) . DIRECTORY_SEPARATOR . "configs/constants.php";
require_once dirname(__FILE__) . DIRECTORY_SEPARATOR . "configs/DbConn.php";
require_once dirname(__FILE__) . DIRECTORY_SEPARATOR . "configs/config.php";

$DBConn =new DbConnect($DBTYPE, $DBHOST, $DBNAME, $DBUSER, $DBPASS, $DBPORT);

print_r($DBConn);
