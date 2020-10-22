<?php
require('stripe-php-master/init.php');
$publishableKey='pk_test_51HU9CPIvkPQdPB584AQVaZjBluZIphYYiRWMu4J7Q5Oz7fGs1gC9ygKKUI4UABYJXlVqh8ggWatshAV5VVbtyom600kyp9y7cr';
$secretKey='sk_test_51HU9CPIvkPQdPB58bBGRTNMgprroPdAkHBrpyVyG5hnJI2RYzYCaYcPXOcqyQxV5e5TxuJ8j9XBzYqo3O4xyWKir00aMI92KTb';
\Stripe\Stripe::setApiKey($secretKey);
?>