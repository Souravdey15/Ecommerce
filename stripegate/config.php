<?php 
    require_once('vendor/autoload.php');
    
   /* $stripe =[
        secret_key  => getenv('sk_test_TFMwIfqmePAbYnk3wSQoT5Tr009A6F3DXI'),
        publishable_key=> getenv('pk_test_U8xBxW5MaeiNj5ssxgMHbn6c00wcPKLuPt');
        \Stripe\Stripe::setApiKey($stripe['secret_key']);];*/
    $stripe = array(
 	"secret_key"  => getenv('sk_test_TFMwIfqmePAbYnk3wSQoT5Tr009A6F3DXI'),
     "publishable_key" => getenv('pk_test_U8xBxW5MaeiNj5ssxgMHbn6c00wcPKLuPt')
);
 	\Stripe\Stripe::setApiKey($stripe['secret_key']);
?>