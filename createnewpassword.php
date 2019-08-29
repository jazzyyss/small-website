<?php
	require 'header.php';
?>

<main>
	<div class="signinp">
        <?php
            $selector = $_GET['selector'];
            $validator = $_GET['validator'];
            if(empty($selector) || empty($validator)){
                echo "Could not validate your request";
            }else{
                if(ctype_xdigit($selector) !== FALSE && ctype_xdigit($validator) !== FALSE){
                    ?>
                        <h1>Create Password</h1>
                        <form class="form-signup" action="includes/resetpassword.inc.php" method="post">
                                <input type="hidden" name="selector" value="<?php echo $selector;?>">
                                <input type="hidden" name="validator" value="<?php echo $validator;?>">
                                <input type="password" name="pwd" placeholder="New Password...">
                                <input type="password" name="pwd-repeat" placeholder="Repeat Password...">
                                <button type="submit" name="resetpassword" class="button_1">Update Password</button>
                        </form>
                    <?php
                }
            }
        ?>
       
    </div>
	
</main>

<?php
	require 'footer.php';
?>