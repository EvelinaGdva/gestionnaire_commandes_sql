<?php

class Client {
    private $id;
    private $full_name;
    private $phone_nb;
    private $adresse;

    public function getId(){
        return $this->id;
    }

    public function getFullName(){
        return $this->full_name;
    }

    public function getPhoneNb(){ 
        return $this->phone_nb;
    }

    public function getAdresse(){
        return $this->adresse;
    }

    public function checkPhoneNb() {
        if(!empty($this->phone_nb)) {
            // Expression régulière pour vérifier si la chaîne contient exactement 10 chiffre
            $regexp = '/^\d{10}$/';
            // Vérifie si la chaîne de téléphone correspond au motif
            if(preg_match($regexp, $this->phone_nb)) {
                // Retourne le numéro de téléphone s'il est composé de 10 chiffres
                return $this->phone_nb;
            } else {
                // Retourne une valeur null si le numéro de téléphone ne correspond pas au format attendu
                return null;
            }
        }
    }

}

?>
