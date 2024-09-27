<?php
include_once('oauth.php');

// Pesapal parameters
$token = $params = null;

// PesaPal Sandbox is at http://demo.pesapal.com. Use this to test your
// developement and  when you are ready to go live change to
// https://www.pesapal.com

// Register a merchant account on demo.pesapal.com and use the merchant key for
// testing. When you are ready to go live make sure you change the key to the
// live account registered on www.pesapal.com

 // $consumer_key = '6JdMvJRXbriqxfNmysvgcD0rGCjefFN3';
// $consumer_key = 'xN2px0DCDBvE9cIr+zEK2fH00/sRjTJW';
$consumer_key = '6JdMvJRXbriqxfNmysvgcD0rGCjefFN3';

// Use the secret from your test account on demo.pesapal.com. When you are ready
// to go live make sure you  change the secret to the live account registered on
// www.pesapal.com
 // $consumer_secret = 'jy3XgaKw9nK0Pwr2+nllq0/KTu4=';
// $consumer_secret = 'z3pein/v6RLsbAhyuC1zHffXahg=';
$consumer_secret = 'jy3XgaKw9nK0Pwr2+nllq0/KTu4=';

// Change this to https://www.pesapal.com/API/PostPesapalDirectOrderV4 when you
// are ready to go live

 //$iframelink = 'http://demo.pesapal.com/api/PostPesapalDirectOrderV4';
$iframelink = 'https://www.pesapal.com/API/PostPesapalDirectOrderV4';
                   
// Get form details
// $amount         = (integer) $_POST['amount'];
// $desc           = $_POST['description'];
// $type           = $_POST['type'];                       // default value = MERCHANT
// $reference      = $_POST['reference'];                  // unique order id of the transaction, generated by merchant
// $first_name     = $_POST['first_name'];                 // optional 
// $last_name      = $_POST['last_name'];                  // optional
// $email          = $_POST['email'];
// $phonenumber    = '';                                   // ONE of email or phonenumber is required


$amount         = 9000;
$desc           ="Cash Transfer";
$type           = "Cash";                       // default value = MERCHANT
$reference      = 0005;                  // unique order id of the transaction, generated by merchant
$first_name     = "burudddd";                 // optional 
$last_name      = "Swedi";                  // optional
$email          ="buruwawa@gmsil.com";
$phonenumber    = '';                                   // ONE of email or phonenumber is required


// Define the callback_url i.e the redirect url, this page that will handle the
// response from pesapal.
$callback_url = 'http://www.YOURDOMAIN.com/pesapal_callback.php';

// The format is standard so no editing is required. Encode the variable using
// htmlentities.
$post_xml = '<?xml version="1.0" encoding="utf-8"?>';
$post_xml .= '<PesapalDirectOrderInfo ';
$post_xml .= 'xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" ';
$post_xml .= 'xmlns:xsd="http://www.w3.org/2001/XMLSchema" ';
$post_xml .= 'Amount="'.$amount.'" ';
$post_xml .= 'Description="'.$desc.'" ';
$post_xml .= 'Type="'.$type.'" ';
$post_xml .= 'Reference="'.$reference.'" ';
$post_xml .= 'FirstName="'.$first_name.'" ';
$post_xml .= 'LastName="'.$last_name.'" ';
$post_xml .= 'Email="'.$email.'" ';
$post_xml .= 'PhoneNumber="'.$phonenumber.'" ';
$post_xml .= 'xmlns="http://www.pesapal.com" />';
$post_xml = htmlentities($post_xml);

$consumer = new OAuthConsumer($consumer_key, $consumer_secret);

// Construct the OAuth Request URL & post transaction to pesapal
$signature_method = new OAuthSignatureMethod_HMAC_SHA1();
$iframe_src = OAuthRequest::from_consumer_and_token($consumer, $token, 'GET', $iframelink, $params);
$iframe_src -> set_parameter('oauth_callback', $callback_url);
$iframe_src -> set_parameter('pesapal_request_data', $post_xml);
$iframe_src -> sign_request($signature_method, $consumer, $token);

// Display pesapal iframe and pass in iframe_src
?>
<iframe src="<?php echo $iframe_src; ?>" width="100%" height="800px"  scrolling="no" frameBorder="0">
    <p>Browser unable to load iFrame</p>
</iframe>