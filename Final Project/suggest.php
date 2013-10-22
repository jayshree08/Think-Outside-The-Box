<?php

ini_set("SMTP","localhost");
ini_set("smtp_port",25);
$to = "thinkoutofbox159@gmail.com";
$subject = "Suggestions and feedbacks";
$message = "Thanks for your valuable suggestion and feedback";
$from = "jlikhar26@gmail.com";
$headers = "From:" . $from;

mail($to,$subject,$message,$headers);
?>

<html>
<head>
<title>Think Outside the Box</title>
<body background="1.jpg"
<image border="2" src="5.jpg" width="1204" height="304">
<font color="yellow">

<form action ="?" method ="POST">
<table border= "4" align ="center" bgcolor="#FFE34D">
<tbody>
<tr>
<td>Name
</td>
 <td><input type="text" name="name" id="name" required="required" /></td>
</tr>
<tr>
                        <td>Email</td>
                        <td><input id="email" type="email" name="email" required="required" placeholder="Eg.john@hotmail.com"/></td>
                    </tr>
<tr>
<td>Categories</td>
<td> <select name="cg">
<option>Mess related</option>
<option>Hostel related</option>
<option>Admin related</option>
</select>
</td>
</tr>
<tr>
                        <td>Suggestions n Feedbacks</td>
                        
			             <td>
						 <textarea id ="message" name= "message" rows ="3" cols ="50"  placeholder="enter your suggestions n feedbacks here"/>
						
							</textarea>
                         </td>						
                    </tr>
					<tr>
					<td>Send your suggestions and feedback to mail
					</td>
					<td>
					thinkoutofbox159@gmail.com
					</td>
					</tr>
					<tr>
  <td>Submit</td>
  <td><input type="submit" value="Submit" /></td>
  </tr> 
					
                    </tbody>
					</table
					
					 


</body>
</head>
</html>