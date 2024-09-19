window.addEventListener('DOMContentLoaded', (event) => {
    jQuery(function () {
        //JQuery start below.

        let wpcbToggle = jQuery('#wpcb-tfs');
        wpcbToggle.on('click', function () {
            jQuery('body').toggleClass('folded');
            jQuery('.edit-snippet-form-parent').toggleClass('collapsed');
            jQuery('.wpcb-theme-dark .list-container').toggleClass('hide');

        });





        //JQuery end above.
    });
});