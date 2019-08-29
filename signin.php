<?php
	require 'header.php';
?>

<main>
	<div class="signinp">
       <h1>Sign In</h1>
       <form class="form-signup" action="includes/signin.inc.php" method="post">
            <input type="text" name="mailuid" placeholder="Username/Email...">
            <input type="password" name="pwd" placeholder="Password...">
            <button type="submit" name="login-submit" class="button_1">Log In</button>
        </form>
        <a class="refer" href="resetpassword.php">forgotten account?</a>
        <a class="refer" href="register.php">sign up</a>
    </div>
	
</main>

<?php
	require 'footer.php';
?>