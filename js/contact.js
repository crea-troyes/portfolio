document.addEventListener("DOMContentLoaded", function () {
    document.getElementById("contact").addEventListener("submit", function (e) {
        e.preventDefault(); // Empêche l'envoi classique du formulaire

        let formData = new FormData(this); // Récupère les données du formulaire

        fetch("library/mail.php", {
            method: "POST",
            body: formData
        })
        .then(response => response.json()) // Convertit la réponse en JSON
        .then(data => {
            console.log("Réponse du serveur :", data); // Debug

            if (data.success) {
                Swal.fire({
                    title: "Message envoyé !",
                    text: "Nous avons bien reçu votre message et nous vous répondrons rapidement.",
                    icon: "success",
                    confirmButtonText: "OK"
                });

                // Réinitialise le formulaire après envoi
                document.getElementById("contact").reset();
            } else {
                Swal.fire({
                    title: "Erreur",
                    text: data.error || "Une erreur est survenue, veuillez réessayer.",
                    icon: "error",
                    confirmButtonText: "OK"
                });
            }
        })
        .catch(error => {
            console.error("Erreur Fetch :", error);

            Swal.fire({
                title: "Erreur serveur",
                text: "Impossible de soumettre le formulaire pour le moment.",
                icon: "error",
                confirmButtonText: "OK"
            });
        });
    });
});

