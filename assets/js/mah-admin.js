window.addEventListener('DOMContentLoaded', (event) => {
    jQuery(function () {
        //JQuery start below.

        //mibox Start
        function mibox() {
            var $iputBox = jQuery('#mibox');
            return $iputBox;
        }
        //mibox End

        //mobox Start
        function mobox() {
            var $outputBox = jQuery('#mobox');
            return $outputBox;
        }
        //mobox End

        //sort-alphabetically start
        function create_sort_alphabetically() {
            jQuery('.sort-alphabetically').click(function () {
                var inputData = mibox().val();
                if (inputData.trim().length === 0) {
                    alert("Input kosong");
                    return;
                }
                var modifiedData = inputData.split('\n').sort().join('\n');
                mobox().val(modifiedData);
                navigator.clipboard.writeText(modifiedData);
                mibox().val('');
            });
        }
        create_sort_alphabetically();
        //sort-alphabetically end

        //sort-reverse-alphabetically start
        function create_sort_reverse_alphabetically() {
            jQuery('.sort-reverse-alphabetically').click(function () {
                var inputData = mibox().val();
                if (inputData.trim().length === 0) {
                    alert("Input kosong");
                    return;
                }
                var modifiedData = inputData.split('\n').sort().reverse().join('\n');
                mobox().val(modifiedData);
                navigator.clipboard.writeText(modifiedData);
                mibox().val('');
            });
        }
        create_sort_reverse_alphabetically();
        //sort-reverse-alphabetically end

        //sort-by-length start
        function create_sort_by_length() {
            jQuery('.sort-by-length').click(function () {
                var inputData = mibox().val();
                if (inputData.trim().length === 0) {
                    alert("Input kosong");
                    return;
                }
                var modifiedData = inputData.split('\n').sort(function (a, b) {
                    return a.length - b.length;
                }).join('\n');
                mobox().val(modifiedData);
                navigator.clipboard.writeText(modifiedData);
                mibox().val('');
            });
        }
        create_sort_by_length();
        //sort-by-length end

        //sort-reverse-by-length start
        function create_sort_reverse_by_length() {
            jQuery('.sort-reverse-by-length').click(function () {
                var inputData = mibox().val();
                if (inputData.trim().length === 0) {
                    alert("Input kosong");
                    return;
                }
                var modifiedData = inputData.split('\n').sort(function (a, b) {
                    return b.length - a.length;
                }).join('\n');
                mobox().val(modifiedData);
                navigator.clipboard.writeText(modifiedData);
                mibox().val('');
            });
        }
        create_sort_reverse_by_length();
        //sort-reverse-by-length end

        //sort-random start
        function create_sort_random() {
            jQuery('.sort-random').click(function () {
                var inputData = mibox().val();
                if (inputData.trim().length === 0) {
                    alert("Input kosong");
                    return;
                }
                var modifiedData = inputData.split('\n').sort(function () {
                    return 0.5 - Math.random();
                }).join('\n');
                mobox().val(modifiedData);
                navigator.clipboard.writeText(modifiedData);
                mibox().val('');
            });
        }
        create_sort_random();
        //sort-random end

        //newline to comma start
        function create_new_line_to_comma() {
            jQuery('.newline-to-comma').click(function () {
                var inputData = mibox().val();
                if (inputData.trim().length === 0) {
                    alert("input kosong");
                    return;
                }
                var lines = inputData.split('\n');
                var modifiedData = lines.map(function (line) {
                    return line.trim();
                }).join(', ');
                mobox().val(modifiedData);
                navigator.clipboard.writeText(modifiedData);
                mibox().val('');
            });
        }
        create_new_line_to_comma();
        //newline to comma end

        //comma to newline start
        function create_comma_to_new_line() {
            jQuery('.comma-to-newline').click(function () {
                var inputData = mibox().val();
                if (inputData.trim().length === 0) {
                    alert("Input kosong");
                    return;
                }
                var lines = inputData.split(',').map(function (line) {
                    return line.trim();
                }).join('\n');
                mobox().val(lines);
                navigator.clipboard.writeText(lines);
                mibox().val('');
            });
        }
        create_comma_to_new_line();
        //comma to newline end

        //capitalize start
        function create_capitalize() {
            jQuery('.capitalize').click(function () {
                var inDat = mibox().val();
                if (inDat.trim().length === 0) {
                    alert("Input kosong");
                    return;
                }
                var modDat = inDat.toLowerCase().replace(/(?:^|\s)\S/g, function (a) { return a.toUpperCase(); });
                mobox().val(modDat);
                navigator.clipboard.writeText(modDat);
                mibox().val('');
            });
        }
        create_capitalize();


        //capitalize end

        //lowercase start
        function create_lowercase() {
            jQuery('.lowercase').click(function () {
                var inputData = mibox().val();
                if (inputData.trim().length === 0) {
                    alert("input kosong");
                    return;
                }
                var modifiedData = inputData.toLowerCase();
                mobox().val(modifiedData);
                navigator.clipboard.writeText(modifiedData);
                mibox().val('');
            });
        }
        create_lowercase();
        //lowercase end

        //uppercase start
        function create_uppercase() {
            jQuery('.uppercase').click(function () {
                var inputData = mibox().val();
                if (inputData.trim().length === 0) {
                    alert("input kosong");
                    return;
                }
                var modifiedData = inputData.toUpperCase();
                mobox().val(modifiedData);
                navigator.clipboard.writeText(modifiedData);
                mibox().val('');
            });
        }
        create_uppercase();
        //uppercase end

        //underscore-to-20 start
        function create_underscore_to_20() {
            jQuery('.underscore-to-20').click(function () {
                var inputData = mibox().val();
                if (inputData.trim().length === 0) {
                    alert("input kosong");
                    return;
                }

                var modifiedData = inputData.replace(/_/g, '%20');
                mobox().val(modifiedData);
                navigator.clipboard.writeText(modifiedData);
                mibox().val('');
            });
        }
        create_underscore_to_20();
        //underscore-to-20 end

        //underscore-to-plus start
        function create_underscore_to_plus() {
            jQuery('.underscore-to-plus').click(function () {
                var inputData = mibox().val();
                if (inputData.trim().length === 0) {
                    alert("input kosong");
                    return;
                }

                var modifiedData = inputData.replace(/_/g, '+');
                mobox().val(modifiedData);
                navigator.clipboard.writeText(modifiedData);
                mibox().val('');
            });
        }
        create_underscore_to_plus();
        //underscore-to-plus end

        //underscore-to-dash start
        function create_underscore_to_dash() {
            jQuery('.underscore-to-dash').click(function () {
                var inputData = mibox().val();
                if (inputData.trim().length === 0) {
                    alert("input kosong");
                    return;
                }

                var modifiedData = inputData.replace(/_/g, '-');
                mobox().val(modifiedData);
                navigator.clipboard.writeText(modifiedData);
                mibox().val('');
            });
        }
        create_underscore_to_dash();
        //underscore-to-dash end

        //dash-to-20 start
        function create_dash_to_20() {
            jQuery('.dash-to-20').click(function () {
                var inputData = mibox().val();
                if (inputData.trim().length === 0) {
                    alert("input kosong");
                    return;
                }

                var modifiedData = inputData.replace(/-/g, '%20');
                mobox().val(modifiedData);
                navigator.clipboard.writeText(modifiedData);
                mibox().val('');
            });
        }
        create_dash_to_20();
        //dash-to-20 end

        //dash-to-plus start
        function create_dash_to_plus() {
            jQuery('.dash-to-plus').click(function () {
                var inputData = mibox().val();
                if (inputData.trim().length === 0) {
                    alert("input kosong");
                    return;
                }

                var modifiedData = inputData.replace(/-/g, '+');
                mobox().val(modifiedData);
                navigator.clipboard.writeText(modifiedData);
                mibox().val('');
            });
        }
        create_dash_to_plus();
        //dash-to-plus end

        //dash-to-underscore start
        function create_dash_to_underscore() {
            jQuery('.dash-to-underscore').click(function () {
                var inputData = mibox().val();
                if (inputData.trim().length === 0) {
                    alert("input kosong");
                    return;
                }

                var modifiedData = inputData.replace(/-/g, '_');
                mobox().val(modifiedData);
                navigator.clipboard.writeText(modifiedData);
                mibox().val('');
            });
        }
        create_dash_to_underscore();
        //dash-to-underscore end

        //20-to-plus start
        function create_20_to_plus() {
            jQuery('.20-to-plus').click(function () {
                var inputData = mibox().val();
                if (inputData.trim().length === 0) {
                    alert("input kosong");
                    return;
                }
                var modifiedData = inputData.replace(/%20/g, '+');
                mobox().val(modifiedData);
                navigator.clipboard.writeText(modifiedData);
                mibox().val('');
            });
        }
        create_20_to_plus();
        //20-to-plus end

        //20-to-underscore start
        function create_20_to_underscore() {
            jQuery('.20-to-underscore').click(function () {
                var inputData = mibox().val();
                if (inputData.trim().length === 0) {
                    alert("input kosong");
                    return;
                }
                var modifiedData = inputData.replace(/%20/g, '_');
                mobox().val(modifiedData);
                navigator.clipboard.writeText(modifiedData);
                mibox().val('');
            });
        }
        create_20_to_underscore();
        //20-to-underscore end

        //20-to-dash start
        function create_20_to_dash() {
            jQuery('.20-to-dash').click(function () {
                var inputData = mibox().val();
                if (inputData.trim().length === 0) {
                    alert("input kosong");
                    return;
                }
                var modifiedData = inputData.replace(/%20/g, '-');
                mobox().val(modifiedData);
                navigator.clipboard.writeText(modifiedData);
                mibox().val('');
            });
        }
        create_20_to_dash();
        //20-to-dash end

        //20-to-space start
        function create_20_to_space() {
            jQuery('.20-to-space').click(function () {
                var inputData = mibox().val();
                if (inputData.trim().length === 0) {
                    alert("input kosong");
                    return;
                }
                var modifiedData = inputData.replace(/%20/g, ' ');
                mobox().val(modifiedData);
                navigator.clipboard.writeText(modifiedData);
                mibox().val('');
            });
        }
        create_20_to_space();
        //20-to-space end

        //plus-to-space start
        function create_plus_to_space() {
            jQuery('.plus-to-space').click(function () {
                var inputData = mibox().val();
                if (inputData.trim().length === 0) {
                    alert("input kosong");
                    return;
                }
                var modifiedData = inputData.replace(/\+/g, ' ');
                mobox().val(modifiedData);
                navigator.clipboard.writeText(modifiedData);
                mibox().val('');
            });
        }
        create_plus_to_space();
        //plus-to-space end

        //plus-to-dash start
        function create_plus_to_dash() {
            jQuery('.plus-to-dash').click(function () {
                var inputData = mibox().val();
                if (inputData.trim().length === 0) {
                    alert("input kosong");
                    return;
                }
                var modifiedData = inputData.replace(/\+/g, '-');
                mobox().val(modifiedData);
                navigator.clipboard.writeText(modifiedData);
                mibox().val('');
            });
        }
        create_plus_to_dash();
        //plus-to-dash end

        // plus-to-underscore start
        function create_plus_to_underscore() {
            jQuery('.plus-to-underscore').click(function () {
                var inputData = mibox().val();
                if (inputData.trim().length === 0) {
                    alert("input kosong");
                    return;
                }
                var modifiedData = inputData.replace(/\+/g, '_');
                mobox().val(modifiedData);
                navigator.clipboard.writeText(modifiedData);
                mibox().val('');
            });
        }
        create_plus_to_underscore();
        // plus-to-underscore end

        //plus-to-20 start
        function create_plus_to_20() {
            jQuery('.plus-to-20').click(function () {
                var inputData = mibox().val();
                if (inputData.trim().length === 0) {
                    alert("input kosong");
                    return;
                }
                var modifiedData = inputData.replace(/\+/g, '%20');
                mobox().val(modifiedData);
                navigator.clipboard.writeText(modifiedData);
                mibox().val('');
            });
        }
        create_plus_to_20();
        //plus-to-20 end

        //underscore-to-space start
        function create_underscore_to_space() {
            jQuery('.underscore-to-space').click(function () {
                var inputData = mibox().val();
                if (inputData.trim().length === 0) {
                    alert("input kosong");
                    return;
                }
                var modifiedData = inputData.replace(/_/g, ' ');
                mobox().val(modifiedData);
                navigator.clipboard.writeText(modifiedData);
                mibox().val('');
            });
        }
        create_underscore_to_space();
        //underscore-to-space end

        //dash-to-space start
        function create_dash_to_space() {
            jQuery('.dash-to-space').click(function () {
                var inputData = mibox().val();
                if (inputData.trim().length === 0) {
                    alert("input kosong");
                    return;
                }
                var modifiedData = inputData.replace(/-/g, ' ');
                mobox().val(modifiedData);
                navigator.clipboard.writeText(modifiedData);
                mibox().val('');
            });
        }
        create_dash_to_space();
        //dash-to-space end

        //space-to-20 %20 start
        function create_space_to_20() {
            jQuery('.space-to-20').click(function () {
                var inputData = mibox().val();
                if (inputData.trim().length === 0) {
                    alert("input kosong");
                    return;
                }
                var modifiedData = inputData.replace(/\s+/g, '%20');
                mobox().val(modifiedData);
                navigator.clipboard.writeText(modifiedData);
                mibox().val('');
            });
        }
        create_space_to_20();
        //space-to-20 end

        //space-to-plus start
        function create_space_to_plus() {
            jQuery('.space-to-plus').click(function () {
                var inputData = mibox().val();
                if (inputData.trim().length === 0) {
                    alert("input kosong");
                    return;
                }
                var modifiedData = inputData.replace(/\s+/g, '+');
                mobox().val(modifiedData);
                navigator.clipboard.writeText(modifiedData);
                mibox().val('');
            });
        }
        create_space_to_plus();
        //space-to-plus end

        //space to underscore start
        function create_space_to_underscore() {
            jQuery('.space-to-underscore').click(function () {
                var inputData = mibox().val();
                if (inputData.trim().length === 0) {
                    alert("input kosong");
                    return;
                }
                var modifiedData = inputData.replace(/\s+/g, '_');
                mobox().val(modifiedData);
                navigator.clipboard.writeText(modifiedData);
                mibox().val('');
            });
        }
        create_space_to_underscore();
        //space to underscore end

        //create-space-to-dash"
        function create_space_to_dash() {
            jQuery('.space-to-dash').click(function () {
                var inputData = mibox().val();
                if (inputData.trim().length === 0) {
                    alert("input kosong");
                    return;
                }
                var modifiedData = inputData.replace(/\s+/g, '-');
                mobox().val(modifiedData);
                navigator.clipboard.writeText(modifiedData);
                mibox().val('');
            });
        }
        create_space_to_dash();
        //create-space-to-dash" end


        //launch admin tools box start
        function launchAdminToolsBox() {
            jQuery('li.mahad-trigger-list').not(jQuery('.mahad-trigger-list.mahad-show-box')).slideUp();
            jQuery('li.mahad-show-box').on('click', function () {
                jQuery('#mahad-admin-tools-box').toggleClass('mahad-hide mahad-show');
                jQuery('li.mahad-trigger-list').slideToggle();

                jQuery('.mahad-close').on('click', function () {
                    jQuery('#mahad-admin-tools-box').toggleClass('mahad-hide mahad-show');
                    jQuery('li.mahad-trigger-list').slideUp();
                    jQuery('li.mahad-trigger-list.mahad-show-box').slideDown();
                });
            });
        }
        launchAdminToolsBox();
        //launch admin tools box end


        //dragable start
        function mahadDragable() {
            jQuery('.mahad-container, #prism-commands').draggable({
                containment: "body",
            });
        }
        mahadDragable();
        //dragable end

        //mahad launch mmLaunchTextCasing commands start
        function mmLaunchTextCasing() {
            jQuery('#text-casing-commands').slideUp();
            jQuery('li.mahad-run-text-casing').on('click', function () {
                jQuery('#text-casing-commands').slideToggle();
            });
        }
        mmLaunchTextCasing();
        //mahad launch mmLaunchTextCasing commands end

        //mahad launch prism commands start
        function mmLaunchPrismCommands() {
            jQuery('#prism-commands').slideUp();
            jQuery('li.mahad-run-prism').on('click', function () {
                jQuery('#prism-commands').slideToggle();
            });
        }
        mmLaunchPrismCommands();
        //mahad launch prism commands end


        //mahad-run-formater start
        function mahadFormaterContainer() {
            jQuery('#formater-commands').slideUp();
            jQuery('li.mahad-run-formater').on('click', function () {
                jQuery('#formater-commands').slideToggle();
            });
        }
        mahadFormaterContainer();
        //mahad-run-formater end




        //create paragrap start
        function create_paragraph() {
            jQuery('.pmaker').click(function () {
                var inputData = mibox().val();
                if (inputData.trim().length === 0) {
                    alert("input kosong");
                    return;
                }
                var cleanedData = inputData.split('\n').filter(function (line) {
                    return line.trim().length > 0;
                }).map(function (line) {
                    return '<p>' + line.trim() + '</p>';
                }).join('\n');

                mibox().val('');
                mobox().val(cleanedData);
                navigator.clipboard.writeText(cleanedData);
            });
        }

        create_paragraph();
        //create paragrap end



        // create-h2 start
        function create_h2() {
            jQuery('.h2maker').click(function () {
                var inputData = mibox().val();
                if (inputData.trim().length === 0) {
                    alert("input kosong");
                    return;
                }
                var cleanedData = inputData.split('\n').filter(function (line) {
                    return line.trim().length > 0;
                }).map(function (line) {
                    return '<h2>' + line.trim() + '</h2>';
                }).join('\n');
                mibox().val('');
                mobox().val(cleanedData);
                navigator.clipboard.writeText(cleanedData);
            });
        }
        create_h2();
        // create-h2 end


        // create-h3 start
        function create_h3() {
            jQuery('.h3maker').click(function () {
                var inputData = mibox().val();
                if (inputData.trim().length === 0) {
                    alert("input kosong");
                    return;
                }
                var cleanedData = inputData.split('\n').filter(function (line) {
                    return line.trim().length > 0;
                }).map(function (line) {
                    return '<h3>' + line.trim() + '</h3>';
                }).join('\n');
                mibox().val('');
                mobox().val(cleanedData);
                navigator.clipboard.writeText(cleanedData);
            });
        }
        create_h3();
        // create-h3 end


        // create-h4 start
        function create_h4() {
            jQuery('.h4maker').click(function () {
                var inputData = mibox().val();
                if (inputData.trim().length === 0) {
                    alert("input kosong");
                    return;
                }
                var cleanedData = inputData.split('\n').filter(function (line) {
                    return line.trim().length > 0;
                }).map(function (line) {
                    return '<h4>' + line.trim() + '</h4>';
                }).join('\n');
                mibox().val('');
                mobox().val(cleanedData);
                navigator.clipboard.writeText(cleanedData);
            });
        }
        create_h4();
        // create-h4 end


        // create-h5 start
        function create_h5() {
            jQuery('.h5maker').click(function () {
                var inputData = mibox().val();
                if (inputData.trim().length === 0) {
                    alert("input kosong");
                    return;
                }
                var cleanedData = inputData.split('\n').filter(function (line) {
                    return line.trim().length > 0;
                }).map(function (line) {
                    return '<h5>' + line.trim() + '</h5>';
                }).join('\n');
                mibox().val('');
                mobox().val(cleanedData);
                navigator.clipboard.writeText(cleanedData);
            });
        }
        create_h5();
        // create-h5 end


        // create-h6 start
        function create_h6() {
            jQuery('.h6maker').click(function () {
                var inputData = mibox().val();
                if (inputData.trim().length === 0) {
                    alert("input kosong");
                    return;
                }
                var cleanedData = inputData.split('\n').filter(function (line) {
                    return line.trim().length > 0;
                }).map(function (line) {
                    return '<h6>' + line.trim() + '</h6>';
                }).join('\n');
                mibox().val('');
                mobox().val(cleanedData);
                navigator.clipboard.writeText(cleanedData);
            });
        }
        create_h6();
        // create-h6 end


        //blockqmaker start
        function blockqmaker() {
            jQuery('.blockqmaker').click(function () {
                var inputData = mibox().val();
                if (inputData.trim().length === 0) {
                    alert("input kosong");
                    return;
                }
                var cleanedData = inputData.split('\n').filter(function (line) {
                    return line.trim().length > 0;
                }).map(function (line) {
                    return '<blockquote>' + line.trim() + '</blockquote>';
                }).join('\n');
                mibox().val('');
                mobox().val(cleanedData);
                navigator.clipboard.writeText(cleanedData);
            });
        }
        blockqmaker();
        //blockqmaker end


        //crate_ul start
        function create_ul() {
            jQuery('.ulmaker').click(function () {
                var inputData = mibox().val();
                if (inputData.trim().length === 0) {
                    alert("input kosong");
                    return;
                }
                var listItemData = inputData.split('\n').filter(function (line) {
                    return line.trim().length > 0;
                }).map(function (line) {
                    return '<li>' + line.trim() + '</li>';
                }).join('\n');
                var ulData = '<ul>\n' + listItemData + '\n</ul>';
                mibox().val('');
                mobox().val(ulData);
                navigator.clipboard.writeText(ulData);
            });
        }
        create_ul();
        //crate_ul end


        //crate_ol start
        function create_ol() {
            jQuery('.olmaker').click(function () {
                var inputData = mibox().val();
                if (inputData.trim().length === 0) {
                    alert("input kosong");
                    return;
                }
                var listItemData = inputData.split('\n').filter(function (line) {
                    return line.trim().length > 0;
                }).map(function (line) {
                    return '<li>' + line.trim() + '</li>';
                }).join('\n');
                var olData = '<ol>\n' + listItemData + '\n</ol>';
                mibox().val('');
                mobox().val(olData);
                navigator.clipboard.writeText(olData);
            });
        }
        create_ol();
        //crate_ol end



        //prism start
        create_prism();
        function create_prism() {
            jQuery('.mahad-lang-list').click(function () {
                var lang = jQuery(this).text().toLowerCase();
                console.log(lang);
                var inputData = mibox().val();
                if (inputData.trim().length === 0) {
                    alert("input kosong");
                    return;
                }
                var convertedData = inputData.replace(/</g, '&lt;').replace(/>/g, '&gt;');
                var formattedData = '<pre><code class="line-numbers language-' + lang + '">' + convertedData + '</code></pre>';
                mobox().val(formattedData);
                navigator.clipboard.writeText(formattedData);
                mibox().val('');
            });
        }
        //prism end


        //create-html-entity-converter
        function create_html_entity_converter() {
            jQuery('.mahad-html-entity').slideUp();

            jQuery('li.mahad-run-entity').on('click', function () {
                jQuery('.mahad-html-entity').slideToggle();
            });


            jQuery('.mahad-html-entity').click(function () {
                var inputData = mibox().val();
                if (inputData.trim().length === 0) {
                    alert("input kosong");
                    return;
                }
                var modifiedData = inputData.replace(/[\u00A0-\u9999<>\&]/gim, function (i) {
                    return '&#' + i.charCodeAt(0) + ';';
                });
                mobox().val(modifiedData);
                navigator.clipboard.writeText(modifiedData);
                mibox().val('');
            });
        }
        create_html_entity_converter();
        //create-html-entity-converter end





        //reset-result
        function mahadResetResult() {
            jQuery('.mahad-reset').click(function () {
                mibox().val('');
                mobox().val('');
            });
        }
        mahadResetResult();
        //reset result end





























        //JQuery end above.
    });
});