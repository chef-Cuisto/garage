<section class="section_connexion d-flex " style="background-color:#0E7AE6 ;">
    <div class="w-50" id="connexion">
        <div class="align">
            <div class="titre mb-4">
                <h6 class="text-light">Heureux de vous revoir🖐</h6>
                <h2>Connectez-vous</h2>
            </div>

            <form action="" method="post" class=" text-center ">
                <div class="mb-3 ">

                    <input type="text" name="email" id="" class="input text-white " placeholder="ADRESSE EMAIL" required>
                </div>
                <div class="mb-3">
                    <input type="password" name="mdp" id="mdp" class="input " placeholder="MOT DE PASSE" required>
                </div>
                
                <div class="mb-2">
                    <input type="submit" value="Se connecter" name="se_connecter" class="mt-4 input bg-white text-primary " onclick="getValeur">
                </div>
            </form>
            <div class="text-center ms-5 mdp_oub">
            <a href="#" class="text-decoration-none text-white fs-6 ">Mot de passe oublié</a>
       
            </div>
       </div>

    </div>
    <div class="w-50 bg-light align">
        <div>
            <h2 class="titre_2 mb-4">Inscrivez vous</h2>
        </div>
         <form method="post" class="container">
            <div class="row ">

                <div class="ps-5 col-6">
                    <div >
                        <label for="">Prenom</label><br>
                        <input type="text" name="prenom" id="" class="input_inscrip " required>
                    </div>
                    <div>
                        <label for="" class="pt-3">Nom</label><br>
                        <input type="text" name="nom" id="" class="input_inscrip" required>
                    </div>
                    <div>
                        <label for="" class="pt-3">Mot de passe</label><br>
                        <input type="password" name="" id="" class="input_inscrip" required>
                    </div>

                </div>
                <div class="pe-5 col-6">
                    <div>
                        <label for="">Adresse email</label><br>
                        <input type="email" name="email" id="" class="input_inscrip" required>
                    </div>
                    <div>
                        <label for=""  class="pt-3">Date de naissance</label><br>
                        <input type="date" name="" id="" class="input_inscrip" required>
                    </div>
                    <div>
                        <label for="" class="pt-3">Confirmez le mot de passe</label><br>
                        <input type="password" name="mdp" id="" class="input_inscrip" required>
                    </div>

                </div>

            </div>
            <div class="boutton">
                <div class="pt-3 ">
                    <input type="checkbox" name="" id=""> <label for="">J'accepte toutes les <span >conditions</span> et la <span>politique de confidentialité</span></label>
                </div>
                <div class="pt-4 text-center">
                    <button type="submit" class="btn text-light text-center mb-2" name="s_incrire">Créer un compte</button> <button  class="btn text-light bg-dark "><i class="fa-brands fa-google"></i> Connectez vous avec Google</button>
                </div>

            </div>

        </form>

    </div>
</section>