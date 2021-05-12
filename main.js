$(() => {
    $(document).scroll(() => {
        if ($(this).scrollTop() < 100) {
            $("#button-top").css('display', 'hidden');
        } else {
            $("#button-top").css('display', 'inline');
        }
    });
});