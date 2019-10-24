<?php
$amount = 99; 
$update_status = "";
if($amount<100 && $update_status != "sent"){
@$phone=$_POST['phone'];
@$message=$_POST['message'];
$phone = "0707388027";

 // Be sure to include the file you've just downloaded
    require_once('AfricasTalkingGateway.php');
    // Specify your login credentials
    $username   = "oliver321";
    $apikey     = "86466d0ab9ff295cd13c3f3860a0f43c95ad165c68e2e267c94a199de2328bed";
    // NOTE: If connecting to the sandbox, please use your sandbox login credentials
    // Specify the numbers that you want to send to in a comma-separated list
    // Please ensure you include the country code (+254 for Kenya in this case)
    $recipients = $phone;
    // And of course we want our recipients to know what we really do
    $message    = "you account will expire,top up to avoid interuption";
    // Create a new instance of our awesome gateway class
    $gateway    = new AfricasTalkingGateway($username, $apikey);
    // NOTE: If connecting to the sandbox, please add the sandbox flag to the constructor:
    /*************************************************************************************
                 ****SANDBOX****
    $gateway    = new AfricasTalkingGateway($username, $apiKey, "sandbox");
    **************************************************************************************/
    // Any gateway error will be captured by our custom Exception class below, 
    // so wrap the call in a try-catch block
    try 
    { 
      // Thats it, hit send and we'll take care of the rest. 
      $results = $gateway->sendMessage($recipients, $message);
                
      foreach($results as $result) {
        // status is either "Success" or "error message" 
       
      }
    }
    catch ( AfricasTalkingGatewayException $e )
    {
      echo "Encountered an error while sending: ".$e->getMessage();
    }

                

  } 
             

?>

