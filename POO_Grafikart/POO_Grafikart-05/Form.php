<?php

    class Form {

        // Propriétés
        // Variable private accessible que dans la classe Form.

        private $data;              // Pas de valeur assignée ou bien un array() vide. Cf le constructeur.
        public $surround = 'p';     // C'est la balise <p>


        // Constructeur
        // Crée un argument $data qui contient les inputs du formulaire.
        public function __construct($data = array()) { // Par défaut c'est un array() vide sinon c'est $data.
       
            $this->data = $data;                        // Envoie les donnée dans l'instance.  
        }

        // Méthode pour placer des tags autour d'un input par exemple ou autre chose.
        // Elle n'est accessible que dans cette classe.
        private function surround($html) {

            return "<{$this->surround}>{$html}</{$this->surround}>";
        }

        private function getValue($index) {

            return isset($this->data[$index]) ? $this->data[$index] : null;     // Condition ternaire.
        }

        // Méthode input name
        public function input($name) {

            return $this->surround(
                '<input type="text" name="' . $name . '" value="' . $this->getValue($name) . '">'
            );
        }

        // Méthode submit
        public function submit() {

            return $this->surround('<button type="submit">Envoyer</button>');
        }
    }