<h1>Créer un utilisateur</h1>

<div>
    <form class="formUser" method="post" action="#">

            <fieldset class="form_user">
            <legend>Utilisateur</legend>
            <div class="all_user">
                <div>
                    <label for="user_lastname">Nom de l'utilisateur :</label>
                    <input placeholder="ex : Bar" type="text" name="user_lastname" id="user_lastname" required="required">
                </div>
                <div>
                    <label for="user_firstname">Prénom de l'utilisateur :</label>
                    <input placeholder="ex : Jo" type="text" name="user_firstname" id="user_firstname" required="required">
                </div>
                <div>
                    <label for="user_birthdate">date de naissance de l'utilisateur :</label>
                    <input placeholder="ex :26/04/1999" type="date" name="user_birthdate" id="user_birthdate" required="required">
                </div>
                <div>    
                    <label for="user_email">Email de l'utilisateur :</label>
                    <input type="email" placeholder="ex : zznia@ziand.fr" name="user_email" id="user_email" required="required" >
                </div>
                <div>
                    <label for="user_pass">mot de passe de l'utilisateur :</label>
                    <input type="password" placeholder="ex : Beij8!BN?d1" name="user_pass" id="user_pass" required="required" >
                </div>
                <div>
                    <label for="user_role">role de l'utilisateur :</label>
                    <select name="user_role" id="user_role" required="required">
                        <option value="resident" selected>Résident</option>
                        <option value="gardien" >Gardien</option>
                        <option value="cuisinier">Cuisinier</option>
                        <option value="technicien">Technicien</option>
                        <option value="educateur">Éducateur</option>
                        <option value="medecin">Médecin</option>
                        <option value="directeur">Directeur</option>
                    </select>
                </div>
                <div>
                    <label for="user_group">Groupe de l'utilisateur :</label>
                    <select name="user_group" id="user_group">
                        <option value="0">0</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                    </select>
                </div>
            </div>
            <div id="if_resident">
                <div>
                    <label for="user_arrival">Date d'arrivée de du resident :</label>
                    <input placeholder="ex : 26/09/2020" type="date" name="user_arrival_date" id="user_arrival_date" >
                </div>
                <div>
                    <label for="user_date_leave">Date de départ du résident:</label>
                    <input placeholder="ex : 26/09/2020" type="date" name="user_date_leave" id="user_date_leave">
                </div>
                <div>
                    <label for="user_doctor">Docteur du résident :</label>
                    <select name="user_doctor" id="user_doctor">
                        <option value="0">Dr House</option>
                        <option value="1">Dr Murphy</option>
                        <option value="2">Dr Maboule</option>
                    </select>
                </div>
               
                <fieldset class="user_medical_needs">
                    <legend>Besoins de santé du résident : </legend>
                    <div class="camisole">
                        <input  type="checkbox" name="camisole" id="camisole" >
                        <label for=camisole>Camisole</label>
                    </div>
                    <div class="sans_viande">
                        <input  type="checkbox" name="sans_viande" id="sans_viande" >
                        <label for=sans_viande>Repas sans viande</label>
                    </div>
                    <div class="masque">
                        <input  type="checkbox" name="masque" id="masque" >
                        <label for=masque>Masque de protection</label>
                    </div>    
                </fieldset>
                <br>
            </div> 
        <div class="user_form_buttons">
            <button type="reset">Reset</button>
            <button type="submit">Valider</button>
        </div>
       

    </form>
</div>