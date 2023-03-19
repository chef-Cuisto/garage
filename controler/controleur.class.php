<?php
require_once("src/model.class.php");

class Controleur
{
    private $unModele;

    public function __construct($server, $database, $user, $password)
    {

        $this->unModele = new modele($server, $database, $user, $password);
    }



    /*****************************LES INTERVENTIONS***************************** */

    public function selectAllInterventions()
    {
        $interventions = $this->unModele->selectAllInterventions();

        return $interventions;
    }
    public function insertInterventions($tab){
        $this->unModele->insertInterventions($tab);
    }

    public function selectLikeIntrventions($mot){
        $interventions = $this->unModele->selectLikeIntrventions($mot);
        return $interventions;
    }

    public function deleteInterventions($intervention_id){
        $interventions = $this->unModele->deleteInterventions($intervention_id);
        return $interventions;
    }

    public function selectWhereInterventions($intervention_id){
        return $this->unModele->selectWhereInterventions($intervention_id);
         
    }

    public function updateInterventions($client_id){
        return $this->unModele->updateInterventions($client_id);
    
    }


    /***************************LES TECHNICIENS******************** */

    public function selectAllTechniciens()
    {
        $techniciens = $this->unModele->selectAllTechniciens();

        return $techniciens;
    }

    public function insertTechniciens($tab){
        $this->unModele->insertTechniciens($tab);
    }

    public function selectLikeTechniciens($mot){
        $techniciens = $this->unModele->selectLikeTechniciens($mot);
        return $techniciens;
    }
    public function deleteTechniciens($technicien_id){
        $techniciens = $this->unModele->deleteTechniciens($technicien_id);
        return $techniciens;
    }

    public function selectWhereTechniciens($technicien_id){
        return $this->unModele->selectWhereTechniciens($technicien_id);
    
    }

    public function updateTechniciens($technicien_id){
        return $this->unModele->updateTechniciens($technicien_id);
        
    }
    public function selectInterventionTechniciens($technicien_id){
        $interventions = $this->unModele->selectInterventionTechniciens($technicien_id);

        return $interventions;
    
    }

    public function selectVehiculesTechniciens($technicien_id){
        $vehicules = $this->unModele->selectVehiculesTechniciens($technicien_id);

        return $vehicules;
    
    }

    /*****************************LES CLIENTS***************************** */

    public function selectAllClients()
    {
        $clients = $this->unModele->selectAllClients();

        return $clients;
    }

    public function insertClients($tab){
        $this->unModele->insertClients($tab);
    }

    public function selectLikeClients($mot){
        $clients = $this->unModele->selectLikeClients($mot);
        return $clients;
    }

    
    public function deleteClients($client_id){
        $clients = $this->unModele->deleteClients($client_id);
        return $clients;
    }

    public function selectWhereClients($client_id){
        return $this->unModele->selectWhereClients($client_id);
    
    }

    public function updateClients($client_id){
        return $this->unModele->updateClients($client_id);
        
    }
    public function selectInterventionClients($client_id){
        $interventions = $this->unModele->selectInterventionClients($client_id);

        return $interventions;
    
    }


    public function selectVehiculesClients($client_id){
        $vehicules = $this->unModele->selectVehiculesClients($client_id);

        return $vehicules;
    
    }
    /***********************************lES VEHICULES***************************** */


    public function selectAllVehicules()
    {
        $vehicules = $this->unModele->selectAllVehicules();

        return $vehicules;
    }


    public function insertVehicules($tab){
        $this->unModele->insertVehicules($tab);
    }

    public function selectLikeVehicules($mot){
        $techniciens = $this->unModele->selectLikeVehicules($mot);
        return $techniciens;
    }

        
    public function deleteVehicules($vehicule_id){
        $vehicules = $this->unModele->deleteVehicules($vehicule_id);
        return $vehicules;
    }

    public function selectWhereVehicules($vehicule_id){
        return $this->unModele->selectWhereVehicules($vehicule_id);
    
    }

    public function updateVehicules($vehicule_id){
        return $this->unModele->updateVehicules($vehicule_id);
        
    }


      /***********************************CONNEXIONS***************************** */
      public function verifconnexion($email, $mdp){
        return $this->unModele->verifconnexion($email, $mdp);
        
    }

         /***********************************CONNEXIONS***************************** */
         public function CreateNewCompte($tab){
            $this->unModele->CreateNewCompte($tab);
        }


    /************************CountTable******************* */
    public function countTable
    ($table){
        return $this->unModele->countTable($table);
    }
}
