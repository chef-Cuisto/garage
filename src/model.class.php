<?php

class Modele
{
    private $unPDO;
    public function __construct($server, $database, $user, $password)
    {
        $this->unPDO = null;
        try {
            $url = "mysql:host=" . $server . ";dbname=" . $database;
            $this->unPDO = new PDO($url, $user, $password);
        } catch (PDOException $exp) {
            echo "<br>Erreur de connexion à la base de données";
            echo $exp->getMessage;
        }
    }

    /**************************LES INTERVENTIONS***************************** */
    public function selectAllInterventions()
    {
        if ($this->unPDO != null) {
            $request = "select * from intervention";

            $select = $this->unPDO->prepare($request);
            $select->execute();
            $interventions = $select->fetchAll();
            return $interventions;
        } else {
            return null;
        }
    }

    public function insertInterventions($tab)
    {
        if ($this->unPDO != null) {
            $request = "insert into intervention values (null, :intitule, :statut, :prix, :dateinter, :client_id, :technicien_id);";
            $donnees = array(
                "technicien_id" => $tab['technicien_id'],
                "client_id" => $tab['client_id'],
                ":intitule" => $tab['intitule'],
                ":statut" => $tab['statut'],
                ":prix"=> $tab['prix'],
                ":dateinter"=> $tab['dateinter']
            );

            $insert = $this->unPDO->prepare($request);
            $insert->execute($donnees);
        }
    }

    public function selectLikeIntrventions($mot)
    {
        if ($this->unPDO != null) {
            $request = "select * from intervention where intitule like :mot or statut like :mot or prix like :mot or dateinter like :mot or client_id like :mot or technicien_id like :mot;";
            $donnees = array(":mot" => "%" . $mot . "%");

            $select = $this->unPDO->prepare($request);
            $select->execute($donnees);
            $interventions = $select->fetchAll();
            return $interventions;
        }else{
            return null;
        }
    }


       
    public function deleteInterventions($intervention_id)
    {
        if ($this->unPDO != null) {
            $request = "Delete from intervention where intervention_id = :intervention_id"; 
            $donnees = array(":intervention_id" => $intervention_id );

            $delete = $this->unPDO->prepare($request);
            $delete->execute($donnees);
            $interventions = $delete->fetchAll();
            return $interventions;
        }
    }

    public function selectWhereInterventions($intervention_id)
    {
        if ($this->unPDO != null) {
            $request = "select * from intervention where intervention_id = :intervention_id"; 
            $donnees = array(":intervention_id" => $intervention_id );

            $select = $this->unPDO->prepare($request);
            $select->execute($donnees);
            $intervention = $select->fetch();
            return $intervention;
        }
    }


    public function updateInterventions($tab)
    {
        if ($this->unPDO != null) {
            $request = "update intervention set intitule=:intitule, statut=:statut, prix= :prix ,dateinter= :dateinter,  technicien_id=:technicien_id, client_id= :client_id where intervention_id = :intervention_id;";
            $donnees = array(
                ":intitule" => $tab['intitule'],
                ":statut" => $tab['statut'],
                ":prix" => $tab['prix'],
                ":dateinter" => $tab['dateinter'],
                ":technicien_id" => $tab['technicien_id'],
                ":client_id" => $tab['client_id'],
                ":intervention_id" => $tab['intervention_id']
            );
            $update = $this->unPDO->prepare($request);
            $update->execute($donnees);
        }
    }


    /*****************************LES TECHNICIENS****************************** */
    public function selectAllTechniciens()
    {
        if ($this->unPDO != null) {
            $request = "select * from technicien";

            $select = $this->unPDO->prepare($request);
            $select->execute();
            $techniciens = $select->fetchAll();
            return $techniciens;
        } else {
            return null;
        }
    }

    public function insertTechniciens($tab)
    {
        if ($this->unPDO != null) {
            $request = "insert into technicien values (null, :nom, :prenom, :mail, :tel, :qualification);";
            $donnees = array(
                ":nom" => $tab['nom'],
                ":prenom" => $tab['prenom'],
                ":mail" => $tab['mail'],
                ":tel" => $tab['tel'],
                ":qualification" => $tab['qualification']
              
            );

            $insert = $this->unPDO->prepare($request);
            $insert->execute($donnees);
        }
    }

    
    public function selectLikeTechniciens($mot)
    {
        if ($this->unPDO != null) {
            $request = "select * from technicien where nom like :mot or prenom like :mot or mail like :mot or tel like :mot or qualification like :mot;";
            $donnees = array(":mot" => "%" . $mot . "%");

            $select = $this->unPDO->prepare($request);
            $select->execute($donnees);
            $techniciens = $select->fetchAll();
            return $techniciens;
        }else{
            return null;
        }
    }

