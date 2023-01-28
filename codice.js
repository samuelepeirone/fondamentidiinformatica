$(document).ready(function () {

});
function starSelector(stella, idparent) {
    /*var idparent=$('#'+stella).parents(':eq(2)').attr('id');*/
    switch (stella) {
        case "1star":
            $('.card_film:eq('+ idparent+') #1star').addClass("bi bi-star-fill");
            $('.card_film:eq('+ idparent+') #1star').removeClass("bi bi-star");
            $('.card_film:eq('+ idparent+') #2star, .card_film:eq('+ idparent+') #3star, .card_film:eq('+ idparent+') #4star, .card_film:eq('+ idparent+') #5star').addClass("bi bi-star");
            $('.card_film:eq('+ idparent+') #2star, .card_film:eq('+ idparent+') #3star, .card_film:eq('+ idparent+') #4star, .card_film:eq('+ idparent+') #5star').removeClass("bi bi-star-fill");
            $('.card_film:eq('+ idparent+') #nonvisto').prop("disabled", false);
            $('.card_film:eq('+ idparent+') #rate_film').val(1);
            break;
        case "2star":
            $('.card_film:eq('+ idparent+') #1star, .card_film:eq('+ idparent+') #2star').addClass("bi bi-star-fill");
            $('.card_film:eq('+ idparent+') #1star, .card_film:eq('+ idparent+') #2star').removeClass("bi bi-star");
            $('.card_film:eq('+ idparent+') #3star, .card_film:eq('+ idparent+') #4star, .card_film:eq('+ idparent+') #5star').addClass("bi bi-star");
            $('.card_film:eq('+ idparent+') #3star, .card_film:eq('+ idparent+') #4star, .card_film:eq('+ idparent+') #5star').removeClass("bi bi-star-fill");
            $('.card_film:eq('+ idparent+') #nonvisto').prop("disabled", false);
            $('.card_film:eq('+ idparent+') #rate_film').val(2);
            break;
        case "3star":
            $('.card_film:eq('+ idparent+') #1star, .card_film:eq('+ idparent+') #2star, .card_film:eq('+ idparent+') #3star').addClass("bi bi-star-fill");
            $('.card_film:eq('+ idparent+') #1star, .card_film:eq('+ idparent+') #2star, .card_film:eq('+ idparent+') #3star').removeClass("bi bi-star");
            $('.card_film:eq('+ idparent+') #4star, .card_film:eq('+ idparent+') #5star').addClass("bi bi-star");
            $('.card_film:eq('+ idparent+') #4star, .card_film:eq('+ idparent+') #5star').removeClass("bi bi-star-fill");
            $('.card_film:eq('+ idparent+') #nonvisto').prop("disabled", false);
            $('.card_film:eq('+ idparent+') #rate_film').val(3);
            break;
        case "4star":
            $('.card_film:eq('+ idparent+') #1star, .card_film:eq('+ idparent+') #2star, .card_film:eq('+ idparent+') #3star, .card_film:eq('+ idparent+') #4star').addClass("bi bi-star-fill");
            $('.card_film:eq('+ idparent+') #1star, .card_film:eq('+ idparent+') #2star, .card_film:eq('+ idparent+') #3star, .card_film:eq('+ idparent+') #4star').removeClass("bi bi-star");
            $('.card_film:eq('+ idparent+') #5star').addClass("bi bi-star");
            $('.card_film:eq('+ idparent+') #5star').removeClass("bi bi-star-fill");
            $('.card_film:eq('+ idparent+') #nonvisto').prop("disabled", false);
            $('.card_film:eq('+ idparent+') #rate_film').val(4);
            break;
        case "5star":
            $('.card_film:eq('+ idparent+') #1star, .card_film:eq('+ idparent+') #2star, .card_film:eq('+ idparent+') #3star, .card_film:eq('+ idparent+') #4star, .card_film:eq('+ idparent+') #5star').addClass("bi bi-star-fill");
            $('.card_film:eq('+ idparent+') #1star, .card_film:eq('+ idparent+') #2star, .card_film:eq('+ idparent+') #3star, .card_film:eq('+ idparent+') #4star, .card_film:eq('+ idparent+') #5star').removeClass("bi bi-star");
            $('.card_film:eq('+ idparent+') #nonvisto').prop("disabled", false);
            $('.card_film:eq('+ idparent+') #rate_film').val(5);
            break;
        default:
            $('.card_film:eq('+ idparent+') #1star, .card_film:eq('+ idparent+') #2star, .card_film:eq('+ idparent+') #3star, .card_film:eq('+ idparent+') #4star, .card_film:eq('+ idparent+') #5star').addClass("bi bi-star");
            $('.card_film:eq('+ idparent+') #1star, .card_film:eq('+ idparent+') #2star, .card_film:eq('+ idparent+') #3star, .card_film:eq('+ idparent+') #4star, .card_film:eq('+ idparent+') #5star').removeClass("bi bi-star-fill");
            $('.card_film:eq('+ idparent+') #nonvisto').prop("disabled", true);
            $('.card_film:eq('+ idparent+') #rate_film').val(0);
    }
}
function aggiungilista(){
    $('#iconaggiungi').addClass("bi bi-bookmark-check-fill");
    $('#aggiungilista').text("  Salvato!");
    $('#aggiungilista').addClass("salvato_cliccato");
}
function mostraX(){
    $('#explainability').toggle(400);
    $('#explainabilitybutton').toggleClass("Xbuttonclicked");
}