jQuery(document).ready(function () {
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


    //mahad-run-filter start
    function mahadRunFilter() {
        jQuery('#mahad-extra-wr.mahad-hide').slideUp();
        jQuery('#filter-commands').slideUp();
        jQuery('li.mahad-run-filter').on('click', function () {
            jQuery('#filter-commands').slideToggle();
            jQuery('#mahad-extra-wr.mahad-hide').slideToggle();
        });
    }
    mahadRunFilter();
    //mahad-run-filter end

    //remove-dup-line start
    function remove_duplicate_line() {
        jQuery('.remove-dup-line').click(function () {
            var inputData = mibox().val();
            if (inputData.trim().length === 0) {
                alert("Input kosong");
                return;
            }
            var modifiedData = inputData.split('\n').filter(function (line, index, self) {
                return self.indexOf(line) === index;
            }).join('\n');
            mobox().val(modifiedData);
            navigator.clipboard.writeText(modifiedData);
            mibox().val('');
        });
    }
    remove_duplicate_line();
    //remove-dup-line ends

    //remove-empty-line start
    function remove_empty_line() {
        jQuery('.remove-empty-line').click(function () {
            var inputData = mibox().val();
            if (inputData.trim().length === 0) {
                alert("Input kosong");
                return;
            }
            var modifiedData = inputData.split('\n').filter(function (line) {
                return line.trim().length > 0;
            }).join('\n');
            mobox().val(modifiedData);
            navigator.clipboard.writeText(modifiedData);
            mibox().val('');
        });
    }
    remove_empty_line();
    //remove-empty-line ends

    //remove-line-contain start
    function remove_line_contain() {
        var $string_to_remove = jQuery('#mahad-data-left');
        jQuery('.remove-line-contain').click(function () {
            var inputData = mibox().val();
            if (inputData.trim().length === 0) {
                alert("Input kosong");
                return;
            }
            var modifiedData = inputData.split('\n').filter(function (line) {
                return line.indexOf($string_to_remove.val()) === -1;
            }).join('\n');
            mobox().val(modifiedData);
            navigator.clipboard.writeText(modifiedData);
            mibox().val('');
        });
    }
    remove_line_contain();
    //remove-line-contain end

    //remove-line-end-with start
    function remove_line_end_with() {
        var $string_to_remove = jQuery('#mahad-data-left');
        jQuery('.remove-line-end-with').click(function () {
            var inputData = mibox().val();
            if (inputData.trim().length === 0) {
                alert("Input kosong");
                return;
            }
            var modifiedData = inputData.split('\n').filter(function (line) {
                return line.trim().endsWith($string_to_remove.val());
            }).join('\n');
            mobox().val(modifiedData);
            navigator.clipboard.writeText(modifiedData);
            mibox().val('');
        });
    }
    remove_line_end_with();
    //remove-line-end-with end

    //remove-line-length start
    function remove_line_length() {
        var $string_to_remove = jQuery('#mahad-data-left');
        jQuery('.remove-line-length').click(function () {
            var inputData = mibox().val();
            if (inputData.trim().length === 0) {
                alert("Input kosong");
                return;
            }
            var length = $string_to_remove.val();
            var modifiedData = inputData.split('\n').filter(function (line) {
                return line.trim().length === length;
            }).join('\n');
            mobox().val(modifiedData);
            navigator.clipboard.writeText(modifiedData);
            mibox().val('');
        });
    }
    remove_line_length();
    //remove-line-length end





});
