$(document).ready(function () {

});
function starSelector(stella, idparent) {
    /*var idparent=$('#'+stella).parents(':eq(2)').attr('id');*/
    switch (stella) {
        case "1star":
            $('.card_film:eq('+ idparent+') #1star').addClass("bi bi-star-fill");
            $('.card_film:eq('+ idparent+') #1star').removeClass("bi bi-star");
            $('.card_film:eq('+ idparent+') #2star, #3star, #4star, #5star').addClass("bi bi-star");
            $('.card_film:eq('+ idparent+') #2star, #3star, #4star, #5star').removeClass("bi bi-star-fill");
            $('.card_film:eq('+ idparent+') #nonvisto').prop("disabled", false);
            $('.card_film:eq('+ idparent+') #rate_film').val(1);
            break;
        case "2star":
            $('.card_film:eq('+ idparent+') #1star, #2star').addClass("bi bi-star-fill");
            $('.card_film:eq('+ idparent+') #1star, #2star').removeClass("bi bi-star");
            $('.card_film:eq('+ idparent+') #3star, #4star, #5star').addClass("bi bi-star");
            $('.card_film:eq('+ idparent+') #3star, #4star, #5star').removeClass("bi bi-star-fill");
            $('.card_film:eq('+ idparent+') #nonvisto').prop("disabled", false);
            $('.card_film:eq('+ idparent+') #rate_film').val(2);
            break;
        case "3star":
            $('.card_film:eq('+ idparent+') #1star, #2star, #3star').addClass("bi bi-star-fill");
            $('.card_film:eq('+ idparent+') #1star, #2star, #3star').removeClass("bi bi-star");
            $('.card_film:eq('+ idparent+') #4star, #5star').addClass("bi bi-star");
            $('.card_film:eq('+ idparent+') #4star, #5star').removeClass("bi bi-star-fill");
            $('.card_film:eq('+ idparent+') #nonvisto').prop("disabled", false);
            $('.card_film:eq('+ idparent+') #rate_film').val(3);
            break;
        case "4star":
            $('.card_film:eq('+ idparent+') #1star, #2star, #3star, #4star').addClass("bi bi-star-fill");
            $('.card_film:eq('+ idparent+') #1star, #2star, #3star, #4star').removeClass("bi bi-star");
            $('.card_film:eq('+ idparent+') #5star').addClass("bi bi-star");
            $('.card_film:eq('+ idparent+') #5star').removeClass("bi bi-star-fill");
            $('.card_film:eq('+ idparent+') #nonvisto').prop("disabled", false);
            $('.card_film:eq('+ idparent+') #rate_film').val(4);
            break;
        case "5star":
            $('.card_film:eq('+ idparent+') 1star, #2star, #3star, #4star, #5star').addClass("bi bi-star-fill");
            $('.card_film:eq('+ idparent+') #1star, #2star, #3star, #4star, #5star').removeClass("bi bi-star");
            $('.card_film:eq('+ idparent+') #nonvisto').prop("disabled", false);
            $('.card_film:eq('+ idparent+') #rate_film').val(5);
            break;
        default:
            $('.card_film:eq('+ idparent+') #1star, #2star, #3star, #4star, #5star').addClass("bi bi-star");
            $('.card_film:eq('+ idparent+') #1star, #2star, #3star, #4star, #5star').removeClass("bi bi-star-fill");
            $('.card_film:eq('+ idparent+') #nonvisto').prop("disabled", true);
            $('.card_film:eq('+ idparent+') #rate_film').val(0);
    }
}