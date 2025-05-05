<?php
if(isset($_POST['subscribe'])){
	$userEmail=$_POST['email'];
	if(filter_var($userEmail,FILTER_VALIDATE_EMAIL)){
                include 'contactUs/function.php';
                $obj=new Contact();
                $res=$obj->subscription($_POST);
                if($res==true){
                    echo "<script>alert('Thank you for subscribing us !')</script>";
                }else{
                    echo "<script>alert('Something Went wrong!!')</script>";
                }
	}
    else{
     echo "<script>alert('Invalid email !')</script>";
    }
}
?>
<script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="validator.js"></script>
<script src="contact.js"></script>