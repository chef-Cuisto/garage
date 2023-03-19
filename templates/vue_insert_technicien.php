<section class="container-fluid section_in">
    <h1 class="display-6 text-center pt-5 ">Liste des techniciens</h1>
    <form action="" method="post" class="row">
        <div class="col-2">
            <div class="pt-3">
                <input type="text" name="nom" id="nom" placeholder="Entrez nom" value="<?= ($technicien != null) ? $technicien['nom'] : '' ?>">
            </div>
            <div class="pt-3">
                <input type="text" name="prenom" id="prenom" placeholder="Entrez prenom" value="<?= ($technicien != null) ? $technicien['prenom'] : '' ?>">
            </div>
            <div class="pt-3">
                <input type="email" name="mail" id="mail" placeholder="Entrez mail" value="<?= ($technicien != null) ? $technicien['mail'] : '' ?>">
            </div>
        </div>
        <div class="col-2">

            <div class="pt-3">
                <input type="number" name="tel" id="tel" placeholder="Entrez numéro" value="<?= ($technicien != null) ? $technicien['tel'] : '' ?>">
            </div>
            <div class="pt-3">
                <input type="text" name="qualification" id="qualification " placeholder="Entrez votre qualification" value="<?= ($technicien != null) ? $technicien['qualification'] : '' ?>">
            </div>
            <div class="pt-3">
                <input type="reset" name="annuler" value="Annuler" class="me-2 bg-dark text-light btn">
                <input type="submit" class="btn text-light" <?= ($technicien != null) ? 'name="modifier" value="Modifier"' : 'name="valider" value="Valider"' ?>>

                <?= ($technicien != null) ? '<input type = "hidden" name="technicien_id" value="' . $technicien['technicien_id'] . '">' : '' ?>

            </div>
        </div>
        <div>

    </form>
    <form class="d-flex flex-row-reverse ms-3" role="search" method="post">
        <input class="" name="mot" type="search" placeholder="Filtre" >
        <button class="btn_search text-light " name="filtrer" type="submit">Filtre</button>
    </form>
  
</section>