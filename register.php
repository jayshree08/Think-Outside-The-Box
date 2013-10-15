<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <title>Think Outside the Box</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
    <body background="1.jpg">
        <h1>Register here</h1>
		<font color="blue">
		
        <form action="Rform1.php" method="POST">
            <table border="2" align="center">
                <tbody>
                    <tr>
                        <td>Name</td>
                        <td><input type="text" name="nm" value="" /></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td><input type="text" name="em" value="" /></td>
                    </tr>
                    <tr>
                        <td>DOB</td>
                        <td><select name="yy">
                                <option>YYYY</option>
                                <option>1990</option> <option>1991</option><option>1992</option>
                                <option>1993</option><option>1994</option><option>1995</option>
                             </select>
                            <select name="mm">
                               <option>MM</option>
                                <option>01</option><option>02</option><option>03</option>
                                <option>04</option><option>05</option><option>06</option>
                                <option>07</option><option>08</option><option>09</option>
                                <option>10</option><option>11</option><option>12</option>

                                
                            </select>
                            <select name="dd">
                                <option>DD</option>
                                <option>01</option><option>03</option><option>03</option>
                                <option>04</option><option>05</option><option>06</option>
                                <option>07</option><option>08</option><option>09</option>
                                <option>10</option><option>11</option><option>12</option>
                                <option>13</option><option>14</option><option>15</option>
                                <option>16</option><option>17</option><option>18</option>
                                <option>19</option><option>20</option><option>21</option>
                                <option>22</option><option>23</option><option>24</option>
                                <option>25</option><option>26</option><option>27</option>
                                <option>28</option><option>29</option><option>30</option>
                                <option>31</option>
                            </select> 
                        </td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td><input type="password" name="pw" value="" /></td>
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
