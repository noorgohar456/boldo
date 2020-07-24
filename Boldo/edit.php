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
            .create_post{
                margin:30px;
                margin-right: 400px;
            }
        </style>
    </head>
    <body>
        
        <div id="header">
            <?php include("../../htdocs/Boldo/header.php"); ?>
        </div>
         
                <br>
                <div class="create_post">
                      <?php
                                 $con = new mysqli("localhost","root","","bol");
                                if(!$con){
                                    die("can't connect to database");
                                }
                                $sql = "select * from postsnew where id='".$_GET['id']."';";
                                $result = $con->query($sql);
                                $row = $result->fetch_assoc();
                                 ?>
                                    
                            <div class="form-group">
                            <label>Title</label>
                            <input type="text" class="form-control" value="<?php echo $row['title'];?>" name="title" disabled="disabled">
                            </div>
                            <div class="form-group">
                            <label>Body</label>
                            <textarea class="form-control"  name="body"
                            disabled="disabled"><?php echo $row['body'];?></textarea>
                            </div>
                            <?php 
                                $con->close();
                            ?>
                    <form action="" method="POST">
                        <div class="form-group">
                            <label>New Title</label>
                            <input type="text" class="form-control" name="title" placeholder="Add Title" >
                            </div>
                            <div class="form-group">
                            <label>New Body</label>
                            <textarea class="form-control"  name="body"  placeholder="Add body" ></textarea>
                            <input type="hidden" value="<?php echo $_GET['id'];?>" name="id">
                        </div>
                   
                        <input type="submit" class="btn btn-primary" value="Update" name="submit">   
                </form>
                <?php    
                    if(isset($_POST['submit'])){
                        $con = new mysqli("localhost","root","","bol");
                        if(!$con){
                            die("can't connect to database");
                        }
                        $sql = "update postsnew set title='".$_POST['title']."',body='".$_POST['body']."' where id=".$_POST['id'];
                        $result = $con->query($sql);
                        if($result){
                            header('Location: /Boldo/post.php?id='.$_POST['id']);
                             exit();
                        }
                        else 
                            echo "can't post it. try again";
                       $con->close();
                    }
                    
                 ?>
             </div>
      <div id="footer">

                <?php include("../../htdocs/Boldo/footer.php"); ?>
        </div>
    </body>
</html>