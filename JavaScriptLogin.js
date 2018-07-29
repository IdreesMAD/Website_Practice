	function switchVisible() {
            if (document.getElementById('Div1')) {

                if (document.getElementById('Div1').style.display == 'none') {
                    document.getElementById('Div1').style.display = 'block';
                    document.getElementById('Div2').style.display = 'none';
					document.getElementById('Button1').value = "SignUp here";
                }
                else {
                    document.getElementById('Div1').style.display = 'none';
                    document.getElementById('Div2').style.display = 'block';
					document.getElementById('Button1').value = "Already have a login?";
                }
            }
	}
	function validateForm() {
		var x = document.forms["loginForm"]["username"].value;
		var y = document.forms["loginForm"]["password"].value;
		var usernameInput = document.getElementById("id1");
		var passwordInput = document.getElementById("id2");

		if (x == "") {
			document.getElementById("error").innerHTML = "Username must be filled out.";
			document.getElementById("error").style.background = 'red';
			return false;
		}
		else if (y == "") {
			document.getElementById("error").innerHTML = "Password must be filled out.";
			document.getElementById("error").style.background = 'red';
			return false;
		}
		else if(x.length < 5)
		{
			document.getElementById("error").innerHTML = "Username length should be greater than 5.";
			document.getElementById("error").style.background = 'yellow';
			return false;
		}
		else if(x.length > 12)
		{
			document.getElementById("error").innerHTML = "Username length should be less than 5.";
			document.getElementById("error").style.background = 'yellow';
			return false;
		}
		else if(y.length < 5)
		{
			document.getElementById("error").innerHTML = "Password length should be greater than 5.";
			document.getElementById("error").style.background = 'yellow';
			return false;
		}
		else if(y.length > 12)
		{
			document.getElementById("error").innerHTML = "Username length should be less than 5.";
			document.getElementById("error").style.background = 'yellow';
			return false;
		}
		else if((y.search(/[a-zA-Z]+/)==-1) || (y.search(/[0-9]+/)==-1))
		{
			document.getElementById("error").innerHTML = "The password must contain at least one numerical."
			document.getElementById("error").style.background = 'yellow';
			return false;
		}
		else {
			document.getElementById("error").innerHTML = "Access Granted!";
			document.getElementById("error").style.color = 'white';
			document.getElementById("error").style.background = 'green';
			return true;
		}
	}