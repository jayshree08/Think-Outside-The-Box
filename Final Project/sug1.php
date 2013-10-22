<?php
$to='thinkoutofbox159@gmail.com';
$subject='Suggestions and Feedbacks';
$name = $_POST['name'];
$email = $_POST['email'];
$message =  $_POST['message'];

$message=<<<EMAIL
Hi my name is $name
$message
From $name
Oh ya my email is $email
EMAIL;
$header = '$email';
if($_POST){
mail( $to, $subject, $message, $header );
$feedback = 'thanks for your suggestion n feedback';
}
?>
<html>
<head>
<title>Think Outside the Box</title>
<!--<body background="1.jpg">-->
<!--<image border="2" src="5.jpg" width="1204" height="304">-->
<font color="yellow">
<p id= "feedback" name="feedback" ><?php echo $feedback ; ?></p>
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
						 <textarea id ="message" name= "message" rows="5" cols="50" <input id ="t" type= "text" name= "t" required="required" placeholder="enter your suggestions n feedbacks here"/>
						
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
					
					 

</font>
</body>
</head>
</html>