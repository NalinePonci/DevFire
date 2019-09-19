$(document).ready(function() {
    $('.modal').modal();
});

$(document).ready(function() {
    $('.modal2').modal();
});


$(document).ready(function() {
    // $('.carousel').carousel({
    //     Width: true,
    //     duration: 100,
    //     padding: 20,
    //     size: 30
    // });
    $('.carousel').carousel();
    setInterval(function() {
        $('.carousel').carousel('next');
    }, 2000);
});