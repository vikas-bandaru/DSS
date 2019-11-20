<?php
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

$to=$email;

$subject = "Invitation For The Womens Day Event ,VJIT";

$body = '
    <html>
	<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body style="background-color:rgb(229,218,226)">

<div align="center" style="padding:30px;background-color:white">
<div><img src="vjit.ac.in/dss/images/vjitlogo.png" alt="Developers Student Society"width="100px" height="150px" ></div>

<h1 style="font-family: Arial, Helvetica, sans-serif;color:rgb(2,12,167)">Hello!! '.$name.'</h1>
<p style="font-family: Arial, Helvetica, sans-serif;font-size:22px;color:rgb(3,134,199)" align="center">On The Ocassion of women\'s day celebration in Vidya Jyoti Institute of Technology,The College has Choosen you to Recognise as a Successful TechMaker. 
<br>we the Team of Developers Student Society cordially Invite you to Attend the Event Tomorrow in College Premises<br>
<b>Event Location:<br>
Groud Floor Seminar Hall,C-BLOCK<br>Timing:10Am-11AM</b> </p>

<div style="height: 32px; line-height: 32px; font-size: 10px;"><footer><span style="font-family: Arial, Helvetica, sans-serif; font-size: 13px; color: #96a5b5;">
					2018 © <a href="vjit.ac.in/dss" style="text-decoration:none">Developers Student Society</a>. ALL Rights Reserved.
				</span></font>	</footer></div>
</div>

</body>



</html>';

// Set content-type header for sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// Additional headers
$headers .= 'From: dss@vjit.ac.in' . "\r\n";

$headers_zaiqa = "MIME-Version: 1.0" . "\r\n";
$headers_zaiqa .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// Additional headers
$headers_zaiqa .= 'From:'.$email . "\r\n";
// Send email
$body_zaiqa='
 <html>
	<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body style="background-color:rgb(229,218,226)">
<div align="center" style="padding:30px;background-color:white">
<div align="center"><img src="vjit.ac.in/dss/images/vjitlogo.png" alt="Developers Student Society" width="100px" height="150px" ></div>
<h1 style="font-family: Arial, Helvetica, sans-serif;color:rgb(2,12,167)">Hello!! '.$name.'</h1>
<p style="font-family: Arial, Helvetica, sans-serif;font-size:22px;color:rgb(3,134,199)" align="justify">On The Ocassion of women\'s day celebration in Vidya Jyoti Institute of Technology,The College has Choosen you to Recognise as a Successful TechMaker. 
<br>we the Team of Developers Student Society cordially Invite you to Attend the Event Tomorrow in College Premises<br>
<b>Event Location:<br>
Groud Floor Seminar Hall,C-BLOCK<br>Timing:10Am-11AM</b> </p>

<div style="height: 32px; line-height: 32px; font-size: 10px;"><footer><span style="font-family: Arial, Helvetica, sans-serif; font-size: 13px; color: #96a5b5;">
					2018 © <a href="vjit.ac.in/dss" style="text-decoration:none">Developers Student Society</a>. ALL Rights Reserved.
				</span></font>	</footer></div>
</div>

</body>



</html>
';


/*$header_for_zaiqa="From:".$email;
$header_for_zaiqa .= "Content-Type: text/html";
$subject_for_zaiqa =$name." Left a Suggestion";


$body_for_zaiqa='Name='.$name.'<br>'.'Email:'.$email.'<br>'.'Phone#:'.$phone.'<br>'.'message:'.$message;*/
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
	$data = fopen('data.txt','a');
	fwrite($data,"\nName:".$name."\tEmail: ".$email."\tPhone: ".$phone."\t Message: ".$message."\tDate:".date("Y-m-d")." ".date("l")."\n");
	if(mail($to,$subject,$body,$headers))
	{
		if(mail('dss@vjit.ac.in','You got a Feedback Message from '.$name,$body_zaiqa,$headers_zaiqa))
		{
		echo 'mail send!';
		}
	else
		{
		echo 'Something went wrong';
		
		
		}
		
	}
}


?>
<body style="background-color:#a9a9a9">
<div align="center">
<img src="www.vjit.ac.in/dss/images/vjitlogo.png" align="center" height="200px" width="150px"></div>
<div>
<i><h3 align="center">"Hello! <?php echo $name?>,Your Mail is Send" </h3></i></div>

</body>
<meta http-equiv="refresh" content="5;url=index.php">