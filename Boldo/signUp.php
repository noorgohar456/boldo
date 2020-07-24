<!DOCTYPE html>
<html lang="eng">
    <head>
        <meta charset="UTF-8">
        <title>Bol do</title>
        <link href="/Boldo/StyleSheet/signUp.css" type="text/css" rel="stylesheet">
        <script type="text/javascript">
        function f3(){
			if(document.getElementById('usrpass').value=='')
			{
				document.getElementById('usrpass').setAttribute("placeholder","Please Enter 8 digit Password");
			}
		}
		function f2(){
			if(document.getElementById('usremail').value=='')
			{
				document.getElementById('usremail').setAttribute("placeholder","Please Enter a valid Email");
			}
		}
        function f1(){
			if(document.getElementById('usrname').value=='')
			{
				document.getElementById('usrname').setAttribute("placeholder","Please Enter Your Name");
			}
		}
		function validate(){
			var name=document.getElementById('usrname').value;
			var email=document.getElementById('usremail').value;
			var pass=document.getElementById('usrpass').value;
            var flag=false;
        	if(name!="" || email!="" || pass!="")
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
                <h1>SIGN UP</h1>
                <h2>Create an account to read and post great stories</h2>
            </div>
            <form action="thanks.php" method="POST" onsubmit="return validate();">
               
                    <input type="text" id="usrname" name="username" class="text" placeholder="Name" onblur="f1();">
                    <input type="text" id="usremail" name="email" class="text" placeholder="Email" onblur="f2();">
                    <input type="password"  id="usrpass" name="password" placeholder="Password" onblur="f3();">
                    <input type="submit"  value="SIGN UP" name="submit" >
            </form>
				<div class="newway">
                    <div class="but-bottom">
                    <a href="signin.php" class="account"><p>Already have an account?</p></a>
                    <a href="#" class="trouble"><p>Trouble signing in?</p></a><div class="clear"> </div></div>
                    
			</div>
            </body>
</html>