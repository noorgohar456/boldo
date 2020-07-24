<?php 
	$post_id = $_GET['id'];
	$con = new mysqli("localhost","root","","bol");
    if(!$con){
        die("can't connect to database");
    }
    $sql = "delete from postsnew where id=$post_id";
    $result = $con->query($sql);
    if($result){
    	header('Location: /Boldo/myposts.php');
		exit();
    }
    else {
    	header('Location: /Boldo/myposts.php');
		exit();
    }


?>