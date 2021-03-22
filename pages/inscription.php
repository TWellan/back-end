<?php
#$bdd = new PDO('mysql:host=localhost; dbname=test', 'root', ''); #Connexion au local host, nom de la table, nom utilisateur, mdp (ici: vide)
if(isset($_POST ['forminscription']))
{
    echo "Validé";
}

?>


<html>
    <head>
      <title> Inscription </title>
      <meta charset="utf-8">
</head>
<body>
    <div align="center">  
        <h1> Inscription </h1>
        <br/>
        <form method="POST" action="">
                <table>
                <tr>
                        <td align="right">
                            <label for ="Nom">Nom :</label>
                        </td>
                        <td>
                            <input type ="text" placeholder="Mettez votre Nom" id="Nom" name="Nom" />
                        </td>
                    </tr>
                    <tr>
                        <td align="right">
                            <label for ="Mail">Mail :</label>
                        </td>
                        <td>
                            <input type ="email" placeholder="Mettez votre Mail" id="Mail" name="Mail" />
                        </td>
                    </tr>
                    <tr>
                        <td align="right">
                            <label for ="CMail">Confirmation du mail :</label>
                        </td>
                        <td>
                            <input type ="email" placeholder="Vérifier votre mail" id="CMail" name="CMail" />
                        </td>
                    </tr>
                    <tr>
                        <td align="right">
                            <label for ="mdp">Votre mot de passe :</label>
                        </td>
                        <td>
                            <input type ="password" placeholder="Mettez votre mot de passe" id="mdp" name="mdp" />
                        </td>
                    </tr>
                    <tr>
                        <td align="right">
                            <label for ="Cmdp">Confirmez votre mot de passe :</label>
                        </td>
                        <td>
                            <input type ="password" placeholder="Confirmez mot de passe" id="Cmdp" name="Cmdp" />
                        </td>
                    </tr>
                    <tr>
                         <td><td>
                         <td align="right">
                             <input type="submit" name="forminscription" value="Inscription" />
                        </td>
                    </tr>
                </table>
        </form>
    </div>
</body>    
</html>    