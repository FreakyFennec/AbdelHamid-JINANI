<?php
    // Définit le fuseau horaire.
    date_default_timezone_set('Europe/Paris');      
    
    // La variable $date contient la date (type string).
    $date = "2023-03-20";

    // strtotime() convertit la string en date (format anglais) pour lui ajouter 3 mois et 2 jours.
    // date() retourne une date sous forme de string au format donné.
    $new_date = date('Y-m-d', strtotime($date . " +3 months +2 days"));    

    //echo date('Y/m/d', strtotime($new_date));

    // Même chose mais avec des fonctions.
    $date2 = "2023-03-19";

    //$date2 = add_days($date2 , 2);        // Fonction à définir
    //$date2 = add_months($date2 , 3);      // Fonction à définir

    //echo format_date($date2 , 'd/m/Y');   // Fonction à définir

    // Cette fois avec des objets.
    // La classe c'est MaDate().
    class MaDate {
        private $date;

        public function __construct($date) {
            $this->date = date('d-m-Y', strtotime(str_replace('/', '-', $date)));
        }

        public function addDays($days) {
            $this->date = date('d-m-Y', strtotime($this->date . ' + ' . $days . ' days'));
        }

        public function addMonths($months) {
            $this->date = date ('d-m-Y', strtotime($this->date . ' + ' . $months . ' months'));
        }

        public function format($format) {
            $date_fr = DateTimeImmutable::createFromFormat('d-m-Y', $this->date);
            $formatter =new IntlDateFormatter('fr_Fr', IntlDateFormatter::LONG, IntlDateFormatter:: NONE);
            return $formatter->format($date_fr);
        }
    }


    // $date3 est un objet qui est une instance.
    $date3 = new MaDate("2023-03-19");

    $date3->addDays(2);
    $date3->addMonths(3);

    echo $date3->format('d-M-Y');
?>

