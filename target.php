<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylestarget.css">
    <title>CONFIRMATION</title>
</head>
<body>

                <div class="bg">
                    <div class="modal">
                        <label for="show" class="close_btn">&times;</label>
                        <form class="demo" method="post" action="target.php">
                            <h1>Bon de commande</h1>
                            <?php
                                if (isset($_POST['inscrire'])) {
                                    if (isset($_POST['pseudo']) AND isset($_POST['password'])) {
                                        if (!empty($_POST['pseudo']) AND !empty($_POST['password'])) {
                                            $pseudo=htmlspecialchars($_POST['pseudo']);
                                            $password=htmlspecialchars($_POST['password']);


                                            echo "  <p>Bonjour $pseudo</p>";

                                        }

                                    }

                                }
                            ?>

                              <marquee>Voulez-vous commander ?</marquee>

                            <div class="validation">
                              <button type="button" class="oui"><a href="#"> Oui </a></button>
                              <button type="button" class="non"><a href="index.php"> Non </a></button>
                            </div>
                        </form>
                    </div>
                </div>


</body>
</html>
