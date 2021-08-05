<?php

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
}

?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="style.css" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>South Africa | Jamii</title>
</head>

<body>

    <div class="navbar-fixed">
        <nav class="white z-depth-0">
            <div class="nav-wrapper">
                <div class="container">
                    <a href="welcome.php" class="brand-logo"><img src="static/Jamii.png" height="60" /></a>
                    <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons black-text">menu</i></a>
                    <ul class="right hide-on-med-and-down">
                        <li><a class="dropdown-trigger black-text" href="#!" data-target="dropdown2">About<i class="material-icons right">arrow_drop_down</i></a></li>
                        <li><a href="blog.php" class="black-text">Blog</a></li>
                        <li><a class="dropdown-trigger black-text" href="#!" data-target="dropdown4">Resources<i class="material-icons right">arrow_drop_down</i></a></li>
                        <li><a href="events.php" class="black-text">Events</a></li>
                        <li><a href="contact.php" class="black-text">Contact us</a></li>
                        <li><a href="logout.php" class="black-text">Logout</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

    <ul class="sidenav" id="mobile-demo">
        <li><a class="dropdown-trigger black-text" href="#!" data-target="dropdown1">About<i class="material-icons right">arrow_drop_down</i></a></li>
        <li><a href="blog.php" class="black-text">Blog</a></li>
        <li><a class="dropdown-trigger black-text" href="#!" data-target="dropdown3">Resources<i class="material-icons right">arrow_drop_down</i></a></li>
        <li><a href="events.php" class="black-text">Events</a></li>
        <li><a href="contact.php" class="black-text">Contact us</a></li>
        <li><a href="register.php" class="black-text">Register</a></li>
        <li><a href="login.php" class="black-text">Login</a></li>
    </ul>


    <ul id="dropdown1" class="dropdown-content">
        <li><a href="about.php" class="black-text">About</a></li>
        <li><a href="team.php" class="black-text">The Team</a></li>
        <li class="divider"></li>
        <li><a href="contact.php" class="black-text">Contact Us</a></li>
    </ul>

    <ul id="dropdown2" class="dropdown-content">
        <li><a href="about.php" class="black-text">About</a></li>
        <li><a href="team.php" class="black-text">The Team</a></li>
        <li class="divider"></li>
        <li><a href="contact.php" class="black-text">Contact Us</a></li>
    </ul>

    <ul id="dropdown3" class="dropdown-content">
        <li><a href="welcome.php" class="black-text">Resources</a></li>
        <li><a href="agreements.php" class="black-text">Agreements</a></li>
        <li class="divider"></li>
        <li><a href="opportunities.php" class="black-text">Opportunities</a></li>
    </ul>
    <ul id="dropdown4" class="dropdown-content">
        <li><a href="welcome.php" class="black-text">Resources</a></li>
        <li><a href="agreements.php" class="black-text">Agreements</a></li>
        <li class="divider"></li>
        <li><a href="opportunities.php" class="black-text">Opportunities</a></li>
    </ul>

    <h3 class="black-text center">Zambia</h3>
    <hr />
    <div class="center">
        <img src="static/zambia.png" class="center" width="100" />
    </div>

    <div class="container">

        <h3 class="center">
            Economic Overview
        </h3>

        <p>For the ten years leading up to 2014, Zambia had one of the world's fastest growing economies, with real GDP
            growth average around 6.7 percent per year, though growth slowed from 2015 to 2017 due to declining copper
            prices, lower power generation, and the depreciation of the kwacha. Zambia's lack of economic diversification
            and reliance on copper as its sole significant export renders it subject to global commodity price volatility,
            and prices fell in 2015 as demand from China fell; Zambia was surpassed as Africa's top copper producer by the
            Democratic Republic of Congo. The rise in mineral prices boosted GDP growth in 2017.</p>
        <p>
            Despite recent strong economic growth and its status as a lower middle-income country, widespread and extreme
            rural poverty and high unemployment continue to be major issues, exacerbated by a high birth rate, a relatively
            high HIV/AIDS burden, market-distorting agricultural and energy policies, and rising government debt. Zambia
            obtained $7 billion from overseas investors in 2012, 2014, and 2015 by selling three separate sovereign bonds.
            At the same time, it issued nearly $4 billion in domestic debt and committed to Chinese-funded infrastructure
            projects, bringing the country's public debt to more than 60% of GDP. The government has considered refinancing
            $3 billion worth of Eurobonds and significant Chinese loans to cut debt servicing costs.
        </p>
        <p>
            The degree of market orientation, the level of economic growth, the most important natural resources, and the
            unique areas of specialty are all briefly described in this section. It may also include a remark regarding one or
            two key future macroeconomic trends, as well as a description of major economic events and policy developments in
            the previous 12 months.
        </p>

        <ul class="collapsible">
            <li>
                <div class="collapsible-header">Trade Agreements</div>
                <div class="collapsible-body"><span>
                        <ul>
                            <li><a href="path to the trade document for download" download>Name of the trade document</li>
                            <li><a href="path to the trade document for download" download>Name of the trade document</li>
                            <li><a href="path to the trade document for download" download>Name of the trade document</li>
                        </ul>
                    </span>
                </div>
            </li>

        </ul>

    </div>



    <footer class="page-footer light-green darken-4" id="contact">
        <div class="container">
            <div class="row">
                <div class="col s12">
                    <div class="center"><a href='welcome.php'><img src="static/Jamii.png" /></a></div>
                    <ul>
                        <li><a href="http://afcfta.au.int/en" class="white-text">AfCFTA Secretariat</a></li>
                        <li><a href="http://tralac.org" class="white-text">Trade Law Center</a></li>
                        <li><a href="http://pacci.org" class="white-text">Pan African Chamber of Commerce & Industry</a></li>
                        <li><a href="http://svai.africa" class="white-text">Shared Value Africa Initiative</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container center"> &copy; 2021 Jamii All Rights Reserved</div>
        </div>
    </footer>

    <script src="materialize/materialize/js/bin/materialize.js"></script>
    <script src="init.js"></script>
</body>

</html>