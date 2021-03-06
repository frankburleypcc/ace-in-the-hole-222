<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ace In The Hole - Register</title>
    <!--google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald:400,500" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
    <!-- font awesome for footer social media buttons -->
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
          js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.10";
          fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>
    <!--end of facebook script-->
    
    <!--the header contains the logo and the weather api-->
    <?php include '../includes/header.inc.html.php'; ?>
    <!--this is the nav for mobile, tablet, and desktop-->
    <?php include '../includes/nav.inc.html.php'; ?>
<main>
    
    <div class="section group">
        <!--left column-->
        <section class="col span_4_of_12">
           <!-- this is the registration form-->
            <?php include '../includes/register.inc.html.php'; ?>
        </section>
       <!-- center column-->
        <section class="col span_5_of_12">

            <h2>Register Info</h2>
            <p>To get the up-to-date course schedule, click this <a href="../courses/">link</a>.</p>
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
        
    
    
        <section class="col span_3_of_12">
        <!--This is the sidebar. It will contain the social media feeds.--> 
        <aside id="sidebar">
            <h3>Social Media Feeds</h3>
            <?php include '../includes/aside.inc.html.php'; ?>

        </aside>
        </section>
    </div>
    
    <!--<div class="section group">
    <section class="col span_9_of_12" id="courses">
        <h2>Courses</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus condimentum pulvinar dignissim. Donec nec elit ex. Nullam maximus efficitur dignissim. Quisque fermentum laoreet mauris sed hendrerit. In nec dolor condimentum, condimentum tellus id, varius libero. In malesuada aliquet viverra. Vestibulum nulla metus, luctus a posuere id, convallis rhoncus lacus.
            </p>
        <h3>Start Times</h3>
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
        <h3>Course Details</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus condimentum pulvinar dignissim. Donec nec elit ex. Nullam maximus efficitur dignissim. Quisque fermentum laoreet mauris sed hendrerit. In nec dolor condimentum, condimentum tellus id, varius libero. In malesuada aliquet viverra. Vestibulum nulla metus, luctus a posuere id, convallis rhoncus lacus.
            </p>
    </section>
    <section class="col span_9_of_12" id="faq">
        <h2>FAQ</h2>
            <dl>
              <dt>What are the Rules?</dt>
              <dd>- We currently adhere to the USAT Rules for Triathlon &amp; Duathlon.  Important rules include no drafting, you must wear a helmet and music is ABSOLUTELY NOT allowed during the bike for obvious safety reasons.</dd>
              <dt>Can I use a personal music device while cycling?</dt>
              <dd>- Absolutely no music devices are allowed during the bike segment for obvious safety risks and will result in immediate disqualification.</dd>
              <dt>Can I use a personal music device while running?</dt>
              <dd>- During any running segments, we prefer for athletes to NOT use music devices to maximize safety, assure a fair competitive environment and assure athletes can hear all course marshal instructions. With that said, we also understand that many athletes rely on music to help endure the challenge of running. To accommodate the needs of our athletes while still assuring maximum safety and a fair, competitive environment, here is the arrangement that we can accommodate.</dd>
              <dd>- If you chose to use a personal music device, you must always keep one ear open for instructions so only one ear-bud can be used at any time. In addition, if you opt to use music, you will not be eligible for awards, points and rankings. So as an athlete, you have to make a choiceÖmusic or awards/points/rankings.</dd>
              <dd>- If you are using a personal music devise with two earbuds, you will be immediately disqualified. Trust us, we donít want to have to enforce a disqualification but in order to assure the safety of all athletes, this is a very important rule.</dd>
              <dd>- We also request that if you chose to use a personal music device that you keep the volume to a minimum to assure all instructions can be heard.</dd>
              <dt>Do I need to wear a wetsuit?</dt>
              <dd>- No, you do not need to wear a wetsuit. Many will not wear a wetsuit while others will choose to wear a wetsuit because of the buoyancy and warmth factor. </dd>
              <dt>Do I have to use a road or racing bike?</dt>
              <dd>- No. We welcome any type of bike as long as it is functioning properly with brakes and endcaps at the end of your handlebars.</dd>
            </dl>
    </section>
    <section class="col span_9_of_12" id="registration">
        <h2>Registration</h2>
            <p>Cost Includes

    Food &amp; Beer 
    Access to the weekendís live entertainment & Fitness Expo
    Commemorative Finisher medal
    Accurate Chip Timing for competitive races
    Ace in the Hole MultiSport Weekend Tech Shirt
    Post-event party &amp; entertainment

NOTE: Tech shirts guaranteed to pre-registered participants only. 

PACKET PICK UP

All packet pick up will occur at Why Worry Racing, 123 NW Everett, Portland OR. Packet pick up hours: Thursday 8-5, Friday 9-noon. No day of event packet pick up. 
            </p>
    </section>
    <section class="col span_9_of_12" id="contact">
        <h2>Contact</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
    </section>
</div>-->

    
       
    

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
</script>
</body>
</html>