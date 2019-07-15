<!DOCTYPE html>
<html>
<head>
	<title>Sign Up Page</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/styles.css">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

</head>
<body id="main">
	<div id="parent">
	<div class="card" id="form">
	<h1>Sign Up</h1>
	<form id="signupForm" method="post" action="welcome.php">
	<label for="fname">First Name: </label>
 	<input type="text" name="fname" id="fname"><br>
	<label for="lname">Last Name: </label> <input type="text" name="lname" id="lname"><br>
	<label>Gender: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label> 
	<input type="radio" name="gender" value="m"> Male
	<input type="radio" name="gender" value="f"> Female<br><br>

	<label for="zip">Zip Code: &nbsp;&nbsp;</label>
	<input type="text" name="zip" id="zip"> <span id="zipError"> </span><br>
	<label for="city">City: </label> <span id="city"> </span><br>
	<label for="latitude">Latitude: </label> <span id="latitude"> </span> <br>
	<label for="longt">Longitude: </label> <span id="longt"> </span> <br><br>
	<label for="state" id="label2">State:</label>
	<select id="state" name="state">
		
	</select><br>

	<label for="county" id="label1">Select a county: </label> <select id="county"></select><br><br>

	<label for="username">Desired Username: </label> 
	<input type="text" name="username" id="username"> <span id="usernameError"></span><br>
	<label for="password">Password: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label> <input type="password" name="password" id="password"> <span id="passwordError"></span><br>
	<label for="passwordAgain">Password Again: &nbsp;&nbsp;&nbsp;</label>
	<input type="password" id="passwordAgain"> <span id="passwordAgainError"></span><br>
	<input type="submit" value="Sign up!" class="btn btn-lg btn-info">
	</form>
</div>
</div>
	<script type="text/javascript" src="js/signup.js"></script>
	<footer>
        <hr>
        <div>
            <img id="logo" src="img/logo.png" alt="CSUMB Logo">
        <div>
            CST 336: Internet Programming. 2019&copy; Nikulyak<br />
            <span id="word">Disclaimer:</span> The information in this webpage is fictitious. <br />
            It is used for academic purposes only.
        </div>
        </div>
    </footer>
</body>
</html>