<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ace In The Hole - Contact</title>
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
       <section class="col span_4_of_12">
          <?php include '../includes/contact.inc.html.php'; ?>
       </section>
        
       <section class="col span_5_of_12">
            <h2>Contact Info</h2>
            <p>To get the up-to-date course schedule, click this <a href="../courses/">link</a>.</p>
            <p>Volunteers and Athletes. The contact form is for contacting the organizers about the event. Please indicate your position in the dropdown menu when contacting Ace in the Hole organizers.</p>
       </section>
    
        <section class="col span_3_of_12">
        <!--This is the sidebar. It will contain the social media feeds.--> 
        <aside id="sidebar">
            <h3>Social Media Feeds</h3>
            <?php include '../includes/aside.inc.html.php'; ?>
        </aside>
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
</script>
</body>
</html>