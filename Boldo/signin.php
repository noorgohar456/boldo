<?php 
	session_start();
?>
<!DOCTYPE html>
<html lang="eng">
    <head>
        <meta charset="UTF-8">
        <title>Bol do</title>
		<link href="/Boldo/StyleSheet/signUp.css" type="text/css" rel="stylesheet">
		<script type="text/javascript">
		function redirect(){
                windows.location='localhost:2048//Boldo/index.php';
         }          	
		function f1(){
			if(document.getElementById('usrpass').value=='')
			{
				document.getElementById('usrpass').setAttribute("placeholder","Please Enter Your Password");
			}
		}
		function f2(){
			if(document.getElementById('usrname').value=='')
			{
				document.getElementById('usrname').setAttribute("placeholder","Please Enter Your Username");
			}
		}
		function validate(){
			var name=document.getElementById('usrname').value;
			var pass=document.getElementById('usrpass').value;
            var flag=false;
        	if(name!="" || pass!="")
			{
				flag=true;
			}

			return flag;
		}
	</script>
    </head>
    <body>
        
		<div class="login-form">
		

					<div class="head-info">
						<h1>SIGN IN</h1>
						<h2>Welcome back! Nice to see you</h2>
					</div>
				<form action="" method="POST" onsubmit="return validate();">
				
						<input type="text" id="usrname" name="username" class="text" placeholder="Username" onblur="f2();" >
						<input type="password" id="usrpass" name="password" placeholder="Password" onblur="f1();" >
						<input type="submit"  value="SIGN IN" name="submit">

				</form>

				<?php 
				if(isset($_POST['submit'])){
					
					$con = new mysqli("localhost","root","","bol");
                    if(!$con){
                        die("can't connect to database");
                    }
                    $sql = "select id,username,password from users;";
                    $result = $con->query($sql);
                    $flag = false;
                    $id=0;
                    if($result->num_rows>0){
                    	while($row =$result->fetch_assoc()){
                    		$user = $_POST['username'];
                    		$pass = $_POST['password'];
                    		if($user == $row['username'] and $pass == $row['password']){
                    			$flag= true;
                    			$id=$row['id'];

                    		}
                    	}
                	}
                    if($flag==true){
                    	
                    	$_SESSION['logged']=true;
                    	$_SESSION['userid']=$id;
                    	header('Location: /Boldo/index.php');
						exit();
                    	
                    }
                    else 
                    	echo "<h3 style='text-align:center;'>Incorrect username or password<h3>";
                	$con->close();
				}
				?>
				<div class="newway">
							<div class="but-bottom">
							<a href="#" class="account"><p>Forgot your password?</p></a>
							<a href="signUp.php" class="trouble"><p>Need to sign up?</p></a><div class="clear"> </div></div>
							<br>
				</div>
			</div>

        
    </body>
</html>