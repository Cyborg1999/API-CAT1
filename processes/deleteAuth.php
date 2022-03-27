<?php
/**
 * Registration File
 * Php version: *^7
 * 
 * @category Class
 * 
 * @package MyPackage
 * 
 * @author "Name: <Cyborg1999.github.com>"
 *  
 * @license * 
 *   
 * @link localhost
 */
require_once "Autoload.php";

if (isset($_POST["delete"])) {

    $data = array("id", "fullname", "email", "image", "password");
    $delete_sql = $MSQL->delete("user", $data);
}
