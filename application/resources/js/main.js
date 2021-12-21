$('body').scrollspy({ target: '#deniz-scroll' });

$("#deniz-scroll a").on('click', function (e) {
    if (this.hash !== "") {
        $('html,body').animate({
            scrollTop: $(this.hash).offset().top - 76
        }, 900)
    }
})
