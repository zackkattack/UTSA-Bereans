<!DOCTYPE html>

<head>
	<title>UTSA Bereans</title>
	<link rel="stylesheet" href="./css/master.css">
	<script src="./js/login.js"></script>
</head>

<body>
	<div id="navbar">
		<a href="./index.html">Home</a>
		<a href="#about">About</a>
		<a href="#teaching">Teaching</a>
		<a href="./login.html">Login</a>
		<img src="./img/bible-icon.png" />
	</div>

	<div id="heading">
		<h1>UTSA Bereans</h1>
	</div>
	
    <div class='signup-form'>
        <form action="login.php">
            <p>First Name:<input type="text" name="first-name" id="first-name"></p>
            <p>Last Name:<input type="text" name="last-name" id="last-name"></p>
			<p>Username:<input type="text" onchange="validate();" name="username" id="username"></p>
			<p id='errLen' class='err'></p>
			<p id='errChar' class='err'></p>
            <p>Password:<input type="password" name="password" id="password"></p>

			<h4>College:</h4>
			<input type="radio" name="college" id="art">Fine Arts <br>
			<input type="radio" name="college" id="business">Business <br>
			<input type="radio" name="college" id="education">Education <br>
			<input type="radio" name="college" id="engineering">Engineering <br>
			<input type="radio" name="college" id="architecture">Architecture <br>
			<input type="radio" name="college" id="sciences">Sciences <br>

			<!-- date -->
			<?php
				print "<br/><p>Year of membership:<input onchange='validate()' type='text' id='year' name='year' width='40' value=" . $year . ">";
				print "<p id='errYear' class='err'></p>"
			?>

			<h4>Month:</h4>
			<table border='1px' class='center'>
				<?php
					print '<tr>';
							print '<td><br/><input type="radio" name="month" id="month-1" onchange="validate()" value="1"'; echo ($month==1)?' checked>January':'>January';
							print '<td><br/><input type="radio" name="month" id="month-2" onchange="validate()" value="2"'; echo ($month==2)?' checked>Febuary':'>Febuary';
							print '<td><br/><input type="radio" name="month" id="month-5" onchange="validate()" value="5"'; echo ($month==5)?' checked>March':'>March';
							print '<td><br/><input type="radio" name="month" id="month-4" onchange="validate()" value="4"'; echo ($month==4)?' checked>April':'>April';
					print '<tr>';
							print '<td><br/><input type="radio" name="month" id="month-3" onchange="validate()" value="3"'; echo ($month==3)?' checked>May':'>May';
							print '<td><br/><input type="radio" name="month" id="month-6" onchange="validate()" value="6"'; echo ($month==6)?' checked>June':'>June';
							print '<td><br/><input type="radio" name="month" id="month-7" onchange="validate()" value="7"'; echo ($month==7)?' checked>July':'>July';
							print '<td><br/><input type="radio" name="month" id="month-8" onchange="validate()" value="8"'; echo ($month==8)?' checked>August':'>August';
					print '<tr>';
							print '<td><br/><input type="radio" name="month" id="month-9" onchange="validate()" value="9"'; echo ($month==9)?' checked>September':'>September';
							print '<td><br/><input type="radio" name="month" id="month-10" onchange="validate()" value="10"'; echo ($month==10)?' checked>October':'>October';
							print '<td><br/><input type="radio" name="month" id="month-11" onchange="validate()" value="11"'; echo ($month==11)?' checked>November':'>November';
							print '<td><br/><input type="radio" name="month" id="month-12" onchange="validate()" value="12"'; echo ($month==12)?' checked>December':'>December';
				?>		
			</table>
			<h4>Day:</h4>
			<select onchange="validate()" name='day' id='day'>
				<?php
					for ($day=1; $day<32; $day++){
						print '<option>' . $day . '</option>';
					}
				?>
			</select>	
			<p id='errDay' class='err'></p>

			<br>

			<input type="checkbox" name="admin" id="admin">Admin
			<br>	
			<input type="submit" id="submit" value="Submit">
        </form>
    </div>
</body>

</html>