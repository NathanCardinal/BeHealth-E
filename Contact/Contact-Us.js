type="text/javascript"
    function sendEmail(){
        var name = $("#name");
        var surname = $("#surname");
        var email = $("#email");
        var subject = $("#subject");
        var body = $("#body");

        if(isNotEmpty(name) && isNotEmpty(surname) && isNotEmpty(email) && isNotEmpty(subject) &&isNotEmpty(body)){
            $.ajax({
                url: 'sendEmail.php',
                method: 'POST',
                dataType: 'json',
                data:{
                    name: name.val(),
                    surname: surname.val(),
                    email: email.val(),
                    subject: subject.val(),
                    body: body.val()
                }, success: function(response){
                    $('#contactForm')[0].reset();
                    $('.sent-notification').text("Mail envoyé avec succès.");
                }
            });
        }
    }

