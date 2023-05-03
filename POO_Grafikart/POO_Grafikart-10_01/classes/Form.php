<?php

/**
 * Class Form
 * Permet de générer rapidement un formulaire
 */

    class Form {

        /**
         * @var array Données utilisées par le formulaire
         */

        protected $data;  // Pas de valeur assignée ou bien un array() vide.
        public $surround = 'p';


        /**
         * @param array $data Données utilisées par le formulaire
         */
        public function __construct($data = array()) { // Par défaut c'est un array() vide sinon c'est $data.
       
            $this->data = $data;   
        }

        /**
         * @param $html string code html à entourer.
         * @return string.
         */
        protected function surround($html) {

            return "<{$this->surround}>{$html}</{$this->surround}>";
        }

        /**
         * @param $index string index de la valeur à récupérer
         * @return string
         */
        protected function getValue($index) {

            return isset($this->data[$index]) ? $this->data[$index] : null;     // Condition ternaire.
        }

        /**
         * @param $name string 
         * @return string
         */
        public function input($name) {

            return $this->surround(
                '<input type="text" name="' . $name . '" value="' . $this->getValue($name) . '">'
            );
        }

        /** 
         * @return string
         */
        public function submit() {

            return $this->surround('<button type="submit">Envoyer</button>');
        }
    }