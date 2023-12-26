$(document).ready(function() {
    $("#submitBtn").click(function() {
        var form = $("#addRoomForm")[0];
        var formData = new FormData(form);

        $.ajax({
            type: "POST",
            url: form.action,
            data: formData,
            processData: false,
            contentType: false,
            success: function(response) {
                console.log(response);

                // Réinitialiser les champs du formulaire
                form.reset();

                // Pour les sélecteurs multiples, décochez toutes les options sélectionnées
                $("#userList").val(null).trigger('change');
            },
            error: function(error) {
                console.error("Erreur lors de la soumission du formulaire.", error);
            }
        });
    });
});
