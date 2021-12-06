//login
$(document).ready(function () {
        $("#form_login").submit(function (event) {
            alert('hi there');
            var form = $(this);
            if (form[0].checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
            } else {
                event.preventDefault();
                var inputs = form.find("input, select, button, textarea");
                var serializedData = form.serializeArray();
                serializedData.push({name: mds_config.csfr_token_name, value: $.cookie(mds_config.csfr_cookie_name)});
                serializedData.push({name: "sys_lang_id", value: mds_config.sys_lang_id});
                $.ajax({
                    url: mds_config.base_url + "auth_controller/login_post",
                    type: "post",
                    data: serializedData,
                    success: function (response) {
                        var obj = JSON.parse(response);
                        if (obj.result == 1) {
                            location.reload();
                        } else if (obj.result == 0) {
                            document.getElementById("result-login").innerHTML = obj.error_message;
                        }
                    }
                });
            }
            form[0].classList.add('was-validated');
        });
    });
    