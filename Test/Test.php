<?php 
        session_start();
        $Nom = $NameErr = $Password = "";
        $ConfirmPassword = $MdpError = "";

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if(!empty($_POST['nom'])) {
                    $Nom = $_POST['nom'];
                    
                    if(!preg_match("/^[a-zA-Z-' ]*$/", $Nom)) {
                        $NameErr = "Le nom doit comporter que des lettres et des espaces";
                    }
                }
                if (!empty($_POST['password'] && !empty($_POST['confirmpassword']))) {
                    $Password = $_POST['password'];
                    $ConfirmPassword = $_POST['confirmpassword'];

                    if ($Password != $ConfirmPassword) {
                        $MdpError = "Verifier votre mot de passe";
                    }
                }

                if (empty($Nom) && empty($MdpError)) {
                    
                    header("action:envoie.php");
                    exit();
                }
            }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method = "post" action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" >
        nom:
        <input type="text" name="nom" id="">
        <p class="error"><?php echo $NameErr?></p>
        <br>
        password:
        <input type="text" name="password" id="">
        confirmPassword:
        <input type="text" name="confirmpassword" id="">

        <p class="error"><?php echo $MdpError?></p>
    <button type = "submit">Envoie</button>
    </form>
</body>
</html>