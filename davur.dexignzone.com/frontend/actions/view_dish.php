<?php
session_start();

try {
    $data_base = new PDO('mysql:host=localhost;dbname=restaurant_les_delices;', 'root', '');
} catch (Exception $err) {
    die('Erreur' . $err);
}

$request = $data_base->prepare('select * from plat where id_plat = :id');
$request->execute(array('id' => $_GET['identifier']));
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Détails du Produit</title>
    <!-- Ajoutez le lien vers la bibliothèque Bootstrap CSS ici -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Ajoutez vos styles personnalisés ici -->
    <style>
        /* Ajoutez vos styles personnalisés ici */
        body {
            padding: 20px;
        }

        .product-details {
            max-width: 600px;
            margin: auto;
        }

        img {
            max-width: 100%;
            height: auto;
        }

        .btn-group {
            margin-top: 20px;
        }
    </style>
</head>

<body>


<div class="container product-details">
    <?php
    $data = $request->fetch();
    ?>
    <h2>  <?php echo $data['nom_plat'] ?> </h2>
    <img alt="Image du Produit" class="img-fluid" src="../images/<?php echo $data['image']?>" >

    <p> <?php echo $data['description'] ?> </p>

    <p>Prix:  <?php echo $data['prix_plat'] ?> FCFA </p>

    <div class="btn-group">
        <a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Ajouter au Panier</a>
        <a class="btn btn-secondary" href="../front-home.php">Aller au Menu</a>
    </div>
</div>

<!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Formulaire pour la quantité -->
                <form action="../front-home.php" method="post">
                    <div class="form-group">
                        <label for="quantite">Quantité :</label>
                        <input type="number" class="form-control" id="quantite" name="quantite" required>
                    </div>
                    <input type="hidden" name="plat_id" value=<?php echo $data['id_plat'] ?> >
                    <button type="submit" class="btn btn-success mt-3" name="order">Ajouter au panier</button>
                </form>
            </div>
            <!-- Pied du modal -->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Fermer</button>
            </div>
        </div>
    </div>
</div>

<!-- Ajoutez le lien vers la bibliothèque Bootstrap JavaScript et jQuery ici -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>

