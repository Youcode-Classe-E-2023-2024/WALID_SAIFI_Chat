function sendMessage() {
    var xhr = new XMLHttpRequest();
    var message = document.getElementById("message").value;

    xhr.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            // Mettez à jour la réponse Ajax dans la div spécifiée
            document.getElementById("ajax-response").innerHTML = this.responseText;

            // Rafraîchissez la liste des messages en rechargeant les données depuis le serveur
            refreshMessages();
        }
    };

    // Correction de l'URL pour passer le paramètre message
    xhr.open("GET", "index.php?page=room&message=" + encodeURIComponent(message), true);
    xhr.send();
}

// Fonction pour rafraîchir la liste des messages
/*function refreshMessages() {
    var id = <?php echo $_GET['id']; ?>; // Récupérez l'ID de la room à partir de la requête URL

    // Effectuez une nouvelle requête Ajax pour récupérer les messages mis à jour
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            // Mettez à jour la partie des messages
            document.getElementById("message-section").innerHTML = this.responseText;
        }
    };

    // Utilisez l'URL appropriée pour récupérer les messages de la room spécifiée
    xhr.open("GET", "index.php?page=room&id=" + id, true);
    xhr.send();
}

// Appelez la fonction de rafraîchissement au chargement de la page
document.addEventListener("DOMContentLoaded", function() {
    refreshMessages();
});*/
