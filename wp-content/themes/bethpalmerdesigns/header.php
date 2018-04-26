<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <meta name="description" content="Creating beautifully effective website designs for inidividuals and SMEs and providing first class design and support services.">
    <meta name="keywords" content="web design, web support, beth palmer, beth palmer designs, web development, web master, brighton web design, brighton web support, brighton web development, brighton web master, brighton website help, freelance web designer, graphic design, website and graphics, wordpress, bespoke website, cost effective web design, brighton web developers, hove web design, hove web development, hove web support, hove web master, hove website help, sussex web development, sussex website design"> -->
    <title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>

    <?php wp_head(); ?>
</head>

<!-- The #page-top ID is part of the scrolling feature - the data-spy and data-target are part of the built-in Bootstrap scrollspy function -->

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <ul class="navbar-contact">
                    <li><a href="tel:+44-7523-257537"><i class="fa fa-2x fa-phone"></i></a></li>
                    <li><a href="mailto:bethpalmerdesigns@gmail.com"><i class="fa fa-2x fa-envelope-o"></i></a></li>
                </ul>
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <a class="navbar-brand page-scroll" href="<?php bloginfo('url'); ?>">
                    <div class="logo"></div>
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav">
                    <li>
                        <a class="page-scroll" href="about.html">About</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="work.html">Work</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="services.html">Services</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="contact.html">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>