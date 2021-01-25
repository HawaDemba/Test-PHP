<?php
        function db_connect()
        {
            //connexion à la bdd

                try{
                    $bdd = new PDO('mysql:host=localhost; port=3307; dbname=tp_base','root','');
                    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    //connexion à phpmyadmin
                    //if($bdd)
                    //echo 'ok';
                    
                }catch(PDOException  $e)
                {
                    die('Erreur :' .$e->getMessage());
                    //$e-getMessage() : impossible de se connecter à la bdd
                }
                return $bdd;
        }
?> 