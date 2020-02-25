<?php


class Utilisateurs
{
    /**
     * Class utilisateurs sert à générer des utilisateurs, utilisés pour entrer des données dans la base de donné
     */
    private $nom;
    private $prenom;
    private $pseudo;
    private $naissance;
    private $mail;
    private $mdp;

    /**
     * Utilisateur constructor.
     * @param $nom
     * @param $prenom
     * @param $pseudo
     * @param $naissance
     * @param $mail
     * @param $mdp
     */
    public function __construct($nom, $prenom, $pseudo, $naissance, $mail, $mdp)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->pseudo = $pseudo;
        $this->naissance = $naissance;
        $this->mail = $mail;
        $this->mdp = $mdp;
    }

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * @return mixed
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * @param mixed $prenom
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    /**
     * @return mixed
     */
    public function getPseudo()
    {
        return $this->pseudo;
    }

    /**
     * @param mixed $pseudo
     */
    public function setPseudo($pseudo)
    {
        $this->pseudo = $pseudo;
    }

    /**
     * @return mixed
     */
    public function getNaissance()
    {
        return $this->naissance;
    }

    /**
     * @param mixed $naissance
     */
    public function setNaissance($naissance)
    {
        $this->naissance = $naissance;
    }

    /**
     * @return mixed
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * @param mixed $mail
     */
    public function setMail($mail)
    {
        $this->mail = $mail;
    }

    /**
     * @return mixed
     */
    public function getMdp()
    {
        return $this->mdp;
    }

    /**
     * @param mixed $mdp
     */
    public function setMdp($mdp)
    {
        $this->mdp = $mdp;
    }


}