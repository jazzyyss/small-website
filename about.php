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
                    <h1 class="page-title">About Us</h1>
                    <p>is a Company that specializes in Web based development 
                    activities, Client Server solutions and corporate website 
                    development & maintenance services.</p>
                    <p>Industrial Training refers to work experience that is 
                    relevant to professional development prior to completion 
                    of degree. One of the requirements for the award of any 
                    technical degree is that students must complete at least 
                    06 months of Industrial Training. Industrial Training is 
                    normally accumulated during the final semesters.</p>
               </article>
               <aside id="sidebar">
                <div class="dark">
                    <h3>What We DO</h3>
                    <p>We give the industrial training on the courses related
                        to the web development or the web based applications 
                        for a specific period of time.</p>
                </div>
               </aside>
            </div>
        </section>
    </main>
<?php

    require 'footer.php';
?>