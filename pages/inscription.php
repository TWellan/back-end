<!DOCTYPE html>
    <html lang="fr">
    <head>
        <meta charset="UTF-8">
        
        <link href="" />
        <link rel="">
        <title>Inscrption</title>
    </head>
    <body>
    <div class="login-form">
            <form action="inscription.php" method="POST">
                <h1 class="text-center"> Inscription </h2>
                <div class="form-group">
                    <input type="text" name="pseudo" class="form-control" placeholder="pseudo" required="required" autocomplete="off">
                </div>
                <div class="form-group">
                    <input type="email" name="email" class="form-control" placeholder="Mettez votre email" required="required" autocomplete="off">
                </div>
                <div class="form-group">
                    <input type="password" name="password" class="form-control" placeholder="Mettez votre mot de passe" required="required" autocomplete="off">
                </div>
                <div class="form-group">
                    <input type="password" name="password2" class="form-control" placeholder="Retaper votre mot de passe" required="required" autocomplete="off">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Inscription</button>
                </div>
            <form>
            <p class="texte-center"><a href="incription.php">inscription</a></p>
        </div>
</body>
</html>



<?php
#$bdd = new PDO('mysql:host=localhost; dbname=test', 'root', ''); #Connexion au local host, nom de la table, nom utilisateur, mdp (ici: vide)
/*if(isset($_POST ['forminscription']))*/
/*{
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
</html>    */

