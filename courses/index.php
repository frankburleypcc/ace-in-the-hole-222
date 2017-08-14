<!--courses page-->
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ace In The Hole - Courses</title>
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
    <!--this is a placeholder image for the slideshow gallery-->
    <!--<img src="images/header%20box2.png">-->
    
    <div class="section group">
    <section class="col span_9_of_12">
       
        
        <h2>Course Details</h2>
        
        <?php include '../includes/courses.inc.html.php'; ?>
              <!--  <p>WATER TEMPERATURE is expected to be between 62 and 66 degrees. The temperature will be taken on Friday and the morning of the race. Wetsuits are recommended.</p>
-->
                <!--<h3>Long Course SWIM ñ 1.2mi</h3> <p>- Participants will make two counter-clockwise loops. Large buoys will mark the turn points. Kayakers will be positioned on the water to support the swimmers. Medical support will be present on the beach.</p>

                <h3>Long Course BIKE ñ 58 Miles:</h3>  <p>A scenic point-to-point course that travels over gently rolling hills prior to three hard climbs. The bike course will be marked with large directional signage and there will be course marshals at key intersections to help direct you. </p>

                <h3>Long Course RUN ñ 13.1mi</h3>
                <p>A mostly flat loop course on widely paved bike paths that traverse through and around this beautiful and scenic destination resort (two hills total with a minimal elevation gain).</p>

                <h3>OLYMPIC SWIM ñ 1,500 meters</h3>  <p>- Participants will make two counter-clockwise loops. Large buoys will mark the turn points. Kayakers will be positioned on the water to support the swimmers. Medical support will be present on the beach.</p>

                <h3>OLYMPIC BIKE ñ 28mi</h3>  <p>- A scenic point-to-point course that travels over gently rolling hills. The bike course will be marked with large directional signage and course marshals will be present at key intersections. </p>

                <h3>OLYMPIC RUN ñ 10K </h3><p>- A mostly flat loop course on widely paved bike paths that traverse through and around this beautiful and scenic destination resort (one hill total with a minimal elevation gain).</p>

                 <h3>Sprint:</h3> <p>Course will offer a 1-loop 1/2 mile swim, the exact same 28 mile Bike Course as the Olympic distance and a 5km run.</p>

                 <h3>Try-A-Tri:</h3> <p>This novice race is designed for the first time triathlete, those new to the sport, our Junior Triathletes. The swim is a shorter, more manageable 1/4 mile distance, (instead of the standard 1/2-mile Sprint distance swim), 10 mile bike ride (vs 12 miles and it's a 2 loop course making it very spectator friendly!) and a flat 2 mile run (vs 3 mile sprint course).</p>

                 <h3>Half Marathon COURSE:</h3><p> Half-Marathon (13.1-miles): Half-Marathon event starts and finishes in the Athletes Village to the cheers of the enthusiastic crowd. Once finished, runners can enjoy the finish line festivities, including the Sports & Fitness Expo and live entertainment. Post-race refreshments will be provided and the Awards Ceremony for the Half-Marathon will begin once the results have been certified</p>

                 <h3>10k COURSE:</h3> <p>The 10K event starts and finishes in the Athletes Village. The paths are approximately 6 ft wide, perfectly paved and wind around through the forest. Each course has only two small hills with a minimal elevation gain to navigate and a fast downhill to flat finish to the roaring cheers of the crowd.</p>-->
        
       
    </section>
    
    <section class="col span_3_of_12">
    <!--This is the sidebar. It will contain the social media feeds.--> 
    <aside id="sidebar">
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
        
        
    </aside>
    </section>
    
    
    </div>
    
    <div class="section group">
    <section class="col span_9_of_12" id="courses">
        
      
        
    </section>
    <!--<section class="col span_9_of_12" id="faq">
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
    </section>-->
 <!--   <section class="col span_9_of_12" id="registration">
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
    </section>-->
    <!--<section class="col span_9_of_12" id="contact">
        <h2>Contact</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
    </section>-->
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
</script>
</body>
</html>