<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="eng">
    <head>
        <meta charset="UTF-8">
        <title>Bol do</title>
        <link rel="stylesheet" href="/bootstrap.min.css">
        <link href="/Boldo/StyleSheet/index.css" type="text/css" rel="stylesheet">
        <style type="text/css">
            .post_details{
                margin: 40px 40px;
                border:20px 20px;
            }
        </style>
    </head>
    <body>
        
        <div id="header">
            <?php include("../../htdocs/Boldo/header.php"); ?>
        </div>
                    <div class='post_details'>
                                <br>
                                <?php
                                 $con = new mysqli("localhost","root","","bol");
                                if(!$con){
                                    die("can't connect to database");
                                }
                                $sql1 = "select * from postsnew where id='".$_GET['id']."';";

                                $result1 = $con->query($sql1);
                                $row = $result1->fetch_assoc();
                                $flag=false;
                                if($_SESSION['userid']==$row['author_id']){
                                    $flag=true;
                                }
                                 ?>
                                    <h3><?php echo $row['title']; ?></h3>
                                    <small class="created_at"><?php echo $row['created_at']; ?></small><br>
                                    <p><?php echo  substr($row['body'],0,250); ?></p>
           
                    </div>
                    <?php 
                    if($flag){
                            echo "<div>";
                                    echo "<a class='btn btn-primary' style='margin-right:5px;margin-left:40px;'
                                    href='edit.php?id=".$_GET['id']."'>Edit</a>";

                                    echo "<a class='btn btn-primary' style='margin-right:5px;'
                                    href='delete.php?id=".$_GET['id']."'>Delete</a>";
                                      
                            echo "</div>";
                        }
                        $con->close();
                        ?>
        <div id="footer">

                <?php include("../../htdocs/Boldo/footer.php"); ?>
        </div>
    </body>
</html>