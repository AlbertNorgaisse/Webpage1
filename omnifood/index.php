<!DOCTYPE html> <!--always make sure this looks just like this it will save you problems and remeber to always save -->
<html lang="en">
    
    <head>
        
        <meta charset="utf-8"> <!-- used for character encoding-->
        <meta name="viewport" content="width=device-width, inital-scale=1.0"><!--tells mobile phone to start with one -->
        
        <meta name="description" content="Omnifood is a premium food delivery service with the mission to bring affordable and healthy meals to as many people as possibe"> <!-- what search engine will see for a description -->
        
        <link rel="stylesheet" type="text/css" href="vendors/css/animate.css"> <!--allows for animation -->
        <link rel="stylesheet" type="text/css" href="vendors/css/normalize.css">
        <link rel="stylesheet" type="text/css" href="vendors/css/Grid%20(1).css"> <!--Control d duplicates-->
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.css">
        <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
        <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
<!--linked from web instead-->
        <link rel="stylesheet" type="text/css" href="resources/css/style.css">
        <link rel="stylesheet" type="text/css" href="resources/css/queries.css"> <!--includes queries file -->
        <link href="https://fonts.googleapis.com/css?family=Lato:100,300,300i,400&display=swap" rel="stylesheet">
        <title>Omnifood</title>
        
        
        <!--will see if it gets favicon to work  turns out ?v=2 help showcase it because  this link here https://www.udemy.com/design-and-develop-a-killer-website-with-html5-and-css3/learn/lecture/2620100#questions/3747642-->
        <link rel="apple-touch-icon" sizes="180x180" href="/resources/favicons/apple-touch-icon.png?v=2">
        <link rel="icon" type="image/png" sizes="32x32" href="/resources/favicons/favicon-32x32.png?v=2">
        <link rel="icon" type="image/png" sizes="16x16" href="/resources/favicons/favicon-16x16.png?v=2">
        <link rel="manifest" href="/resources/favicons/site.webmanifest">
        <link rel="mask-icon" href="/resources/favicons/safari-pinned-tab.svg" color="#5bbad5">
        <link rel="shortcut icon" type="image/png" href="/resources/favicons/favicon.ico?v=2">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="msapplication-config" content="/resources/favicons/browserconfig.xml">
        <meta name="theme-color" content="#ffffff">
        
        
        
    </head>
    
    
    <body>
        <header> <!--gives google and others meaning instead of a regular div container -->
            <nav> <!--had class="sticky inside for testing -->
                <div class ="row">
                    <img src="resources/img/logo-white.png" alt="Omnifood logo" class="logo">
                    <img src="resources/img/logo.png" alt="Omnifood logo" class="logo-black">
                    <ul class="main-nav js--main-nav"> <!-- ul like bulletpoints -->
                        <li><a href="#features"> Food delivery</a></li> <!--#features is an anchor now -->
                        <li><a href="#works"> How it works</a></li>
                        <li><a href="#city"> Our cities</a></li>
                        <li><a href="#plans"> Sign up</a></li>
                    </ul>
                    <a class="mobile-nav-icon js--nav-icon"><i class="ion-ios-menu"></i></a> <!-- if you don't specify href then won't show hand pointer -->
                </div>
            </nav>
                <div class="hero-text-box">
                    <h1>Goodbye junk food.<br> Hello super healthy meals.</h1>
                    <a class="btn btn-full js--scroll-to-plans" href="#">I'm hungry</a> <!-- # can be used as a dummy link -->
                    <a class="btn btn-ghost js--scroll-to-start" href="#">Show me more</a>
                </div>
        </header>
        
        <section class="section-features js--section-features" id="features" ><!--  rember to include js class section also id is anchor point think like that -->
            <div class="row">
                <h2>Get food fast &mdash; not fast food.</h2> <!-- each webpage should only have 1 h1 heading--> <!--& is how to watch special charcters or entities-->
                <p class="long-copy">
                    Hello, we’re Omnifood, your new premium food delivery service. We know you’re always busy. No time for cooking. So let us take care of that, we’re really good at it, we promise!
                </p>
            
            
            </div>
            
            <div class="row js--wp-1"><!-- wp is waypoint -->
                <!--text for this was provided by our user copy and paste-->
                <div class="col span-1-of-4 box">
                    <i class="ion-ios-infinite-outline icon-big"></i><!-- i allows you to put icons-->
                    <h3>Up to 365 days/year</h3>
                    <p>
                        Never cook again! We really mean that. Our subscription plans include up to 365 days/year coverage. You can also choose order more flexibly if that's your style.
                    </p>
                </div>
                <div class="col span-1-of-4 box ">
                    <i class="ion-ios-stopwatch-outline icon-big"></i>
                    <h3>Ready in 20 minutes</h3>
                    <p>
                        You're only twenty minutes away from your delicious and super healthy meals delivered right to your home. We work with the best chefs in each town to ensure that you're 100% happy.
                </div>
                <div class="col span-1-of-4 box ">
                    <i class="icon ion-ios-nutrition icon-big"></i>
                    <h3>100% organic</h3>
                    <p>
                        All our vegetables are fresh, organic and local. Animals are raised without added hormones or antibiotics. Good for your health, the environment, and it also tastes better!
                    </p>
                </div>
                <div class="col span-1-of-4 box"><!-- never change the base class used
                    from grid unless you really have to -->
                    <i class="icon ion-ios-cart icon-big"></i>
                    <h3>Order anything</h3>
                    <p>
                        We don't limit your creativity, which means you can order whatever you feel like. You can also choose from our menu containing over 100 delicious meals. It's up to you!
                    </p>
                </div>
            </div>
        </section>
        
        <section class="section-meals"> <!-- Remeber when always creating a div or section or anything for that matter put a class so you can shape the element how you want it -->
            <ul class="meals-showcase clearfix">
                <li>
                    <figure class="meal-photo"> <!-- is like a containter it can contain images and a caption for an img -->
                        <img src="resources/img/1.jpg" alt="Korean bibimbap with egg and vegetables">
                    </figure>
                </li>
                 <li>
                    <figure class="meal-photo"> <!-- is like a containter it can contain images and a caption for an img -->
                        <img src="resources/img/2.jpg" alt="Simple italian pizza with cherry tomatoes">
                    </figure>
                </li>
                 <li>
                    <figure class="meal-photo"> <!-- is like a containter it can contain images and a caption for an img -->
                        <img src="resources/img/3.jpg" alt="Chicken breast steak with vegetables">
                    </figure>
                </li>
                 <li>
                    <figure class="meal-photo"> <!-- is like a containter it can contain images and a caption for an img -->
                        <img src="resources/img/4.jpg" alt="Autumn pumpkin soup">
                    </figure>
                </li>
            </ul>
            <ul class="meals-showcase clearfix">
                <li>
                    <figure class="meal-photo"> <!-- is like a containter it can contain images and a caption for an img -->
                        <img src="resources/img/5.jpg" alt="Paleo beef steak with vegetables">
                    </figure>
                </li>
                 <li>
                    <figure class="meal-photo"> <!-- is like a containter it can contain images and a caption for an img -->
                        <img src="resources/img/6.jpg" alt="Healthy baguette with egg and vegetables">
                    </figure>
                </li>
                 <li>
                    <figure class="meal-photo"> <!-- is like a containter it can contain images and a caption for an img -->
                        <img src="resources/img/7.jpg" alt="Burger with cheddar and bacon">
                    </figure>
                </li>
                 <li>
                    <figure class="meal-photo"> <!-- is like a containter it can contain images and a caption for an img -->
                        <img src="resources/img/8.jpg" alt="Granola with cherries and strawberries">
                    </figure>
                </li>
            </ul>
        </section>
        
        <section class="section-steps" id="works">
            <div class="row">
                <h2>How it works &mdash; Simple as 1, 2, 3</h2>
            </div>
            <div class="row">
                <div class="col span-1-of-2 steps-box">
                    <img src="resources/img/app-iPhone.png" alt="Omnifood app on iphone" class="app-screen js--wp-2"> <!--for img class where all classes go no comma-->
                </div>
                <div class="col span-1-of-2 steps-box">
                    <div class="works-step">
                            <div>1</div>
                            <p>Choose the subscription plan that best fits your needs and sign up today.</p>
                    </div>
                    <div class="works-step">
                            <div>2</div>
                            <p>Order your delicious meal using our mobile app or website. Or you can even call us!</p>
                    </div>
                    <div class="works-step">
                            <div>3</div>
                            <p>Enjoy your meal after less than 20 minutes. See you the next time!</p>
                    </div>
                    <a href="#" class="btn-app"><img src="resources/img/download-app.svg" alt="App store button"></a>
                    <a href="#" class="btn-app"><img src="resources/img/download-app-android.png" alt="Play store store button"></a>
                </div>
            </div>
        </section>
        
        <section class="section-cities" id="city">
            <div class="row ">
                <h2>We're currently in these cities</h2>
            </div>
            <div class="row js--wp-3">
                <div class="= col span-1-of-4 box">
                    <img src="resources/img/lisbon-3.jpg" alt="Lisbon">
                    <h3>Lisbon</h3>
                    <div class="city-feature">
                        <i class="ion-ios-person icon-small"></i>
                        1600+ happy eaters 
                    </div>
                    <div class="city-feature">
                        <i class="ion-ios-star icon-small"></i>
                        60+ top chefs 
                    </div>
                    <div class="city-feature">
                        <i class="ion-logo-twitter icon-small"></i>
                        <a href="#">@omnifood_lx </a>
                    </div>
                </div>
                <div class="= col span-1-of-4 box">
                    <img src="resources/img/san-francisco.jpg" alt="Lisbon">
                    <h3>San Francisco</h3>
                    <div class="city-feature">
                        <i class="ion-ios-person icon-small"></i>
                        3700+ happy eaters
                    </div>
                    <div class="city-feature">
                        <i class="ion-ios-star icon-small"></i>
                        160+ top chefs 
                    </div>
                    <div class="city-feature">
                        <i class="ion-logo-twitter icon-small"></i>
                        <a href="#">@omnifood_sf</a> 
                    </div>
                </div>
                <div class="= col span-1-of-4 box">
                    <img src="resources/img/berlin.jpg" alt="Lisbon">
                    <h3>Berlin</h3>
                    <div class="city-feature">
                        <i class="ion-ios-person icon-small"></i>
                        2300+ happy eaters 
                    </div>
                    <div class="city-feature">
                        <i class="ion-ios-star icon-small"></i>
                       110+ top chefs 
                    </div>
                    <div class="city-feature">
                        <i class="ion-logo-twitter icon-small"></i>
                        <a href="#">@omnifood_berlin</a>
                    </div>
                </div>
                <div class="= col span-1-of-4 box">
                    <img src="resources/img/london.jpg" alt="Lisbon">
                    <h3>London</h3>
                    <div class="city-feature">
                        <i class="ion-ios-person icon-small"></i>
                        1200+ happy eaters
                    </div>
                    <div class="city-feature">
                        <i class="ion-ios-star icon-small"></i>
                        50+ top chefs 
                    </div>
                    <div class="city-feature">
                        <i class="ion-logo-twitter icon-small"></i>
                        <a href="#">@omnifood_london</a>
                    </div>
                </div>   
            </div>
            </section>
            
            <section class="section-testimonials">
                <div class="row">
                    <h2>Our customers can't live without us</h2>
                </div>
                <div class="row">
                    <div class="col span-1-of-3">
                        <blockquote> Omnifood is just awesome! I just launched a startup which leaves me with no time for cooking, so Omnifood is a life-saver. Now that I got used to it, I couldn't live without my daily meals!
                            <cite><!-- blockquote for quote text and
