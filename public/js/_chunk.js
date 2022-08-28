var otp = Math.floor(Math.random() * 999999) + 111111;
$("#verify").click(function () {
    if ($("input[name=phone]").val().toString().length > 9) {
        $("#errore").hide()
        var mobile = $("input[name=phone]").val()
        $("#otp_num").show()
        $.ajax({
            url: '/otp',
            type: 'post',
            data: {
                send_otp: true,
                mobile: $("input[name=phone]").val(),
                otp: otp
            },
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function (data) {
                if (data == 'success') {
                    alert(`Please Enter Otp `);
                }
            }
        });

    } else {
        $("#errore").show()
        $("#errore").html(` <i class="fa fa-times text-danger"></i>  Please Enter Correct Mobile Number`)
    }
})

function checkOtp(val) {
    if (val == otp) {
        $("#errore_otp").show()
        $("#errore_otp").css('color', "green")
        $("#errore_otp").html(`<i class="fa fa-check text-success" aria-hidden="true"></i> OTP Verified`)

        $(".btn_1").css('background', '#004DDA')
        $(".btn_1").removeAttr("disabled")
        $(".btn_1").removeClass("bg-secondary")
        $("#verify").css("background", "gray")

    } else {
        $("#errore_otp").show()

        $("#errore_otp").html(`<i class="fa fa-times text-danger" aria-hidden="true"></i> Please Enter Correct OTP`)
    }
}

