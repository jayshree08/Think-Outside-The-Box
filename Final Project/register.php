<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <title>Think Outside the Box</title>
    </head>
	<h1>Think Outside The Box</h1>
    <body background="1.jpg">
        <h1>Register here</h1>
		<font color="red">
		
        <form action="rform.php" method="POST">
            <table border="2" align="center" bgcolor="#FFE34D">
                <tbody>
                    <tr>
                        <td>Name</td>
                        <td><input id="nam" type="text" name="nam" required="required" placeholder="Eg.John"/></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td><input id="ema" type="email" name="ema" required="required" placeholder="Eg.john@hotmail.com"/></td>
                    </tr>
                    <tr>
                        <td>DOB</td>
						<td><input type="date" name="bday"/></td>
						
                     
                    <tr>
                        <td>Password</td>
                        <td><input id="pwd" type="password" name="pwd" value="" required="required" placeholder="Eg.Xderf45@"/></td>
                    </tr>
                    <tr>
                        <td>Gender</td>
                        <td>Male<input type="radio" name="gen" value="Male" />
                        Female<input type="radio" name="gen" value="Female" />
                        </td>
                    </tr>
                    <tr>
                        <td>Country</td>
                        <td><select name="ctn">
                                <option>Select</option>
                                <option>India</option>
                            </select></td>
                    </tr>
                    <tr>
                        <td>State</td>
                        <td><select name="st">
                                <option>Select</option>
                                
								<option>Madhya Pradesh</option>
								<option>Andhra Pradesh</option>
								<option>Tamil Nadu</option>
								<option>Karnataka</option>
                            </select></td>
                    </tr>
                    <tr>
                        <td>City</td>
                        <td><select name="ct">
                                <option>Select</option>
                                <option>Indore</option>
								<option>Trichy</option>
								<option>Bangalore</option>
								<option>Hyderabad</option>
								<option>Surathkal</option>
                            </select></td>
                    </tr>
                    <tr>
                        <td>Click here</td>
                        <td><input type="submit" value="Register" /></td>
                    </tr>
                </tbody>
            </table>

        </form> 
    </body>
</html>
