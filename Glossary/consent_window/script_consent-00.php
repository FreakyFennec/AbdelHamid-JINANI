<?php
if (!isset($_COOKIE['cookie_consent']) || $_COOKIE['cookie_consent'] === 'false') {
  // Afficher la fenêtre modale de consentement aux cookies
  // ...

  // Si l'utilisateur accepte les cookies
  if (isset($_POST['cookie_consent']) && $_POST['cookie_consent'] === 'true') {
    // Enregistrer le consentement de l'utilisateur dans un cookie
    setcookie('cookie_consent', 'true', time() + 365 * 24 * 3600);
    
    // Rediriger l'utilisateur vers la page souhaitée
    header('Location: page-souhaitee.php');
    exit;
  } else {
    // Si l'utilisateur refuse les cookies, bloquer leur utilisation
    // ...
  }
}
?>
