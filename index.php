<?php include 'header.php';?>

<!-- Attention Grabbing Section -->
<div id="mainPage">
        <h1 class="homeSplashText" >Bring a New <br> Shade To <br> Your Home</h1>

        <div id="mainButtons">
        <button onclick="window.location.href='pricing.php';">See our Prices</button>
        <button onclick="window.location.href='quote.php';">Get a Free Quote</button>
        </div>
    </div>

<!-- Additional Info -->
<main>

    <h2>Our Painting <br> Services</h2>
    <br>
    <div class="list">
        <div class="icon">
            <img src="images/houseIcon.png" alt="Exterior Icon">
            <p>Exterior</p>
        </div>

        <div class="icon">
            <img src="images/interiorIcon.png" alt="Exterior Icon">
            <p>Interior</p>
        </div>

        <div class="icon">
            <img src="images/customIcon.png" alt="Exterior Icon">
            <p>Custom</p>
        </div>
    </div>  
    <br>

    <div class="list">
        <p>Learn about out expert services that<br> will make your home be the beacon of the neighborhood.</p>
        <p>Check out our process to make your<br> guests in awe when they walk in your home.</p>
        <p>Be sure to see the other services<br> that we can do from cabinets to furnishings</p>
    </div>

    <!-- Surely there a better way... right? -->
    <div id="splashImg">
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        <h1 class="white">Find Your Price</h1>
        <br><br><br><br><br>
        <button onclick="window.location.href='pricing.php';" class="priceButton">See Pricing</button>
        <br><br><br><br><br>
    </div>

    <h2>Our Work</h2>
    <div class="list">
        <img src="images/exampleHouse.png" src="house">
        <img src="images/exampleInterior.png" src="interior">
        <img src="images/exampleCustom1.png" src="custom1">
        <img src="images/exampleCustom2.png" src="custom2">
    </div>
    <br>

</main>

<?php include 'footer.php';?>