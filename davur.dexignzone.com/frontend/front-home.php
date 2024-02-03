<?php
session_start();

try {
    $data_base = new PDO('mysql:host=localhost;dbname=restaurant_les_delices;', 'root', '');
} catch (Exception $err) {
    die('Erreur' . $err);
}

// Vérifiez si le formulaire a été soumis
if (isset($_POST['order'])) {
    // Assurez-vous que le formulaire contient les données nécessaires
    if (isset($_POST['plat_id'], $_POST['quantite'])) {
        $plat_id = $_POST['plat_id'];
        $quantite = $_POST['quantite'];

        // Initialisez le panier s'il n'existe pas encore
        if (!isset($_SESSION['panier'])) {
            $_SESSION['panier'] = array();
        }

        // Ajoutez le plat au panier
        if (isset($_SESSION['panier'][$plat_id])) {
            // Si le plat est déjà dans le panier, mettez à jour la quantité
            $_SESSION['panier'][$plat_id] += $quantite;
        } else {
            // Sinon, ajoutez le plat au panier
            $_SESSION['panier'][$plat_id] = $quantite;
        }
    }
}
?>


<!DOCTYPE html>
<html lang="fr">


<!-- Mirrored from davur.dexignzone.com/frontend/front-home.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 14 Mar 2023 11:33:45 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content=""/>
    <meta name="author" content=""/>
    <meta name="robots" content=""/>
    <meta name="description" content="Davur - Restaurant Bootstrap Admin Dashboard + FrontEnd"/>
    <meta property="og:title" content="Davur - Restaurant Bootstrap Admin Dashboard + FrontEnd"/>
    <meta property="og:description" content="Davur - Restaurant Bootstrap Admin Dashboard + FrontEnd"/>
    <meta property="og:image" content="https://davur.dexignzone.com/xhtml/page-error-404.html"/>
    <meta name="format-detection" content="telephone=no">
    <title>Davur - Restaurant Bootstrap Admin Dashboard + FrontEnd </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <link href="vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
    <link href="vendor/owl-carousel/owl.carousel.css" rel="stylesheet">
    <link href="vendor/bootstrap-touchspin/css/jquery.bootstrap-touchspin.min.css" rel="stylesheet">
    <link rel="stylesheet" href="vendor/swiper/css/swiper-bundle.css">
    <link href="css/style.css" rel="stylesheet">
    <link href="../../cdn.lineicons.com/2.0/LineIcons.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/main.css">
    <script src="ajax/dish_categorie.js"></script>

</head>
<body>

<!--*******************
    Preloader start
********************-->
<div id="preloader">
    <div class="sk-three-bounce">
        <div class="sk-child sk-bounce1"></div>
        <div class="sk-child sk-bounce2"></div>
        <div class="sk-child sk-bounce3"></div>
    </div>
</div>
<!--*******************
    Preloader end
********************-->

<!--**********************************
    Main wrapper start
