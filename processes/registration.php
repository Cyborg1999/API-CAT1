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

if (isset($_POST["add"])) {
        $AuthorFullName = $_POST["AuthorFullName"];
        $AuthorEmail = $_POST["Authoremail"];
        $AuthorAddress = $_POST["AuthorAddress"];
        $AuthorBiography = $_POST["AuthorBiography"];
        $AuthorDateOfBirth = $_POST["AuthorDateOfBirth"];
        $AuthorSus = $_POST["AuthorSus"];

        $valuesDetails = array($AuthorFullName, $AuthorEmail, $AuthorAddress, $AuthorBiography, $AuthorDateOfBirth, $AuthorSus);;
        $keyDetails = array("AuthorFullName", "Authoremail", "AuthorAddress", "AuthorBiography", "AuthorDateOfBirth", "AuthorSus");

        $data =  array_combine($keyDetails, $valuesDetails);

        $insert_sql = $MSQL->insert("authortb", $data);

    if ($insert_sql == true) {
                header("Location: ./ViewAauthors.php");
                exit;
        "}else{\n";
                print "Error: ";
    }

}