    public function deleteTechniciens($technicien_id)
    {
        if ($this->unPDO != null) {
            $request = "Delete from technicien where technicien_id = :technicien_id"; 
            $donnees = array(":technicien_id" => $technicien_id );

            $delete = $this->unPDO->prepare($request);
            $delete->execute($donnees);
            $techniciens = $delete->fetchAll();
            return $techniciens;
        }
    }


        
    public function selectWhereTechniciens($technicien_id)
    {
        if ($this->unPDO != null) {
            $request = "select * from technicien where technicien_id = :technicien_id"; 
            $donnees = array(":technicien_id" => $technicien_id );

            $select = $this->unPDO->prepare($request);
            $select->execute($donnees);
            $technicien = $select->fetch();
            return $technicien;
        }
    }


    public function updateTechniciens($tab)
    {
        if ($this->unPDO != null) {
            $request = "update technicien set nom=:nom, prenom=:prenom, mail=:mail, tel= :tel, qualification = :qualification where technicien_id = :technicien_id;";
            $donnees = array(
                ":nom" => $tab['nom'],
                ":prenom" => $tab['prenom'],
                ":mail" => $tab['mail'],
                ":tel" => $tab['tel'],
                ":qualification" => $tab['qualification'],
                ":technicien_id" => $tab['technicien_id']
            );
            $update = $this->unPDO->prepare($request);
            $update->execute($donnees);
        }
    }
    

    public function selectInterventionTechniciens($technicien_id)
    {
        if ($this->unPDO != null) {
            $request = "select * from intervention where technicien_id =:technicien_id";
            $donnees = array(":technicien_id" => $technicien_id );
            $select = $this->unPDO->prepare($request);
            $select->execute($donnees);
            $interventions = $select->fetchAll();
            return $interventions;
        } else {
            return null;
        }
    }

    public function selectVehiculesTechniciens($technicien_id)
    {
        if ($this->unPDO != null) {
            $request = "select * from vehicule where technicien_id =:technicien_id;";
            $donnees = array(":technicien_id" => $technicien_id );
            $select = $this->unPDO->prepare($request);
            $select->execute($donnees);
            $interventions = $select->fetchAll();
            return $interventions;
        } else {
            return null;
        }
    }

    /***************************LES CLIENTS*********************************** */


    public function selectAllClients()
    {
        if ($this->unPDO != null) {
            $request = "select * from client";

            $select = $this->unPDO->prepare($request);
            $select->execute();
            $clients = $select->fetchAll();
            return $clients;
        } else {
            return null;
        }
    }


    public function insertClients($tab)
    {
        if ($this->unPDO != null) {
            $request = "insert into client values (null, :nom, :prenom, :mail, :tel);";
            $donnees = array(
                ":nom" => $tab['nom'],
                ":prenom" => $tab['prenom'],
                ":mail" => $tab['mail'],
                ":tel" => $tab['tel']
            );

            $insert = $this->unPDO->prepare($request);
            $insert->execute($donnees);
        }
    }




    public function selectLikeClients($mot)
    {
        if ($this->unPDO != null) {
            $request = "select * from client where nom like :mot or prenom like :mot or mail like :mot or tel like :mot;";
            $donnees = array(":mot" => "%" . $mot . "%");

            $select = $this->unPDO->prepare($request);
            $select->execute($donnees);
            $clients = $select->fetchAll();
            return $clients;
        }else{
            return null;
        }
    }

    
    public function deleteClients($client_id)
    {
        if ($this->unPDO != null) {
            $request = "Delete from client where client_id = :client_id"; 
            $donnees = array(":client_id" => $client_id );

            $delete = $this->unPDO->prepare($request);
            $delete->execute($donnees);
            $clients = $delete->fetchAll();
            return $clients;
        }
    }

    
    
    public function selectWhereClients($client_id)
    {
        if ($this->unPDO != null) {
            $request = "select * from client where client_id = :client_id"; 
            $donnees = array(":client_id" => $client_id );

            $select = $this->unPDO->prepare($request);
            $select->execute($donnees);
            $client = $select->fetch();
            return $client;
        }
    }


    public function updateClients($tab)
    {
        if ($this->unPDO != null) {
            $request = "update client set nom=:nom, prenom=:prenom, mail=:mail, tel= :tel where client_id = :client_id;";
            $donnees = array(
                ":nom" => $tab['nom'],
                ":prenom" => $tab['prenom'],
                ":mail" => $tab['mail'],
                ":tel" => $tab['tel'],
                ":client_id" => $tab['client_id']
            );
            $update = $this->unPDO->prepare($request);
            $update->execute($donnees);
        }
    }

