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
    <title>Agreements | Jamii</title>
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

    <div class="container">
        <h3 class="black-text center">African Trade Agreements</h3>
        <hr />
        <img src="static/agreement_banner.png" class="center" width="100%" />
        <p>
            The Department uses strong government-to-government relations and mechanisms to advance
            an African development agenda that focuses on:
        <ul>
            <li>
                dentifying and establishing joint investment projects in partner countries
            </li>
            <li>
                coordinating South African technical co-operation and assistance to support policy and institutional
                development in partner countries
            </li>
            <li>
                promoting two-way trade
            </li>
            <li>
                promoting cross-border infrastructure development, notably on the basis of the spatial development
                initiative (SDI) methodology
            </li>
        </ul>
        </p>
        <p>The African Continental Free Trade Area (AfCFTA) Agreement entered into force on 30 May 2019 for the
            24 countries that had deposited their instruments of ratification with the African Union Commission (AUC)
            Chairperson This date marked 30 days after the 22nd instrument of ratification was deposited. as stipulated
            in Article 23 of the AfCFTA Agreement On 7 July 2019. at an Extraordinary Summit of the African Union,
            the operational phase of the AfCFTA Agreement was officially launched. An
            Extraordinary Summit on the AfCFTA takes place on 5 December 2020 Start of trading is set to begin on
            1 January 2021</p>
        <p>
            African countries opened their markets on 1st January under the continental free trade agreement
            and duty-free trading of goods and services across borders is now underway despite the COVID-19 pandemic
            and other teething problems.
        </p>
        <h4>AfCFTA</h4>
        <p>In January 2012, the 18th AU Assembly endorsed a comprehensive framework towards the attainment of
            developmental regionalism in the continent, through its decision to establish an African Continental
            Free Trade Area (AfCFTA). The main objectives of the AfCFTA are to create a single continental market
            for goods and services, with free movement of business persons and investments. Once implemented, the AfCFTA
            will cover a market of more than 1.2 billion people with a combined GDP of more than US$3.4 trillion. The
            consolidated text of the AfCFTA Agreement was signed by 44 of the 55 AU member states on 21 March 2018 in
            Kigali, Rwanda. Only Eritrea’s signature is now outstanding. The Agreement Establishing the AfCFTA entered
            into force on 30 May 2019, while the operational phase of the Agreement commenced on 7 July 2019. The AfCFTA
            will be governed by five operational instruments, i.e. the Rules of Origin; the online negotiating forum;
            the monitoring and elimination of non-tariff barriers; a digital payments system and the African Trade
            Observatory. Trade under the AfCFTA Agreement began on 1 January 2021. As at June 2021, the Agreement
            has been ratified by 37 countries.</p>
        <a href="afcfta.php" class="green-text darken-2"><button class="btn btn-large green darken-2">Read More</button></a>
        <h4>SADC</h4>
        <p>The Southern African Development Community (SADC) was established on 17 August 1992 with the adoption
            of the SADC Treaty, redefining the existing Southern African Development Coordinating Conference which was
            established in 1980. The Treaty sets out the main objectives of SADC – to achieve development and economic
            growth, alleviate poverty, enhance the standard and quality of life of the peoples of Southern Africa, and
            support the socially disadvantaged through regional integration. To this end, SADC launched its Free Trade
            Area in August 2008 as agreed upon by the member states in the SADC Trade Protocol. Further ambitious
            integration objectives are contained in the Regional Indicative Strategic Development Plan of 2003.
            Although it is not a legally binding agreement, it enjoys political legitimacy. A revised RISDP (2015-2020)
            was published by SADC in 2017. SADC currently consists of 16 member states: Angola, Botswana, the Democratic
            Republic of the Congo, Lesotho, Madagascar, Malawi, Mozambique, Mauritius, Namibia, Seychelles, South Africa,
            Swaziland, Tanzania, Union of Comoros, Zambia and Zimbabwe. SADC has negotiated an Economic Partnership
            Agreement with the EU.</p>
        <a href="sadc.php" class="green-text darken-2"><button class="btn btn-large green darken-2">Read More</button></a>
        <h4>SACU</h4>
        <p>Duty free movement of goods; a common external tariff applied on goods entering any of the countries
            from outside the SACU</p>
        <p>
            The Southern African Customs Union (SACU) was established in 1910 between Botswana, Lesotho, Eswatini
            and South Africa. It is the oldest Customs Union in existence. The SACU Agreement was renegotiated in
            1969 when Namibia gained independence from South Africa and became a contracting party to the Agreement.
            It was subsequently renegotiated amongst the five member countries in the mid-1990s which culminated in the
            signing of the new SACU Agreement in October 2002. Annex 1 of the 2002 Agreement details the Revenue Sharing
            Formula that is used for determining each Member State’s share out of the Common Revenue Pool. The
            implementation of the new Revenue Sharing Formula began in 2006. Additionally, SACU has concluded
            free trade agreements with the United States and the European Free Trade Association (EFTA), as well as
            negotiating an Economic Partnership Agreement with the EU.
        </p>
        <a href="sacu.php" class="green-text darken-2"><button class="btn btn-large green darken-2">Read More</button></a>
        <h4>COMESA</h4>
        <p>The Common Market for Eastern and Southern Africa (COMESA) was established on 8 December 1994,
            replacing the Preferential Trade Area for Eastern and Southern Africa which was set up in 1981.
            COMESA has adopted a developmental approach to regional integration, with its main objective being the
            formation of a large economic and trading unit capable of overcoming some of the barriers that individual
            states face. COMESA launched a Free Trade Area on 31 October 2000 followed by a Customs Union in June 2009,
            lthough the latter is yet to become operational. COMESA is the largest regional economic community in Africa
            with 21 member states: Burundi, Comoros, Djibouti, DRC, Egypt, Eritrea, Ethiopia, Kenya, Libya, Madagascar,
            Malawi, Mauritius, Rwanda, Seychelles, Somalia, Sudan, Swaziland, Tunisia, Uganda, Zambia and Zimbabwe.
            COMESA has concluded a free trade agreement with the United States and several members are negotiating an
            Economic Partnership Agreement with the EU as part of the Eastern and Southern Africa (ESA) EPA group.</p>
        <a href="comesa.php" class="green-text darken-2"><button class="btn btn-large green darken-2">Read More</button></a>
        <h4>TFTA</h4>
        <p> The member states of COMESA, EAC and SADC agreed in October 2008 to negotiate a Tripartite Free Trade Area
            (TFTA) with the aim of bringing together, in one common market, countries in the three regional economic
            blocs. It will cover a combined population of 700 million people with an estimated GDP of over US$1.4
            trillion. The TFTA was officially launched in Sharm El Sheikh, Egypt on 10 June 2015 where Heads of State
            and Government had met to conclude outstanding negotiations on rules of origin, trade remedies and tariff
            offers. However, due to a number of challenges faced in the process, the deadline of June 2016 was not met,
            and the commencement of Phase II negotiations – covering trade in services and other trade related
            matters – was delayed. As at February 2020, all Annexes to the Agreement have been finalised, and the
            negotiation of rules of origin and exchange of tariff offers is near completion. The TFTA Agreement has
            been signed by 22 of the 27 member countries, which will enter into full force once it has been ratified by
            14 countries. To date, it has been both signed and ratified by eight countries – Burundi, Kenya, Egypt,
            Rwanda, Uganda, South Africa, Namibia and Botswana.h</p>
        <a href="tfta.php" class="green-text darken-2"><button class="btn btn-large green darken-2">Read More</button></a>
        <h4>EAC</h4>
        <p>The East African Community (EAC) was established by Treaty as a regional intergovernmental organisation on
            7 July 2000. Regional trade integration is a cornerstone of EAC Members’ trade policies. EAC Partner States
            have agreed to coordinate their economic and other policies with a view to creating conditions favourable for
            the development and achievement of the objectives of the Community – accelerated, harmonious and balanced
            development and sustained expansion of economic activities for their mutual benefit. The first regional
            integration milestone, the EAC Customs Union, was successfully launched in 2005, followed by the establishment
            of the Common Market in 2010 and implementation of the East African Monetary Union Protocol in 2012. The EAC is
            working towards establishing a Political Federation of the East African States . The EAC currently consists of
            six Member States: Burundi, Kenya, Republic of South Sudan (admitted in April 2016), Rwanda, United Republic of
            Tanzania, and Uganda. The EAC has concluded free trade agreements with the United States and an Economic
            Partnership Agreement with the EU.</p>
        <a href="eac.php" class="green-text darken-2"><button class="btn btn-large green darken-2">Read More</button></a>
        <h4>AU RESOURCES</h4>
        <p>With a view to accelerating the process of economic and political integration in the continent, the
            Constitutive Act of the African Union was adopted in 2000 at the Lomé Summit and entered into force in 2001.
            The vision for the AU is to support the empowerment of African states in the global economy while addressing
            the multifaceted social, economic and political problems facing the continent amidst increasing globalisation.
            With the adoption of the Treaty Establishing the African Economic Community in 1991 (the ‘Abuja Treaty’), the AU
            is working towards the establishment of a single African Common Market through six successive stages, using the
            Regional Economic Communities (RECs) as building blocks. Agenda 2063 was formally adopted in January 2015 as a
            strategic framework for the socioeconomic transformation of the continent over the next 50 years. It encapsulates
            not only Africa’s aspirations for the future but also identifies key Flagship Programmes which can boost Africa’s
            economic growth and development and lead to the rapid transformation of the continent. The AU currently consists
            of 55 member states.</p>
        <a href="aur.php" class="green-text darken-2"><button class="btn btn-large green darken-2">Read More</button></a>
        <h4>REGIONAL INTEGRATION IN AFRICA</h4>
        <p>The African Union remains committed to implementing its regional integration agenda through its 8 Regional
            Economic Communities (RECs): COMESA, EAC, and SADC in the east and southern Africa region, along with ECCAS,
            ECOWAS, IGAD, AMU, and CEN-SAD covering Central, West and Northern Africa. Although some significant progress
            has been made to date, the multiplicity of inter-governmental organisations in Africa (currently 14) and
            overlapping memberships in the RECs poses a challenge for African integration and the implementation of
            regional agreements. In addition, a COMESA-EAC-SADC Tripartite Free Trade Area (TFTA) has been concluded, and
            the African Continental Free Trade Area (AfCFTA) Agreement – covering all 55 AU member states – was signed in
            March 2018. Start of trading under the AfCFTA Agreement began on 1 January 2021. Click on the maps alongside
            to find out more.</p>
        <a href="ria.php" class="green-text darken-2"><button class="btn btn-large green darken-2">Read More</button></a>
        <h4>AFRICAN EXTERNAL RELATION</h4>
        <p> The challenges of the evolving international trade landscape and global economy,
            and how trade policy in the 21st century can be used to promote the effective integration
            and upgrading of developing countries, have meant that the nature of Africa’s trading relationships
            has been undergoing significant shifts. While trade with its traditional trading partners, particularly
            the European Union and the United States, has been declining, trade ties with emerging economies and global
            players, notably the BRICS (Brazil, Russia, India, China and South Africa), has been steadily increasing.
            The negotiation of Economic Partnership Agreements (EPAs) with the EU, the United Kingdom’s exit from the EU
            (Brexit), and multilateral trade developments at the World Trade Organisation (WTO) also have implications
            for Africa’s trade. Click on the map below to find out more.</p>
        <a href="aer.php" class="green-text darken-2"><button class="btn btn-large green darken-2">Read More</button></a>
        <!--add the other agreements following above structure-->
        <br />
        <br />
    </div>
    <div>
        <table width="200" border="1" class="table">
            <tr>
                <h3>Countries</h3>
            </tr>
            <tr>
                <td><a href="rsa.php">South Africa</a></td>
                <td><a href="zam.php">Zambia</a></td>
                <td><a href="les.php">Lesotho</a></td>
                <td><a href="zim.php">Zimbabwe</a></td>
                <td><a href="swa.php">Swaziland</a></td>
            </tr>
            <tr>
                <td><a href="#">Mauritius</a></td>
                <td><a href="#">Libya</a></td>
                <td><a href="#">Malawi</a></td>
                <td><a href="#">Mali</a></td>
                <td><a href="#">Madagascar</a></td>
            </tr>
            <tr>
                <td><a href="#">Mauritonia</a></td>
                <td><a href="#">Ghana</a></td>
                <td><a href="#">Gabon</a></td>
                <td><a href="#">Kenya</a></td>
                <td><a href="#">Libria</a></td>
            </tr>
            <tr>
                <td><a href="#">Guinea Bissou</a></td>
                <td><a href="#">Gambia</a></td>
                <td><a href="#">Egypt</a></td>
                <td><a href="#">Equatorial cuinea</a></td>
                <td><a href="#">Eritrea</a></td>
            </tr>
            <tr>
                <td><a href="#">Ethiopia</a></td>
                <td><a href="#">Morocco</a></td>
                <td><a href="#">Mozambique</a></td>
                <td><a href="#">Namibia</a></td>
                <td><a href="#">Nigeria</a></td>
            </tr>

        </table>
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