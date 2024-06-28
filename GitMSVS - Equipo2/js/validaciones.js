document.addEventListener('DOMContentLoaded', function() {
    var form = document.getElementById('registroForm');
    var inputs = form.querySelectorAll('input, select');
    
    inputs.forEach(function(input) {
        input.addEventListener('input', function() {
            validarCampo(input);
        });
    });

    form.addEventListener('submit', function(event) {
        var isValid = true;
        inputs.forEach(function(input) {
            if (!validarCampo(input)) {
                isValid = false;
            }
        });
        if (!isValid) {
            event.preventDefault();
        }
    });

    function validarCampo(input) {
        var errorSpan = document.getElementById('error-' + input.id);
        if (input.validity.valueMissing) {
            mostrarError(input, errorSpan, 'Este campo es obligatorio.');
            return false;
        }
        if (input.type === 'number' && (input.validity.rangeUnderflow || isNaN(input.value))) {
            mostrarError(input, errorSpan, 'Por favor ingresa una edad válida (13+).');
            return false;
        }
        if (input.type === 'tel' && !/^\d{10}$/.test(input.value)) {
            mostrarError(input, errorSpan, 'Por favor ingresa un número de teléfono válido (10 dígitos).');
            return false;
        }
        if (input.type === 'email' && !/\S+@\S+\.\S+/.test(input.value)) {
            mostrarError(input, errorSpan, 'Por favor ingresa un correo electrónico válido.');
            return false;
        }
        if (input.tagName === 'SELECT' && input.value === '') {
            mostrarError(input, errorSpan, 'Por favor selecciona una opción.');
            return false;
        }
        ocultarError(input, errorSpan);
        return true;
    }

    function mostrarError(input, errorSpan, mensaje) {
        input.parentElement.classList.add('error');
        errorSpan.textContent = mensaje;
        errorSpan.style.display = 'block';
    }

    function ocultarError(input, errorSpan) {
        input.parentElement.classList.remove('error');
        errorSpan.textContent = '';
        errorSpan.style.display = 'none';
    }
});
