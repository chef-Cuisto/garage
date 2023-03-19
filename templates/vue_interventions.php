
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
                <img src="https://images.unsplash.com/photo-1562259929-b4e1fd3aef09?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NHx8cmVwYWlyfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60" alt="" class="rounded-1 bd-placeholder-img bd-placeholder-img-lg  img-fluid mx-auto" width="100%">
                </div>
                <div class="col-3">
                <img src="https://plus.unsplash.com/premium_photo-1661270407355-c1b03676028c?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTl8fHJlcGFpcnxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60" class="rounded-1 bd-placeholder-img bd-placeholder-img-lg  img-fluid mx-auto" alt="" width="100%">
                </div>
                <div class="col-3">
                <img src="https://images.unsplash.com/photo-1602267774924-38124c047174?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mjh8fHJlcGFpcnxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60" class="rounded-1 bd-placeholder-img bd-placeholder-img-lg  img-fluid mx-auto" alt="" width="100%">
                </div>
            </div>
            <div class="pt-5">
                <button class="text-white"><a href="index.php?page=Connexion" class="text-decoration-none text-white">Découvrez</a></button>
            </div>
            </div>
          <div class="col-md-5">
        <img src="https://images.unsplash.com/photo-1615906655593-ad0386982a0f?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTB8fGdhcmFnZXxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60" alt="" class="rounded-1 bd-placeholder-img bd-placeholder-img-lg  img-fluid mx-auto"  width="80%" height="80%">
          </div>
        </div>
    
        <hr class="featurette-divider">
    
        </div>
        </section>

';
    } else {

        echo '  
            
        <section class="section_table"> ';
        if (isset($_SESSION["role"]) && $_SESSION["role"] == "user") {
         
            echo '  
             <h1 class="display-6 text-center pt-5 pb-5">Liste des interventions</h1>   ';
        }


       echo  '
        <div class="container-fluid ">
    <table class="table  me-5 table-striped table-bordered ">';


        
    if (isset($_SESSION["role"]) && $_SESSION["role"] == "user") {
         
        echo '  
        <div class="container-fluid ">
        <table class="table  me-5 table-striped table-bordered mb-5"> ';
    }

    echo '
        <thead>
            <tr class="text-center text-light tr_top">
                <th scope="col">#</th>
                <th scope="col">N° de techniciens</th>
                <th scope="col">N° de clients</th>
                <th scope="col">Intitule</th>
                <th scope="col">Date</th>
                <th scope="col">Statut</th>
                <th scope="col">Prix</th>      ';
        if (isset($_SESSION["role"]) && $_SESSION["role"] == "admin") {
            echo '     <th scope="col">Modif</th>';
        }
        echo '   
                </tr>

            </thead>
            <tbody>';
        foreach ($interventions as $intervention) {
            echo "<tr class='text-center'>";
            echo "<th>" . $intervention['intervention_id'] . "</th>";
            echo "<td>" . $intervention['technicien_id'] . "</td>";
            echo "<td>" . $intervention['client_id'] . "</td>";
            echo "<td>" . $intervention['intitule'] . "</td>";
            echo "<td>" . $intervention['dateinter'] . "</td>";
            echo "<td>" . $intervention['statut'] . "</td>";
            echo "<td>" . $intervention['prix'] . "</td>";

            if (isset($_SESSION["role"]) && $_SESSION["role"] == "admin") {
                echo "<td class='d-flex'>
                <a class='  flex-fill ' href='index.php?page=Intervention&action=suppression&intervention_id=" . $intervention['intervention_id'] . "'><i class='fa-solid fa-trash fs-4 text-danger'></i></a>
                <a class='flex-fill' href='index.php?page=Intervention&action=edition&intervention_id=" . $intervention['intervention_id'] . "'><i class='fa-solid fa-pen-to-square fs-4 text-primary'></i></a>
              
                </td>";
                echo "</tr>";
            }
        }
        echo "   
            </tbody>
        </table>

        <p>Nombre d'intervention(s) : <strong>".$unControleur->countTable("intervention")["nb"]."</strong></p>



";
    }
    ?>
    </div>
</section>