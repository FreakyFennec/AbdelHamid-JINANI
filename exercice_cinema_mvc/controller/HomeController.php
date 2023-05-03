<?php
    namespace Controller;
    use Model\connect;

    class HomeController {
        /**
         * Page d'accueil
         */
        public function displayHomePage() {

            require "view/homePage.php";
        }
       
    }

?>