cite for the person giving or source for quote -->
                            <img src="resources/img/customer-1.jpg" alt="Alberto Duncan">
                                Alberto Duncan
                            </cite>
                        </blockquote>
                    </div>
                <div class="col span-1-of-3">
                        <blockquote> Inexpensive, healthy and great-tasting meals, delivered right to my home. We have lots of food delivery here in Lisbon, but no one comes even close to Omifood. Me and my family are so in love!
                            <cite><img src="resources/img/customer-2.jpg" alt="Joana Silva">
                                Joana Silva
                                </cite>
                        </blockquote>
                    </div>
                    <div class="col span-1-of-3">
                        <blockquote> I was looking for a quick and easy food delivery service in San Franciso. I tried a lot of them and ended up with Omnifood. Best food delivery service in the Bay Area. Keep up the great work!
                            <cite><img src="resources/img/customer-3.jpg" alt="Milton Chapman">
                                Milton Chapman 
                                </cite>
                        </blockquote>
                    </div>
                </div>
            </section>
        
            <section class="section-plans js--section-plans" id="plans">
                <div class="row">
                <h2>Start eating healthy today</h2>
                </div>
                <div class="row"> <!--remember creates row across -->
                    <div class="col span-1-of-3">
                        <div class="plan-box js--wp-4"><!-- for seperation made up of 3 divs to split things up pricing, checkmark, and button key to know for structure
                        also great way to allow formating inside the col parent as a child-->
                            <div>
                                <h3>Premium</h3>
                                <p class="plan-price">$399<span>/ month</span></p>
                                <p class="plan-price-meal"> That's only $13.30 per meal</p>
                            </div>
                            <div>
                                <ul>
                                    <li><i class="ion-ios-checkmark icon-small"></i>1 meal every day</li>
                                    <li><i class="ion-ios-checkmark icon-small"></i>Order 24/7</li>
                                    <li><i class="ion-ios-checkmark icon-small"></i>Access to newest creations</li>
                                    <li><i class="ion-ios-checkmark icon-small"></i>Free delivery</li>
                                </ul>
                            </div>
                            <div>
                                <a href="#" class="btn btn-full"> Sign up now</a>
                            </div>
                        </div>
                    </div>
                     <div class="col span-1-of-3">
                        <div class="plan-box"><!-- for seperation made up of 3 divs to split things up pricing, checkmark, and button key to know for structure  -->
                            <div>
                                <h3>Pro</h3>
                                <p class="plan-price">$149 <span>/ month</span></p>
                                <p class="plan-price-meal">That’s only $14.90 per meal</p>
                            </div>
                            <div>
                                <ul>
                                    <li><i class="ion-ios-checkmark icon-small"></i>1 meal 10 days/month</li>
                                    <li><i class="ion-ios-checkmark icon-small"></i>Order 24/7</li>
                                    <li><i class="ion-ios-checkmark icon-small"></i>Access to newest creations</li>
                                    <li><i class="ion-ios-checkmark icon-small"></i>Free delivery</li>
                                </ul>
                            </div>
                            <div>
                                <a href="#" class="btn btn-ghost"> Sign up now</a>
                            </div>
                        </div>
                    </div>
                     <div class="col span-1-of-3">
                        <div class="plan-box"><!-- for seperation made up of 3 divs to split things up pricing, checkmark, and button key to know for structure  -->
                            <div>
                                <h3>Starter</h3>
                                <p class="plan-price">$19 <span>/ meal</span></p>
                                <p class="plan-price-meal">&nbsp;</p>
                            </div>
                            <div>
                                <ul>
                                    <li><i class="ion-ios-checkmark icon-small"></i>1 meal</li>
                                    <li><i class="ion-ios-checkmark icon-small"></i>Order from 8 am to 12 pm</li>
                                    <li><i class="ion-ios-close icon-small"></i></li>
                                    <li><i class="ion-ios-checkmark icon-small"></i>Free delivery</li>
                                </ul>
                            </div>
                            <div>
                                <a href="#" class="btn btn-ghost"> Sign up now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        
            <section class="section-form" id="form"> <!--id links to php where in the website where the form is -->
                <div class="row">
                    <h2>We're happy to hear from you</h2>
                </div>
                <div class="row">
                    <!-- a form is a group of input elements html element use form -->
                    <form method="post" action="mailer.php" class="contact-form"> <!-- mailer.php will be activated when usere clicks submit remember they're just linked. so when having submit butto alwasy have an action usually tied to a php file.  -->
                        
                        <div class="row">
                            
                            <?php
                            if($_GET['success'] == 1){
                                echo "<div class=\"form-messages success\">
                                    Thank you your message has been sent!</div>";
                            }
                            
                            if($_GET['success'] == -1){
                                echo "<div class=\"form-messages error\">
                                    Oops! Something went wrong please try again!</div>";
                            }
                             
                            ?>
                        </div>
                        <div class="row">
                            
                            <div class="col span-1-of-3">
                                <label for="name">Name</label>
                            </div>
                            <div class="col span-2-of-3">
                                <input type="text" name="name" id="name" placeholder="Your name" required> <!--required at the end make sure it needs it-->
                                <!--why id is there is because you can link to label to name so if user clicks name it selects the input box -->
                            </div>
                        </div>
                         <div class="row">
                            <div class="col span-1-of-3">
                                <label for="email">Email</label>
                            </div>
                            <div class="col span-2-of-3">
                                <input type="email" name="email" id="email" placeholder="Your email" required> <!-- Change type to email so browsers searches for email-->
                            </div>
                        </div>
                        <div class="row">
                            <div class="col span-1-of-3">
                                <label for="find-us">How did you find us?</label>
                            </div>
                            <div class="col span-2-of-3">
                                <select name="find-us" id="find-us"> <!--select element creates a drop down box remeber also must be between the select element -->
                                <option value="friends">Friends</option>
                                <option value="search" selected> Search engine</option>
                                    <!--selected chooses the default -->
                                <option value="ad">Advertisment</option>
                                <option value="other">Other</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col span-1-of-3">
                                <label>Newsletter?</label>
                            </div>
                            <div class="col span-2-of-3">
                                <input type="checkbox" name="news" id="news" checked>  Yes, please 
                                <!-- Change type to check box to have one, and default is checked-->
                            </div>
                        </div>
                        <div class="row">
                            <div class="col span-1-of-3">
                                <label>Drop us a line</label>
                            </div>
                            <div class="col span-2-of-3">
                                <textarea name="message" placeholder="Your message"></textarea><!--<textarea> what is used to create a box for users to write in,also last cool thing is that the box can change sizes in the browser -->
                            </div>
                        </div>
                        <div class="row">
                            <div class="col span-1-of-3">
                                <label>&nbsp;</label> <!--&nbsp; is space character -->
                            </div>
                            <div class="col span-2-of-3">
                                <input type="submit" value="Send it!"> <!-- the type="submit"  will create the button and value will have what is written inside  -->
                            </div>
                        </div>
                    </form>
                </div>
            </section>
        
            <footer> <!--html footer function -->
                <div class="row">
                    <div class="col span-1-of-2">
                        <ul class="footer-nav">
                            <li><a href="#">About us</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Press</a></li>
                            <li><a href="#">IOS App</a></li>
                            <li><a href="#">Android App</a></li>
                        </ul>
                    </div>
                     <div class="col span-1-of-2">
                         <ul class="social-links">
                             <li><a href="#"><i class="ion-logo-facebook"></i></a></li> 
                             <li><a href="#"><i class="ion-logo-twitter"></i></a></li> 
                             <li><a href="#"><i class="ion-logo-googleplus"></i></a></li> 
                             <li><a href="#"><i class="ion-logo-instagram"></i></a></li> 
                         </ul>
                    </div>
                </div>
                <div class="row">
                    <p>
                        Copyright &copy; 2019 by Omnifood. All rights reserverd.
                    </p>
                </div>
            </footer>
       
       
    <script src="https://cdn.jsdelivr.net/npm/respond@0.9.0/main.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/html5shiv@3.7.3/dist/html5shiv.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/selectivizr@1.0.3/selectivizr.min.js"></script><!--goes at the bottom before closing body tag first look at javascript also you have the link in bookmark if you want to remeber enables
the code to work with older browsers-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="vendors/js/jquery.waypoints.min.js"></script><!--good place for scrolling effects-->
    <script src="resources/js/script.js"></script><!--our js must be the last one always -->
    
    </body>
    
    
</html>


<!--

-->
