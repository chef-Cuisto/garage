<?php

    echo '  
            
<div class="sectionID  " id="">
    <div class="bloc-vue position-relative rounded-2" id="bloc_view">
    <button class="rounded-2 border-light m-1" id="exitBtn"> <i class="fa-solid fa-x text-danger"></i>
    </button>
    <h5 class="text-white text-center pt-1">Liste des interventions du technicien : '.$technicien['nom'].'</h5>
 
        <div class=" container-fluid p-5">
        <table class="table  me-5 table-striped table-bordered "> 
        <thead>
            <tr class="text-center text-light tr_top">
       

                <th scope="col" style = "border-radius : 0.2rem 0 0 0 ">#</th>
                <th scope="col">Intitule</th>
                <th scope="col">Date</th>
                <th scope="col">Statut</th>
                <th scope="col" >Prix</th>     
                <th scope="col" style = "border-radius :0 0.2rem 0 0rem ">Voitures</th>  
 
                </tr>

            </thead>
            <tbody>';

    $ca = 0;

    foreach ($interventions as $intervention) {
        echo "<tr class='text-center'>";
        echo "<th  class='text-white'>" . $intervention['intervention_id'] . "</th>";
        echo "<td  class='text-white'>" . $intervention['intitule'] . "</td>";
        echo "<td  class='text-white'>" . $intervention['dateinter'] . "</td>";
        echo "<td  class='text-white'>" . $intervention['statut'] . "</td>";
        echo "<td  class='text-white'>" . $intervention['prix'] . "</td>";


        $ca = $ca + $intervention['prix'];
    }
    echo '  
            </tbody>
        </table>


        <br> <p  class="text-white"> Le chiffre d\'affaitre total de ce client est de : 
            <strong>' . $ca . ' Euros</strong>    </p> 
';



?>
</div>
</div>
        </div>