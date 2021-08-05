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
    <h3 class="black-text center">Zimbabwe</h3>
    <hr />
    <div class="center">
        <img src="static/zimbabwe.png" class="center" width="100" />
    </div>

    <div class="container">

        <h3 class="center">
            Economic Overview
        </h3>

        <p>Zimbabwe's economy is expected to revive by 2.9 percent in 2021, aided by agricultural recovery and base
            effects, following an economic crisis aggravated by the COVID-19 (coronavirus) epidemic. Food prices will be
            stabilized and food security will be improved as a result of the expected bumper harvest and the continuance
            of rule-based monetary policy. However, disruptions caused by the pandemic will continue to weigh on economic
            activity in Zimbabwe, limiting employment growth and improvements in living standards.</p>
        <p>
            COVID-19 interrupted economic recovery, and GDP is expected to drop by 8% for the second year in a straight in
            2020. Manufacturing, non-mineral exports, and the hotel, trade, and transportation industries all suffered as a
            result of the operating restrictions. Manufacturing and service firm sales in July 2020 were around half of what
            they were in July 2019. After mobility limitations were eased, supply-side shocks subsided, but domestic demand
            remained weak in the face of triple-digit inflation, significant unemployment, and income losses. Import demand
            surged as a result of several years of drought, which needed additional maize and electricity imports, as well as
            new needs for lab equipment and medical supplies as a result of the epidemic. The current account was in surplus,
            due to high remittances inflows and trade surplus.
        </p>
        <p>
            To keep price volatility in check, fiscal and monetary policy responses to the pandemic have been constrained.
            Despite wage pressures and the necessity for more spending to respond to the pandemic and the growing number of
            poor, fiscal policy remained tight. In 2020, the fiscal balance shifted to a minor deficit of 1.3 percent of GDP.
            The Reserve Bank of Zimbabwe implemented the reserve money targeting framework, floated the currency rate, and
            launched a foreign auction in June 2020. These actions served to stabilize the parallel market exchange rate and
            lower the parallel market premium, albeit the parallel market premium remained distortive.
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