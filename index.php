<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="fix.css" class="css">
    <?php wp_head();?>
</head>
<body>
    <header>
        <img class="fix-logo" src="<?php bloginfo('template_directory');?>/fix-logo.jpg" alt="logo">
            <input class="søge" type="text" placeholder="Søg efter video..">
    </header>
    <main>
        <img class="banner" src="<?php bloginfo('template_directory');?>/bonne-kam.jpg" alt="kampange">
        <iframe class="video"  src="https://www.youtube.com/embed/OgxH8bRWgLY" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <img class="mat" src="<?php bloginfo('template_directory');?>/spand.png" alt="spand"> 
        <img class="mat" src="<?php bloginfo('template_directory');?>/alfix.png" alt="alfix"> 
        <img class="mat" src="<?php bloginfo('template_directory');?>/spartel.png" alt="spartel">
        <iframe class="video" src="https://www.youtube.com/embed/dyBmxF6Q1gI?start=4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </main>
    <footer>
        <img class="foot" src="<?php bloginfo('template_directory');?>/footer.jpg" alt="footer">
    </footer>
</body>
</html>