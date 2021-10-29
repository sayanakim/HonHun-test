// при клике на кнопку - обработчик событий
$(document).ready(function () {

    $("#send").click(function () {

        var name = $("#name_id").val();
        var email = $("#email_id").val();
        var comment = $("#comment_id").val();

        // console.log(name);

        // вывод ошибок при незаполнения полей
        if (name === "") {
            $("#errorMes").text("Введите имя!");
            return false;
        } else if (email === "") {
            $("#errorMes").text("Введите e-mail!");
            return false;
        } else if (comment < 5) {
            $("#errorMes").text("Введите комментарий не менее 5 символов!");
            return false;
        }

        // обнуление полей
        $("#name_id").val('');
        $("#email_id").val('');
        $("#comment_id").val('');

        $.ajax({
            method: "POST",
            url: "message.php",
            cache: false,
            data: {name: name, email: email, comment: comment},
            dataType: "html",
            beforeSend: function () {
                $("#send").prop("disable", true); // пока загружаются данные кнопка "send" не активна
            },
            success: function (data) {
                if (!data) {
                    alert("Были ошибки, сообщение не отправлено!")
                } else {
                    $("#form").trigger("reset");
                }
                $("#send").prop("disable", false); // кнопка активируется
                alert('Ok');
            }

        })

        $("#errorMes").text("");

    })

})