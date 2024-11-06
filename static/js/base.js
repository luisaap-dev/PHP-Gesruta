document.addEventListener("DOMContentLoaded", function () {
    var cards = document.querySelectorAll('.card-tittle');
    var modal = null; // Variable para mantener un solo modal abierto a la vez

    cards.forEach(function (card, index) {
        card.addEventListener('mouseenter', function () {
            if (modal) {
                modal.hide(); // Oculta el modal abierto previamente
            }
            modal = new bootstrap.Modal(document.getElementById('exampleModal' + (index + 1)));
            modal.show();
        });

        card.addEventListener('mouseleave', function () {
            if (modal) {
                modal.hide(); // Oculta el modal al sacar el ratón de la tarjeta
            }
        });
    });
});


function resetForm() {
    document.getElementById("submit-contacto").reset();
}

// Función para mostrar el aviso de cookies si no se ha aceptado previamente
window.onload = function () {
    if (!localStorage.getItem("cookies-aceptadas")) {
        document.getElementById("cookie-container").style.display = "block";
    }
};

// Función para aceptar las cookies y ocultar el aviso
function aceptarCookies() {
    localStorage.setItem("cookies-aceptadas", "true");
    document.getElementById("cookie-container").style.display = "none";
}


// Obtener referencia al botón
const scrollToTopButton = document.getElementById("scrollToTop");

// Agregar un controlador de eventos clic al botón
scrollToTopButton.addEventListener("click", function () {
    scrollToTop(5000); // 500 milisegundos para el desplazamiento
});

// Función para el desplazamiento suave hacia arriba
function scrollToTop(duration) {
    const start = window.scrollY;
    const startTime = performance.now();

    function scrollStep(timestamp) {
        const currentTime = timestamp || performance.now();
        const elapsedTime = currentTime - startTime;

        window.scrollTo(0, easeInOutCubic(elapsedTime, start, -start, duration));

        if (elapsedTime < duration) {
            requestAnimationFrame(scrollStep);
        }
    }

    function easeInOutCubic(t, b, c, d) {
        t /= d / 2;
        if (t < 1) return (c / 2) * t * t * t + b;
        t -= 2;
        return (c / 2) * (t * t * t + 2) + b;
    }

    requestAnimationFrame(scrollStep);
}


document.addEventListener("DOMContentLoaded", function () {
    
   // Función para ocultar la parte de la URL con "index.php"
   function ocultarIndexPhp() {
    if (typeof window.history.replaceState === "function") {
        var nuevaURL = window.location.href.replace("/index.php", "");
        window.history.replaceState({}, document.title, nuevaURL);
    }
}

    // Llamar a la función para ocultar partes no deseadas cuando la página se cargue
    ocultarIndexPhp();
});

const textarea = document.getElementById("motivo");
const contadorCaracteres = document.getElementById("contador-caracteres");
const myModal = new bootstrap.Modal(document.getElementById("myModal"));

textarea.addEventListener("input", function () {
    const longitudTexto = textarea.value.length;
    contadorCaracteres.textContent = "(" + longitudTexto + " / 200 caracteres" +")"; 

    // Cambiar el color a rojo cuando se acerque al límite
    if (longitudTexto >= 190) {
        contadorCaracteres.style.color = "#c00000";
        if (longitudTexto === 200) {
            myModal.show(); // Mostrar el modal cuando se alcance el límite
        }
    } else {
        contadorCaracteres.style.color = ""; // Restablecer el color predeterminado
    }
});


// Función para borrar el contenido de varios elementos al cargar la página
function limpiarElementos(ids) {
    ids.forEach(id => {
        const elemento = document.getElementById(id);
        if (elemento) {
            elemento.value = "";
        }
    });
}

// Esta función se ejecutará cuando se cargue la página
window.addEventListener("load", function () {
    const elementosABorrar = ["nombreE", "nombreC", "correo", "telefono", "motivo"];
    limpiarElementos(elementosABorrar);
});


document.addEventListener('DOMContentLoaded', function () {
    const formulario = document.querySelector('form');
    const myModal22 = new bootstrap.Modal(document.getElementById('myModal22'));

    formulario.addEventListener('submit', function (event) {
        event.preventDefault(); // Evita que el formulario se envíe automáticamente

        // Validar el formulario aquí
        const esFormularioValido = validarFormulario(); // Debes definir esta función

        if (esFormularioValido) {
                 // Muestra el modal si el formulario es válido

            myModal22.show();
             // Limpia los campos del formulario después de mostrar el modal
                formulario.reset();
        }
    });


    

    function validarFormulario() {
        const nombreEmpresa = document.getElementById('nombreE').value;
        const nombreContacto = document.getElementById('nombreC').value;
        const correo = document.getElementById('correo').value;
        const telefono = document.getElementById('telefono').value;
        const mensaje = document.getElementById('motivo').value;

        // Expresión regular para validar correo electrónico
        const regexCorreo = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;

        // Expresión regular para validar teléfono (puede ajustarse según el formato deseado)
        const regexTelefono = /^[0-9()+-]*$/;


        // Validación de campos con expresiones regulares
        if (!regexCorreo.test(correo)) {
            alert('Por favor, introduce una dirección de correo válida.');
            return false;
        }

        if (!regexTelefono.test(telefono)) {
            alert('Por favor, introduce un número de teléfono válido.');
            return false;
        }

        // Otras validaciones según tus requerimientos
        // Por ejemplo, puedes agregar validaciones para nombre, mensaje, etc.

        // Si todas las validaciones pasan, el formulario es válido
        return true;
    }
});