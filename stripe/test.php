<?php
include 'includes/session.php'; 
require('config.php');
//print_r($_SESSION);
?>

<form action="submit.php" method="post">
	<script
		src="https://checkout.stripe.com/checkout.js" class="stripe-button"
		data-key="<?php echo $publishableKey?>"
		data-email="<?php echo $_SESSION['email']?>"
		data-amount="<?php echo $_GET['amt']*100?>"
		<?php $_SESSION['amt']=$_GET['amt']*100*73.58?>
		data-name="EcommerceSite"
		data-description="Paying for chart items to EcommerceSite"
		data-image=""
		data-currency="usd"
	></script>

</form>