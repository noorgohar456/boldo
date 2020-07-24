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
            .posts_show{
                margin: 40px 40px;
                border:20px 20px;
            }
        </style>
    </head>
    <body>
        
        <div id="header">
            <?php include("../../htdocs/Boldo/header.php"); ?>
        </div>
        <br>
        <div class='posts_show'>
                <?php 
                    $con = new mysqli("localhost","root","","bol");
                    if(!$con){
                        die("can't connect to database");
                    }
                    $sql = "select * from postsnew";
                    $result = $con->query($sql);
                    while($row = $result->fetch_assoc()){
                        
                        if($_SESSION['userid']==$row['author_id'])
                        {
                     ?>
                        <h3><?php echo $row['title']; ?></h3>
                        <small class="created_at"><?php echo $row['created_at']; ?></small><br>
                        <p><?php echo  substr($row['body'],0,250); ?></p>

                        <p><a class="btn btn-primary" href="post.php?id=<?php echo $row['id'];?>">Read More</a></p>

                <?php 
                        }

                    }

                    $con->close();
                   
                   
                    
                ?>

            </div>

        <div id="footer">

                <?php include("../../htdocs/Boldo/footer.php"); ?>
        </div>
    </body>
</html>

