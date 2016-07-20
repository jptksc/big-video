<?php include('./assets/helpers/functions.php'); ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        
        <!-- Title & Description: Change the title and description to suit your needs. -->
        <title>The Big Video Template</title>
        <meta name="description" content="A template for creating perfectly fluid full-screen video splash pages.">
        
        <!-- Viewport Meta: Just taming mobile devices like iPads and iPhones. -->
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0"/>
        
        <!-- Styles: The primary styles for this template. -->
        <link rel="stylesheet" type="text/css" href="assets/styles/normalize.css">
        <link rel="stylesheet" type="text/css" href="assets/styles/main.css">
        <link rel="stylesheet" type="text/css" href="assets/styles/responsive.css">
        <link rel="stylesheet" type="text/css" href="assets/styles/animations.css">
        
        <!-- Favicon: Change to whatever you like within the “assets/images” folder. -->
        <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon" />
    </head>
    
    <body>
        <!-- The Loader: You can change this logo within the “assets/images” folder. -->
        <section id="loading">
            <div class="logo">
                <img class="animated slow pulse" src="assets/images/logo-black.png" />
            </div>
        </section>

        <!-- The Header: You can change the logo within the “assets/images” folder. -->
        <header>
            <!-- The Logo: You can change this logo within the “assets/images” folder. -->
            <img src="assets/images/logo-white.png">

            <!-- Content Panels: Add or remove content panel links as you see fit. -->
            <nav>
                <a class="open" href="#about">About</a>
                <a class="open" href="#news">Subscribe</a>
            </nav>

            <!-- Loves: Remove this if you like. -->
            <div class="loved">
                <span class="loves"><?php echo($loves_count); ?></span>
                <a class="icon love" href="#"></a>
            </div>
        </header>

        <!-- The Big Video: Update your video and intro text below. -->
        <section id="video">
            <!-- The Video: Update the video files within the “assets/video” folder. -->
            <video preload>
                <source src="assets/video/video.mp4" type="video/mp4" title="mp4">
                <source src="assets/video/video.webm" type="video/webm" title="webm">
            </video>
            
            <!-- The Video Poster: Update the video poster image within the “assets/video” folder. -->
            <div class="poster" style="background-image: url('assets/video/video.jpg');"></div>

            <!-- The Intro Text: Update your intro text below. -->
            <div class="intro">
                <h1>Introducing <strong>Big Video</strong>, a simple solution for creating perfectly fluid full-screen video splash pages.</h1>
                <a class="icon play animated slow pulse" href="#"></a>
            </div>

            <a class="pause" href="#"></a>
        </section>

        <!-- The Footer: Update or remove the credits below. -->
        <footer>
            <div class="credits">
                <div class="copy">
                    <h3><strong>Iceland</strong></h3>
                    <h4>by <a href="https://twitter.com/ugmonk" target="_blank">Jeff Sheldon</a></h4>
                </div>
            </div>

            <!-- Plays: Remove this if you like. -->
            <div class="plays">
                <h3><strong><?php echo($plays_count); ?></strong></h3>
                <h4>Plays</h4>
            </div>
        </footer>

        <!-- The About Panel: Update the text/links below to suit your own needs. -->
        <section class="panel closed" id="about">
            <a class="icon close" href="#about"></a>
            
            <div class="content">
                <h2>A template for creating perfectly fluid full-screen video splash pages.</h2>
                <p>Hi, I'm <a href="https://twitter.com/jschuller" target="_blank">Jason Schuller</a>, and I design and make websites. This is <strong>Big Video</strong>, a minimalist website template for creating perfectly fluid full-screen video splash pages. If you have questions or comments, feel free to ask.</p>
                
                <div class="actions">
                    <a class="icon twitter" href=""></a>
                    <a class="icon facebook" href=""></a>
                    <a class="icon instagram" href=""></a>
                    <a class="icon email" href="mailto:?subject=Hello Leeflets - About Big Video&body=Hello there, I have some question about the Big Video template."></a>
                </div>
            </div>
        </section>

        <!-- The News Panel: Update the text below to suit your own needs. -->
        <section class="panel closed" id="news">
            <a class="icon close" href="#news"></a>

            <div class="response">
                <span class="status icon"></span>
            </div>
            
            <div class="content">
                <h2>If you would like to join us on this fantastic journey, subscribe for news and updates.</h2>
                <p>Trust us with your email address (we never, ever share or spam) and we’ll send you news and updates about this <strong>Big Video</strong>. Anything you receive from us will be nothing short of awesome... promise.</p>

                <!-- Subscription Form: Configure your MailChimp settings within settings.php. -->
                <form class="row" id="mailchimp" action="assets/helpers/post-subscribe.php" method="post">
                    <input type="email" name="email" id="email" placeholder="you@youremail.com">
                    <button type="submit" class="icon submit button"></button>
                </form>
            </div>
        </section>

        <!-- Required Scripts: Not too much needed for this template. -->
        <script type="text/javascript" src="assets/scripts/jquery.js"></script>
        <script type="text/javascript" src="assets/scripts/main.js"></script>
    </body>
</html>