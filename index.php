<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ace In The Hole</title>
    <!--google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500" rel="stylesheet">
    <!-- font awesome for the social media buttons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/grid.css">
    <link rel="stylesheet" href="css/helper.css">
    <link rel="stylesheet" href="css/style.css"> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
    <header>
        <h1>Ace in the Hole</h1>
        
        <!--<nav>
           <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Courses</a></li>
                <li><a href="#">FAQ</a></li>
                <li><a href="#">Register</a></li>
                <li><a href="#">Contact</a></li>
           </ul>
        </nav>-->
       <!-- code pen hamburger-->
        <button class="hamburger">&#9776;</button>
        <button class="cross">&#735;</button>
        
        <?php include 'includes/nav.inc.html.php'; ?>

        
       
    </header>
    
    
<main>
    <!--this is a placeholder image for the slideshow gallery-->
    <img src="images/hero-placeholder.png">
    <div class="section group">
    <section class="col span_9_of_12">
        <h2>About the Event</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus condimentum pulvinar dignissim. Donec nec elit ex. Nullam maximus efficitur dignissim. Quisque fermentum laoreet mauris sed hendrerit. In nec dolor condimentum, condimentum tellus id, varius libero. In malesuada aliquet viverra. Vestibulum nulla metus, luctus a posuere id, convallis rhoncus lacus.

        </p>
    </section>
    
    <section class="col span_3_of_12">
    <!--This is the sidebar. It will contain the social media feeds.--> 
    <aside id="sidebar">
        <h3>Social Media</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus condimentum pulvinar dignissim. Donec nec elit ex. Nullam maximus efficitur dignissim. Quisque fermentum laoreet mauris sed hendrerit. In nec dolor condimentum, condimentum tellus id, varius libero. In malesuada aliquet viverra. Vestibulum nulla metus, luctus a posuere id, convallis rhoncus lacus.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus condimentum pulvinar dignissim. </p>
    </aside>
    </section>
    
    <section class="col span_9_of_12">
        <h2>What to Bring?</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus condimentum pulvinar dignissim. Donec nec elit ex. Nullam maximus efficitur dignissim. Quisque fermentum laoreet mauris sed hendrerit. In nec dolor condimentum, condimentum tellus id, varius libero. In malesuada aliquet viverra. Vestibulum nulla metus, luctus a posuere id, convallis rhoncus lacus.
        </p>
    </section>
    </div>
    
    <div class="section group">
    <section class="col span_9_of_12" id="courses">
        <h2>Courses</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus condimentum pulvinar dignissim. Donec nec elit ex. Nullam maximus efficitur dignissim. Quisque fermentum laoreet mauris sed hendrerit. In nec dolor condimentum, condimentum tellus id, varius libero. In malesuada aliquet viverra. Vestibulum nulla metus, luctus a posuere id, convallis rhoncus lacus.
            </p>
        <h3>Start Times</h3>
          <ul>
              <li>Lorem ipsum dolor sit amet</li>
              <li>Lorem ipsum dolor sit amet</li>
              <li>Lorem ipsum dolor sit amet</li>
              <li>Lorem ipsum dolor sit amet</li>
              <li>Lorem ipsum dolor sit amet</li>
              <li>Lorem ipsum dolor sit amet</li>
              <li>Lorem ipsum dolor sit amet</li>
              <li>Lorem ipsum dolor sit amet</li>
        </ul>
        <h3>Course Details</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus condimentum pulvinar dignissim. Donec nec elit ex. Nullam maximus efficitur dignissim. Quisque fermentum laoreet mauris sed hendrerit. In nec dolor condimentum, condimentum tellus id, varius libero. In malesuada aliquet viverra. Vestibulum nulla metus, luctus a posuere id, convallis rhoncus lacus.
            </p>
    </section>
    <section class="col span_9_of_12" id="faq">
        <h2>FAQ</h2>
            <dl>
              <dt>Lorem ipsum dolor sit amet</dt>
              <dd>- Lorem ipsum dolor sit amet</dd>
              <dt>Lorem ipsum dolor sit amet</dt>
              <dd>- Lorem ipsum dolor sit amet</dd>
              <dt>Lorem ipsum dolor sit amet</dt>
              <dd>- Lorem ipsum dolor sit amet</dd>
              <dt>Lorem ipsum dolor sit amet</dt>
              <dd>- Lorem ipsum dolor sit amet</dd>
            </dl>
    </section>
    <section class="col span_9_of_12" id="registration">
        <h2>Registration Form</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus condimentum pulvinar dignissim..
            </p>
    </section>
    <section class="col span_9_of_12" id="contact">
        <h2>Contact Form</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
    </section>
</div>

    
       
    

</main>
    

<footer>
    <!--The copyright will use php to generate the current year-->
    <p>Copyright</p>
        <ul>
            <li>sm</li>
            <li>sm</li>
        </ul>
</footer>
    
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
</script>
</body>
</html>