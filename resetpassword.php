<?php

	require 'header.php';

?>



<main>

	<div class="signinp">

       <h1>Reset Password</h1>

       <p class="resetp">An email will be sent to your email account with the link to change the password.</p>

       <p class="resetp">Kindly, check your Email.</p>

       <form class="form-signup" action="includes/resetrequest.inc.php" method="post">

            <input type="email" name="email" placeholder="Registered Email...">

            <button type="submit" name="reset-request-submit" class="button_1">Send Email</button>

        </form>

        <?php

            if(isset($_GET['reset'])){

                if($_GET['reset']=="success"){

                    echo '<p>Check your email</p>';

                }

            }

        ?>

    </div>

	

</main>



<?php

	require 'footer.php';

?>