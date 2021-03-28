<?php
    required_one 'config.php';
    if (isset($POST['pseudo']) && isset($_POST['email'])  && isset($_POST['password'])  && isset($_POST['password2'] )
    {
        $pseudo = htmlspecialchars($_POST['pseudo']);
        $email = htmlspecialchars($_POST['email']);
        $password = htmlspecialchars($_POST['password']);
        $password2 = htmlspecialchars($_POST['password2']);

        $check=$bdd -> prepare('SELECT pseudo, email, password FROM utilisateurs WHERE email = ?');
        $check ->execute (array($email));
        $data = $check -> fetch ();
        $row = check->rowCount();

        if ($row == 0)
        {
                if(strlen($pseudo) <= 200)
                {
                    if(strlen($email)<= 120)
                    {
                        if (filter_var($email, FILTER_VALIDATE_EMAIL))
                        {
                            if ($password == $password2)
                            {
                                $password = hash('sha256', $password);
                                $ip = $_SERVER['REMOTE_ADDR'];

                                $insert = $bdd -> prepare ('INSERT_INTO utilisateurs(pseudo, email, password, ip) VALUES(:pseudo, :email, :password, :ip'); #tableau associatif
                                $insert ->execute(array(
                                    'pseudo' => $pseudo,
                                    'email' =>$email,
                                    'ip' =>$ip
                                    'password' => $password,

                                ));
                                header('Location: inscrption.php?reg_err=succés');
                            }else header('Location: inscription.php? reg_password');
                        }else header ('Location: inscription.php?reg_err=email');
                    }else header ('Location: inscription.php?reg_err=email_length');
                }else header ('Location: inscription.php?reg_err=pseudo_length');
        }else header ('Location:inscription.php?reg_err=already');
    }
?>