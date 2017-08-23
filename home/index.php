<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ace In The Hole</title>
    <!--google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald:400,500" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
    <!-- font awesome for the footer social media buttons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/grid.css">
    <link rel="stylesheet" href="../css/helper.css">
    <link rel="stylesheet" href="../css/style.css"> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
    <!--this script is for the facebook feed required after body tag-->
   <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.10&appId=1057251694317296";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
    <!--end of facebook script-->
    
    <!--the header contains the logo and the weather api-->
    <?php include '../includes/header.inc.html.php'; ?>
    <!--this is the nav for mobile, tablet, and desktop-->
    <?php include '../includes/nav.inc.html.php'; ?>
<main>
    <div class="container">
            <div id="slider">
                <ul class="slides">
                    <li class="slide slide1"><img src="../images/slider1.jpeg"></li>
                    <li class="slide slide2"><img src="../images/slider2.jpeg"></li>
                    <li class="slide slide3"><img src="../images/slider3.jpeg"></li>
                    <li class="slide slide1"><img src="../images/slider4.jpg"></li>
                    <li class="slide slide2"><img src="../images/slider5.jpg"></li>
                    <li class="slide slide3"><img src="../images/slider6.jpg"></li>
                    <li class="slide slide1"><img src="../images/slider1.jpeg"></li>
                </ul>
            </div>

        </div>
    <!--end of slideshow gallery-->
    <div class="section group">
    <section class="col span_9_of_12">
        <h2>About The Event</h2>
        <p>The Annual Ace in the Hole MultiSport Weekend is a legendary event in the Oregon triathlon and running community. It has become a traditional destination race for athletes from across the nation.</p>
        
        <p>There is something for every level of athletic ability. The weekend includes a first timer triathlon, a sprint, Olympic, and Half-Iron triathlons and 10K and Half marathon runs. Come to experience your first race or come to compete to win, but make sure you come to have fun!
        </p>
        
        <p class="courseLink">To get the up-to-date course schedule, click this <a href="../courses/">link</a>.</p>
        
        <h2>What To Bring</h2>
        
        <p>Watch the weather closely.  The show goes on no matter what the weather is doing. </p>

        <p>You must wear your chip timing piece during the entire event.  You will be given a band that will hold your chip timing piece around your ankle throughout the entire event. Be sure that it is snapped tightly. Be sure to have your Chip Timing piece on before you start the race and be sure to step over the timing mats after each segment of the race. If you are wearing a wet-suit, make sure the timing piece goes under your wetsuit otherwise, you will have a very difficult time getting off your wet suit.</p>

        <p>Swim: Wetsuits are optional for the swim but will provide buoyancy and warmth. However, many people opt for no wetsuit for a triathlon so no worries.  We will provide you with a swim cap but you will want to bring your own goggles.</p>

        <p>Bike:  A biking helmet is mandatory.  You will also receive 2 stickers in your package with your race number on them.  The small sticker should go on the front of your helmet.  The bigger sticker will wrap around your bike frame.  Road or mountain bikes are acceptable.  For safety reasons, be sure to have end-caps on the end of your handle-bars.</p>

        <p>Run:  You must finish the race with your bib number on the front of you.  Some people choose to pin it on at the beginning of the race and have it on for the whole event so they don't have to worry about it.  Others pin it on a singlet that they put on once they finish the swim before they head out for the bike.  Others use an elastic racing strap that they pin their bib number to and then quickly strap it on before they leave for the run.  Use whatever option feels best for you.
        </p>
        <p>Remember to bring a change of clothing so you can enjoy the post-event festivities.</p>
        
    </section>
    
    <section class="col span_3_of_12">
    <!--This is the sidebar. It will contain the social media feeds.--> 
    <aside id="sidebar">
        <h3>Social Media Feeds</h3>
        
        <?php include '../includes/aside.inc.html.php'; ?>
    </aside>
    </section>
    
    
    </div>
    
    <div class="section group">
    <section class="col span_9_of_12" id="courses">
        <h2>Courses</h2>
        <blockquote>"Scroll down for Start Times"</blockquote>
        <?php include '../includes/courses.inc.html.php'; ?>
            
        <h2>Start Times</h2>
          <ul>
              <h3>Saturday</h3>
              <li>Long Course 7:00 AM </li>
              <li>Olympic 7:30 AM </li>
              <li>10K 7:15 AM </li>
              <li>Half Marathon 7:15 AM </li>
              <h3>Sunday 7/17</h3>
              <li>Sprint 8:00 AM</li>
              <li>Try-a-Tri 8:20 AM</li>
              <li>Splash n Dash 12:00 PM</li>
              
        </ul>
        
    </section>
    <section class="col span_9_of_12" id="faq">
        <h2>FAQ</h2>
        
        <?php include '../includes/faq.inc.html.php'; ?>
     
    </section>
    <section class="col span_9_of_12" id="registration">
        <h2>Registration</h2>
        <!-- this is the registration form-->
        <?php include '../includes/register.inc.html.php'; ?>
        
        <h3>Cost Includes</h3>
                <ul>
                  <li>Food &amp; Beer</li>
                  <li>Access to the weekend's live entertainment &amp; Fitness Expo</li>
                  <li>Commemorative Finisher medal</li>
                  <li>Accurate Chip Timing for competitive races</li>
                  <li>Ace in the Hole MultiSport Weekend Tech Shirt</li>
                  <li>Post-event party &amp; entertainment</li>
                </ul> 
        <p>NOTE: Tech shirts guaranteed to pre-registered participants only. 

        <h3>PACKET PICK UP</h3>

        <p>All packet pick up will occur at Why Worry Racing, 123 NW Everett, Portland OR. Packet pick up hours: Thursday 8-5, Friday 9-noon. No day of event packet pick up.</p>
        
           
    </section>
    <section class="col span_9_of_12" id="contact">
        <h2>Contact</h2>
        <?php include '../includes/contact.inc.html.php'; ?>
    </section>
