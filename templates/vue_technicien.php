<?php
if (!isset($_SESSION['email'])) {

    echo ' 
<section class="intervention_temp">
<div class="container marketing">

<hr class="featurette-divider">

<div class="row featurette">
  <div class="col-md-7 order-md-2">
    <h2 class="featurette-heading fw-normal lh-1">Votre voiture est entre <span class="text-muted">de bonnes mains</span></h2>
    <p class="lead">À mesure que l\'automobile incorpore de plus en plus d\'électronique, son entretien et sa réparation se complexifient. Le secteur de la réparation automobile emploie désormais un personnel de mieux en mieux formé que vous bénéficerais chez nous.</p>
    <div class="row ">
    <div class="col-3">
    <img src="https://images.unsplash.com/photo-1540476547779-348beb642680?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NXx8dGVjaG5pY2lhbnxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60" alt="" class="rounded-1 bd-placeholder-img bd-placeholder-img-lg  img-fluid mx-auto" width="100%">
    </div>
    <div class="col-3">
    <img src="https://images.unsplash.com/photo-1610742805112-20134ceb40e8?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mjd8fHRlY2huaWNpYW58ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60" class="rounded-1 bd-placeholder-img bd-placeholder-img-lg  img-fluid mx-auto" alt="" width="100%">
    </div>
    <div class="col-3">
    <img src="https://plus.unsplash.com/premium_photo-1661344430934-f41f823a4512?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NjZ8fHRlY2huaWNpYW58ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60" class="rounded-1 bd-placeholder-img bd-placeholder-img-lg  img-fluid mx-auto" alt="" width="100%">
    </div>
    </div>
    <div class="pt-5">
    <button class="text-white"><a href="index.php?page=Connexion" class="text-decoration-none text-white">Découvrez</a></button>
    </div>
    </div>
  
  <div class="col-md-5 order-md-1">
  <img src="https://images.unsplash.com/photo-1621905253185-95614217f357?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTh8fHRlY2huaWNpYW58ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60" alt="" class="rounded-1 bd-placeholder-img bd-placeholder-img-lg  img-fluid mx-auto"  width="80%" height="80%">
  </div>
</div>

<hr class="featurette-divider">


';
} else {

    echo '<section class="section_table">';

    if (isset($_SESSION["role"]) && $_SESSION["role"] == "user") {
         
        echo '  
         <h1 class="display-6 text-center pt-5 pb-5">Liste des techniciens</h1>   ';
    }
    echo ' 
        <div class="container-fluid ">
            <table class="table  me-5 table-striped table-bordered">
                <thead>
                    <tr class="text-center text-light tr_top">
                        <th scope="col" >#</th>
                        <th scope="col">Nom</th>
                        <th scope="col">Prenom</th>
                        <th scope="col">Mail</th>
                        <th scope="col">Télephone</th>
                        <th scope="col">Qualification</th> ';
    if (isset($_SESSION["role"]) && $_SESSION["role"] == "admin") {
        echo '     <th scope="col">Modif</th>';
    }

    echo '   </tr>

                        </thead>
                        <tbody>';
    foreach ($techniciens as $technicien) {
        echo "<tr class='text-center'>";
        echo "<th class=''>" . $technicien['technicien_id'] . "</th>";
        echo "<td>" . $technicien['nom'] . "</td>";
        echo "<td>" . $technicien['prenom'] . "</td>";
        echo "<td>" . $technicien['mail'] . "</td>";
        echo "<td>" . $technicien['tel'] . "</td>";
        echo "<td>" . $technicien['qualification'] . "</td>";
        if (isset($_SESSION["role"]) && $_SESSION["role"] == "admin") {
            echo "<td class='d-flex'>
                                <a class='  flex-fill ' href='index.php?page=Techniciens&action=suppression&technicien_id=" . $technicien['technicien_id'] . "'><i class='fa-solid fa-trash fs-4 text-danger'></i></a>
                                <a class='flex-fill' href='index.php?page=Techniciens&action=edition&technicien_id=" . $technicien['technicien_id'] . "'><i class='fa-solid fa-pen-to-square fs-4 text-primary'></i></a>
                                <a class='flex-fill' href='index.php?page=Techniciens&action=voirInt&technicien_id=" . $technicien['technicien_id'] . "'><i class='fa-solid fa-screwdriver-wrench btn_view fs-4 text-warning'></i></a>
                                <a class='flex-fill' href='index.php?page=Techniciens&action=voirVeh&technicien_id=" . $technicien['technicien_id'] . "'><i class='fa-solid fa-car btn_view fs-4 text-success'></i></a>
              
                                </td>";
            echo "</tr>";
        }
    }
    echo "   
    </tbody>
</table>

<p>Nombre de technicien(s) : <strong>".$unControleur->countTable("intervention")["nb"]."</strong></p>



";
}




?>

</div>
</section>