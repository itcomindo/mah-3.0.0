window.addEventListener('DOMContentLoaded', (event) => {

    jQuery(function () {

        //jq start below


        function mmAdSc() {
            jQuery('.admin-shortcut-trigger').on('click', function () {
                jQuery('.admin-shortcut-trigger').addClass('hide');
                jQuery('.mah-admin-shortcut').addClass('active');
                localStorage.setItem('adminShortcutActive', 'true');
            });

            jQuery('.admin-shortcut-close').on('click', function () {
                jQuery('.mah-admin-shortcut').removeClass('active');
                jQuery('.admin-shortcut-trigger').removeClass('hide');
                jQuery('.mah-oxy-edit-template-wr').removeClass('mah-show').addClass('mah-hide');
                jQuery('#mah-tools-fp-inner').removeClass('mah-show').addClass('mah-hide');
                localStorage.removeItem('adminShortcutActive');
            });


            //call oxygen edit template
            jQuery('li.mah-edit-oxy-template').on('click', function () {
                jQuery('.mah-oxy-edit-template-wr').toggleClass('mah-hide mah-show');
            });



            //call oxygen shrtcuts
            jQuery('.mah-oxy-trigger').on('click', function () {
                jQuery('#mah-oxy-fp-inner').toggleClass('mah-hide mah-show');
                jQuery('.mah-oxy-edit-template-wr').removeClass('mah-show').addClass('mah-hide');
                jQuery('#mah-tools-fp-inner').removeClass('mah-show').addClass('mah-hide');


                //click every where to close
                jQuery(document).on('click', function (e) {
                    if (!jQuery(e.target).closest('#mah-oxy-fp-pr').length) {
                        jQuery('#mah-oxy-fp-inner').removeClass('mah-show').addClass('mah-hide');
                    }
                });






            });

            //call mah tools
            jQuery('.mah-tools-trigger').on('click', function () {
                jQuery('#mah-tools-fp-inner').toggleClass('mah-hide mah-show');
                jQuery('#mah-oxy-fp-inner').removeClass('mah-show').addClass('mah-hide');
            });


            //call mah tool description
            function mm_mtd() {
                jQuery('ul.mah-list-no-style.mah-list li span.mah-question-mark').hover(
                    function () {
                        jQuery(this).parent().find('.mah-tool-description').removeClass('mah-hide').addClass('mah-show');
                    },
                    function () {
                        jQuery(this).parent().find('.mah-tool-description').removeClass('mah-show').addClass('mah-hide');
                    }
                );
            }
            mm_mtd();



            //call refereces
            function call_references() {


                jQuery('.mah-ref-trigger').on('click', function () {
                    jQuery('#mah-ref').removeClass('mah-hide').addClass('mah-show');
                    jQuery('#mah-oxy-fp-inner').removeClass('mah-show').addClass('mah-hide');
                    jQuery('#mah-tools-fp-inner').removeClass('mah-show').addClass('mah-hide');
                    setTimeout(function () {
                        jQuery('#mah-search').focus(); // Menambahkan fokus pada input
                    }, 500);
                });





                var updateHref = function () {
                    var base_url = 'https://developer.wordpress.org/reference/';
                    var search_query = jQuery('#mah-search').val();
                    var full_url = 'site:' + base_url + ' ' + encodeURIComponent(search_query);
                    jQuery('#mah-button a').attr('href', 'https://www.google.com/search?q=' + full_url);
                };

                jQuery('#mah-search').on('input', function () {
                    updateHref();
                });

                jQuery('#mah-search').on('keypress', function (e) {
                    if (e.which == 13) { // Kode ASCII untuk Enter adalah 13
                        updateHref();
                        window.open(jQuery('#mah-button a').attr('href'), '_blank');
                        e.preventDefault(); // Mencegah form dari submit default
                    }
                });



                //close ref
                jQuery('.mah-ref-close').on('click', function () {
                    jQuery('#mah-ref').removeClass('mah-show').addClass('mah-hide');
                });
            }
            call_references();

            if (localStorage.getItem('adminShortcutActive') === 'true') {
                jQuery('.admin-shortcut-trigger').addClass('hide');
                jQuery('.mah-admin-shortcut').addClass('active');
            }




        }
        mmAdSc();

        //cek index start

        function mmCekIndex() {
            if (jQuery('body').find('.mah-check-index').length) {
                var elementClass = jQuery('.mah-check-index').attr('data-element');
                jQuery('.' + elementClass).each(function () {
                    var url = jQuery(this).attr('href');
                    jQuery(this).parent().css('position', 'relative');
                    //encode url
                    url = encodeURIComponent(url);
                    jQuery(this).append('<a href="//www.google.com/search?q=' + url + '" target="_blank" class="mah-cek-index-link">Cek Index</a>');
                });
            }
        }
        mmCekIndex();

        //cen inde end




        //jq end above
    });
});