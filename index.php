<?php

/**
 * Index File
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

 if (isset($_POST["signup"])) {
    $fullname = $_POST["fullname"];
    $email = $_POST["email"];
    $image = $_POST["image"];
    $password = $_POST["password"];
    $cfm_password = $_POST["cfm_password"];

    $data =  array_combine($keyDetails, $valuesDetails);
    $insert_sql = $MSQL->insert("Author", $data);

    if ($insert_sql == true) {
        header("Location: ./");
        exit;
    } else {
        print "Error: ";
    }


?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Index Page</title>
 </head>
 <body>
 <h1>
    Welcome
</h1>
<form action = " " method = "POST" enctype="multipart/form-data">
    <input type = "text" name = "AuthorFullName" placeholder = "AuthorFullName"/><br>
    <input type = "email" name = "Authoremail" placeholder = "AuthorEmail" /><br />
    <input type = "text" name = "AuthorAddress" placeholder="AuthorAddress" /><br />
    <label id = "AuthorSus" name = "AuthorSus"> Author Suspended</label><br>
    <input type="radio" id="html" name="yes" value="Yes">
    <label for="yes">Yes</label><br>
    <input type="radio" id="AuthorSus" name="no" value="no">
    <label for="no">No</label><br>
    <input type = "submit" name = "add" value = "Add" /><br />
    <input type = "submit" name="delete" value = "Delete"/></br>
    <input type = "submit" name="update" value="Update"/><br>
     
 </body>
 </html>