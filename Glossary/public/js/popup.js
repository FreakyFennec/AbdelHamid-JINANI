// Fonction affiche popup.
function displayPopup() {
    document.getElementById("myPopup").style.display = "block";
}

// Fonction ferme popup.
function closePopup() {
    document.getElementById("myPopup").style.display = "none";
}

// Appeler la fonction displayPopup au chargement de la page.
window.onload = displayPopup;
