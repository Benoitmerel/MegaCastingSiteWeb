$(document).ready(function () {

    $("#SelectionCritere").click(function ()
    {
        var idCritere = ($("#Critere").find(":selected").val());
        $("#" + idCritere).attr('style', '"display: block"');
        startResearch();
    });

    $(".SupprimerBtn").click(function () {
        $(this).parent('div').attr('style', 'display: none');
        startResearch();
    });


    $("#RechercherBTN").click(function ()
    {
        startResearchByNom($("#NomRechercher").val());
    });

    $(".Recherche").change(function ()
    {
        startResearch();
    });
});

function startResearch() {

    for (var id in Offre) {
        $("#panel_" + id).attr('style', 'display: block');
    }

    $(".Recherche").each(function () {

        if ($(this).parent('div').css('display') === 'block') {

            research($(this).find(":selected").val(), $(this).parent().attr('id'));
        }
    });
}

function research(critere, id) {


    if (id === "Contrat")
    {
        var j = 0;
    }
    else if (id === "Metier")
    {
        var j = 1;
    }
    else if (id === "DomaineMetier")
    {
        var j = 2;
    }

    for (var key in Offre) {

        if (Offre[key][j] === critere)
        {

        }
        else
        {
            $("#panel_" + key).attr('style', 'display: none');
        }
    }
}

function startResearchByNom(Nom)
{

    for (var key in Offre) {

        if (Offre[key][3].toLowerCase().indexOf(Nom.toLowerCase()) != -1 || Offre[key][4].toLowerCase().indexOf(Nom.toLowerCase()) != -1 || Offre[key][5].toLowerCase().indexOf(Nom.toLowerCase()) != -1)
        {
            $("#panel_" + key).attr('style', 'display: block');
        }
        else
        {
            $("#panel_" + key).attr('style', 'display: none');
        }
    }
}