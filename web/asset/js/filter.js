$( document ).ready(function() {
    if ($('body').hasClass("articlesList")) {
        $('.filter').change(function(){
            var taux = $(this).val();
            $('[data-taux]').show();
            if(taux != 'all'){
                $('[data-taux="'+taux+'"]').hide();
            }
        })
    }
});