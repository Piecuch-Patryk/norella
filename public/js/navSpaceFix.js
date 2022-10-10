$(document).ready(fixNavbarSpace);
$('body').on('resize', fixNavbarSpace);

function fixNavbarSpace() {
    const height = $('nav').outerHeight();
    $('body').css('padding-top', height + 'px');
}