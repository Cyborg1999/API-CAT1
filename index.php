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
<form action = "processes/registration.php" method = "POST" enctype="multipart/form-data">
    <input type = "text" name = "AuthorFullName" placeholder = "AuthorFullName"/><br>
    <input type = "email" name = "Authoremail" placeholder = "AuthorEmail" /><br />
    <input type = "text" name = "AuthorAddress" placeholder="AuthorAddress" /><br />
    <input type = "text" name = "AuthorBiography" placeholder="AuthorBiography" /><br />
    <input type = "date" name = "AuthorDateOfBirth" placeholder="AuthorDateOfBirth"/><br>
    <label id = "AuthorSus" name = "AuthorSus"> Author Suspended</label><br>
    <input type="radio" id = "AuthorSus" name="AuthorSus" value="Yes">
    <label for="yes">Yes</label>
    <input type="radio" id="AuthorSus" name="AuthorSus" value="no">
    <label for="no">No</label><br>
    <input type = "submit" name = "add" value = "Add" /><br />
    
     
 </body>

 </html>



 