    public function selectInterventionClients($client_id)
    {
        if ($this->unPDO != null) {
            $request = "select * from intervention where client_id =:client_id;";
            $donnees = array(":client_id" => $client_id );
            $select = $this->unPDO->prepare($request);
            $select->execute($donnees);
            $interventions = $select->fetchAll();
            return $interventions;
        } else {
            return null;
        }
    }

    public function selectVehiculesClients($client_id)
    {
        if ($this->unPDO != null) {
            $request = "select * from vehicule where client_id =:client_id;";
            $donnees = array(":client_id" => $client_id );
            $select = $this->unPDO->prepare($request);
            $select->execute($donnees);
            $interventions = $select->fetchAll();
            return $interventions;
        } else {
            return null;
        }
    }

    /***********************************LES VEHICULES********************************** */


    public function selectAllVehicules()
    {
        if ($this->unPDO != null) {
            $request = "select * from vehicule";

            $select = $this->unPDO->prepare($request);
            $select->execute();
            $vehicules = $select->fetchAll();
            return $vehicules;
        } else {
            return null;
        }
    }
    public function insertVehicules($tab)
    {
        if ($this->unPDO != null) {
            $request = "insert into vehicule values (null, :marquere, :immatricule, :etat, :client_id, :technicien_id);";
            $donnees = array(
                "technicien_id" => $tab['technicien_id'],
                "client_id" => $tab['client_id'],
                ":marquere" => $tab['marquere'],
                ":immatricule" => $tab['immatricule'],
                ":etat" => $tab['etat']
            );

            $insert = $this->unPDO->prepare($request);
            $insert->execute($donnees);
        }
    }

    public function selectLikeVehicules($mot)
    {
        if ($this->unPDO != null) {
            $request = "select * from vehicule where marquere like :mot or immatricule like :mot or etat like :mot or  client_id like :mot or technicien_id like :mot;";
            $donnees = array(":mot" => "%" . $mot . "%");

            $select = $this->unPDO->prepare($request);
            $select->execute($donnees);
            $vehicules = $select->fetchAll();
            return $vehicules;
        }else{
            return null;
        }
    }

        
    public function deleteVehicules($vehicule_id)
    {
        if ($this->unPDO != null) {
            $request = "Delete from vehicule where vehicule_id = :vehicule_id"; 
            $donnees = array(":vehicule_id" => $vehicule_id );

            $delete = $this->unPDO->prepare($request);
            $delete->execute($donnees);
            $vehicules = $delete->fetchAll();
            return $vehicules;
        }
    }


    public function selectWhereVehicules($vehicule_id)
    {
        if ($this->unPDO != null) {
            $request = "select * from vehicule where vehicule_id = :vehicule_id"; 
            $donnees = array(":vehicule_id" => $vehicule_id );

            $select = $this->unPDO->prepare($request);
            $select->execute($donnees);
            $vehicule = $select->fetch();
            return $vehicule;
        }
    }


    public function updateVehicules($tab)
    {
        if ($this->unPDO != null) {
            $request = "update vehicule set marquere=:marquere, immatricule=:immatricule, etat=:etat, client_id= :client_id, technicien_id= :technicien_id  where vehicule_id = :vehicule_id;";
            $donnees = array(
                ":marquere" => $tab['marquere'],
                ":immatricule" => $tab['immatricule'],
                ":etat" => $tab['etat'],
                ":client_id" => $tab['client_id'],
                ":technicien_id" => $tab['technicien_id'],
                ":vehicule_id" => $tab['vehicule_id']
            );
            $update = $this->unPDO->prepare($request);
            $update->execute($donnees);
        }
    }

    /******************************CONNEXIONS************************************* */

    
    public function verifconnexion($email, $mdp)
    {
        if ($this->unPDO != null) {
            $request = "select * from user where email = :email and mdp= :mdp;"; 
            $donnees = array(":email" => $email, ":mdp"=>$mdp );

            $select = $this->unPDO->prepare($request);
            $select->execute($donnees);
            $unUser = $select->fetch();
            return $unUser;
        }else{
            return null;
        }
    }

     /******************************CREER UN COMPTE************************************* */

    
     public function CreateNewCompte($tab)
     {
         if ($this->unPDO != null) {
             $request = "insert into user values (null, :nom, :prenom, :email, :mdp, 'user');";
             $donnees = array(
                 "nom" => $tab['nom'],
                 ":prenom" => $tab['prenom'],
                 ":email" => $tab['email'],
                 ":mdp" => $tab['mdp']
               
             );
 
             $insert = $this->unPDO->prepare($request);
             $insert->execute($donnees);
         }
     }

     /********************************Count************************ */
     public function countTable($table)
     {
         if ($this->unPDO != null) {
             $request = "select count(*) as nb from ".$table;
       
 
             $select = $this->unPDO->prepare($request);
             $select->execute();
             $unUser= $select ->fetch();
             return $unUser;
         }else{
            return null;
         }
     }
}
