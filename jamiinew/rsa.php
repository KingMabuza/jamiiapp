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
                    <a href="welcome.php.php" class="brand-logo"><img src="static/Jamii.png" height="60" /></a>
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

    <h3 class="black-text center">South Africa</h3>
    <hr />
    <div class="center">
        <img src="static/rsaflag.jpg" class="center" width="100" />
    </div>

    <div class="container">

        <h3 class="center">
            Economic Overview
        </h3>

        <p>Real GDP increased by 0.7 percent in 2019, compared to 0.8 percent in 2018, and is expected to rise to
            1.1 percent in 2020 and 1.8 percent in 2021, despite internal and global uncertainties. Agriculture and
            mining contractions slowed growth in 2019. In 2018, agriculture shrank by 4.8 percent, while mining shrank
            by 1.7 percent. Aside from the unpredictability of the weather, agriculture was hampered by a protracted
            discussion over land reform. The demise of mining was exacerbated by electricity shortages and long-term
            strikes. In 2018, the finance, real estate, and business services sector rose by 1.8 percent, contributing
            0.4 percentage point to overall growth. In 2018, transportation rose by 1.6 percent, while manufacturing
            grew by 1%. Frequent electricity shortages, rising input prices, and sluggish demand amid ongoing
            international trade wars slowed manufacturing output.</p>
        <p>
            Consumption by households and governments remained a key driver of growth in 2018, adding 1.5 percentage points
            to growth. Due to decreasing fuel costs, inflation was 4.7 percent in 2018 and 4.4 percent in 2019. The actual
            exchange rate grew by 8.1 percent from November 2017 to November 2018, reducing the competitiveness of South
            African exports. In 2018, the rand was valued at 13.23 cents per dollar. The exchange rate is fixed due to
            inflation targeting.
        </p>
        <p>
            The fiscal deficit is expected to remain high in 2019, at 4.3 percent, up from 4.2 percent in 2018, as the
            country continues to experience income shortfalls due to poor economic development. The tax revenue-to-GDP
            ratio fell slightly from 25.9% in 2018 to 25.7 percent in 2019. Domestic capital markets are used to fund the
            fiscal deficit. In 2019, the national government debt is expected to be 55.6 percent of GDP, up from 52.7 percent in 2018.
        </p>
        <p>
            At the end of 2018, unemployment has risen to 27.1 percent, up from 26.5 percent at the end of 2016. At
            the end of 2018, youth unemployment has risen to 54.7 percent, up from 51 percent at the end of 2016. Low
            skills are one of the causes of high unemployment. South Africa has one of the worst poverty rates in the
            world, at 55.5 percent, and one of the greatest levels of inequality.
        </p>
        <p>
            Economic growth and job creation are being hampered by structural impediments, which are being addressed
            through reforms. One is restructuring Eskom, a utility business, to lessen the significant risk that its debt
            poses to the Treasury. Allocating telecoms spectrum, reducing impediments to mining investment, and revisiting
            visa rules to increase tourism are among the other reforms. The government is working to boost investment
            opportunities,revitalizing townships and industrial parks.
        </p>
        <p>
            South Africa's global competitiveness ranking dropped dramatically from 47 in 2016 to 67 out of 140 nations
            in 2018. Skill shortages, health-care issues, weak domestic product competition, and low use of information and
            communication technologies were all factors in the decline. Because South Africa exports the majority of its
            mineral resources, value chain links between mining and manufacturing are poor. This in turn exposes the country to recurrent global commodity price shocks.
        </p>
        <p>
            Weak global growth, global trade tensions, and commodity price volatility also pose risks to the South African
            economy. A high public sector wage bill, poor performance of state-owned enterprises, and social programs,
            including national health insurance, exert pressure on the budget. South Africa would benefit by manufacturing
            more for African markets.
        </p>

        <ul class="collapsible">
            <li>
                <div class="collapsible-header">Trade Agreements</div>
                <div class="collapsible-body"><span>
                        <ul>
                            <li><a href="agreements/South%20Africa/A%20South%20African%20Trade%20Policy%20and%20Strategy%20Framework%20May%202010.pdf" download>South African Trade Policy and Strategy Framework(May 2010)</li>
                            <li><a href="agreements/South%20Africa/Draft%20Economic%20transformation%20inclusive%20growth%20and%20competitiveness%20Towards%20a%20Growth%20Agenda%20for%20SA%20National%20Treasury%202019.pdf" download>Draft Economic Transformation Inclusive Growth and Competitiveness Towards A Growth Agenda for SA(National Treasury 2019)</li>
                            <li><a href="agreements/South%20Africa/SA%20Competition%20Act%201998%20consolidated%20with%20amendments%20August%202014.pdf" download>South Africa Competition Act with Amendment(2014)</li>
                            <li><a href="agreements/South%20Africa/SA%20National%20Exporter%20Development%20Programme%202013.pdf" download>SA National Exporter Development Programme(2013)</li>
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