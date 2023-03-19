<?php

    echo '  
            
<div class="sectionID" >
    <div class="bloc-vue position-relative rounded-2" id="bloc_view">
    <button class="rounded-2 border-light m-1" id="exitBtn"> <i class="fa-solid fa-x text-danger"></i>
    </button>
    <h5 class="text-white text-center pt-1">Liste des véhicules du client : '.$client['nom']." ".$client['prenom'].'</h5>
 
        <div class=" container-fluid p-5">
        <table class="table  me-5 table-striped table-bordered "> 
        <thead>
            <tr class="text-center text-light tr_top">
       

                <th scope="col" style = "border-radius : 0.2rem 0 0 0 ">#</th>
                <th scope="col">Marque</th>
                <th scope="col">Immatricule</th>
                <th scope="col">Etat</th>  
                <th scope="col" style = "border-radius :0 0.2rem 0 0rem ">Voitures</th>  
 
                </tr>

            </thead>
            <tbody>';



    foreach ($vehicules as $vehicule) {
        echo "<tr class='text-center'>";
        echo "<th  class='text-white'>" . $vehicule['vehicule_id'] . "</th>";
        echo "<th  class='text-white'>" . $vehicule['marquere'] . "</th>";
        echo "<td  class='text-white'>" . $vehicule['immatricule'] . "</td>";
        echo "<td  class='text-white'>" . $vehicule['etat'] . "</td>";
    


  
    }
    echo '  
            </tbody>
        </table>


       
';



?>
</div>
</div>
        </div>