
/* -------------------------------------------------------------------------- */
/*                            validação bootstrap 4                            */
/* -------------------------------------------------------------------------- */
(function () {
    'use strict';
    window.addEventListener('load', function () {
        var forms = document.getElementsByClassName('needs-validation');
        var validation = Array.prototype.filter.call(forms, function (form) {
            form.addEventListener('submit', function (event) {
                if (form.checkValidity() === false) {
                    event.preventDefault();
                    event.stopPropagation();
                }
                form.classList.add('was-validated');
            }, false);
        });
    }, false);
})();

/* -------------------------------------------------------------------------- */
/*                     Validação personalizada                                */
/* -------------------------------------------------------------------------- */
function validateJS(event, type) {

    if (type == "email") {

        var pattern = /^[.a-zA-Z0-9_]+([.][.a-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$/;
        if (!pattern.test(event.target.value)) {
            $(event.target).parent().addClass('was-validated');
            $(event.target).parent().children(".invalid-feedback").html("Insira um e-mail válido");
        }

    }
}