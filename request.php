<?php

class Request
{


    private $type;
    private $dbname;
    private $host;
    private $username;
    private $password;
    private $bdd;


    /**
     * Lorsqu'on va vouloir créer un objet de ce type il faudra
     * appeler cette méthode constructeur via le mot clé New depuis
     * une autre classe afin de l'instancier(initialiser) en lui
     * donnant scrupuleusement le nombre d'argument ici indiqué entre parenthése
     * request constructor.
     * @param $type
     * @param $host
     * @param $dbname
     * @param $username
     * @param $password
     */
    public function __construct($type, $host, $dbname, $username, $password)
    {

        $this->type = $type;
        $this->dbname = $dbname;
        $this->host = $host;
        $this->username = $username;
        $this->password = $password;
    }

    /**
     * Va créer une connection à la base de donnée.
     * Si la connection est déjà établie, inutile d'en établir
     * une nouvelle pour éviter de potentielles fuites mémoires
     * C'est pour cette raison qu'on vérifie avec le if contenu dans
     * le try si nous avons déjà établit une connection
     *
     * @return PDO    une connection vers notre bdd
     */
    public function getmybdd()
    {
        try {
            if ($this->bdd === null) {
                $this->bdd = new PDO($this->type . ':host=' . $this->host . ';dbname=' . $this->dbname . '', $this->username, $this->password);
            }
        } catch (PDOException $e) {
            print "Erreur ! Connection à la base de donnée impossible" . $e->getMessage() . " <br/>";
            die();
        }
        return $this->bdd;
    }


    /**
     * Cette fonction permet d'ajouter un aviateur
     * de la table indiquée
     *
     */

    public function setInsertAviateur($nom, $prenom, $pseudo, $naissance, $mail, $mdp)
    {

        
        $query = "INSERT INTO aviateur( nom, prenom, pseudo, naissance, mail, mdp ) VALUES ('{$nom}', '{$prenom}', '{$pseudo}','{$naissance}','{$mail}', '{$mdp}')";
        $req = $this->bdd->prepare($query);
        echo $query;
        $req->execute();
        return true;
    }

    /**
     * Cette fonction permet de supprimer un enregistrement
     * de la table indiquée
     * @param $tableBDD
     * @param $columnBDD
     * @param $value
     * @return bool
     */
    public function deleteRow($tableBDD, $columnBDD, $value)
    {
        $query = "DELETE FROM {$tableBDD}  WHERE  {$columnBDD}  LIKE {$value}";
        var_dump($query);
        $req = $this->bdd->prepare($query);
        $req->execute();
        return true;
    }

    /** cette fonction vérifie l'intégrité du mot de passe
     * @param $mdpverif mot de passe à vérifier
     * @param $pseudo
     * @return bool
     */
    public function checkmdp($mdpverif, $pseudo): bool
    {
        $req = $this->bdd->prepare("SELECT mdp FROM aviateur WHERE pseudo ='{$pseudo}';");
        $req->execute();
        $resultat = $req->fetch();
       $isPasswordCorrect = password_verify($mdpverif, $resultat["mdp"]);
        if (!$resultat) {
            echo 'Mauvais identifiant ou mot de passe !';
        } else {
            if ($isPasswordCorrect) {
                session_start();
                $_SESSION['pseudo'] = $pseudo;
                echo 'Vous êtes connecté !';
            } else {
                echo 'Mauvais identifiant ou mot de passe !';

            }
        }
    }
}
?>