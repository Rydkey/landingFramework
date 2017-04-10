<?php

/**
 * Created by PhpStorm.
 * User: rrisser
 * Date: 07/04/17
 * Time: 10:46
 */

namespace landingBundle\Entity;

//sudo php vendor/bin/doctrine orm:generate:entities --filter=Entity src/landingBundle/
//met à jour l'objet ci-dessous

//sudo php vendor/bin/doctrine orm:schema-tool:create --dump-sql
//affiche la requête de création de la BDD (enlever --dump-sql pour effectué la création)

//sudo php vendor/bin/doctrine orm:schema-tool:update --dump-sql
//affiche la requête de MaJ de la BDD (enlever --dump-sql pour effectué le changement)

/**
 * Form
 *
 * @Table(name="user")
 * @Entity()
 */

class Landing
{
    /**
     * @Id
     * @Column(type="integer")
     * @GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @Column(type="string", nullable=false)
     *
     */
    protected $nom;

    /**
     * @Column(type="string", nullable=false)
     *
     */
    protected $prenom;

    /**
     * @Column(type="string", nullable=false)
     *
     */
    protected $mail;

    /**
     * @Column(type="integer", nullable=false)
     *
     */
    protected $numeroAdresse;

    /**
     * @Column(type="string", nullable=false)
     *
     */
    protected $voieAdresse;

    /**
     * @Column(type="string", nullable=false)
     *
     */
    protected $ville;

    /**
     * @Column(type="integer", nullable=false)
     *
     */
    protected $codePostal;

    /**
     * @Column(type="string", nullable=false)
     *
     */
    protected $entreprise;

    /**
     * @Column(type="boolean", nullable=true)
     */
    protected $opt_in;

    /**
     * @Column(type="date", nullable=false)
     *
     */
    protected $date_enregistrement;


    public function __construct()
    {
        $this->date_enregistrement = new \DateTime();
    }


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return landing
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     *
     * @return landing
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set mail
     *
     * @param string $mail
     *
     * @return landing
     */
    public function setMail($mail)
    {
        $this->mail = $mail;

        return $this;
    }

    /**
     * Get mail
     *
     * @return string
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * Set numeroAdresse
     *
     * @param integer $numeroAdresse
     *
     * @return landing
     */
    public function setNumeroAdresse($numeroAdresse)
    {
        $this->numeroAdresse = $numeroAdresse;

        return $this;
    }

    /**
     * Get numeroAdresse
     *
     * @return integer
     */
    public function getNumeroAdresse()
    {
        return $this->numeroAdresse;
    }

    /**
     * Set voieAdresse
     *
     * @param string $voieAdresse
     *
     * @return landing
     */
    public function setVoieAdresse($voieAdresse)
    {
        $this->voieAdresse = $voieAdresse;

        return $this;
    }

    /**
     * Get voieAdresse
     *
     * @return string
     */
    public function getVoieAdresse()
    {
        return $this->voieAdresse;
    }

    /**
     * Set ville
     *
     * @param string $ville
     *
     * @return landing
     */
    public function setVille($ville)
    {
        $this->ville = $ville;

        return $this;
    }

    /**
     * Get ville
     *
     * @return string
     */
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * Set codePostal
     *
     * @param integer $codePostal
     *
     * @return landing
     */
    public function setCodePostal($codePostal)
    {
        $this->codePostal = $codePostal;

        return $this;
    }

    /**
     * Get codePostal
     *
     * @return integer
     */
    public function getCodePostal()
    {
        return $this->codePostal;
    }

    /**
     * Set entreprise
     *
     * @param string $entreprise
     *
     * @return landing
     */
    public function setEntreprise($entreprise)
    {
        $this->entreprise = $entreprise;

        return $this;
    }

    /**
     * Get entreprise
     *
     * @return string
     */
    public function getEntreprise()
    {
        return $this->entreprise;
    }

    /**
     * Set optIn
     *
     * @param boolean $optIn
     *
     * @return landing
     */
    public function setOptIn($optIn)
    {
        $this->opt_in = $optIn;

        return $this;
    }

    /**
     * Get optIn
     *
     * @return boolean
     */
    public function getOptIn()
    {
        return $this->opt_in;
    }

    /**
     * Set dateEnregistrement
     *
     * @param \DateTime $dateEnregistrement
     *
     * @return landing
     */
    public function setDateEnregistrement($dateEnregistrement)
    {
        $this->date_enregistrement = $dateEnregistrement;

        return $this;
    }

    /**
     * Get dateEnregistrement
     *
     * @return \DateTime
     */
    public function getDateEnregistrement()
    {
        return $this->date_enregistrement;
    }
}
