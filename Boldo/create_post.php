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
                    <form action="" method="POST">
                    <div class="form-group">
                        <label>Title</label>
                        <input type="text" class="form-control" name="title" placeholder="Add Title" >
                        </div>
                    <div class="form-group">
                        <label>Body</label>
                        <textarea class="form-control"  name="body"  placeholder="Add body" ></textarea>
                        </div>
                   
                    <input type="submit" class="btn btn-primary" value="Submit" name="submit">
                    
                </form>
                <?php    
                    if(isset($_POST['submit'])){
                        $con = new mysqli("localhost","root","","bol");
                        if(!$con){
                            die("can't connect to database");
                        }
                        $sql = "insert into postsnew(title,body,author_id) values('".$_POST['title']."','".$_POST['body']."','".$_SESSION['userid']."')";
                        $result = $con->query($sql);
                        if($result){
                            header('Location: /Boldo/myposts.php');
                             exit();
                        }
                        else 
                            echo "can't post it. try again";
                       
                    }

                 ?>
             </div>
      <div id="footer">

                <?php include("../../htdocs/Boldo/footer.php"); ?>
        </div>
    </body>
</html>