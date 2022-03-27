<?php
/**
 * View Authors File
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
// spl_autoload_register(function ($classname) {

//         include $classname . '.php';

// }
// );

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" >
    <title>Document</title>
</head>
<body>
<?php 
    if(isset($_SESSION['name'])) "{\n" 
?>
        <div style:align="right">
            <a href="logout.php" class="btn btn-info">Logout</a>
        </div>
        <div class="container">
            <h2>All records</h2>
            <table class="table table-hover table-bordered">
                
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>City</th>
                            <th>Update</th>
                            <th>Delete</th>
                        </tr>
                <?php 
                    require_once "Autoload.php";

                if ($MSQL->errorCode()) {
                        die($MSQL->errorInfo());
                }
                else "{\n";
                    $sql = "select id,name,email,city from user_data";
                    $res = $MSQL->query($sql);

                    while ($rows = $res->fetch(PDO::FETCH_OBJ)) `           
                            "{\n";
                ?>
                        <tr>
                            <td><?php echo $rows->name;?></td>
                            <td><?php echo $rows->email;?></td>
                            <td><?php echo $rows->city;?></td>
                            <td> <a href="processes/deleteAuth.php?id=<?php echo $rows->id; ?>" class="btn btn-sm btn-danger">Delete</a> </td>
                            <td> <a href="update.php?id=<?php echo $rows->id;?>" class="btn btn-sm btn-primary">Update</a> </td>
                        </tr>	
                <?php		
                        }`;

                    "}\n";
                ?>
                </table>
                <?php 

                $MSQL = null;
                ?>
                </div>
                <?php
                 }
                else {
                    header("location:index.php");
                }

                ?>

                 </body>
                </html>