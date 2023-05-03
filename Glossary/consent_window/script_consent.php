<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // 

  // Si l'utilisateur accepte les cookies
  if (isset($_POST['yes'])) {
    // Enregistrer le consentement de l'utilisateur dans un cookie
    setcookie('cookie_consent', 'true', time() + 365 * 24 * 3600);
    
    // Rediriger l'utilisateur vers la page souhaitée
    header('Location: page-souhaitee.php');
    exit;
  } elseif (isset($_POST['no'])) {
    // Si l'utilisateur refuse les cookies, bloquer leur utilisation
    // ...
  }
}
?>
