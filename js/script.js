/* Author:
 *
 */

// Uses the value attribute if placeholder
// attribute doesn't exist on search form
(function placeholders() {
    if (!Modernizr.input.placeholder) {
        $('#s')
            .val('Search')
            .focus(function () {
                var t = $(this).data('initialValue');
                if (!t) {
                    $(this).data('initialValue', this.value).val('');
                } else if (this.value === t) {
                    this.value = '';
                }
            })
            .blur(function () {
                if (this.value === '') {
                    this.value = $(this).data('initialValue');
                }
            });
    }
}());



