    $('.signup_form').hide();

    $('#btn-signup').click(function () {
        $('.signup_ready').hide();
        $('.signup_form').show();
    })

    $('#btn-close').click(function () {
        $('.signup_form').hide();
        $('.signup_ready').show();
    })

$('#show_password-login').click(function() {
    var password = $('#password-login');
    var passwordField = password.attr('type');
    if(passwordField == 'password') {
        password.attr('type', 'text');
        $(this).text('Hide');
    }
    else {
        password.attr('type', 'password');
        $(this).text('Show');
    }
})

$('#show_password-signup').click(function() {
    var password = $('#password-signup');
    var passwordField = password.attr('type');
    if(passwordField == 'password') {
        password.attr('type', 'text');
        $(this).text('Hide');
    }
    else {
        password.attr('type', 'password');
        $(this).text('Show');
    }
})
