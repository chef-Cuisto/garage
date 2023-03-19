<section class="container-fluid section_in">
    <h1 class="display-6 text-center pt-5 ">Liste des véhicules</h1>
    <form action="" method="post" class="row">
        <div class="col-2">
            <div class="pt-3">
                <input type="text" name="marquere" id="nom" placeholder="Entrez marque" value="<?= ($vehicule != null) ? $vehicule['marquere'] : '' ?>">
            </div>
            <div class="pt-3">
                <input type="text" name="immatricule" id="prenom" placeholder="Entrez immatricule" value="<?= ($vehicule != null) ? $vehicule['immatricule'] : '' ?>">
            </div>
            <div class="pt-2">
                <label for="" class="fw-semibold">Etat</label><br>
                <select name="etat">

                    <option value="Nouveau">Nouveau</option>
                    <option value="Ancien">Ancien</option>
                </select>
            </div>
        </div>
        <div class="col-2">
            <div >
                <label for="" class="fw-semibold">Clients</label>
                <select name="client_id" id="">
                    <?php
                    foreach ($clients as $client) {
                        if ($vehicule != null) {
                            if ($vehicule['client_id'] == $client['client_id']) {
                                echo "<option value='" . $client['client_id'] . "' selected>";
                            } else {
                                echo "<option value='" . $client['client_id'] . "'>";
                            }
                        } else {
                            echo "<option value='" . $client['client_id'] . "'>";
                        }

                        echo $client["nom"];
                        echo "</option>";
                    }

                    ?>
                </select>
            </div>
            <div>
                <label for="" class="fw-semibold">techniciens</label>
                <select name="technicien_id" id="">
                    <?php
                    foreach ($techniciens as $technicien) {
                        if ($vehicule != null) {
                            if ($vehicule['technicien_id'] == $technicien['technicien_id']) {
                                echo "<option value='" . $technicien['technicien_id'] . "' selected>";
                            } else {
                                echo "<option value='" . $technicien['technicien_id'] . "'>";
                            }
                        } else {
                            echo "<option value='" . $technicien['technicien_id'] . "'>";
                        }

                        echo $technicien["nom"];
                        echo "</option>";
                    }

                    ?>
                </select>
            </div>
            <div class="pt-3">
                <input type="reset" name="annuler" value="Annuler" class="me-2 bg-dark text-light btn">
                <input type="submit" class="btn text-light" <?= ($vehicule != null) ? 'name="modifier" value="Modifier"' : 'name="valider" value="Valider"' ?>>

                <?= ($vehicule != null) ? '<input type = "hidden" name="vehicule_id" value="' . $vehicule['technicien_id'] . '">' : '' ?>
            </div>

        </div>
    </form>
    <form class="d-flex flex-row-reverse ms-3" role="search" method="post">
        <input class="" name="mot" type="search" placeholder="Filtre">
        <button class="btn_search text-light " name="filtrer" type="submit">Filtre</button>
    </form>

</section>