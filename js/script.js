

function changePage(newpage) {
    animatePage(newpage);
}


function animatePage(page) {
    if (page === 'homepage') {
        $('#container').addClass('bg');
    }
}

$(document).ready(function () {
    animatePage('homepage');

});