
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
    <title>Lesotho | Jamii</title>
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

    <h3 class="black-text center">Lesotho</h3>
    <hr />
    <div class="center">
        <img src="static/lesotho.png" class="center" width="100" />
    </div>

    <div class="container">

        <h3 class="center">
            Economic Overview
        </h3>

        <p>Water is Lesotho's most valuable natural resource, which the Basotho refer to as "white gold."
            Lesotho had an exceptional economic performance between 1995 and 1997, thanks to intensive building activity
            involving the multi-million Lesotho Highlands Water Project — the real GDP growth rate made Lesotho one of
            Africa's top ten performers at the time. After the completion of a big hydropower project in January 1998,
            Lesotho can now sell water to South Africa, collecting royalties that will be a significant source of revenue
            for the country. The favorable impact of the water project (details in separate section) and the tiny but fast
            increasing manufacturing sector both contributed to the economic growth boom. The lessening economic contribution
            of the project as it nears completion will be more than offset by royalty payments from South Africa</p>
        <p>
            Subsistence farming and animal husbandry, as well as small-scale industries such as clothes, footwear, textiles,
            food processing, and construction, are the backbones of Lesotho's economy. To support the milling, canning,
            leather, and jute industries, the modest manufacturing base relies heavily on farm products. The vast majority of
            households rely on subsistence farming and migrant labor, with South African mines employing a considerable share
            of the adult male workforce (although the number of such mine workers has declined steadily over the past years).
            In the past financial year, Lesotho’s economy slowed down substantially because of major political conflicts
            causing temporary disruption in business activities. Unemployment remains high and is one of the most serious
            problems facing Lesotho, with poverty still severe.
        </p>
        <p>
            The fiscal policy of Lesotho for 1999/2000 and beyond is focused on keeping budgetary spending at manageable
            levels. Lesotho's economy is entering a phase of intentional expansion, marked by the growing prominence of the
            private sector and increased globalisation of production and commerce).
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
                    <div class="center"><a href='Jamii.php'><img src="static/Jamii.png" /></a></div>
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