***********************************-->
<div id="main-wrapper" class="overflow-unset">


    <?php
    require('./components/header.php');

    ?>

    <?php
    if (isset($_SESSION['admin']) and $_SESSION['admin']) {
        require './components/sidebar.php';
    }
    ?>
    <div class="menu-close"></div>
    <div class="menu-close"></div>

    <!--**********************************
        Content body start
    ***********************************-->
    <div class="content-wrapper">
        <!-- row -->
        <div class="listcontent-area">
            <!-- Pannier -->
            <aside class="cart-area  dz-scroll" id="cart_area">
                <div class="">
                    <div class="h-100" id="home-counter">
                        <div class="card">
                            <div class="card-body">
                                <img src="images/counter.jpg" class="img-fluid mb-5" alt="">
                                <h3 class="title mb-4">Votre commande en cours!!! Vérifier le statu</h3>
                                <p class="mb-sm-5 mb-3">Cliquez sur un article ou sur le bouton Commande pour créer une
                                    commande.</p>
                                <a href="javascript:void(0);" id="add-order" class="btn btn-warning btn-rounded me-3">Commander</a>
                                <a href="front-orders_status.php" class="btn btn-warning light btn-rounded">Statu</a>
                            </div>
                        </div>
                    </div>
                    <div class="h-100" id="add-order-content">
                        <div class="card rounded-0">
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table text-black">
                                        <thead>
                                        <tr>
                                            <th>Plat</th>
                                            <th>Prix</th>
                                            <th>Qté</th>
                                            <th>TOTAL(FCFA)</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                        // Vérifiez si le formulaire a été soumis
                                        if (isset($_POST['order'])) {
                                            // Assurez-vous que le formulaire contient les données nécessaires
                                            if (isset($_POST['plat_id'], $_POST['quantite'])) {
                                                $plat_id = $_POST['plat_id'];
                                                $quantite = $_POST['quantite'];

                                                // Initialisez le panier s'il n'existe pas encore
                                                if (!isset($_SESSION['panier'])) {
                                                    $_SESSION['panier'] = array();
                                                }

                                                // Ajoutez le plat au panier
                                                if (isset($_SESSION['panier'][$plat_id])) {
                                                    // Si le plat est déjà dans le panier, mettez à jour la quantité
                                                    $_SESSION['panier'][$plat_id] += $quantite;
                                                } else {
                                                    // Sinon, ajoutez le plat au panier
                                                    $_SESSION['panier'][$plat_id] = $quantite;
                                                }

                                                // Affichez les éléments du panier
                                                foreach ($_SESSION['panier'] as $plat_id => $quantite) {
                                                    $request = $data_base->prepare("SELECT * FROM plat WHERE id_plat = :id");
                                                    $request->execute(array('id' => $plat_id));
                                                    $data = $request->fetch();

                                                    // Vérifier si $data['nom_plat'] existe avant de l'afficher
                                                    if (isset($data['nom_plat'])) {
                                                        ?>
                                                        <tr>
                                                            <td><span class="font-w500"> <?php echo $data['nom_plat']; ?> </span></td>
                                                            <td> <?php echo $data['prix_plat']; ?> </td>
                                                            <td>
                                                                <div class="quantity btn-quantity style-1">
                                                                    <?php echo $quantite / 2; ?>
                                                                </div>
                                                            </td>
                                                            <td> <?php echo $data['prix_plat'] * $quantite; ?> </td>
                                                        </tr>
                                                        <?php
                                                    } else {
                                                        // Faire quelque chose si l'indice n'existe pas
                                                        echo "L'indice 'nom_plat' n'existe pas pour le plat avec l'ID $plat_id.";
                                                    }
                                                }

                                            }
                                        }
                                        ?>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="card-order-footer">
                            <div class="amount-details">
                                <h5 class="d-flex text-right mb-3">
                                    <span class="text">Total </span>
                                    <span class="me-0 ms-auto">43.00</span>
                                </h5>
                                <h5 class="d-flex text-right mb-3">
                                    <span class="text">Taxes</span>
                                    <span class="me-0 ms-auto"> 3.00</span>
                                </h5>
                                <h5 class="d-flex text-right mb-3">
                                    <span class="text">Frais de livraison</span>
                                    <span class="me-0 ms-auto">0.00</span>
                                </h5>
                            </div>
                            <div class="amount-payble">
                                <h5 class="d-flex text-right mb-0">
                                    <span class="text">Net à payer</span>
                                    <span class="me-0 ms-auto">46.00</span>
                                </h5>
                            </div>

                            <div class="btn_box">
                                <div class="row no-gutter mx-0">
                                    <a href="javascript:void(0);" id="home-counter-tab"
                                       class="btn btn-danger btn-block col-6 m-0 rounded-0">Annuler</a>
                                    <a href="javascript:void(0);" id="place-order-tab"
                                       class="btn btn-primary btn-block col-6 m-0 rounded-0">Lancer commande</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="h-100" id="place-order">
                        <div class="card rounded-0">
                            <div class="card-body">
                                <form action="actions/post_commande.php" method="post">
                                    <h4 class="mb-4">Amount to Pay <strong> $46.00 </strong></h4>
                                    <div class="form-group mb-4 pb-2">
                                        <label class="font-w600">Select Payment Method</label>
                                        <div class="row no-gutters align-items-center">
                                            <div class="col-6 col-sm-6 col-md-6 col-lg-4">
                                                <div class="custom-control custom-radio">
                                                    <input checked="" type="radio" id="cash" name="PaymentMethod"
                                                           class="custom-control-input">
                                                    <label class="custom-control-label" for="cash"><span class="ms-2">Cash</span></label>
                                                </div>
                                            </div>
                                            <div class="col-6 col-sm-6 col-md-6 col-lg-4">
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="card" name="PaymentMethod"
                                                           class="custom-control-input">
                                                    <label class="custom-control-label" for="card"><span class="ms-2">Card</span></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="font-w600">Informations sur la livraison</label>
                                        <input type="text" class="form-control solid" placeholder="Entrez votre nom"
                                               name="fullname" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control solid"
                                               placeholder="Enter votre numéro de téléphone" name="phone" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control solid"
                                               placeholder="Adresse de livraison" name="adress" required>
                                    </div>
                                    <a href="javascript:void(0);" id="place-order-cancel"
                                       class="btn btn-danger btn-block col-6 m-0 rounded-0">Annuler</a>
                                    <button type="submit" class="btn btn-primary btn-block col-6 m-0 rounded-0">Valider
                                        la commande
                                    </button>
                                </form>
                            </div>
                        </div>
                        <div class="card-order-footer">
                            <div class="btn_box">
                                <div class="row no-gutter mx-0">
                                    <?php if (isset($_SESSION['panier']) and $_SESSION['panier']) {
                                        print_r($_SESSION);
                                    } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </aside>
            <div class="row">
                <div class="col-xl-12">
                    <div class="owl-carousel item-carousel">
                        <?php
                        $request = $data_base->query("select * from categorie");
                        $position = 1;
                        while ($data = $request->fetch()) {
                        ?>
                        <div class="items"
                        ">
                        <div class="item-box" style="cursor: pointer">
                            <img alt="" src=<?php echo 'images/food-icon/' . $position . '.png' ?>>
                            <h5 class="title mb-0">
                                <?php
                                echo '<a href="#" class="ajax-category" data-category="' . $data['nom_Categorie'] . '">' . $data['nom_Categorie'] . '</a>';
                                ?>
                            </h5>
                        </div>
                    </div>
                    <?php
                    $position++;
                    }
                    $request->closeCursor();
                    ?>
                </div>
            </div>
            <div class="col-xl-12">
                <div class="input-group search-area style-1 mb-4">
                    <input type="text" class="form-control" placeholder="Search here...">
                    <div class="input-group-append">
                        <button class=" btn btn-primary btn-rounded">Search<i
                                    class="flaticon-381-search-2 scale3 ms-3"></i></button>
                    </div>
                </div>
                <div class="row" id="result-container">

                </div>
            </div>
        </div>
    </div>
