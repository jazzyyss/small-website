<?php
	require 'header.php';
?>
<main>
	<h1 class="sign">Fill your registration form</h1>
	<div class="signf">

	<center> 
	<form action="includes/signup.inc.php" method="post" >
		<table width="300px" border="2px">
		<tr>
		<td>
		<label>Userame:</label>
		</td>
		<td>
		<input type="text" name="username" size="30" placeholder="username[a-zA-Z0-9]..." />
		</td>
		</tr>
		<tr>
		<td>
		<label>FullName:</label>
		</td>
		<td>
		<input type="text" name="name" size="30" placeholder="Full Name..." />
		</td>
		</tr>
		<tr>
		<td>
		<label>Email:</label>
		</td>
		<td>
		<input type="email" name="email" size="30" placeholder="Email..." />
		</td>
		</tr>
		<tr>
		<td>
		<label>Password:</label>
		</td>
		<td>
		<input type="password" name="pass" size="30" placeholder="Password..." />
		</td>
		</tr>
		<tr>
		<td>
		<label>Password:</label>
		</td>
		<td>
		<input type="password" name="repass" size="30" placeholder="Retype-Password..." />
		</td>
		</tr>
		<tr>
		<td>
		<label>City:</label>
		</td>
		<td>
		<input type="text" name="city" size="30" placeholder="Current-city..." />
		</td>
		</tr>
		<tr>
		<td>
		<label>Age:</label>
		</td>
		<td>
		<input type="text" name="age" size="30" placeholder="Age(in numbers)..." />
		</td>
		</tr>
		<tr>
		<td>
		<label>Gender:</label>
		</td>
		<td>
		<input type="radio" name="gender" value="male" />male
		<input type="radio" name="gender" value="female" />female
		</td>
		</tr>
		<tr>
		<td>
		<label>Courses:</label>
		</td>
		<td>
		<input type="checkbox" name="lang[]" value="Kiwi" />HTML5
		</td>
		<tr>
		<td>
		</td>
		<td>
		<input type="checkbox" name="lang[]" value="Swift" />CSS3
		</td>
		<tr>
		<td>
		</td>
		<td>
		<input type="checkbox" name="lang[]" value="Python" />PHP
		</td>
		<tr>
		<td>
		</td>
		<td>
		<input type="checkbox" name="lang[]" value="PHP" />Python
		</td>
		</tr>
		<tr>
		<td>
		</td>
		<td>
		<input type="checkbox" name="lang[]" value="Java" />NodeJS
		</td>
		</tr>
		<tr>
		<td>
		</td>
		<td>
		<input type="checkbox" name="lang[]" value="c++" />C++
		</td>
		</tr>
		<tr>
		<td>
		</td>
		<td>
		<input type="checkbox" name="lang[]" value="c" />C
		</td>
		</tr>
		</table><br><br>
		<button type="submit" name="register-button" class="button_1">Submit</button>
	</form>
	</center>
	</div>
</main>

<?php
	require 'footer.php';
?>