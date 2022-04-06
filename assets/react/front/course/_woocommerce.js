window.jQuery(document).ready($=>{
    // course archive page added_to_cart event change view cart html
    $(document).on('added_to_cart', function (event, fragments, cart_hash, $button) {
        $button.siblings('a.added_to_cart')
            .addClass('tutor-btn tutor-btn-outline-primary tutor-btn-md')
            .prepend(`<span class="tutor-icon-cart-line tutor-mr-8"></span>`);
    });
});