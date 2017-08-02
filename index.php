<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ace In The Hole</title>
    <!--google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald:400,500" rel="stylesheet">
    <!-- font awesome for the social media buttons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/grid.css">
    <link rel="stylesheet" href="css/helper.css">
    <link rel="stylesheet" href="css/style.css"> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
    <!--the header contains the logo and the weather api-->
    <?php include 'includes/header.inc.html.php'; ?>
    
    <?php include 'includes/nav.inc.html.php'; ?>
<main>
    <!--this is a placeholder image for the slideshow gallery-->
    <img src="images/header%20box2.png">
    <div class="section group">
    <section class="col span_9_of_12">
        <h2>heading (h2)</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus condimentum pulvinar dignissim. Donec nec elit ex. Nullam maximus efficitur dignissim. Quisque fermentum laoreet mauris sed hendrerit. In nec dolor condimentum, condimentum tellus id, varius libero. In malesuada aliquet viverra. Vestibulum nulla metus, luctus a posuere id, convallis rhoncus lacus. Quisque fermentum laoreet mauris sed hendrerit. In nec dolor condimentum, condimentum tellus id, varius libero. In malesuada aliquet viverra. Vestibulum nulla metus, luctus a posuere id, convallis rhoncus lacus.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus condimentum pulvinar dignissim. Donec nec elit ex. Nullam maximus efficitur dignissim. Quisque fermentum laoreet mauris sed hendrerit. In nec dolor condimentum, condimentum tellus id, varius libero. In malesuada aliquet viverra. Vestibulum nulla metus, luctus a posuere id, convallis rhoncus lacus. Quisque fermentum laoreet mauris sed hendrerit. In nec dolor condimentum, condimentum tellus id, varius libero. In malesuada aliquet viverra. Vestibulum nulla metus, luctus a posuere id, convallis rhoncus lacus.

        </p>
    </section>
    
    <section class="col span_3_of_12">
    <!--This is the sidebar. It will contain the social media feeds.--> 
    <aside id="sidebar">
        <h3>heading (h3)</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus condimentum pulvinar dignissim. Donec nec elit ex. Nullam maximus efficitur dignissim. 
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus condimentum pulvinar dignissim. Donec nec elit ex. Nullam maximus efficitur dignissim.</p>
        
    </aside>
    </section>
    
    <section class="col span_9_of_12">
        <h2>heading (h2)</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus condimentum pulvinar dignissim. Donec nec elit ex. Nullam maximus efficitur dignissim. Quisque fermentum laoreet mauris sed hendrerit. In nec dolor condimentum, condimentum tellus id, varius libero. In malesuada aliquet viverra. Vestibulum nulla metus, luctus a posuere id, convallis rhoncus lacus.
        </p>
    </section>
    </div>
    
    <div class="section group">
    <section class="col span_9_of_12" id="courses">
        <h2>heading (h2)</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus condimentum pulvinar dignissim. Donec nec elit ex. Nullam maximus efficitur dignissim. Quisque fermentum laoreet mauris sed hendrerit. In nec dolor condimentum, condimentum tellus id, varius libero. In malesuada aliquet viverra. Vestibulum nulla metus, luctus a posuere id, convallis rhoncus lacus.
            </p>
        <h3>heading (h3)</h3>
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
        <h3>heading (h3)</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus condimentum pulvinar dignissim. Donec nec elit ex. Nullam maximus efficitur dignissim. Quisque fermentum laoreet mauris sed hendrerit. In nec dolor condimentum, condimentum tellus id, varius libero. In malesuada aliquet viverra. Vestibulum nulla metus, luctus a posuere id, convallis rhoncus lacus.
            </p>
    </section>
    <section class="col span_9_of_12" id="faq">
        <h2>heading (h2)</h2>
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
        <h2>heading (h2)</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus condimentum pulvinar dignissim..
            </p>
    </section>
    <section class="col span_9_of_12" id="contact">
        <h2>heading (h2)</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
    </section>
</div>

    
       
    

</main>
    
<?php include 'includes/footer.inc.html.php'; ?>

    
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