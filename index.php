<!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" >
     <title>Index Page</title>
 </head>
 <body>
 <h1>
    Welcome
</h1>
<form action = "index.php" method = "POST" enctype="multipart/form-data">
    <input type = "text" name = "AuthorFullName" placeholder = "AuthorFullName"/><br>
    <input type = "email" name = "Authoremail" placeholder = "AuthorEmail" /><br />
    <input type = "text" name = "AuthorAddress" placeholder="AuthorAddress" /><br />
    <input type = "date" name = "AuthorDateOfBirth" placeholder="AuthorDateOfBirth"/><br>
    <label id = "AuthorSus" name = "AuthorSus"> Author Suspended</label><br>
    <input type="radio" id = "AuthorSus" name="AuthorSus" value="Yes">
    <label for="yes">Yes</label>
    <input type="radio" id="AuthorSus" name="AuthorSus" value="no">
    <label for="no">No</label><br>
    <input type = "submit" name = "add" value = "Add" /><br />
    
     
 </body>

 </html>
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

if (isset($_POST["add"])) {
        $AuthorFullName = $_POST["Authorfullname"];
        $AuthorEmail = $_POST["Authoremail"];
        $AuthorAddress = $_POST["AuthorAddress"];
        $AuthorBiography = $_POST["AuthorBiography"];
        $AuthorDateOfBirth = $_POST["AuthorDateOfBirth"];
        $AuthorSus = $_POST["AuthorSus"];
        

        $data =  array_combine($keyDetails, $valuesDetails);
        $insert_sql = $MSQL->insert("Author", $data);

    if ($insert_sql == true) {
                header("Location: ./viewauthorS.html");
                exit;
        "}else{\n";
                print "Error: ";
    }

}


 