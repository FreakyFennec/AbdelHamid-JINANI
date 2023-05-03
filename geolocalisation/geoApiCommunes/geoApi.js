$(document).ready(function(){   // On attend que la page se charge.
    // alert('Ok!');            // Décommenter pour vérifier si la page et le js sont chargé.

    const apiUrl = 'https://geo.api.gouv.fr/communes?codePostal='; // Dans la constante on met l'adresse avec le type de données souhaités (les communes via le CP).

    const format = '&format=json'; // Format dans lequel on va récupérer les données json;

    // Variables provenant du formulaire
    let zipcode = $('#zipcode');            // Id du input
    let city = $('#city');                  // Id du select dans la variable city.
    let errorMessage = $('#error-message'); // Id du message d'erreur

    // On écoute un événement.
    // blur c'est quand clique en dehors du champs.
    $(zipcode).on('blur', function() {
        
        let code = $(this).val(); // code = champ zipcode . sa valeur.
        //console.log(code); // Pour vérifier que l'écoute d'évent fonctionne.

        let url = apiUrl+code+format; // Adresse de geoApi + le CP + le format. (concaténation).
        // console.log(url); // Affiche les infos liées au code postal.

        // fetch() récupére les données par la méthode get
        // transformé en objet JS avec json
        // puis les résultats son traités.
        fetch(url,{method: 'get'}).then(response => response.json()).then(results => {
            //console.log(results); // Affiche les résultats
            
            $(city).find('option').remove();        // Supprime tous les anciens champs options.

            if (results.length) {                   // Si result est > à 0.

                $(errorMessage).text('').hide();    // Cache le message d'erreur s'il y a.

                $.each(results, function(key, value) {  // Boucle sur les résultats
                    //console.log(value); // Affiche les valeurs.

                    console.log(value.nom); // Affiche les noms.

                    $(city).append('<option value="'+ value.nom +'">'+ value.nom +'</option>'); // Remplit le select avec les options.
                });
            }
            // S'il n'y a pas de résultat.
            else {
                if ($(zipcode).val()) {

                    console.log('Erreur de code postal');
                    
                    $(errorMessage).text('Aucune commune avec ce code postal.').show();
                }
                // Si rien n'est mis dans le champs.
                else {
                    $(errorMessage).text('').hide();
                }
            }
        }).catch(err => {
            console.log(err);
            $(city).find('option').remove(); // Supprime tous les anciens champs options.
        });
    }); 
});