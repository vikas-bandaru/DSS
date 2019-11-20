<?php
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];
$to=$email;

$subject = $name."! Thank you for your Feedback ";

$body = '
    <html>
	<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body style="background-color:rgb(229,218,226)">
<div align="center" style="padding:20px;margine:15px;background-color:white">

<div><img src="www.vjit.ac.in/dss/images/vjitlogo.png" alt="Developers Student Society" width="100px" height="150px" ></div>
<h1 style="font-family: Arial, Helvetica, sans-serif;color:rgb(2,12,167)">Thank You For your Feedback, '.$name.'!</h1>
<p style="font-family: Arial, Helvetica, sans-serif;font-size:22px;color:rgb(3,134,199)" align="center"><i>we appreciate that you took a while to suggest us for our improvement,<br>
 we are there for you to mentor for brighter future .</i></p>

<div style="height: 32px; line-height: 32px; font-size: 10px;"><footer><span style="font-family: Arial, Helvetica, sans-serif; font-size: 13px; color: #96a5b5;">
					2018 © Developers Student Society. ALL Rights Reserved.
				</span></font>	</footer></div>
</div>

</body>



</html>';

// Set content-type header for sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// Additional headers
$headers .= 'From: website@vjit.ac.in' . "\r\n";

$headers_dss = "MIME-Version: 1.0" . "\r\n";
$headers_dss .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// Additional headers
$headers_dss .= 'From:'.$email . "\r\n";
// Send email
$body_dss='
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body style="background-color:rgb(229,218,226)">
<div align="center" style="padding:30px;background-color:white">
<h1 style="font-family: Arial, Helvetica, sans-serif;color:rgb(2,12,167)"> '.$name.', Suggested You!</h1>
<table cellspacing="0" style="border: 2px dashed #FB4314; width: 300px; height: 200px;">
            <tr>
                <th>Name:</th><td>'.$name.'</td>
            </tr>
            <tr style="background-color: #e0e0e0;">
                <th>Email:</th><td>'.$email.'</td>
            </tr>
            <tr>
                <th>Phone:</th><td> '.$phone.' </td>
            </tr>
			<tr>
                <th>Message:</th><td>'.$message.'</td>
            </tr>
        </table>
<div style="height: 32px; line-height: 32px; font-size: 10px;"><footer><span style="font-family: Arial, Helvetica, sans-serif; font-size: 13px; color: #96a5b5;">
					2018 © Developers Student Society. ALL Rights Reserved.
				</span></font>	</footer></div>
</div>
</body>
</html>



';


if(isset($name)&&isset($email)&&isset($phone)&&isset($message))
{
	/*$name_file = fopen('names.txt','a');
	$email_file = fopen('emails.txt','a');
	$phone_file = fopen('phones.txt','a');
	$message_file = fopen('messages.txt','a');
	
	fwrite($name_file,$name."\n");
	fwrite($email_file,$email."\n");
	fwrite($phone_file,$phone."\n");
	fwrite($message_file,$message."\n");
	*/
	$data = fopen('data.xls','a');
	fwrite($data,"\nName:".$name."\tEmail: ".$email."\tPhone: ".$phone."\t Message: ".$message."\tDate:".date("Y-m-d")." ".date("l")."\n");
	
	if(mail($to,$subject,$body,$headers))
	{
		if(mail('dss@vjit.ac.in','You got a Feedback Message from '.$name,$body_dss,$headers_dss))
		{
		echo 'mail send!';
		}
		else
		{
		echo 'Something went wrong in sending to dss@jit.ac.in';
		}
		
	}
	else
		{
		echo 'Something went wrong while sending to '.$email ;
		}
}

?>
<body style="background-color:#a9a9a9">
<div align="center">
<img src="images/vjitlogo.png" align="center" height="200px" width="150px"></div>
<div>
<i><h3 align="center">"Hello! <?php echo $name?>,Your Message is Being Recorded, Thank you For Your Feedback" </h3></i></div>

</body>
<meta http-equiv="refresh" content="5;url=index.html">