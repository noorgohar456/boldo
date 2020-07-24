<!DOCTYPE html>
<html lang="eng">
    <head>
        <meta charset="UTF-8">
        <title>Bol do</title>
        <link href="/Boldo/StyleSheet/signUp.css" type="text/css" rel="stylesheet">
    </head>
    <body>
    	
			<?php 
				if(isset($_POST['submit'])){
					
					$con = new mysqli("localhost","root","","bol");
                    if(!$con){
                        die("can't connect to database");
                    }
                    $sql = "insert into users(username,email,password) values('".$_POST['username']."','".$_POST['email']."','".$_POST['password']."')";
                    $result = $con->query($sql);
                    $con->close();
                    if($result){
                    	echo "hello";
						echo "<div class='thank-you'>";
						echo "<div class='close-1'> </div>";
						echo "<h4>THANK YOU</h4>";
						echo "<p>Your account has been created and a
						verification email has been sent.
						Click on the link included in the email
						to activate your account.  
						</p>";
						echo "<br/>";

						echo "<br/>";
						echo "<a href='signin.php' class='thank-you-button'>ok</a>";
	                    }
				}
				if(isset($_POST['submit2'])){
					echo "hello";
					echo "<div class='thank-you'>";
					echo "<div class='close-1'> </div>";
					echo "<h4>THANK YOU</h4>";
					echo "<p>You will be informed about new Posts.
					Coll posts will be mailed to you as soon as they are posted and reviewed.  
					</p>";
					echo "<br/>";

					echo "<br/>";
					echo "<a href='index.php' class='thank-you-button'>ok</a>";

					$con = new mysqli("localhost","root","","bol");
                    if(!$con){
                        die("can't connect to database");
                    }
                    $sql = "insert into subcribers(email) values('".$_POST['email']."')";
                    $result = $con->query($sql);
                    $con->close();
				}
			?>
			
			
			
		</div>

    </body>
</html>