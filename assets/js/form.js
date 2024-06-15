let baseURL = "";
var LOCAL_DOMAINS_1 = ["localhost", "127.0.0.1", "::1"];
if (LOCAL_DOMAINS_1.includes(window.location.hostname)) {
    baseURL = "http://localhost/ygmart/";
} else {
    baseURL = "";
}

function checkLocalhost() {
    let LOCAL_DOMAINS = ["localhost", "127.0.0.1", "::1"];
    if (LOCAL_DOMAINS.includes(window.location.hostname)) {
        return true;
    } else {
        return false;
    }
}

function onkeydown(event) {
    var ch = String.fromCharCode(event.keyCode);
    var filter = /[a-zA-Z]/;
    if (!filter.test(ch)) {
        event.returnValue = false;
    }
}

function formatDate(dt) {
    const today = new Date(dt);
    const yyyy = today.getFullYear();
    let mm = today.getMonth() + 1; // Months start at 0!
    let dd = today.getDate();

    if (dd < 10) dd = '0' + dd;
    if (mm < 10) mm = '0' + mm;

    const formattedToday = dd + '-' + mm + '-' + yyyy;
    return formattedToday;
}

function showErrorTD(msg, id) {
    if ($("#" + id).closest("td").hasClass("error")) {
        $("#" + id).closest("td").find("span.errorMsgArrow").html("<em class='ar-icon'></em>" + msg);
    } else {
        $("#" + id).closest("td").addClass("error");
        $("#" + id).closest("td").append("<span class='errorMsgArrow'><em class='ar-icon'></em>" + msg + "</span>");
    }
}

function changeErrorTD(id) {
    $("#" + id).closest("td").removeClass("error");
    $("#" + id).closest("td").find("span.errorMsgArrow").remove();
    $("#" + id).removeClass("errElement");
}

function showError(msg, id) {
    if ($("#" + id).closest("div").hasClass("error")) {
        $("#" + id).closest("div").find("span.errorMsgArrow").html("<em class='ar-icon'></em>" + msg);
    } else {
        $("#" + id).closest("div").addClass("error");
        $("#" + id).closest("div").append("<span class='errorMsgArrow'><em class='ar-icon'></em>" + msg + "</span>");
    }
}

function changeError(id) {
    $("#" + id).closest("div").removeClass("error");
    $("#" + id).closest("div").find("span.errorMsgArrow").remove();
}

function showErrorplan(msg, id) {
    if ($("#" + id).closest("td").hasClass("error")) {
        $("#" + id).closest("td").find("span.errorMsgArrow").html("<em class='ar-icon'></em>" + msg);
    } else {
        $("#" + id).closest("td").addClass("error");
        $("#" + id).closest("td").append("<span class='errorMsgArrow'><em class='ar-icon'></em>" + msg + "</span>");
    }
}

function changeErrorplan(id) {
    $("#" + id).closest("td").removeClass("error");
    $("#" + id).closest("td").find("span.errorMsgArrow").remove();
}


function showSuccess(msg, id) {
    if ($("#" + id).closest("div").hasClass("error")) {
        $("#" + id).closest("div").find("span.successMsgArrow").html("<em class='ar-icon'></em>" + msg);
    } else {
        $("#" + id).closest("div").addClass("error");
        $("#" + id).closest("div").append("<span class='successMsgArrow'><em class='ar-icon'></em>" + msg + "</span>");
    }
}

function changeSuccess(id) {
    $("#" + id).closest("div").removeClass("error");
    $("#" + id).closest("div").find("span.successMsgArrow").remove();
}

function showDateError(msg, id) {
    if ($("#" + id).closest(".input-group").hasClass("error")) {
        $("#" + id).closest(".input-group").closest(".datediv").find("span.errorMsgArrow").html("<em class='ar-icon'></em>" + msg);
    } else {
        $("#" + id).closest(".input-group").addClass("error");
        $("#" + id).closest(".input-group").after("<span class='errorMsgArrow'><em class='ar-icon'></em>" + msg + "</span>");
    }
}

