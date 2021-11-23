<!DOCTYPE html>

<?php
    require 'functions.php';
?>

<html lang="en">

<head>
    <title>MusicOnline | Live and Breathe Vinyl | Community of Music Lovers</title>

    <meta name="description"
        content="Music Lovers! Expand your record collection, list an album for sale or connect with music fans from around the globe.">
    <meta name="keywords" content="Vinyl Music, Music, Buy, Sell, Community, Artist, Record, Album, Singles">   

    <?php writeMetaData(); ?>

    <?php importStylesheets(); ?>

</head>

<body>
    <!-- Split header to allow for active class in Nav -->
    <?php headerStart(); ?>
        <?php displayNav(HOME); ?>
    <?php headerEnd(); ?>

    <section id="hero" class="container-outer">
        <div class="container-inner"> 

        </div>
    </section>


</body>

</html>