$(document).ready(function(){
    //onsubmit="return validatelog()"
    $('.login-info-box').fadeOut();
    $('.login-show').addClass('show-log-panel');

    $('#login-form-btn').on('click', function(event){
        event.preventDefault();
        if(validatelog())
        {
            $('#login-form').submit();
        }
    });
});


$('.login-reg-panel input[type="radio"]').on('change', function() {
    if($('#log-login-show').is(':checked')) {
        $('.register-info-box').fadeOut();
        $('.login-info-box').fadeIn();

        $('.white-panel').addClass('right-log');
        $('.register-show').addClass('show-log-panel');
        $('.login-show').removeClass('show-log-panel');

    }
    else if($('#log-reg-show').is(':checked')) {
        $('.register-info-box').fadeIn();
        $('.login-info-box').fadeOut();

        $('.white-panel').removeClass('right-log');

        $('.login-show').addClass('show-log-panel');
        $('.register-show').removeClass('show-log-panel');
    }
});
function validatelog() {
    var lname = $("#log-name").val();
    var lpsw = $("#log-psw").val();
    var error = 0;
    if (lname == "") {
        $('#error1').html("  Username must be filled out");
        error = 1;
    }
    else
    {
        $('#error1').html('');
    }
    if (lpsw == "") {
        $('#error2').html("  password must be filled out");
        error = 1;
    }
    else{
        $('#error2').html();
    }
    if(error == 1)
    {
        return false;
    }
    return true;
}
function validaterej() {
    var rname = $("#rej-name").val();
    var error = 0;
    if (rname == "") {
        $('#error3').html("Username must be filled out");
        error = 1;
    }
    else
    {
        $('#error3').html('');
    }
    var remail = $("#rej-email").val();
    if (remail == "") {
        $('#error4').html(" email must be filled out");
        error = 1;
    }
    else
    {
        $('#error4').html('');
    }
    var rpsw = $("#rej-psw1").val();
    if (rpsw == "") {
        $('#error5').html(" password must be filled out");
        error = 1;
    }
    else
    {
        $('#error5').html('');
    }
    var cpsw = $("#rej-psw2").val();
    if (cpsw == "") {
        $('#error6').html(" conferm password must be filled out");
        error = 1;
    }
    else
    {
        $('#error6').html('');
    }
    if (rpsw != cpsw){
        alert(" 2 password dose not match");
    }
    if(error == 1)
    {
        return false;
    }
}
