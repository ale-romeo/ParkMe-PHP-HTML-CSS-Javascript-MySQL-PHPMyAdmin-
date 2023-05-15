$(document).on("click", ".acquista-abbonamento", function () {
    var sub_id = $(this).closest("tr").find("td:first-child").text();
    var confirmDrop = confirm("Sei sicuro di voler acquistare questo abbonamento?");

    if (confirmDrop) {
        $.ajax({
            type: "POST",
            url: "db/upload/buy-sub.php",
            data: { sub_id: sub_id },
            success: function () {
                alert("Abbonamento acquistato");
                // Aggiorna la tabella degli abbonamenti
                show_subs();
            },
            error: function () {
                alert('Si è verificato un errore durante l\'acquisto dell\'abbonamento.');
            }
        });
    }
});

function show_subs() {
    $.ajax({
        url: "db/get/get_subs_end.php",
        type: "POST",
        success: function (data) {
            $("#tabella-abbonamenti").html(data);

            $("#table-wrapper").show();

            $("#table-wrapper").scrollTop(0);
        },
        error: function () {
            alert('Si è verificato un errore durante la visualizzazione dei logs.');
        }
    });
}

$(document).ready(function () {
    show_subs();
});

function logout() {
    var confirmLogout = confirm("Sei sicuro di voler effettuare il logout?");
    if (confirmLogout) {
        window.location.href = "logout.php";
    }
}
