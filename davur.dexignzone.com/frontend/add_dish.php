<?php
session_start();
try {
    $data_base = new PDO('mysql:host=localhost;dbname=restaurant_les_delices;', 'root', '');
} catch (Exception $err) {
    die('Erreur' . $err);
}

function fileTratment($file, $path)
{
    $destination = $path . basename($_FILES[$file]["name"]);
    // Ici nous allons verifier l'extension du fichier
    $info_fichiers = pathinfo($_FILES[$file]['name']);
    $extension_upload = $info_fichiers['extension'];
    $intension_autorise = array('gif', 'jpg', 'jpeg', 'png', 'webp');
    if (in_array($extension_upload, $intension_autorise)) {
        move_uploaded_file($_FILES[$file]['tmp_name'], $destination);
        echo "Le fichier a bien été envoyé";
    } else {
        echo "Veuillez choisir le bon fichier genre un fichier image";
    }
}


if (isset($_POST['valider']) and $_SESSION['admin']) {
    if (isset($_POST['dish'])) {
        if (isset($_POST['dish_price'])) {
            if (isset($_POST['temps_preparation'])) {
                if (isset($_POST['description'])) {
                    if (isset($_FILES['image'])) {
                        if (isset($_POST['categorie'])) {
                            $request = $data_base->prepare("insert into plat(nom_plat, description, prix_plat, temps_preparation,  image,
                            id_categ, nbre_vente) values(:nom, :description, :prix, :time, :image, :categ, :order)");
                            $request->execute(array(
                                    'nom' => nl2br($_POST['dish']),
                                'description' => nl2br($_POST['description']),
                                'prix' => $_POST['dish_price'],
                                'time' => nl2br($_POST['temps_preparation']),
                                'image' => $_FILES['image']['name'],
                                'categ' => $_POST['categorie'],
                                'order' => 0,
                            ));
                            if ($request->rowCount() > 0) {

                                fileTratment("image", 'images/');
                                echo '<div class="alert alert-success align-items-center" role="alert">
                                    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                                <div>
                                An example danger alert with an icon
                                </div>
                            </div>';
                            }
                        } else {
                            echo "La catégorie n'existe pas!!";
                        }
                    } else {
                        echo "Erreur";
                    }
                } else {
                    echo "La description n'existe pas!!!";
                }
            } else {
                echo "Le temps de préparation n'existe pas";
            }
        } else {
            echo "Le prix n'existe pas!!!!";
        }
    } else {
        echo 'Le nom du plat n\'existe pas';
    }
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

<form class="col-6 m-auto mt-3" method="post" enctype="multipart/form-data" action="">
    <div class="mb-3">
        <label for="dish" class="form-label">Nom du plat</label>
        <input type="text" class="form-control" id="dish" name="dish" required>
    </div>

    <div class="mb-3">
        <label for="price" class="form-label">Prix</label>
        <input type="number" class="form-control" id="price" name="dish_price" required>
    </div>

    <div class="mb-3">
        <label for="validationTextarea" class="form-label">Temps de preparation</label>
        <textarea class="form-control" id="validationTextarea" name="temps_preparation" required></textarea>
        <div class="invalid-feedback">
            Entrez le temps de preparation s'il vous plait
        </div>
    </div>


    <div class="mb-3">
        <label for="validationTextarea" class="form-label">Description</label>
        <textarea class="form-control" id="validationTextarea" placeholder="Décrivez le plat" name="description"
                  required></textarea>
        <div class="invalid-feedback">
            Entrez une description s'il vous plait
        </div>
    </div>


    <div class="mb-3">
        <label for="image-grande">Image</label>
        <input type="file" class="form-control" aria-label="file example" id="image-grande" name="image" required>
        <div class="invalid-feedback">Veuillez inserer une image de grande taille 2Mo maximum</div>
    </div>

    <div class="mb-3">
        <label for="selectCateg">Choisissez une catégorie</label>
        <select class="form-select" required aria-label="select example" id="selectCateg" name="categorie">
            <?php
            $request = $data_base->query("select * from categorie");
            while ($donnes = $request->fetch()) {
                ?>
                <option value=<?php echo $donnes['id_categ'] ?>> <?php echo $donnes['nom_Categorie'] ?> </option>
                <?php
            }
            $request->closeCursor()
            ?>
        </select>
        <div class="invalid-feedback">Catégorie de plats: Choisissez parmi les options ci dessus</div>
    </div>

    <div class="mb-3">
        <button class="btn btn-primary" type="submit" name="valider">Poster le plat</button>
    </div>
</form>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script>
</body>
</html>