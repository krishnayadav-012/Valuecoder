<?php 
// Product Details 
// Minimum amount is $0.50 US 
// Test Stripe API configuration 

define('STRIPE_API_KEY', 'sk_test_51LGh6VSEGcajMbiYNtG6lNxxSVPe9P3jNrEvmjpoVO89E2qGTOBTuScz584pEtyrw5ZCgbVclcX8mQfJobFtUs4J00mLCYZX0E');  
define('STRIPE_PUBLISHABLE_KEY', 'pk_test_51LGh6VSEGcajMbiYLXW0AgfZCipCcBmDPXTWCEKaewlNfMzD8bpO8LACFLQwsikvy9YXU49bg8fE3IKx2m5zI8F000KlW5MLC6'); 

define('STRIPE_SUCCESS_URL', 'https://beta.vinove.com/valuecoders-v2/stripe_pay/success.php'); 
define('STRIPE_CANCEL_URL', 'https://beta.vinove.com/valuecoders-v2/stripe_pay/cancel.php'); 

// Database configuration   
define('DB_HOST', 'sql107.byethost3.com');  
define('DB_USERNAME', 'b3_32023620');  
define('DB_PASSWORD', 'mSvTUMfB_CxifG5');  
define('DB_NAME', 'b3_32023620_stripePayment'); 
?>