</div>

    
       
    

</main>
    
<?php include '../includes/footer.inc.html.php'; ?>

    
<!--This script is for the hamburger menu-->  
<script>
    $( ".cross" ).hide();
    $( ".menu" ).hide();
    $( ".hamburger" ).click(function() {
    $( ".menu" ).slideToggle( "slow", function() {
    $( ".hamburger" ).hide();
    $( ".cross" ).show();
    });
    });

    $( ".cross" ).click(function() {
    $( ".menu" ).slideToggle( "slow", function() {
    $( ".cross" ).hide();
    $( ".hamburger" ).show();
    });
    });
    
       /*Weather API goes here*/
        /*appID=(number entered)is the key and units=imperial pulls Farenheit*/
        var apiCall = 'http://api.openweathermap.org/data/2.5/weather?q={Portland}&appid=f69d435a860da7aa539496652d1351ce&units=imperial';
        
        $.getJSON(apiCall, weatherCallback);
    /*this function creates calls on the API to pull the description of the weather
    and the temperature. */
    function weatherCallback(weatherData) {
        /*this pulls text for the description*/
        var description = weatherData.weather[0].description;
        /*this pulls the fahrenheit number*/
        var temp = weatherData.main.temp;
        /*this rounds the fahrenheit number*/
        var roundNumber = Math.round(temp);

        /*creates a variable to pull icons*/
        var iconCode = weatherData.weather[0].icon;
        /*constructs a url which points to the icon*/
        var iconUrl = "http://openweathermap.org/img/w/" + iconCode + ".png";

        /*console.log(weatherData, weatherData.name);*/
        console.log("IT WORKS!!");

        /*These attach the variables to the ID in the sites header*/
        //$('#descID').append(description);
        $('#tempID').append(roundNumber);
        //$("#icon").append("<img src='" + iconUrl + "'>");
    }
        /*end of weather*/
    /*this script is for the image slider*/
    'use strict';

$(function() {

    //settings for slider
    var width = 720;
    var animationSpeed = 2000;
    var pause = 5000;
    var currentSlide = 1;

    //cache DOM elements
    var $slider = $('#slider');
    var $slideContainer = $('.slides', $slider);
    var $slides = $('.slide', $slider);

    var interval;

    function startSlider() {
        interval = setInterval(function() {
            $slideContainer.animate({'margin-left': '-='+width}, animationSpeed, function() {
                if (++currentSlide === $slides.length) {
                    currentSlide = 1;
                    $slideContainer.css('margin-left', 0);
                }
            });
        }, pause);
    }
    function pauseSlider() {
        clearInterval(interval);
    }

    $slideContainer
        .on('mouseenter', pauseSlider)
        .on('mouseleave', startSlider);

    startSlider();


});
/*end of image slider script*/
</script>
</body>
</html>