<?php

// Modification à faire dans l'AbstractController
// du MVC de Elan Formation.

public function redirectTo($ctrl = null, $action = null, $id = null) 
{ 
    if ($ctrl != "home") { 
        $url = "index.php"; 
        $url .= $ctrl ? "?ctrl=" . $ctrl : "";
        $url .= $action ? "&action=" . $action : "";
        $url .= $id ? "&id=" . $id : ""; 
    } else $url = "/"; header("Location: $url"); die(); 
}

