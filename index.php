
<?php

    require 'header.php';

?>
    <main>
        <section id="showcase">
            <div class="container">
                <h1>Future is Here</h1>
                <p>Let's Rise is a platfrom<br>
                    Where you can build yourself<br>
                    For a better future<br>
                </p>
            </div>
        </section>
        <section id="newsletter">
            <div class="container">
                <h1>Subscribe to Rise with the Technology</h1>
                <form action="includes/subs.inc.php" method="POST">
                    <input type="email" name="email" placeholder="email">
                    <button type="submit" name="submit-sub" class="button_1">Subscribe</button>
                </form>
            </div>
        </section>    
        <section id="boxes">
            <div class="container">
                <?php
                if(isset($_SESSION['uid'])){
                    echo '
                    <div class="box">
                        <a href="https://www.w3schools.com/html/default.asp" target="_blank"><img src="./img/logo_html5.png" alt="HTML 5"></a>
                        <h3>HTML 5</h3>
                        <p>Html 5 is a Hyper Text Markup Language<br>
                        used to build websites.</p>
                    </div>
                    <div class="box">
                        <a href="https://www.w3schools.com/css/default.asp" target="_blank"><img src="./img/logo_css3.png" alt="CSS 3"></a>
                        <h3>CSS 3</h3>
                        <p>CSS 3 stands for Cascading StyleSheet<br>
                            is used to give styling to html page.</p>
                    </div>
                    <div class="box">
                        <a href="https://www.w3schools.com/php/default.asp" target="_blank"><img src="./img/logo_php.png" alt="PHP"></a>
                        <h3>PHP</h3>
                        <p>PHP is a scripting language <br>
                            Especially for web development.</p>
                    </div>
                    <div class="box">
                        <a href="https://www.w3schools.com/python/default.asp" target="_blank"><img src="./img/logo_python.png" alt="Graphic Design"></a>
                        <h3>PYTHON</h3>
                        <p>Python lets you work quickly<br>
                            & integrate systems effectively.</p>
                    </div>
                    <div class="box">
                        <a href="https://www.w3schools.com/nodejs/default.asp" target="_blank"><img src="./img/logo_js.png" alt="Graphic Design"></a>
                        <h3>NODE.JS</h3>
                        <p>Node.js is cross-platform that executes<br>
                             JavaScript code outside of a browser.</p>
                    </div>
                    <div class="box">
                        <a href="https://www.learncpp.com/" target="_blank"><img src="./img/logo_c++.png" alt="Graphic Design"></a>
                        <h3>C++ </h3>
                        <p>C++ has imperative, object-oriented <br>
                            and generic programming features</p>
                    </div>';
                }else{
                    echo '
                    <div class="box">
                        <a href="signin.php"><img src="./img/logo_html5.png" alt="HTML 5"></a>
                        <h3>HTML 5</h3>
                        <p>Html 5 is a Hyper Text Markup Language<br>
                        used to build websites.</p>
                    </div>
                    <div class="box">
                        <a href="signin.php"><img src="./img/logo_css3.png" alt="CSS 3"></a>
                        <h3>CSS 3</h3>
                        <p>CSS 3 stands for Cascading StyleSheet<br>
                            is used to give styling to html page.</p>
                    </div>
                    <div class="box">
                        <a href="signin.php"><img src="./img/logo_php.png" alt="PHP"></a>
                        <h3>PHP</h3>
                        <p>PHP is a scripting language <br>
                            Especially for web development.</p>
                    </div>
                    <div class="box">
                        <a href="signin.php"><img src="./img/logo_python.png" alt="Graphic Design"></a>
                        <h3>PYTHON</h3>
                        <p>Python lets you work quickly<br>
                            & integrate systems effectively.</p>
                    </div>
                    <div class="box">
                        <a href="signin.php"><img src="./img/logo_js.png" alt="Graphic Design"></a>
                        <h3>NODE.JS</h3>
                        <p>Node.js is cross-platform that executes<br>
                             JavaScript code outside of a browser.</p>
                    </div>
                    <div class="box">
                        <a href="signin.php"><img src="./img/logo_c++.png" alt="Graphic Design"></a>
                        <h3>C++ </h3>
                        <p>C++ has imperative, object-oriented <br>
                            and generic programming features</p>
                    </div>';
                }
                ?>
            </div>
        </section>
    </main>
<?php
    
    require 'footer.php';
?>
