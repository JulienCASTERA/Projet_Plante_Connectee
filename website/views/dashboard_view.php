<? session_start(); ?>
<?php
    // Au cas ou on essaye d'aller sur la page sans être connecté
    include('controllers/verif_controller.php');
?>

<!doctype html>
<html>

<head>

    <?php include_once 'views/includes/head.php';
    ?>
</head>

<body>
    <div class="preloader"></div>
    <div class="d-flex" id="wrapper">
        <?php include_once 'views/includes/header.php'?>

        <div class="container-fluid" style="margin-bottom:10px; position:relative;">
            <?php if (isset($_SESSION['success'])) { ?>
            <div class="alert alert-success">
                <?php 
                    echo $_SESSION['success']; 
                    unset($_SESSION['success']); ?>
            </div>
            <?php }?>
            <?php if (isset($_SESSION['warning'])) { ?>
            <div class="alert alert-warning">
                <?php 
                    echo $_SESSION['warning']; 
                    unset($_SESSION['warning']); ?>
            </div>
            <?php }?>
        </div>
        <div class="card">
            <h5 class="card-header">Tableau de bord </h5>

            <?php if(!isset($_GET['addplant']) and !isset($_GET['addplantdb'])) { ?>
            <div class="card-body">
                <h5 class="card-title">Vos plantes</h5>
                <hr class="my-4">
                <div class="card-deck">
                    <?php

                    $reqPlantsFromUser =  $db->prepare('
                    SELECT id_plante FROM appartenances
                    WHERE id_user = ?
                    ');
                    $reqPlantsFromUser->execute([$_SESSION['id']]);

                    while ($donnees = $reqPlantsFromUser->fetch()) {

                        $reqs = $db->prepare('SELECT * FROM plantes p
                                            WHERE id_plante = ?');

                        $reqs->execute([$donnees[0]]);

                        $data = $reqs->fetchAll();

                        foreach ($data as $plante) { ?>
                            <div class="card" style="width:500px;">
                                <a href="#">
                                    <img src="assets/images/<?=$plante['image_name']?>" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title"><?= $plante['nom_plante'] ?></h5>
                                </a>
                                <p class="card-text">Votre plante se porte bien.</p>
                                <a href="/dashboard?viewPlant=<?=$plante['id_plante']?>" class="btn btn-primary">Plus d'informations</a>
                                    </div>
                                <div class="card-footer">
                                    <small class="text-muted">Dernière mise à jour il y a 3 minutes</small>
                                </div>
                            </div>
                    <?php }

                    } ?>
    
    </div>
    </div>

    </div>

    </div>
    <?php }?>
    <?php
    if (isset($_GET['addplantdb'])) { ?>
    <div class="card-body">
        <div class="alert alert-danger" role="alert">
            Attention ! Veillez à rentrer des informations justes sous peine de sanctions.<br/>
            Cette section est reservée à des membres voulant servir la communauté.
        </div>
        <hr class="my-4">

        <form id="regForm" action="/adder" method="post">

        <h1>Ajouter une plante</h1>
        <div class="tab">
            <p>
                Nom de la plante:
                <input name="plantname" type="text" placeholder="Veuillez saisir le nom de la plante" >
            </p>
            <p>
                Description de la plante:
                <textarea name="plantdesc" class="form-control" rows="3"required="required" ></textarea>
            </p>
        
        </div>

        <div class="tab">
        <p>
            Periode de plantation:
            <select class="form-control" id="plant" name="plantplant">
                <option disabled selected value> -- Choisissez -- </option>
                <?php foreach ($allPlantations as $index => $plantation): ?>
                <option value="<?=$plantation['id_plantation']?>"> <?=$plantation['debut_plantation']?> - <?=$plantation['fin_plantation'] ?></option>
                <?php endforeach?>
            </select></p>
        <p>Periode de floraison:
        <select class="form-control" id="plant" name="plantflor">
                <option disabled selected value> -- Choisissez -- </option>
                <?php foreach ($allFloraisons as $index => $floraison): ?>
                <option value="<?=$floraison['id_floraison']?>"> <?=$floraison['debut_floraison']?> - <?=$floraison['fin_floraison'] ?></option>
                <?php endforeach?>
        </select>
        </p>
        </div>

        <div class="tab">
        <p>
            Besoins en température:
            <select class="form-control" id="plant" name="planttemp">
                <option disabled selected value> -- Choisissez -- </option>
                <?php foreach ($allTemps as $index => $temp): ?>
                <option value="<?=$temp['id_temperature']?>"> <?=$temp['temp_min']?>° - <?=$temp['temp_max'] ?>°</option>
                <?php endforeach?>
            </select></p>
        <p>
            Catégorie:
            <select class="form-control" id="plant" name="plantcat">
                <option disabled selected value> -- Choisissez -- </option>
                <?php foreach ($allCategories as $index => $categorie): ?>
                <option value="<?=$categorie['id_categorie']?>"> <?=$categorie['nom_categorie']?></option>
                <?php endforeach?>
            </select>
            </p>
        </div>


        <div style="overflow:auto;">
        <div style="float:right;">
            <button class="btn btn-primary" type="button" id="prevBtn" onclick="nextPrev(-1)">Precedent</button>
            <button class="btn btn-primary" type="button" id="nextBtn" onclick="nextPrev(1)">Suivant</button>
        </div>
        </div>

        <div style="text-align:center;margin-top:40px;">
        <span class="step"></span>
        <span class="step"></span>
        <span class="step"></span>
        </div>

        </form>
        <script>
        var currentTab = 0; // Current tab is set to be the first tab (0)
        showTab(currentTab); // Display the current tab

        function showTab(n) {
        // This function will display the specified tab of the form...
        var x = document.getElementsByClassName("tab");
        x[n].style.display = "block";
        //... and fix the Previous/Next buttons:
        if (n == 0) {
            document.getElementById("prevBtn").style.display = "none";
        } else {
            document.getElementById("prevBtn").style.display = "inline";
        }
        if (n == (x.length - 1)) {
            document.getElementById("nextBtn").innerHTML = "Envoyer";
        } else {
            document.getElementById("nextBtn").innerHTML = "Suivant";
        }
        //... and run a function that will display the correct step indicator:
        fixStepIndicator(n)
        }

        function nextPrev(n) {
        // This function will figure out which tab to display
        var x = document.getElementsByClassName("tab");
        // Exit the function if any field in the current tab is invalid:
        if (n == 1 && !validateForm()) return false;
        // Hide the current tab:
        x[currentTab].style.display = "none";
        // Increase or decrease the current tab by 1:
        currentTab = currentTab + n;
        // if you have reached the end of the form...
        if (currentTab >= x.length) {
            // ... the form gets submitted:
            document.getElementById("regForm").submit();
            return false;
        }
        // Otherwise, display the correct tab:
        showTab(currentTab);
        }

        function validateForm() {
        // This function deals with validation of the form fields
        var x, y, i, valid = true;
        x = document.getElementsByClassName("tab");
        y = x[currentTab].getElementsByTagName("input");
        yy = x[currentTab].getElementsByTagName("textarea");
        yyy = x[currentTab].getElementsByTagName("select");
        // A loop that checks every input field in the current tab:
        for (i = 0; i < y.length; i++) {
            // If a field is empty...
            if (y[i].value == "") {
            // add an "invalid" class to the field:
            y[i].className += " invalid";
            // and set the current valid status to false
            valid = false;
            }
        }
        for (i = 0; i < yy.length; i++) {
            // If a field is empty...
            if (yy[i].value == "") {
            // add an "invalid" class to the field:
            yy[i].className += " invalid";
            // and set the current valid status to false
            valid = false;
            }
        }
        for (i = 0; i < yyy.length; i++) {
            if (yyy[i].value == "") {
            // add an "invalid" class to the field:
            yyy[i].className += " invalid";
            // and set the current valid status to false
            valid = false;
            }
        }

        // If the valid status is true, mark the step as finished and valid:
        if (valid) {
            document.getElementsByClassName("step")[currentTab].className += " finish";
        }
        return valid; // return the valid status
        }

        function fixStepIndicator(n) {
        // This function removes the "active" class of all steps...
        var i, x = document.getElementsByClassName("step");
        for (i = 0; i < x.length; i++) {
            x[i].className = x[i].className.replace(" active", "");
        }
        //... and adds the "active" class on the current step:
        x[n].className += " active";
        }
        </script>

    </div></div></div></div>
    <?php }?>

    <?php
    if (isset($_GET['addplant'])) { ?>

    <div class="card-body">
        <h5 class="card-title">Ajouter une plante</h5>
        <hr class="my-4">
            <h5 class="card-title text-center">De quel type de plante disposez vous?</h5>
            <form method="post" action="/adder">
                <select class="form-control" id="idplante" name="idplante">
                    <option disabled selected value> -- Choisissez -- </option>
                    <?php foreach ($allPlants as $index => $plante): ?>
                    <option value="<?=$plante['id_plante']?>"> <?=$plante['nom_plante']?></option>
                    <?php endforeach?>
                </select>
                <hr class="my-4">
                <h5 class="card-title text-center">Quel est son numéro de série ?</h5>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">&</span>
                    </div>
                    <input type="text" class="form-control"
                        placeholder="Veuillez saisir le numéro de série de la plante" name="serialkey">
                </div>
                <button type="submit" class="btn btn-danger">Ajouter la plante</button>
            </form>
            <br />
            <p class="text-monospace">
                En ajoutant la plante vous verifiez bien la concordance des informations.<br />
                Connected Flowers ne sera pas responsable si la plante est mal configurée/donne des informations
                eronnées si vous ne verifiez pas ces informations.<br />
                En cas de problème futur, n'hésitez pas à supprimer la plante afin de recommencer cette opération.<br />
                Si cela ne fonctionne toujours pas, veuillez nous contacter en <a href="/contact">cliquant ici</a>.
            </p>
            <br />
            <script>
                $(document).ready(function () {
                    $("#plant").select2()
                });
            </script>
            <div class="alert alert-info" role="alert">
                Information : La plante que vous ajoutez est votre 
                <?php 
                 $reqPlantsFromUser =  $db->prepare('
                 SELECT id_plante FROM appartenances
                 WHERE id_user = ?');
                 $reqPlantsFromUser->execute([$_SESSION['id']]);
                 $data = $reqPlantsFromUser->rowCount();
                 echo ($data +1) ;?> ème plante.
                <hr>
                <?php 
                    $i = rand(1, 5);
                    switch ($i) {
                        case 1:
                            echo "N'oubliez pas de baisser la température de votre plante la nuit.";
                            break;
                        case 2:
                            echo "De façon générale, une humidité relative de 50 à 60 % convient à la majorité des plantes d'intérieur.";
                            break;
                        case 3:
                            echo "Pour bien arroser sa plante, il faut arroser toute la surface du sol sans surplus, et si il y a, enlever l'excès d'eau.<br/>
                            L'eau tiède est préférable pour éviter de ralentir leur croissance. Cela peut aussi créer un choc thermique !";
                            break;
                        case 4:
                            echo "En hiver, il faut redoubler de vigilance sur la température de l'eau car l'eau froide (venant des canalisations) peut être très froide au point de griller les racines de la plante.<br/>
                            Cela a le même effet que le gel.";
                            break;
                        case 5:
                            echo "Pour les plantes des régions tempérées, il faut faire attention à respecter leur cycle de température.<br/>
                            C'est à dire qu'il faut baisser la température la nuit (Attention à ne pas descendre en dessous des 15°C).";
                            break;
                    }
                ?>
            </div>
            <p class="text-muted">
                Vous souhaitez contribuer à l'élaboration de notre base de données ? Rajoutez y une plante en <a
                    href="/dashboard?addplantdb">cliquant ici</a> !
            </p>
        </div>
    </div>
    </div>
    <?php }?>
    <?php include_once 'views/includes/footer.html'?>
</body>
</html>