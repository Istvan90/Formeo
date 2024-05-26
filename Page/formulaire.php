<?php
    session_start();
    $Nom = $Mail = $Password = $ConfirmMdp = "";
    $NomErr = $MdpErr = $MailErr = $Error = "";

    $base = new mysqli("localhost", "Steve", "stevemagics", "client");

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (!empty($_POST['nom'])) {
            $Nom = $_POST['nom'];
    
            if (!preg_match("/^[a-zA-Z' ]*$/", $Nom)){
                $NomErr = "Nom invalide, Le ne doit pas comporter de caractere spéciale";
            }
        }
        if (!empty($_POST['email'])) {
            $Mail = $_POST['email'];
    
            if (!preg_match("/^[a-zA-Z' ]*$/", $Nom)){
                $EmailErr = "Nom invalide, Le ne doit pas comporter de caractere spéciale";
            }
        }
        if (!empty($_POST['Password']) && !empty($_POST['ConfirmPassword'])) {
            $Password = $_POST['Password'];
            $ConfirmPassword = $_POST['ConfirmPassword'];
    
            if ($Password != $ConfirmPassword){
                $MdpErr = "Veuillez verifer le mot de passe";
            }
        }

        #Checker si les informations saisi par l'utilisateur existe déja
        $Query_select  = "SELECT * from user where Email = '$Mail'";
        
        $result = mysqli_query($base, $Query_select);
    
        if ($result && mysqli_num_rows($result) > 0) {
            $Row = $result -> fetch_assoc();

            if ($Row['MDP'] == $Password) {
                $Error = "Les informations fournis existe déja";
            }
        }

    }

    if(empty($NomErr) && empty($EmailErr) && empty($MdpErr) && empty($Error)) {
        $base = new mysqli("localhost", "Steve", "stevemagics", "client");

        if ($base -> connect_error) {
            echo "Connection à la base de donnée non etablie";
            exit();
        }

        $Stmt = $base -> prepare("INSERT INTO user (NOM, Email, MDP) VALUES (?, ?, ?)"); 

        $Stmt -> bind_param("sss", $Nom, $Mail, $Password);
        
        $Stmt -> execute();

        $_SESSION['username'] = $Nom;

        $Stmt -> close();
        $base -> close();
    }
?>

<!DOCTYPE html>
<!-- saved from url=(0048)file:///C:/Users/USER/Desktop/TP/formulaire.html -->
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <title>Document</title>

    <script>
        function confirmpass(inputfield, button) {
            var x = inputfield;
            let y = button;
            
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }
    </script>
</head>

<body>
<div class="bg-white shadow-sm py-4">
        <div class="container d-flex align-items-center">
            <div class="logo d-flex align-items-center">
                <img src="./Image/OIG3 (1).jpg" alt="" class="" style="max-width: 70px;">
                <h1 class="m-0">Formeo</h1>
            </div>
            <div class="flex-grow-1 mx-3 d-flex align-items-center">
                <input type="search" class="search-btn form-control me-2" placeholder="Search">
                <button class="btn btn-primary search-icon" type="button">
                    <ion-icon name="search-outline"></ion-icon>
                </button>
            </div>
            <ul class="nav d-flex align-items-center justify-content-between">
                <li class="nav-item"><a class="nav-link" href="../Main.php">home</a></li>
                <li class="nav-item"><a class="nav-link" href="connection.php">Se connecter</a></li>
                <li class="nav-item"><a class="nav-link" href="#">S'inscrire</a></li>
                <li class="nav-item"><a class="nav-link" href="Main.php?action=deconnecter">Se déconnecter</a></li>
            </ul>
        </div>
    </div>

    <section class="formsection container mt-5">
    <form action = "<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
            <div class="mb-3">
                <label class="form-label">Nom :</label>
                <input type="text" id="nom" name="nom" required="A remplir" class="form-control">
                
                <p class="error"><?php echo $NomErr;?></p>
            </div>
            <div class="mb-3">
                <label class="form-label">Email :</label>
                <input type="email" id="email" name="email" required="" class="form-control">

                <p class="error"><?php echo $MailErr?></p>
            </div>

            <div class="mb-3">
                <label class="form-label">Mot de passe :</label>

                <div class= "input-group">
                    <input type="password" id="myInputpass" name="Password" class="form-control">
                    <button class="btn btn-outline-secondary" type="button" onclick="confirmpass(document.getElementById('myInputpass'), this);">
                        <ion-icon name="eye-outline"></ion-icon>
                    </button>
                </div>
            </div>
            <div class="mb-3">
                <label class="form-label">confirmer votre mot de passe :</label>

                <div class= "input-group">
                    <input type="password" id="myInputconfirm" name="ConfirmPassword" class="form-control password">
                    <button class="btn btn-outline-secondary" type="button" onclick="confirmpass(document.getElementById('myInputconfirm'), this);">
                        <ion-icon name="eye-outline"></ion-icon>
                    </button>
                </div>
            </div>
            <p class="error"><?php echo $MdpErr;?></p>
            <p class="error"><?php echo $Error;?></p>
            <div class="row justify-content-center mt-3">
                <div class="col-8 text-center">
                    <button type="submit" class="btn btn-primary custom-btn">Créer un compte</button>
                </div>
            </div>
        </form>
    </section>
    <br><br><br>
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
                        <h6 class="text-uppercase fw-bold">Formeo business</h6>
                        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                            <!-- Content -->
                            <hr class="mb-4 mt-0 d-inline-block mx-auto"
                                style="width: 60px; background-color: #7c4dff; height: 2px" />
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Id, aperiam. Incidunt non
                                    aut dolore autem quo, ea temporibus omnis molestias repellat.
                            </p>
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

</html>