<?php

    require 'header.php';

?>
<main>
    <section id="newsletter">
        <div class="container">
            <h1>Subscribe to Rise with the Technology</h1>
            <form action="includes/subs.inc.php" method="POST">
                <input type="email" name="email" placeholder="email">
                <button type="submit" name="submit-sub" class="button_1">Subscribe</button>
            </form>
        </div>
    </section>    
    <section id="main">
        <div class="container">
           <article id="main-col">
                <h1 class="page-title">Services</h1>
                <?php 
                        if(isset($_SESSION['uid'])){
                            echo '
                    <ul id="services"> 
                        <li>
                            <h3>HTML5</h3>
                            <p>HTML 5 is a markup language used for structuring and presenting content on the World Wide Web. It is the fifth and current major version of the HTML standard, and subsumes XHTML.</p>
                            <p class="link"><a href="https://www.w3schools.com/html/default.asp" target="_blank"><button name="studyHTML" class="button_1">Read More</button></a></p>
                        </li>
                        <li>
                            <h3>CSS3</h3>
                            <p>CSS3 is the latest evolution of the Cascading Style Sheets language and aims at extending CSS2.1. It brings a lot of long-awaited novelties, like rounded corners, shadows, gradients, transitions or animations, as well as new layouts like multi-columns, flexible box or grid layouts.</p>
                            <p class="link"><a href="https://www.w3schools.com/css/default.asp" target="_blank"><button name="studyCSS" class="button_1">Read More</button></a></p>
                        </li>
                        <li>
                            <h3>PHP</h3>
                            <p>PHP: Hypertext Preprocessor is a server-side scripting language designed for Web development. It was originally created by Rasmus Lerdorf in 1994; the PHP reference implementation is now produced by The PHP Group</p>
                            <p class="link"><a href="https://www.w3schools.com/php/default.asp" target="_blank"><button name="studyPHP" class="button_1">Read More</button></a></p>
                        </li>
                        <li>
                            <h3>PYTHON</h3>
                            <p> Python is an interpreted, high-level, general-purpose programming language. Created by Guido van Rossum and first released in 1991, Python has a design philosophy that emphasizes code readability, notably using significant whitespace. It provides constructs that enable clear programming on both small and large scales.</p>
                            <p class="link"><a href="https://www.w3schools.com/python/default.asp" target="_blank"><button name="studyPython" class="button_1">Read More</button></a></p>
                        </li>
                        <li>
                            <h3>NODE.JS</h3>
                            <p>Node.js is an open-source, cross-platform JavaScript run-time environment that executes JavaScript code outside of a browser.</p>
                            <p class="link"><a href="https://www.w3schools.com/nodejs/default.asp" target="_blank"><button name="studynodejs" class="button_1">Read More</button></a></p>
                        </li>
                        <li>
                            <h3>C++</h3>
                            <p>C++ is a general-purpose programming language. It has imperative, object-oriented and generic programming features, while also providing facilities for low-level memory manipulation</p>
                            <p class="link"><a href="https://www.learncpp.com/" target="_blank"><button name="studyC++" class="button_1">Read More</button></a></p>
                        </li>
                        <li>
                            <h3>C Language</h3>
                            <p>C is a general-purpose, imperative computer programming language, supporting structured programming, lexical variable scope and recursion, while a static type system prevents many unintended operations.</p>
                            <p class="link"><a href="https://www.w3schools.in/c-tutorial/" target="_blank"><button name="studyC" class="button_1">Read More</button></a></p>
                        </li>
                    </ul>';
                }else{
                    echo '
                    <ul id="services"> 
                        <li>
                            <h3>HTML5</h3>
                            <p>HTML 5 is a markup language used for structuring and presenting content on the World Wide Web. It is the fifth and current major version of the HTML standard, and subsumes XHTML.</p>
                        </li>
                        <li>
                            <h3>CSS3</h3>
                            <p>CSS3 is the latest evolution of the Cascading Style Sheets language and aims at extending CSS2.1. It brings a lot of long-awaited novelties, like rounded corners, shadows, gradients, transitions or animations, as well as new layouts like multi-columns, flexible box or grid layouts.</p>
                        </li>
                        <li>
                            <h3>PHP</h3>
                            <p>PHP: Hypertext Preprocessor is a server-side scripting language designed for Web development. It was originally created by Rasmus Lerdorf in 1994; the PHP reference implementation is now produced by The PHP Group</p>                    
                        </li>
                        <li>
                            <h3>PYTHON</h3>
                            <p> Python is an interpreted, high-level, general-purpose programming language. Created by Guido van Rossum and first released in 1991, Python has a design philosophy that emphasizes code readability, notably using significant whitespace. It provides constructs that enable clear programming on both small and large scales.</p>
                        </li>
                        <li>
                            <h3>NODE.JS</h3>
                            <p>Node.js is an open-source, cross-platform JavaScript run-time environment that executes JavaScript code outside of a browser.</p>
                        </li>
                        <li>
                            <h3>C++</h3>
                            <p>C++ is a general-purpose programming language. It has imperative, object-oriented and generic programming features, while also providing facilities for low-level memory manipulation</p>
                        </li>
                        <li>
                            <h3>C Language</h3>
                            <p>C is a general-purpose, imperative computer programming language, supporting structured programming, lexical variable scope and recursion, while a static type system prevents many unintended operations.</p>
                        </li>
                    </ul>';
                }
                ?>
           </article>
           <aside id="sidebar">
            <div class="dark">
                <h3>Get a Quote</h3>
                <form class="quote" action="includes/quote.inc.php" method="post">
                <div>
                <label>Name</label><br>
                <input type="text" name="quote-name" placeholder="Name..">
                </div>
                <div>
                <label>Email</label><br>
                <input type="email" name="quote-email" placeholder="Email...">
                </div>
                <div>
                <label>Message</label><br>
                <textarea name="quote-message" placeholder="message..."></textarea>
                </div>
                <button type="submit" name="quote-submit" class="button_1">Send</button>
                </form>
            </div>
           </aside>
        </div>
    </section>
</main>

<?php
    require 'footer.php';
?>