<?php
require('config.php');
include 'includes/session.php'; 
	
if(isset($_POST['stripeToken'])){
	$token=$_POST['stripeToken'];
	$data=\Stripe\Charge::create(array(
		"amount"=>$_SESSION['amt'],
		"currency"=>"inr",
		"description"=>"Paying for chart",
		"source"=>$token,
	));
echo '<pre>';
if($data['status']=='succeeded'){
	header("Location:../success.php?id=".$data['id']);
}
else{
	header("Location:../failed.php?id=".$data['id']);
}
}
?>