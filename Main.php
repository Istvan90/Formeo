<?php
    session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./CSS/style.css">
    <link rel="stylesheet" href="./bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</head>

<body>
    <div class="bg-white shadow-sm py-4">
        <div class="container d-flex align-items-center">
            <div class="logo d-flex align-items-center">
                <img src="./Image/OIG3 (1).jpg" alt="" class="" style="max-width: 70px;">
                <h1 class="m-0">Formeo</h1>
            </div>

            <div class="flex-grow-1 mx-3 d-flex align-items-center">
                <input type="search" class="form-control me-2" placeholder="Search">
                <button class="btn btn-primary search-icon button-search" type="button">
                    <ion-icon name="search-outline"></ion-icon>
                </button>
            </div>

            <ul class="nav d-flex align-items-center justify-content-between">
                <li class="nav-item"><a class="nav-link" href="#">Demander de l'aide à IA</a></li>
                <li class="nav-item"><a class="nav-link" href="./Page/connection.php">Se connecter</a></li>
                <li class="nav-item"><a class="nav-link" href="./Page/formulaire.php">S'inscrire</a></li>
                <li class="nav-item"><a class="nav-link" href="Main.php?action=deconnecter">Se déconnecter</a></li>
            </ul>
        </div>
    </div>

    <div class="mySlides fade">
        <img src="./Image/10ca89f6-811b-400e-983b-32c5cd76725a.jpg" style="width:100%" height="50%">
    </div>

    <div class="mySlides fade">
        <img src="./Image/e6cc1a30-2dec-4dc5-b0f2-c5b656909d5b.jpg" style="width:100%" height="50%">
    </div>

    <div class="mySlides fade">
        <img src="./Image/aeff3b43-25ab-4d9e-bc86-0da688e3a9df.jpg" style="width:100%" height="50%">
    </div>
    <br>

    <div class="Motpres">
        <h1 class="Presentant">Devellopez, apprenez, Grandissez</h1>
    </div>

    <span class="UserName"><?php echo $_SESSION['username'] ?></span>

    <div class="presentation">
        <h1 class="titre-presentation">Un large choix de cours</h1>
        <p>Choisissez parmis les Milliers de video avec des nouvelles additions mensuels</p>
    </div>

    <button class="tablink" onclick="openPage('Developpement web', this, 'white')"
        id="defaultOpen">Developpementweb</button>
    <button class="tablink" onclick="openPage('Javascript', this, 'white')" id="defaultOpen">Javascript</button>
    <button class="tablink" onclick="openPage('Python', this, 'white')" id="defaultOpen">Python</button>
    <button class="tablink" onclick="openPage('Datascience', this, 'white')" id="defaultOpen">Datascience</button>

    <div id="Developpement web" class="tabcontent">
        <fieldset>
            <div class="divinterne">
                <h3>Créez des sites Web et des applications avec le développement Web</h3>
                <p class="presentationmatiere">Le monde du développement Web est aussi vaste qu’Internet lui-même. Une
                    grande partie de notre vie
                    sociale et professionnelle se déroule sur Internet, ce qui donne naissance à de nouvelles industries
                    visant à créer, gérer et déboguer les sites Web et les applications sur lesquels nous comptons de
                    plus
                    en plus.</p>
                <button class="buttondecouvrir">Explorer le Developpement Web</button>
            </div>
        </fieldset>
    </div>

    <div id="Javascript" class="tabcontent">
        <fieldset>
            <div class="divinterne">
                <h3>Développez vos compétences en développement de logiciels avec JavaScript</h3>
                <p class="presentationmatiere">JavaScript est un langage de programmation informatique basé sur du texte
                    utilisé pour créer des pages
                    Web dynamiques. Indispensable pour les futurs développeurs ou programmeurs Web, JavaScript peut être
                    utilisé pour des fonctionnalités telles que les carrousels d'images, l'affichage de comptes à
                    rebours et
                    de minuteries et la lecture de médias sur une page Web. Avec les cours en ligne JavaScript, vous
                    pouvez
                    apprendre à créer ...</p>
                <button class="buttondecouvrir">Explorer le JavaScript</button>
            </div>
        </fieldset>
    </div>

    <div id="Python" class="tabcontent">
        <fieldset>
            <div class="divinterne">
                <h3>Développez vos opportunités de carrière avec Python</h3>
                <p class="presentationmatiere">Suivez l'un des cours Python d'Formeo et apprenez à coder en utilisant ce
                    langage incroyablement utile. Sa syntaxe simple et sa lisibilité rendent Python parfait pour Flask,
                    Django, la science des données et l'apprentissage automatique. Vous apprendrez à tout créer, des
                    jeux
                    aux sites en passant par les applications. Choisissez parmi une gamme de cours qui plairont à...</p>
                <button class="buttondecouvrir">Explore le Python</button>
            </div>
        </fieldset>
    </div>

    <div id="Datascience" class="tabcontent">
        <fieldset>
            <div class="divinterne">
                <h3>Mener des décisions basées sur les données grâce à la science des données</h3>
                <p class="presentationmatiere">L'application de la science des données est une compétence recherchée
                    dans de nombreux secteurs à travers
                    le monde, notamment la finance, les transports, l'éducation, la fabrication, les ressources humaines
                    et
                    la banque. Explorez les cours de science des données avec Python, les statistiques, l'apprentissage
                    automatique et bien plus encore pour développer vos connaissances. Suivez une formation en science
                    des
                    données si vous êtes intéressé par la recherche, les statistiques et l'analyse.</p>
                <button class="buttondecouvrir">Explore le data-science</button>
            </div>
        </fieldset>
    </div>

    <div class="videosell">
        <h1 style="margin: 20px 5px; font-size: 25px;">Les competences les plus recherchée</h1>
        <div class="module">
            <div class="wrapper">
                <div class="image">
                    <img src="./Image/Jswebmodule.jpg" alt="" srcset="">
                </div>
                <div class="coures">
                    <h3>Cours complet de JavaScript 2024 : De la base</h3>
                    <p class="Auteur">Sam sepiol</p>
                    <button>Plus d'information</button>
                </div>
            </div>
            <div class="wrapper">
                <div class="image">
                    <img src="./Image/Excelmodule.jpg" alt="" srcset="">
                </div>
                <div class="coures">
                    <h3>Microsoft excel de debutant aux proffessionel</h3>
                    <p class="Auteur">Mr robot</p>
                    <button>Plus d'information</button>
                </div>
            </div>
            <div class="wrapper">
                <div class="image">
                    <img src="./Image/Reactmodule.jpg" alt="" srcset="">
                </div>
                <div class="coures">
                    <h3>Le guide complet du React 2024 : devenez expert</h3>
                    <p class="Auteur">Sam sepiol</p>
                    <button>Plus d'information</button>
                </div>
            </div>
            <div class="wrapper">
                <div class="image">
                    <img src="./Image/SQLmodule.jpg" alt="" srcset="">
                </div>
                <div class="coures">
                    <h3>le bootcamp SQL complet : de zéro à héros</h3>
                    <p class="Auteur">Mr robot</p>
                    <button>Plus d'information</button>
                </div>
            </div>
        </div>
    </div>
    <p class="P1">Meilleurs categories</p>

    <div class="categories">
        <nav>
            <ul>

                <li><a href="#"><img src="./Image/APPlangue.png" alt=""></a>
                    <p>Langue</p>
                </li>
                <li><a href="#"><img src="./Image/Mathematics.jpg" alt=""></a>
                    <p>Mathematique</p>
                </li>
                <li><a href="#"><img src="./Image/Marketing.jpg" alt=""></a>
                    <p>Marketing</p>
                </li>
                <li><a href="#"><img src="./Image/It and software.jpg" alt=""></a>
                    <p>Informatique</p>
                </li>

            </ul>
            <ul>
                <li><a href="#"><img src="./Image/Entrepreunariat.png" alt=""></a>
                    <p>Entrepreunariat</p>
                </li>
                <li><a href="#"><img src="./Image/Photographie.png" alt=""></a>
                    <p>Photographie</p>
                </li>
                <li><a href="#"><img src="./Image/Science&.png" alt=""></a>
                    <p>Science</p>
                </li>
                <li><a href="#"><img src="./Image/Design.jpg" alt=""></a>
                    <p>Design</p>
                </li>

            </ul>
        </nav>

    </div>
    <!--BD2-->
    <div class="bd2">
        <h2>Sujet recommandé par categorie</h2>
        <!--Section-->
        <div class="section">

            <section class="sect1">
                <strong class="titresection">Langue</strong>
                <ul>
                    <li><a href="#"><strong>Français</strong></a></li>
                    <li><a href="#"><strong>Anglais</strong></a></li>
                    <li><a href="#"><strong>Allemand</strong></a></li>
                    <li><a href=""><strong>Chinois</strong></a></li>
                </ul>
            </section>

            <section class="sect2">
                <strong class="titresection">Informatique</strong>
                <ul>
                    <li><a href=""><strong>Bureautique</strong></a></li>
                    <li><a href=""><strong>Programmation</strong></a></li>
                    <li><a href=""><strong>Réseaux et système</strong></a></li>
                </ul>

            </section>
            <section class="sect3">
                <strong class="titresection">Marketing</strong>
                <ul>
                    <li><a href=""><strong>Commerce</strong></a></li>
                    <li><a href=""><strong>Communication</strong></a></li>
                    <li><a href=""><strong>Comptabilité et finance</strong></a></li>
                </ul>
            </section>

            <section class="Sect4">
                <strong class="titresection">Science</strong>*<ul>
                    <li><a href=""><strong>Physique</strong></a></li>
                    <li><a href=""><strong>Science naturelle</strong></a></li>
                    <li><a href=""><strong>Astronomie</strong></a></li>
                </ul>

            </section>

        </div>
        <!--fin Section-->
    </div>
    <!-- fin BD2-->
    <!--aside-->
    <div class="aside">
        <aside class="aside1">
            <img src="./Image/Devenirinstructeur.jpg" alt="">
        </aside>
        <aside class="aside2">
            <strong>Devenir Formateur</strong><br>
            <p>Nos Formateurs du monde entier donnent des cours à des millions de participants sur notre site
                .Nous vous offrons les outils et les compétences nécéssaire pour enseigner ce que vous aimez. </p>

            <div><button class="buttoninstructeru">Commencer à enseigner</button></div>
        </aside>

    </div>
    <!-- Remove the container if you want to extend the Footer to full width. -->
    <div>
        <!-- Footer -->
        <footer class="text-center text-lg-start text-dark" style="background-color: #ECEFF1">
            <!-- Section: Social media -->
            <section class="d-flex justify-content-between p-4 text-white" style="
        background-color: #333333;">
                <!-- Left -->
                <div class="me-5">
                    <span>Soyez avec nous dans les reseaux sociaux : </span>
                </div>
                <!-- Left -->

                <!-- Right -->
                <div>
                    <a href="" class="text-white me-4">
                        <ion-icon name="logo-facebook"></ion-icon>
                    </a>
                    <a href="" class="text-white me-4">
                        <ion-icon name="logo-twitter"></ion-icon>
                    </a>
                    <a href="" class="text-white me-4">
                        <ion-icon name="logo-google"></ion-icon>
                    </a>
                    <a href="" class="text-white me-4">
                        <ion-icon name="logo-instagram"></ion-icon>
                    </a>
                    <a href="" class="text-white me-4">
                        <ion-icon name="logo-linkedin"></ion-icon>
                    </a>
                    <a href="" class="text-white me-4">
                        <ion-icon name="logo-github"></ion-icon>
                    </a>
                </div>
                <!-- Right -->
            </section>
            <!-- Section: Social media -->

            <!-- Section: Links  -->
            <section class="">
                <div class="container text-center text-md-start mt-5">
                    <!-- Grid row -->
                    <div class="row mt-3">
                        <!-- Grid column -->
                        <div class="col-md-2 col-lg-6 col-xl-2 mx-auto mb-4">
                            <h6 class="text-uppercase fw-bold">Formeo business</h6>
                            <div class="col-md-10 col-lg-10 col-xl-10 mx-auto mb-10">
                                <!-- Content -->
                                <hr class="mb-4 mt-0 d-inline-block mx-auto"
                                    style="width: 60px; background-color: #7c4dff; height: 2px" />
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Id, aperiam. Incidunt non
                                    aut dolore autem quo, ea temporibus omnis molestias repellat.
                                </p>
                            </div>
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                            <!-- Links -->
                            <h6 class="text-uppercase fw-bold">Formeo business</h6>
                            <hr class="mb-4 mt-0 d-inline-block mx-auto"
                                style="width: 60px; background-color: #7c4dff; height: 2px" />
                            <p>
                                <a href="#!" class="text-dark">Devenir instructeur</a>
                            </p>
                            <p>
                                <a href="#!" class="text-dark">Telecharger l'application</a>
                            </p>
                            <p>
                                <a href="#!" class="text-dark">Sur nos propos</a>
                            </p>
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                            <!-- Links -->
                            <h6 class="text-uppercase fw-bold">Carrière</h6>
                            <hr class="mb-4 mt-0 d-inline-block mx-auto"
                                style="width: 60px; background-color: #7c4dff; height: 2px" />
                            <p>
                                <a href="#!" class="text-dark">Votre compte</a>
                            </p>
                            <p>
                                <a href="#!" class="text-dark">Nous aider</a>
                            </p>
                            <p>
                                <a href="#!" class="text-dark">Investir</a>
                            </p>
                            <p>
                                <a href="#!" class="text-dark">Blog</a>
                            </p>
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                            <!-- Links -->
                            <h6 class="text-uppercase fw-bold">Contact</h6>
                            <hr class="mb-4 mt-0 d-inline-block mx-auto"
                                style="width: 60px; background-color: #7c4dff; height: 2px" />
                            <p><i class="fas fa-home mr-3"></i> New York, NY 10012, US</p>
                            <p><i class="fas fa-envelope mr-3"></i> info@example.com</p>
                            <p><i class="fas fa-phone mr-3"></i> + 01 234 567 88</p>
                            <p><i class="fas fa-print mr-3"></i> + 01 234 567 89</p>
                        </div>
                        <!-- Grid column -->
                    </div>
                    <!-- Grid row -->
                </div>
            </section>
            <!-- Section: Links  -->

            <!-- Copyright -->
            <!-- Copyright -->
        </footer>
        <!-- Footer -->
    </div>
</body>

<script src="./JS/script.js"></script>

</html>