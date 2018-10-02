(function ($) {
    
    $(window).load(function() {

        $('#edit-actions--2 input, #edit-actions input#edit-checkout--2, #edit-actions input#edit-continue').addClass("btn btn-success");
        $('td.remove input.form-submit, #edit-actions input#edit-cancel').addClass("btn btn-default");
        $('form#uc-cart-view-form table.sticky-enabled, form#uc-cart-checkout-form table').addClass("table table-hover");
        $('form#uc-cart-view-form table input.form-text, fieldset.form-wrapper .form-item input, fieldset.form-wrapper .form-item select').addClass("form-control");
        $('#edit-actions input#edit-update').addClass("btn btn-primary"); 
        $('form#uc-cart-view-form table td.subtotal, form#uc-cart-checkout-form table td.subtotal').addClass("success");
        $('form#uc-cart-view-form #edit-actions.form-actions.form-wrapper a').addClass("btn btn-info");
        $('fieldset.form-wrapper').addClass("panel panel-default");
        $('fieldset.form-wrapper legend').addClass("panel-heading");
        

    });

})(jQuery);
