<?php
if (!isset($nom))$nom = "";
if (!isset($mail))$mail = "";
?>

<form method="post" action="index.php?page=inscription">
    <div>

        <label for="nom">Nom&nbsp;:</label>
        <input type="text" id="nom" name="nom" value="<?=$nom?>"/>
        <div>

            <label for="prenom">Prenom&nbsp;:</label>
            <input type="text" id="prenom" name="prénom" value="<?=$prenom?>"/>

            <div>

            <label for="mail">Mail&nbsp;:</label>
            <input type="text" id="mail" name="mail "value="<?=$mail?>"/>

            <div>
                <label for="mot de passe">Mot de passe&nbsp;:</label>
                <input type="password" id="mdp" name="mdp"/>

                <div>
                <input type="reset"  value="Effacer" />
                    <input type="submit"  value="Envoyer" />



                </div>
                <input type="hidden" name="Maurice">

            </div>


            </div>


            </div>


    </div>


</form>