$(document).ready(function(){

    $("form").submit(function(event){
        var name = $("#name").val();
        if (/^[A-ZА-ЯЁ][А-Яа-яЁёA-Za-z\s]+$/.test(name) != true )
            {alert('Введите, пожалуйста, имя правильно.');
                event.preventDefault();}
        else {
            var comment = $("#comment").val();
            if (/^[A-ZА-ЯЁ][А-Яа-яЁёA-Za-z!\-,.\s"]+$/.test(comment) != true )
                {alert('Введите, пожалуйста, комментарий правильно.');
                    event.preventDefault();}
            else {
                var email = $("#email").val();
                if (/^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$/.test(email) != true )
                {alert('Введите, пожалуйста, e-mail правильно.');
                    event.preventDefault();}
                else {
                    var session = $("#session").val();
                    event.preventDefault();
                    /*  page reload avoiding */
                    $.getJSON('../php/Insert.php', /*  ajax request sending */
                        {name: name, comment: comment, email: email, session: session},
                        processResultInsert
                    );
                }
            }
        }
    });
    $("#save").click(function(event){
        event.preventDefault();
        $.getJSON('../php/Select.php',
            {},
            processResultSelect
        );

    });

});
/*  ajax response processing  */
function processResultSelect(json)	{
    var str = '';
    var j = 0;
/* cards html cleaning */
    $("#list").html("");
/* message html cleaning */
    $("#message").html("");

    $.each(json, function (i,e) {

        if ( typeof(e.message) == 'string' ) {
/* message rendering */
            $('#message').html(e.message);
        } else {
/* cards  html forming */
            if (j % 3 == 0) $("#list").append('<div class = "col-sm-1"></div>');
            j++;
            if (i % 2 == 0) str = 'c'; /* even card class */
            else str = 'nc';           /* odd  card class */
            $("#list").append(
                '<div class="col-sm-3 ticket' + str + '">' +
                '<p class="' + str + '1' + '">' + e.name + '</p>' +
                '<p class="' + str + '2' + '">' + e.email + '</p>' +
                '<p class="' + str + '3' + '">' + e.comment + '</p>' +
                '</div>');
        }
    });
}
function processResultInsert (json){
    /* message html cleaning */
    $("#message").html("");

    $.each(json, function (i,e) {
        if ( typeof(e.message) == 'string' ) {
            /* message rendering */
            $('#message').html(e.message);
        } else {
            $('#message').html(e.message);
        }
    });
}


