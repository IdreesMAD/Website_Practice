<!DOCTYPE html>
<html>
<link rel="stylesheet"type="text/css" href="stylesheetLogin.css" />
<head>
<title>Login Form</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="JavaScriptLogin.js"></script>
</head>
<body style="background-color:black;">
<div class="container center_div">
<div id="forms" class="jumbotron container text-center">
<div id="Div1" >
  <div id = "login" class="form-group">
	  <form id="loginForm" autocomplete="off" method="POST" action="success.php" onsubmit="return validateForm()">
		<h1>Log In</h1>
	  <b>Username</b><br>
		<input id = "id1" type="text" name="username" size="50"><br>
	  <b>Password</b><br>
		<input id = "id2"  type="password" name="password" size="12"><br>
	  <p id= "error"></p>
		<input type="submit" value="Login"><br>
	  </form>
  </div>
</div>
<div id="Div2">
  <div id = "signup" class="form-group">
	  <form id= "signupForm" autocomplete="off" method= "POST" action = "" onsubmit = "">
	  <h1>Sign Up Here!</h1>
	  <b>Email</b><br>
	  <input id="emailSignup" placeholder="abc@xyz.com" type="email" name="emailSignup" size="50" required><br>
	  <p>
		*Your email would be used as username.
	  </p>
	  <b>Full Name</b><br>
	  <input id = "firstnameSignup" placeholder="First name" type="text" alt="first" name="firstnameSignup" size="25" required>
	  <input id = "middlenameSignup" placeholder="Middle name -optional" type="text" alt="middle" name="middlenameSignup" size="25" required>
	  <input id = "lastnameSignup" placeholder="Last name" type="text" alt="last" name="lastnameSignup" size="25" required><br>
	  <br><b>Date of Birth</b><br>
		<div class="form-group">
			<b>Day</b>
			<select name='day' id='dayddl'>
			<option value='1'>1</option>
			<option value='2'>2</option>
			<option value='3'>3</option>
			<option value='4'>4</option>
			<option value='5'>5</option>
			<option value='6'>6</option>
			<option value='7'>7</option>
			<option value='8'>8</option>
			<option value='9'>9</option>
			<option value='10'>10</option>
			<option value='11'>11</option>
			<option value='12'>12</option>
			<option value='13'>13</option>
			<option value='14'>14</option>
			<option value='15'>15</option>
			<option value='16'>16</option>
			<option value='17'>17</option>
			<option value='18'>18</option>
			<option value='19'>19</option>
			<option value='20'>20</option>
			<option value='21'>21</option>
			<option value='22'>22</option>
			<option value='23'>23</option>
			<option value='24'>24</option>
			<option value='25'>25</option>
			<option value='26'>26</option>
			<option value='27'>27</option>
			<option value='28'>28</option>
			<option value='29'>29</option>
			<option value='30'>30</option>
			<option value='31'>31</option>
			</select>
			<b>Month</b>
			<select name='month' id='monthddl'>
			<option value='1'>1</option>
			<option value='2'>2</option>
			<option value='3'>3</option>
			<option value='4'>4</option>
			<option value='5'>5</option>
			<option value='6'>6</option>
			<option value='7'>7</option>
			<option value='8'>8</option>
			<option value='9'>9</option>
			<option value='10'>10</option>
			<option value='11'>11</option>
			<option value='12'>12</option>
			</select>
			<b>Year</b>
			<select name='day' id='blah'>
			<option value='1947'>1947</option>
			<option value='1948'>1948</option>
			<option value='1949'>1949</option>
			<option value='1950'>1950</option>
			<option value='1951'>1951</option>
			<option value='1952'>1952</option>
			<option value='1953'>1953</option>
			<option value='1954'>1954</option>
			<option value='1955'>1955</option>
			<option value='1956'>1956</option>
			<option value='1957'>1957</option>
			<option value='1958'>1958</option>
			<option value='1959'>1959</option>
			<option value='1960'>1960</option>
			<option value='1961'>1961</option>
			<option value='1962'>1962</option>
			<option value='1963'>1963</option>
			<option value='1964'>1964</option>
			<option value='1965'>1965</option>
			<option value='1966'>1966</option>
			<option value='1967'>1967</option>
			<option value='1968'>1968</option>
			<option value='1969'>1969</option>
			<option value='1970'>1970</option>
			<option value='1971'>1971</option>
			<option value='1972'>1972</option>
			<option value='1973'>1973</option>
			<option value='1974'>1974</option>
			<option value='1975'>1975</option>
			<option value='1976'>1976</option>
			<option value='1977'>1977</option>
			<option value='1978'>1978</option>
			<option value='1979'>1979</option>
			<option value='1980'>1980</option>
			<option value='1981'>1981</option>
			<option value='1982'>1982</option>
			<option value='1983'>1983</option>
			<option value='1984'>1984</option>
			<option value='1985'>1985</option>
			<option value='1986'>1986</option>
			<option value='1987'>1987</option>
			<option value='1988'>1988</option>
			<option value='1989'>1989</option>
			<option value='1990'>1990</option>
			<option value='1991'>1991</option>
			<option value='1992'>1992</option>
			<option value='1993'>1993</option>
			</select>
		</div>

	  
	  </form>
  </div>
 </div>
<br><br><input id="Button1" type="button" value="SignUp here" onclick="switchVisible();" />
</div>
</div>
</body>
<footer></footer>
</html>
