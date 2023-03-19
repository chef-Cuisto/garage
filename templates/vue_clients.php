<?php
if (!isset($_SESSION['email'])) {


    echo '    
        <section class="intervention_temp">
        <div class="container marketing">

        <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-7">
            <h2 class="featurette-heading fw-normal lh-1">Suivez vos interventions<span class="text-muted"></span></h2>
            <p class="lead">L\'entretien de votre voiture n\'a jamais été aussi simple avec idGarages ! Retrouvez l\'ensemble des interventions disponibles sur notre site avec des remises pouvant atteindre jusqu\'à -40% pour un budget auto maîtrisé.<br>Nos experts s\'occupentde vos voitures, disponible 12h sur 24 .</p>
            <div class="row ">
                <div class="col-3">
                <img src="https://images.unsplash.com/photo-1516055619834-586f8c75d1de?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8OTZ8fGNsaWVudHxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60" alt="" class="rounded-1 bd-placeholder-img bd-placeholder-img-lg  img-fluid mx-auto" width="100%">
                </div>
                <div class="col-3">
                <img src="https://images.unsplash.com/photo-1552960366-b330a2f83823?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NTB8fGNsaWVudHxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60" class="rounded-1 bd-placeholder-img bd-placeholder-img-lg  img-fluid mx-auto" alt="" width="100%">
                </div>
                <div class="col-3">
                <img src="https://images.unsplash.com/photo-1512314889357-e157c22f938d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTd8fGNsaWVudHxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60" class="rounded-1 bd-placeholder-img bd-placeholder-img-lg  img-fluid mx-auto" alt="" width="100%">
                </div>
            </div>
            <div class="pt-5">
                <button class="text-white"><a href="index.php?page=Connexion" class="text-decoration-none text-white">Découvrez</a></button>
            </div>
            </div>
          <div class="col-md-5">
        <img src="https://images.unsplash.com/photo-1590698933947-a202b069a861?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTB8fGNsaWVudHxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60" alt="" class="rounded-1 bd-placeholder-img bd-placeholder-img-lg  img-fluid mx-auto"  width="80%" height="80%">
          </div>
        </div>
    
        <hr class="featurette-divider">
    
        </div>
        </section>

';
} else {

    echo ' <section class="section_table">';
    if (isset($_SESSION["role"]) && $_SESSION["role"] == "user") {
         
        echo '  
         <h1 class="display-6 text-center pt-5 pb-5">Liste des clients</h1>   ';
    }
    echo ' 
    
        <div class="container-fluid ">
            <table class="table  me-5 table-striped table-bordered">
                <thead>
                    <tr class="text-center text-light tr_top">
                        <th scope="col">#</th>
                        <th scope="col">Nom</th>
                        <th scope="col">Prenom</th>
                        <th scope="col">Téléphone</th>
                        <th scope="col">Mail</th>';
    if (isset($_SESSION["role"]) && $_SESSION["role"] == "admin") {
        echo '     <th scope="col">Modif</th>';
    }
    echo '        </tr>
                        </thead>
                        <tbody>';
    foreach ($clients as $client) {
        echo "<tr class='text-center'>";
        echo "<th>" . $client['client_id'] . "</th>";
        echo "<td>" . $client['nom'] . "</td>";
        echo "<td>" . $client['prenom'] . "</td>";
        echo "<td>" . $client['tel'] . "</td>";
        echo "<td>" . $client['mail'] . "</td>";

        if (isset($_SESSION["role"]) && $_SESSION["role"] == "admin") {

            echo "<td class='d-flex'>
                                <a class='flex-fill ' href='index.php?page=Clients&action=suppression&client_id=" . $client['client_id'] . "'><i class='fa-solid fa-trash fs-4 text-danger'></i></a>
                                <a class='flex-fill' href='index.php?page=Clients&action=edition&client_id=" . $client['client_id'] . "'><i class='fa-solid fa-pen-to-square fs-4 text-primary'></i></a>
                                <a class='flex-fill' href='index.php?page=Clients&action=voirInt&client_id=" . $client['client_id'] . "'><i class='fa-solid fa-screwdriver-wrench btn_view fs-4 text-warning'></i></a>
                                <a class='flex-fill' href='index.php?page=Clients&action=voirVeh&client_id=" . $client['client_id'] . "'><i class='fa-solid fa-car btn_view fs-4 text-success'></i></a>
              
                                </td>";
            echo "</tr>";
        }
    }
    echo "     
                        </tbody>
                    </table>
                <p>Nombre de client(s) : <strong>".$unControleur->countTable("client")["nb"]."</strong></p>";
}

?>
</div>
</section>