<?php
#Source de l'aide : https://www.youtube.com/watch?v=jEgzxXCB9-w
    required_one 'config.php';
    if (isset($POST['pseudo']) && isset($_POST['email'])  && isset($_POST['password'])  && isset($_POST['password2'] )
    {
        $pseudo = htmlspecialchars($_POST['pseudo']);
        $email = htmlspecialchars($_POST['email']);
        $password = htmlspecialchars($_POST['password']);
        $password2 = htmlspecialchars($_POST['password2']);

        $check=$bdd -> prepare('SELECT pseudo, email, password FROM utilisateurs WHERE email = ?');
        $check ->execute [$email];
        $data = $check -> fetch ();
        $row = check->rowCount();
        $bdd -> prepare "INSERT INTO 'utlisateurs' ('pseudo', 'email', 'password', 'password2') VALUES (?,?,?,?)";
        $bdd->execute ([$pseudo, $email, $password, $password2]);
        $result = $bdd-> fonction

        if ($row == 0)
        {
                if(strlen($pseudo) <= 200) #caractère limité pour le pseudo (maximum 200). Ici, il vérifie si le pseudo ne dépasse pas la valeur
                {
                    if(strlen($email)<= 120) #idem que pour le pseudo, mais pour l'adresse mail)
                    {
                        if (filter_var($email, FILTER_VALIDATE_EMAIL)) #vérification de l'existence du mail
                        {
                            if ($password == $password2)
                            {
                                $password = hash('sha256', $password); #hashage du mdp. le "sha256" est présent partout, je ne connais pas la raison
                                $ip = $_SERVER['REMOTE_ADDR'];

                                $insert = $bdd -> prepare ('INSERT_INTO utilisateurs(pseudo, email, password, ip) VALUES(:pseudo, :email, :password, :ip'); #tableau associatif
                                $insert ->execute(array(
                                    'pseudo' => $pseudo,
                                    'email' =>$email,
                                    'ip' =>$ip
                                    'password' => $password,
                                        #crée un tableau avec ces informations
                                ));
                                header('Location: inscrption.php?reg_err=succés');
                            }else header('Location: inscription.php? reg_password');
                        }else header ('Location: inscription.php?reg_err=email');
                    }else header ('Location: inscription.php?reg_err=email_length');
                }else header ('Location: inscription.php?reg_err=pseudo_length');
        }else header ('Location:inscription.php?reg_err=already');
    }
?>

