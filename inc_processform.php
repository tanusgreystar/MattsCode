
<style type="text/css">
/*<![CDATA[*/
    a {color: white; font-family: arial, verdana, helvetica; font-size: 100%; line-height: 220%; text-align: justify;text-shadow:1px 1px black}
	a:hover {text-decoration:none}
    div.c3 {width:720px;margin:0 auto; text-align: left;color:white;font-family: arial, verdana, helvetica; font-size: 90%;margin-top:100px;line-height:150%}
    p.c2 {color: white; font-family: arial, verdana, helvetica; font-size: 100%; line-height: 220%; text-align: justify;text-shadow:1px 1px black}
    p.c1 {width:720px;text-align:center;color: white; font-family: arial, verdana, helvetica; font-size: 80%; }
	select {border-radius:5px;}
    /*]]>*/
    </style>
	</head>

<div class="c3">
<?php
require_once('../PHPMailer-master/class.phpmailer.php');
//Checks to see if submit button has been pressed 
if (isset($_POST['submit'])) { 
 
$error_msg = array();
	//checks to see if form elements are left blank
	if (empty($_POST['first_name'])) { 
		if ($_POST['membership']=='Business/Patron') {$error_msg[]="Must enter Name of Business";}
		else {$error_msg[]="Must enter First Name";}
		}
	elseif ($_POST['membership'] != 'Business/Patron' && !preg_match("/^[a-zA-Z ]*$/", $_POST['first_name']))
		{$error_msg[]="Invalid First Name entered!";}
	elseif ($_POST['membership']=='Business/Patron' && !preg_match("/^[a-z0-9 .\-]+$/i", $_POST['first_name']))
            {$error_msg[]="Invalid Business Name entered!";}					
	if (($_POST['membership']) != 'Business/Patron' && empty($_POST['last_name'])) {$error_msg[]="Must enter Last Name";}
	elseif ($_POST['membership'] != 'Business/Patron' && !preg_match("/^[a-zA-Z’'. -]+$/", $_POST['last_name']))
			    {$error_msg[]="Invalid last name entered!";
				}
	if (($_POST['membership']) == 'Household' && empty($_POST['first_name2'])) {$error_msg[]="As a 'Household' you must enter Spouse or Partner First Name";}
	elseif (!preg_match("/^[a-zA-Z ]*$/", $_POST['first_name2']))
                {$error_msg[]="Invalid First Name 2 for 'Household'";}	
	if (empty($_POST['address1'])) {$error_msg[]="Must enter Address";}
	
	if (empty($_POST['city'])) {$error_msg[]="Must enter City";}
	elseif (!preg_match("/^[a-zA-Z ]*$/", $_POST['city']))
			    {$error_msg[]="Invalid city entered.";
				}
	if (empty($_POST['zip'])) {$error_msg[]="Must enter Zip Code";}
	elseif (!preg_match("#[0-9]{5}#", $_POST['zip']))
			    {$error_msg[]="Invalid zip code entered!";
				}
	if (empty($_POST['phone'])) {$error_msg[]="Must enter Phone Number";}
	elseif (!preg_match("/^([1]-)?[0-9]{3}-[0-9]{3}-[0-9]{4}$/i", $_POST['phone']) ) {
                $error_msg[]="Invalid phone number entered!";
                    }
	if (empty($_POST['email'])) {$error_msg[]="Must enter Email Address";}
	elseif(!preg_match("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^", $_POST['email'])){
		$error_msg[]="Invalid email address entered!";
		}
	
	if(count($error_msg) > 0){
    foreach($error_msg as $e){
        echo $e . "<br />";
    }
echo "<p><a href='javascript:history.go(-1)'>Back to Form</a></p>";
		exit;
		}	
	
else {
		//variables
		if (!isset($_POST['renew'])) {$renew = "";}
		else {$renew = ($_POST['renew']);}
		$fname = ($_POST['first_name']);	
		if ($_POST['membership'] == "Household") { 
			$fname2 = ($_POST['first_name2']);			
			} else{$fname2 = "";}	
		if (!isset($_POST['last_name']) && ($_POST['membership']) == 'Business/Patron') {$lname = "";}
		elseif (isset($_POST['last_name']) && ($_POST['membership']) == 'Business/Patron') {$lname = "";}
		else {$lname = ($_POST['last_name']);}		
		$address = ($_POST['address1']);       
		if (!isset($_POST['address2'])) { $address2 = "";}	
        else {$address2 = ($_POST['address2']);}			
		$city = ($_POST['city']);
		$state = ($_POST['state']);
		$zip =  ($_POST['zip']);
		$phone = ($_POST['phone']);		
		$email = ($_POST['email']);
		$member = ($_POST['membership']);		
		$medium = ($_POST['medium']);
		$payment =($_POST['payment_type']);
		$phonearray = explode("-", $phone);  
		
		$amount = 0;
		switch ($member) {
			case "Artist/Associate1":
		    $amount = 25;
			break;		
			case "Artist/Associate2":
		    $amount = 30;
			break;
			case "Artist/Associate3":
		    $amount = 35;
			break;
			case "Artist/Associate4":
		    $amount = 40;
			break;
			case "Artist/Associate5":
		    $amount = 45;
			break;
			case "Household":
		    $amount = 40;
			break;
			case "Business/Patron":
		    $amount = 50;
			break;
			case "Benefactor":
		    $amount = 100;
			break;
			case "Corporate Founder":
		    $amount = 500;
			break;
			}
			
		
			
		if ($renew == "yes") {$display = "A member has renewed!<br /><br />";}
		    else {$display = "We have a new Member!<br /><br />";} 
		if ($fname2 !="") {$display .= $fname . " and " . $fname2 . " " . $lname . "<br />";}
		    else {$display .= $fname . " " . $lname . "<br />";}
		$display .= $address . " " . $address2 . "<br />" .
		$city . ", " . $state . " " . $zip . "<br />" .
		$phone . "<br />" .
		$email . "<br />" . 
		"Membership Type: " . preg_replace("/\d+$/","",$member) . "<br />" .
	    "Membership Fee: $" . $amount . "<br />" .
		"Medium: " . $medium . "<br /><br />";
								
		if ($payment == "paypal") { $display .=  "Payment will be confirmed through Paypal. Thanks!"; }	
		elseif ($payment == "check") { $display .=  "Payment will be sent by check/money order. Thanks!"; }
		else { $display .=  "There was an error processing payment type."; }

//sends as email 
	$mail = new PHPMailer(); // defaults to using php "mail()"

	$body = $display;
	$mail->AddReplyTo("no-reply@umvaonline.org");
	$mail->FromName = 'UMVA Membership Form';
	$mail->Host = 'www.umvaonline.org';
	$mail->AddAddress('matthew_stacey@ymail.com', "Matt Stacey");
	$mail->AddAddress('jskippy@roadrunner.com', "Jacqueline Bennett");
	if ($fname2 !="") {$mail->Subject = "UMVA Membership Update ". $fname . " and " . $fname2 . " " . $lname;}
		else {$mail->Subject = "UMVA Membership Update " . $fname . " " . $lname;}
	$mail->AltBody = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test
	$mail->MsgHTML($body);
	if(!$mail->Send()) {
		echo "Mailer Error: " . $mail->ErrorInfo . "<br />";
		} 
		else {
			echo "Your info has been submitted!<br /><br />";
			}					
	if ($fname2 !="") {echo $fname . " and  " . $fname2 . " " . $lname . "<br />";}
		else {echo $fname . " " . $lname . "<br />";}
	echo $address . " " . $address2 . "<br />" .
	$city . ", " . $state . " " . $zip . "<br />" .
	$phone . "<br />" .
	$email . "<br />" .
	"Membership Type: " . preg_replace("/\d+$/","",$member) . "<br />" .
	"Membership Fee: $" . $amount . "<br />" .
	"Medium: " . $medium . "<br /><br />";
	if ($payment == "paypal") { echo "Click Pay Now to Complete Transaction.<br />"; }	
	elseif ($payment == "check") { echo "Please send check or money order to: <br /><br />Jacqueline Bennett<br />PO Box 51<br />
	Walpole, Maine 04573<br /><br />Thank you!<br /><br /><a href='../index.php?page=home' target='_parent'>Home</a>"; exit;}			
	}
}

 
?>
<br />

<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_xclick">
<input type="hidden" name="business" value="NC3DJAZLDWU34">
<input type="hidden" name="lc" value="US">
<input type="hidden" name="item_name" value="Membership/Contribution">
<input type="hidden" name="button_subtype" value="services">
<input type="hidden" name="no_note" value="0">
<input type="hidden" name="cn" value="Leave a message for UMVA">
<input type="hidden" name="no_shipping" value="1">
<input type="hidden" name="rm" value="1">
<input type="hidden" name="return" value="http://www.umvaonline.org/index.htm">
<input type="hidden" name="cancel_return" value="http://www.umvaonline.org/umvajoin.html">
<input type="hidden" name="currency_code" value="USD">
<input type="hidden" name="bn" value="PP-BuyNowBF:btn_paynow_LG.gif:NonHosted">
<input type="hidden" name="src" value="1">
<input type="hidden" name="cbt" value="Return to UMVA Homepage">
<input type="hidden" name="first_name" value="<?php echo $fname ?>">
<input type="hidden" name="last_name" value="<?php echo $lname ?>">
<input type="hidden" name="address1" value="<?php echo $address ?>">
<input type="hidden" name="address2" value="<?php echo $address2 ?>">
<input type="hidden" name="city" value="<?php echo $city ?>">

<input type="hidden" name="state" value="<?php echo $state ?>">
<input type="hidden" name="zip" value="<?php echo $zip ?>">
<input type="hidden" name="email" value="<?php echo $email ?>">
<input type="hidden" name="night_phone_a" value="<?php echo $phonearray[0] ?>">
<input type="hidden" name="night_phone_b" value="<?php echo $phonearray[1]?>">
<input type="hidden" name="night_phone_c" value="<?php echo $phonearray[2]?>">

<input type="hidden" name="amount" value="<?php echo $amount ?>">

<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_paynow_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>
</div>
