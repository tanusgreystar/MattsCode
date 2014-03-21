<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Union of Maine Visual Artists</title>
<link rel="stylesheet" type="text/css" href="umva.css" />
<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
<script src="js/jQuery.js" type="text/javascript"></script>
<style type="text/css">
/*<![CDATA[*/
  
  
	div.c2 {width:340px;text-align: justify;float:left;margin-left:60px;height:100%;color:white;
          font-family: arial, verdana, helvetica; font-size: 100%;}
	a {color: white; font-family: arial, verdana, helvetica; font-size: 100%;text-shadow:1px 1px black}
	a:hover {text-decoration:none}
	a:visited {color: white; font-family: arial, verdana, helvetica; font-size: 100%;text-shadow:1px 1px black}
	table {color: white; font-family: arial, verdana, helvetica; font-size: 100%;text-shadow:1px 1px black;line-height:150%}
    p.c1 {color: white; font-family: arial, verdana, helvetica; font-size: 100%;text-shadow:1px 1px black}
	form {color:white;font-family: arial, verdana, helvetica; font-size: 100%;}
	label { 
		display:block; 
		color:white;
		font-family: arial, verdana, helvetica; font-size: 100%;
		height:22px;
		line-height:22px;
		margin-bottom:5px;
		} 

	input {border:none; border-radius: 5px;height:22px;line-height:22px;	margin-bottom:5px;padding-left:3px;-webkit-box-shadow:0 0 5px #666 inset; 
   -moz-box-shadow:0 0 5px #666 inset; 
   box-shadow:0 0 5px #666 inset;  }
   select {border:none; border-radius: 5px;height:20px;line-height:20px;-webkit-box-shadow:0 0 5px #666 inset; 
   -moz-box-shadow:0 0 5px #666 inset; 
   box-shadow:0 0 5px #666 inset;  }
   input:focus {}
   div.bottom {width:960; clear:both}
    /*]]>*/
    </style>
</head>
<body>
	<div class="c2">
            <p >Join UMVA! &nbsp;Complete this online form:
                <br />
            </p>
            <form action="inc_processform.php" method="post" onsubmit="return confirm('Please confirm payment method before submitting');">
			
                <table >
                    <tr>
                        <td colspan="2" style="line-height:23px;"><input type="checkbox" name="renew" value="yes" style="vertical-align: middle; margin: 0px;" />&nbsp;&nbsp;Check if renewing membership<br /><br />
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <input type="text" name="valid" hidden="hidden" readonly="readonly" value="true" />
                        </td>
                    </tr>
                    <tr>
                        <td >First Name:</td>
                        <td>
                            <input type="text" name="first_name" placeholder="or name of business" size="30" />
                        </td>
                    </tr>
                    <tr id="first_name2row" >
                        <td >First Name 2:</td>
                        <td ><input type="text" id="first_name2" name="first_name2"  size="30" placeholder="for households only" />
                        </td>
                    </tr>
                    <tr id="last_name_row" >
                        <td>Last Name:</td>
                        <td>
                            <input type="text" name="last_name" placeholder="leave blank if business" size="30" />
                        </td>
                    </tr>
                    <tr>
                        <td>Address:</td>
                        <td>
                            <input type="text" name="address1" size="30" />
                        </td>
                    </tr>
                    <tr><td>Address2:</td><td>    <input type="text" name="address2" size="30" placeholder="optional"></td></tr> 
                    <tr>
                        <td>City:</td>
                        <td>
                            <input type="text" name="city" size="30" />
                        </td>
                    </tr>
                    <tr>
                        <td>State:</td>
                        <td>
                            <select name="state">
                                <option value="AL">Alabama</option>
                                <option value="AK">Alaska</option>
                                <option value="AZ">Arizona</option>
                                <option value="AR">Arkansas</option>
                                <option value="CA">California</option>
                                <option value="CO">Colorado</option>
                                <option value="CT">Connecticut</option>
                                <option value="DE">Delaware</option>
                                <option value="DC">District Of Columbia</option>
                                <option value="FL">Florida</option>
                                <option value="GA">Georgia</option>
                                <option value="HI">Hawaii</option>
                                <option value="ID">Idaho</option>
                                <option value="IL">Illinois</option>
                                <option value="IN">Indiana</option>
                                <option value="IA">Iowa</option>
                                <option value="KS">Kansas</option>
                                <option value="KY">Kentucky</option>
                                <option value="LA">Louisiana</option>
                                <option value="ME">Maine</option>
                                <option value="MD">Maryland</option>
                                <option value="MA">Massachusetts</option>
                                <option value="MI">Michigan</option>
                                <option value="MN">Minnesota</option>
                                <option value="MS">Mississippi</option>
                                <option value="MO">Missouri</option>
                                <option value="MT">Montana</option>
                                <option value="NE">Nebraska</option>
                                <option value="NV">Nevada</option>
                                <option value="NH">New Hampshire</option>
                                <option value="NJ">New Jersey</option>
                                <option value="NM">New Mexico</option>
                                <option value="NY">New York</option>
                                <option value="NC">North Carolina</option>
                                <option value="ND">North Dakota</option>
                                <option value="OH">Ohio</option>
                                <option value="OK">Oklahoma</option>
                                <option value="OR">Oregon</option>
                                <option value="PA">Pennsylvania</option>
                                <option value="RI">Rhode Island</option>
                                <option value="SC">South Carolina</option>
                                <option value="SD">South Dakota</option>
                                <option value="TN">Tennessee</option>
                                <option value="TX">Texas</option>
                                <option value="UT">Utah</option>
                                <option value="VT">Vermont</option>
                                <option value="VA">Virginia</option>
                                <option value="WA">Washington</option>
                                <option value="WV">West Virginia</option>
                                <option value="WI">Wisconsin</option>
                                <option value="WY">Wyoming</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Zip:</td>
                        <td>
                            <input type="text" name="zip" size="5" placeholder="5 digits" />
                        </td>
                    </tr>
                    <tr>
                        <td>Phone:</td>
                        <td>
                            <input type="text" name="phone" size="13" placeholder="555-555-5555" />
                        </td>
                    </tr>
                    <tr>
                        <td>Email:</td>
                        <td>
                            <input type="text" name="email" size="30" placeholder="username@domain.com" />
                        </td>
                    </tr>
                </table>
                <table>
                    <tr>
                        <td colspan="2">Indicate Membership/Contribution:</td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <select style="border-radius:5px" name="membership" id="membership">
                                <option value="Artist/Associate1">Artist/Associate (sliding fee) $25.00 USD</option>
                                <option value="Artist/Associate2">Artist/Associate (sliding fee) $30.00 USD</option>
                                <option value="Artist/Associate3">Artist/Associate (sliding fee) $35.00 USD</option>
                                <option value="Artist/Associate4">Artist/Associate (sliding fee) $40.00 USD</option>
								 <option value="Artist/Associate5">Artist/Associate (sliding fee) $45.00 USD</option>
                                <option value="Household">Household $40.00 USD</option>
                                <option value="Business/Patron">Business/Patron $50.00 USD</option>
                                <option value="Benefactor">Benefactor $100.00 USD</option>
                                <option value="Corporate Founder">Corporate Founder $500.00 USD</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">Method of Payment:</td>
                    </tr>
                    <tr>
                        <td style="line-height:23px;">
                            <input type="radio" style="vertical-align: middle; margin: 0px;" name="payment_type" value="paypal" checked="checked">&nbsp;&nbsp;Paypal/Credit&nbsp;&nbsp;&nbsp;</td>
                        <td >
                            <input type="radio" style="vertical-align: middle; margin: 0px;" name="payment_type" value="check">&nbsp;&nbsp;Check/Money Order</td>
                    </tr>
                    <tr>
                        <td colspan="2">In what medium do you prefer to work?</td>
                    </tr>
                    <tr>
                        <td>
                            <select name="medium">
                                <option value="2D">2D</option>
                                <option value="3D">3D</option>
                                <option value="Mixed Media">Mixed Media</option>
                                <option value="Video">Video</option>
								<option value="Curator">Curator</option>
								<option value="Critic">Critic</option>
                                <option value="Other">Other</option>
                            </select>
                        </td>
                        <td>&nbsp;&nbsp;&nbsp;
                            <input type="submit" value="Submit" name="submit">
                      &nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="reset">
                        </td>
                    </tr>
                </table>
            </form>
            
        </div>

        <div style="float:right;width:460px;height:100%;margin-top:10px;margin-right:50px;color:white;font-family: arial, verdana, helvetica; font-size: 90%;text-align:justify;text-shadow:1px 1px black;line-height:150%">&nbsp;&nbsp;&nbsp;&nbsp;Join at the $45 membership level and receive a free DVD from the Maine Masters series. Membership of any amount includes the following benefits:
            <ul>
                <li>One FREE UMVA Web page with link to your own site if you want. For submission information please click <a href="#" onclick="window.open('../umvasubmit.html','submit','toolbar=no,location=no,status=no,menubar=no,scrollbars=no,resizable=no,width=620,height=540')">here</a>.</li>
                <li>Receive <a href="#" onclick="window.open('../umvadiscounts.html','discounts','toolbar=no,location=no,status=no,menubar=no,scrollbars=no,resizable=no,width=600,height=460')">UMVA Membership Discounts</a> on art supplies and framing (and in the near future more discounts planned to arts-related businesses)</li>
                <li>Receive the newsletter.</li>
                <li>Three free ads per year in the newsletter</li>
                <li>Have the eye/ear of artists statewide by contributing to the newsletter</li>
				<li>Access to our new <a href="../blog/" target="_blank">Blog</a>!</li>
                <li>Opportunities to submit to exhibitions -- both online and brick and mortar</li>
                <li>Be able to design projects, exhibitions, write grants, etc. through the UMVA's non-profit 501(c)3 status and fiscal sponsorship</li>
                <li>Opportunities to collaborate with other artists</li>
                <li>Have the support of an organization with a strong Maine voice when needed</li>
                <li>Your idea here! (the UMVA has always been about people taking ideas and running with them -- while receiving lots of support from the organization).</li>
            </ul> Contact Jackie Bennett at 207-644-8758 or <a href="mailto:jskippy@roadrunner.com">jskippy@roadrunner.com</a> if you have any questions. Any website problems should be directed to <a href="mailto:matthew_stacey@ymail.com">webmaster</a>.</div>
   
    
	<script type="text/javascript">
 $('#membership').change(function () {
    if ($('#membership :selected').attr("value")=="Household") {
        $("#first_name2row").show();
    } else {
        $("#first_name2row").hide();
    }
	
});
</script>
</body>
</html>