function changeDateError(id) {
    $("#" + id).closest(".input-group").removeClass("error");
    $("#" + id).closest(".input-group").closest(".datediv").find("span.errorMsgArrow").remove();
}

function showFGError(msg, id) {
    if ($("#" + id).closest("div.fg").hasClass("error")) {
        $("#" + id).closest("div.fg").find("span.errorMsgArrow").html("<em class='ar-icon'></em>" + msg);
    } else {
        $("#" + id).closest("div.fg").addClass("error");
        $("#" + id).closest("div.fg").append("<span class='errorMsgArrow'><em class='ar-icon'></em>" + msg + "</span>");
    }
}

function changeFGError(id) {
    $("#" + id).closest("div.fg").removeClass("error");
    $("#" + id).closest("div.fg").find("span.errorMsgArrow").remove();
}

function showErrorOnElement(id) {
    if ($("#" + id).hasClass("errElement")) {
    } else {
        $("#" + id).addClass("errElement");
    }
}

function changeErrorOnElement(id) {
    $("#" + id).removeClass("errElement");
}

function showErrorArrow(msg, id) {
    if ($("#" + id).closest(".form-group").hasClass("error")) {
        $("#" + id).closest(".form-group").find("span.errorMsgArrow").html("<em class='ar-icon'></em>" + msg);
    } else {
        $("#" + id).closest(".form-group").addClass("error");
        $("#" + id).closest(".form-group").append("<span class='errorMsgArrow'><em class='ar-icon'></em>" + msg + "</span>");
    }
}

function changeErrorArrow(id) {
    $("#" + id).closest(".form-group").removeClass("error");
    $("#" + id).closest(".form-group").find("span.errorMsgArrow").remove();
}

function show_error_arrow(msg, id) {
    if ($("#" + id).closest(".input-group").hasClass("error")) {
        $("#" + id).closest(".input-group").find("span.errorMsgArrow").html("<em class='ar-icon'></em>" + msg);
    } else {
        $("#" + id).closest(".input-group").addClass("error");
        $("#" + id).closest(".input-group").append("<span class='errorMsgArrow'><em class='ar-icon'></em>" + msg + "</span>");
    }
}

function change_error_arrow(id) {
    $("#" + id).closest(".input-group").removeClass("error");
    $("#" + id).closest(".input-group").find("span.errorMsgArrow").remove();
}

function trim(str) {
    return (("" + str).replace(/^\s*([\s\S]*\S+)\s*$|^\s*$/, '$1'));
}

function isValidEmail(value) {
    var filter = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
    if (filter.test(trim(value)))
        return true;
    else
        return false;
}

function validateName(value) {
    var filter = /^[a-zA-Z\s]*$/;
    if (filter.test(trim(value))) {
        return true;
    } else {
        return false;
    }
}

function isValidMobileNbr(value) {
    var filter = /^[6-9][0-9]{9}$/i;
    if (filter.test(trim(value)))
        return true;
    else
        return false;
}