</div>
<!--**********************************
    Content body end
***********************************-->

<!--**********************************
    Footer start
***********************************-->
<!-- <div class="footer">
    <div class="copyright">
        <p>Copyright © Designed &amp; Developed by <a href="http://dexignzone.com/" target="_blank">DexignZone</a> 2021</p>
    </div>
</div> -->
<!--**********************************
    Footer end
***********************************-->

<!--**********************************
   Support ticket button start
***********************************-->

<!--**********************************
   Support ticket button end
***********************************-->


</div>
<!--**********************************
    Main wrapper end
***********************************-->

<!--**********************************
    Scripts
***********************************-->
<!-- Required vendors -->
<script src="vendor/global/global.min.js"></script>
<script src="vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>

<!-- Counter Up -->
<script src="vendor/waypoints/jquery.waypoints.min.js"></script>
<script src="vendor/jquery.counterup/jquery.counterup.min.js"></script>

<script src="vendor/owl-carousel/owl.carousel.js"></script>
<script src="vendor/bootstrap-touchspin/js/jquery.bootstrap-touchspin.min.js"></script>

<script src="js/custom.js"></script>
<script src="js/deznav-init.js"></script>

<script>

    function ItemsCarousel() {

        /*  testimonial one function by = owl.carousel.js */
        jQuery('.item-carousel').owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
            center: true,
            autoWidth: true,
            autoplay: true,
            dots: false,
            items: 4,
            navText: ['', ''],
            breackpoint: []

        })
    }

    jQuery(window).on('load', function () {
        setTimeout(function () {
            ItemsCarousel();
        }, 1000);
    });

    function handleTabs() {
        $('#add-order-content,#place-order').css("display", "none");
        $('#add-order').on('click', function () {
            $('#add-order-content').css("display", "block");
            $('#home-counter').css("display", "none");
        })
        $('#place-order-tab').on('click', function () {
            $('#place-order').css("display", "block");
            $('#add-order-content').css("display", "none");
        })
        $('#place-order-cancel').on('click', function () {
            $('#place-order').css("display", "none");
            $('#add-order-content').css("display", "block");
        })
        $('#home-counter-tab').on('click', function () {
            $('#home-counter').css("display", "block");
            $('#add-order-content').css("display", "none");
        })
    }

    handleTabs();
</script>

<script>
    $(document).ready(function () {
        // Gérer le clic sur les liens de catégorie
        $(".ajax-category").click(function (e) {
            e.preventDefault();

            // Récupérer le nom de la catégorie à charger
            var categoryToLoad = $(this).data("category");

            // Effectuer la requête AJAX
            $.ajax({
                url: "./actions/load-category.php",
                type: "GET",
                data: {category: categoryToLoad},
                success: function (data) {
                    // Mettre à jour le contenu de #result-container avec la réponse
                    $("#result-container").html(data);
                },
                error: function () {
                    alert("Une erreur s'est produite lors du chargement de la catégorie.");
                }
            });
        });

        // Charger tous les plats au chargement de la page
        loadAllDishes();
    });

    // Fonction pour charger tous les plats
    function loadAllDishes() {
        $.ajax({
            url: "./actions/load-all-dishes.php",
            type: "GET",
            success: function (data) {
                // Mettre à jour le contenu de #result-container avec la réponse
                $("#result-container").html(data);
            },
            error: function () {
                alert("Une erreur s'est produite lors du chargement de tous les plats.");
            }
        });
    }
</script>

</body>
<!-- Mirrored from davur.dexignzone.com/frontend/front-home.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 14 Mar 2023 11:34:58 GMT -->
</html>