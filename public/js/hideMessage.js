function hideAway() {
    const $el = $('.session-message');
    if($el) {
        $($el).each((i, el) => {
            $(el).delay(2000).fadeOut(500);
        });
    }
}
hideAway();