function isValidAddress(value) {
    //Letters, numbers, comma, dot(period), hash, hyphen, underscore, space, 
    var regex = /^[a-zA-Z0-9,#\-._\s]*$/i;
    return regex.test(trim(value));
}

function isPhone(value) {
    var iChars = "0123456789+-#/() ";
    for (var i = 0; i < value.length; i++) {
        if (iChars.indexOf(value.charAt(i)) == -1) {
            return false;
        }
    }
    return true;
}

function isNumber(value) {
    var iChars = "0123456789";
    for (var i = 0; i < value.length; i++) {
        if (iChars.indexOf(value.charAt(i)) == -1) {
            return false;
        }
    }
    return true;
}

function isNumDigit(value) {
    var iChars = "0123456789.";
    for (var i = 0; i < value.length; i++) {
        if (iChars.indexOf(value.charAt(i)) == -1) {
            return false;
        }
    }
    return true;
}

function isPincode(value) {
    var iChars = "0123456789() ";
    for (var i = 0; i < value.length; i++) {
        if (iChars.indexOf(value.charAt(i)) == -1) {
            return false;
        }
    }
    return true;
} //End of isPinocde()


function is_int(value) {
    if (value > 0 && (value / 1) == 0) {
        return true;
    } else {
        return false;
    }
}

function isUserEmailExist(email) {
    var user = {};
    user.account = {};
    user.account.emailaddress = email;
    var q = JSON.stringify(user);

    var result = jQuery.ajax({
        url: "login/checkUserEmailAddress",
        type: 'POST',
        data: { 'jsonObj': q },
        cache: false,
        async: false,
        success: function (eMsg) { }
    }).responseText;
    return result;
}

function startTimer() {
    var counter = 60;
    var interval = setInterval(function () {
        counter--;
        if (counter <= 0) {
            clearInterval(interval);
            $('#timer').html('<span id="time">00</span> SEC</span>');
            jQuery(".btnResendOTP").prop('disabled', false).css({ "backgroundColor": "skyblue" });
            return;
        } else {
            $('#time').text(counter);
        }
    }, 1000);

}

function returnFormattedDate(dob) {
    var d = new Date(dob);
    dobString = ("0" + d.getDate()).slice(-2) + "-" + ("0" + (d.getMonth() + 1)).slice(-2) + "-" + d.getFullYear();
    return dobString;
}

function validateLogin(ele) {
    let hasError = 0;
    let email_id = jQuery("#email_id").val();
    let password = jQuery("#password").val();

    if (jQuery.trim(email_id) == "") {
        showDateError("Please enter email address.", "email_id"); hasError = 1;
    } else if (!isValidEmail(email_id)) {
        showDateError("Please enter valid email address.", "email_id"); hasError = 1;
    } else { changeErrorArrow("email_id"); }
    if (jQuery.trim(password) == "") { showDateError("Please enter password.", "password"); hasError = 1; } else { changeErrorArrow("password"); }

    if (hasError == 1) {
        $(".alert-success").css('display', 'none').find("span").html("");
        $(".alert-danger").css('display', 'none').find("span").html("");
        return false;
    } else {

        let newFormData = jQuery("#formlogin").serialize();
        jQuery.ajax({
            dataType: 'json',
            url: baseURL + "login/validate",
            type: "POST",
            data: newFormData,
            cache: false,
            success: function (res) {
                if (typeof (res.status) != "undefined" && res.status == 200) {
                    $(".alert-success").css('display', 'block').find("span").html(res.msg);
                    $(".alert-danger").css('display', 'none').find("span").html("");
                    setTimeout(function () { window.location.href = "dashboard"; }, 1500);
                } else {
                    $(".alert-success").css('display', 'block').find("span").html(res.msg);
                    $(".alert-danger").css('display', 'none').find("span").html("");
                }
            }
        });
        return false;
    }
}

/*Society*/

// get city
jQuery(document).on('change', 'select#state_id', function (e) {
    e.preventDefault();
    var stateID = jQuery(this).val();
    getCityList(stateID);

});

// Global function get All Cities
function getCityList(stateID) {
    $.ajax({
        dataType: 'json',
        url: baseURL + "society/getcities",
        type: 'post',
        data: { stateID: stateID },

        beforeSend: function () {
            jQuery('select#city-id').find("option:eq(0)").html("Please wait..");
        },
        complete: function () {
            // code
        },
        success: function (json) {
            var options = '';
            options += '<option value="">Select City</option>';
            for (var i = 0; i < json.length; i++) {
                options += '<option value="' + json[i].city_id + '">' + json[i].city_name + '</option>';
            }
            jQuery("select#city_id").html(options);

        },
        error: function (xhr, ajaxOptions, thrownError) {
            console.log(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
        }
    });
    return false;
}

function validateForm(ele) {
    let hasError = 0;
    let name = jQuery("#name").val();
    let mobile = jQuery("#mobile").val();
    let email = jQuery("#email").val();
    let message = jQuery("#message").val();

    if (jQuery.trim(name) == "") { showErrorArrow("Please enter your name.", "name"); hasError = 1; } else { changeErrorArrow("name"); }
    if (jQuery.trim(mobile) == "") {
        showErrorArrow("Please enter contact number.", "mobile"); hasError = 1;
    } else if (!isValidMobileNbr(mobile)) {
        showErrorArrow("Please enter valid contact number.", "mobile"); hasError = 1;
    } else { changeErrorArrow("mobile"); }

    if (jQuery.trim(email) == "") {
        showErrorArrow("Please enter email address.", "email"); hasError = 1;
    } else if (!isValidEmail(email)) {
        showErrorArrow("Please enter valid email address.", "email"); hasError = 1;
    } else { changeErrorArrow("email"); }

    if (jQuery.trim(message) == "") { showErrorArrow("Please enter your message.", "message"); hasError = 1; } else { changeErrorArrow("message"); }

    if (hasError == 1) {
        $(".alert-success").css('display', 'none').find("span").html("");
        $(".alert-danger").css('display', 'none').find("span").html("");
        return false;
    } else {
        // If no error, show success message using SweetAlert
        Swal.fire({
            icon: 'success',
            title: 'Form Submitted Successfully',
            text: 'Thank you for your submission!',
            showConfirmButton: false,
            timer: 5000 
        });
    }
}
function validateLoginForm(ele) {
    let hasError = 0;
    let email = jQuery("#email").val();
    let password = jQuery("#password").val();

   
    if (jQuery.trim(email) == "") {
        showErrorArrow("Please enter email address.", "email"); hasError = 1;
    } else if (!isValidEmail(email)) {
        showErrorArrow("Please enter valid email address.", "email"); hasError = 1;
    } else { changeErrorArrow("email"); }

    if (jQuery.trim(password) == "") { showErrorArrow("Please enter your password.", "password"); hasError = 1; } else { changeErrorArrow("password"); }

    if (hasError == 1) {
        $(".alert-success").css('display', 'none').find("span").html("");
        $(".alert-danger").css('display', 'none').find("span").html("");
        return false;
    } else {
        // If no error, show success message using SweetAlert
        Swal.fire({
            icon: 'success',
            title: 'Login Successfully',
            showConfirmButton: false,
            timer: 5000 
        });
    }
}
function validateRegisterForm(ele) {
    let hasError = 0;
    let name = jQuery("#name").val();
    let userid = jQuery("#userid").val();
    let pinnumber = jQuery("#pinnumber").val();
    let mobile = jQuery("#mobile").val();
    let sponsorid = jQuery("#sponsorid").val();
    let email = jQuery("#email").val();
    let password = jQuery("#password").val();

    if (jQuery.trim(name) == "") { showErrorArrow("Please enter your name.", "name"); hasError = 1; } else { changeErrorArrow("name"); }
    if (jQuery.trim(userid) == "") { showErrorArrow("Please enter user id.", "userid"); hasError = 1; } else { changeErrorArrow("userid"); }
    if (jQuery.trim(pinnumber) == "") { showErrorArrow("Please enter pin number.", "pinnumber"); hasError = 1; } else { changeErrorArrow("pinnumber"); }
    if (jQuery.trim(mobile) == "") {
        showErrorArrow("Please enter contact number.", "mobile"); hasError = 1;
    } else if (!isValidMobileNbr(mobile)) {
        showErrorArrow("Please enter valid contact number.", "mobile"); hasError = 1;
    } else { changeErrorArrow("mobile"); }
    if (jQuery.trim(sponsorid) == "") { showErrorArrow("Please enter sponsor id.", "sponsorid"); hasError = 1; } else { changeErrorArrow("sponsorid"); }
    if (jQuery.trim(email) == "") {
        showErrorArrow("Please enter email address.", "email"); hasError = 1;
    } else if (!isValidEmail(email)) {
        showErrorArrow("Please enter valid email address.", "email"); hasError = 1;
    } else { changeErrorArrow("email"); }

    if (jQuery.trim(password) == "") { showErrorArrow("Please enter password.", "password"); hasError = 1; } else { changeErrorArrow("password"); }

    if (hasError == 1) {
        $(".alert-success").css('display', 'none').find("span").html("");
        $(".alert-danger").css('display', 'none').find("span").html("");
        return false;
    } else {
        // If no error, show success message using SweetAlert
        Swal.fire({
            icon: 'success',
            title: 'Login Successfully',
            showConfirmButton: false,
            timer: 5000 
        });
    }
}