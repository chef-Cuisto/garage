<section class="container-fluid section_in">
    <h1 class="display-6 text-center pt-5 ">Liste des clients</h1>
    <form action="" method="post" class="row">
        <div class="col-2">
            <div class="p-1">
                <input type="text" name="nom" id="nom" placeholder="Entrez nom" value="<?= ($client != null) ? $client['nom'] : '' ?>">
            </div>
            <div class="p-1">
                <input type="text" name="prenom" id="prenom" placeholder="Entrez prenom" value="<?= ($client != null) ? $client['prenom'] : '' ?>">
            </div>
            <div class="p-1">
                <input type="email" name="mail" id="mail" placeholder="Entrez mail" value="<?= ($client != null) ? $client['mail'] : '' ?>">
            </div>
        </div>
        <div class="col-2">
            <div class="p-1">
                <input type="number" name="tel" id="tel" placeholder="Entrez numéro" value="<?= ($client != null) ? $client['tel'] : '' ?>">
            </div>
            <div class="p-1">

                <input type="reset" name="annuler" value="Annuler" class="me-2 bg-dark text-light btn">
                <input type="submit" class="btn text-light" <?= ($client != null) ? 'name="modifier" value="Modifier"' : 'name="valider" value="Valider"' ?>>

                <?= ($client != null) ? '<input type = "hidden" name="client_id" value="' . $client['client_id'] . '">' : '' ?>
            </div>
        </div>
    </form>
    <form class="d-flex flex-row-reverse ms-3 "  role="search" method="post">
        <input class="" name="mot" type="search" placeholder="Filtre" >
        <button class="btn_search text-light " name="filtrer" type="submit">Filtre</button>
    </form>
</section>