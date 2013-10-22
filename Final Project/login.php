						
  <html>
  <head>
   <title>Login Page</title>
   </head>
     <body background="1.jpg">
	 <font color="yellow">
   <marquee> <h1>Login to post your suggsestions</h1></marquee> 
   
   <form action="chlogin.php" method="post">
   <table border=2 align=center bgcolor="#FFE34D">
   <tr>
  <td>Name</td>
  <td><input type="text" name="nam" id="nam" required="required" /></td>
  </tr>
  <tr>
                        <td>Email</td>
                        <td><input id="ema" type="email" name="ema" required="required" placeholder="Eg.john@hotmail.com"/></td>
                    </tr>

  <tr>
  <td>Password</td>
  <td><input type="password" name="pwd" id="pwd" required="required"/ ></td>
  </tr>
<tr>
  <td>Sign In</td>
  <td><input type="submit" value="Login" onclick="ValidateUser()"/></td>
  </tr> 
</table> 
  </form> 
     
</body>
   </html>