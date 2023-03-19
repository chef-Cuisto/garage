<section class="container-fluid section_in">
    <h1 class="display-6 text-center pt-5 ">Liste des interventions</h1>
    <form action="" method="post" class="row">

        <div class="col-2 ">
            <div class="pt-3">
                <label for="" class="fw-semibold">Statut</label>
                <select name="statut">
                    <option value="En cours">En cours</option>
                    <option value="Terminer">Terminer</option>
                    <option value="Reparer">Reparer</option>
                </select>
            </div>
            <div class="pt-3">
                <label for="" class="fw-semibold">Clients</label>
                <select name="client_id" id="">
                    <?php


                    foreach ($clients as $client) {

                        if ($intervention != null) {
                            if ($intervention['client_id'] == $client['client_id']) {
                                echo "<option value='" . $client["client_id"] . "' selected>";
                            } else {
                                echo "<option value='" . $client["client_id"] . "'>";
                            }
                        } else {
                            echo "<option value='" . $client["client_id"] . "'>";
                        }

                        echo $client["nom"];
                        echo "</option>";
                    }

                    ?>
                </select>
            </div>
            <div class="pt-3">
                <label for="" class="fw-semibold">Techniciens</label>
                <select name="technicien_id" id="">
                    <?php
                    foreach ($techniciens as $technicien) {
                        echo "<option value='" . $technicien['technicien_id'] . "'>";
                        echo $technicien["nom"];
                        echo "</option>";
                    }

                    ?>
                </select>

            </div>

        </div>
        <div class="col-2 pt-4">

            <div class="pt-3">
                <input type="text" name="intitule" id="intitule" placeholder="Entrez intitule" value="<?= ($intervention != null) ? $intervention['intitule'] : '' ?>">
            </div>
            <div class="pt-3">
                <input type="date" name="dateinter" id="dateinter" placeholder="Entrez date" value="<?= ($intervention != null) ? $intervention['dateinter'] : '' ?>">
            </div>
            <div class="pt-3">
                <input type="text" name="prix" id="prix" placeholder="Entrez le prix" value="<?= ($intervention != null) ? $intervention['prix'] : '' ?>">
            </div>
            <div class="pt-3">
                <input type="reset" name="annuler" value="Annuler" class="me-2 bg-dark text-light btn">
                <input type="submit" class="btn text-light" <?= ($intervention != null) ? 'name="modifier" value="Modifier"' : 'name="valider" value="Valider"' ?>>

                <?= ($intervention != null) ? '<input type = "hidden" name="intervention_id" value="' . $intervention['intervention_id'] . '">' : '' ?>
            </div>
        </div>
    </form>


    <form class="d-flex flex-row-reverse ms-3" role="search" method="post">
        <input class="" name="mot" type="search" placeholder="Filtre">
        <button class="btn_search text-light " name="filtrer" type="submit">Filtre</button>
    </form>

</section>