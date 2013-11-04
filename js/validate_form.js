$(document).ready(function(){
    /* validation rules for main form */
    $('#pasteForm').validate({
        rules: {
            pasteText: {
                required: true
            }
        },
        errorPlacement: function() {
            $('.formWrapper').addClass('control-group error')
        },
        submitHandler: function() {
            sendForm();
        }
    });
});

/* send form via ajax */
function sendForm() {
    $.ajax({
        url: "/site/save",
        type: "POST",
        data: {
            text: $('#pasteForm textarea').val(),
            syntax: $('#syntax').val()
        },
        success: function(link) {
            showNotification(link);
            $('.formWrapper').removeClass('error');
            $('#pasteForm textarea').val('');
        },
        error: function() {
            alert('Something wrong... Try again');
        }
    });
}

function showNotification(text) {
    $('#link').val(text);

    $('#notification').miniNotification({
        closeButton: true,
        position: 'bottom',
        time: 999999999,
        hideOnClick: false,
        closeButtonText: '[hide]'
    });
}
